// Убираем "показать все" у малых фильтров
$(".filter-block").each(function(){
    if ($(".filter-rows", this).height() <= $(".filter-rows-content", this).height() 
        && !$(this).is(".filter-price-container")) {
        $(".filter-show-all", this).remove();
    }
    else {
        $(".filter-rows-content", this).addClass("hide");
        $(".filter-title", this).addClass("clickable show");
    }
});
// Показываем фильтр
$(".filter-show-all-show, .filter-title.show").live("click", function() {
    var parent = $(this).parents(".filter-block"),
        height = $(".filter-rows", parent).height();
    
    $(".filter-rows-content", parent).height(height);
    $(".filter-show-all", parent).addClass("hide");
    $(".filter-title", parent).removeClass("show").addClass("hide");
});
$(".filter-show-all-hide, .filter-title.hide").live("click", function() {
    var parent = $(this).parents(".filter-block");
    
    $(".filter-rows-content", parent).height(365);
    $(".filter-show-all", parent).removeClass("hide");
    $(".filter-title", parent).removeClass("hide").addClass("show");
});

// Filter checkbox
$(document).on('change', '.filters-container input', function() {
    var parent = $(this).parent();
    if (parent.hasClass('checked')) {
        parent.removeClass('checked');
    }
    else {
        if ($(this).attr("type") == "radio") $(".label",$(this).parents(".filter-fieldset")).removeClass('checked');
        parent.addClass('checked');
    }
});

//Если с английского на русский, то передаём вторым параметром true.
transliterate = (
	function() {
		var
			rus = "щ   ш  ч  ц  ю  я  ё  ж  ъ  ы  э  а б в г д е з и й к л м н о п р с т у ф х ь".split(/ +/g),
			eng = "shh sh ch cz yu ya yo zh '' y  e' a b v g d e z i j k l m n o p r s t u f x '".split(/ +/g)
		;
		return function(text, engToRus) {
			var x;
			for(x = 0; x < rus.length; x++) {
				text = text.split(engToRus ? eng[x] : rus[x]).join(engToRus ? rus[x] : eng[x]);
				text = text.split(engToRus ? eng[x].toUpperCase() : rus[x].toUpperCase()).join(engToRus ? rus[x].toUpperCase() : eng[x].toUpperCase());	
			}
			text = text.replace(/ /g,"_");
			return text.toLowerCase();
		}
	}
)();

// Get alias filter
mSearch2.Hash.get = function() {
	var vars = {}, hash, splitter, hashes;
	if (!this.oldbrowser()) {
		var curr_path = $(mSearch2.options.wrapper).data('url');
		hashes = decodeURIComponent(window.location.pathname+window.location.search).replace(curr_path,'')
		                                                                            .replace('&','/')
		                                                                            .replace('/?','/')
		                                                                            .replace('?','/')
		                                                                            .substr(1);
		splitter = '/';
	}
	else {
		hashes = decodeURIComponent(window.location.hash.substr(1));
		splitter = '/';
	}

	if (hashes.length === 0) {return vars;}
	else {hashes = hashes.split(splitter);}
	for (var i in hashes) {
		if (hashes.hasOwnProperty(i)) {
			hash = hashes[i].split('=');
			if (typeof hash[1] == 'undefined') {
			    hash = hashes[i].split('-');
				vars[hash[0]] = hashes[i].replace(hash[0]+'-','');
			}
			else {
				vars[hash[0]] = hash[1];
			}
		}
	}
	return vars;
};
// Set slider numbers
$(".filter-number").each(function() {
    var filter = $(".mse2_number_slider", this).data('number-filter'),
        re_str = "^(.*)\\/"+filter+"(-|=)(\\d{1,5}),(\\d{1,5})\\/(.*)?$",
        re = new RegExp(re_str),
        match_arr = document.location.pathname.match(re);
        
    if (match_arr) {
        min = match_arr[3], max = match_arr[4];
        $(".mse2-number-0", this).val(min); $(".mse2-number-1", this).val(max);
        $(mSearch2.options.slider, this).slider('values',0,min); // sets first handle (index 0)
        $(mSearch2.options.slider, this).slider('values',1,max); // sets second handle (index 1)
    }
});

// Set alias filter
mSearch2.Hash.set = function(vars) {
    var hash = '', hash_al = '', hash_get = ''; var vars_arr = [];
    var curr_path = $(mSearch2.options.wrapper).data('url');
    
	for (var i in vars) {
	    var vars_tmp = '';
		if (vars.hasOwnProperty(i)) {
		    vars_arr = vars[i].toString().split(',');
		    if ($("input[name='"+i+"']").length
		        && vars_arr.length == 1
		        && i != 'tpl'
		        && i != 'sort'
		        && i != 'price'
		        && i != 'color'
		        && i != 'ingredients'
		        && i != 'goal'
		        && i != 'category'
		        && i != 'query') {
                    vars_tmp = ',' + $("input[name='"+i+"'][value='"+vars[i]+"']").data("text");
                    hash_al += i + '-' + transliterate(vars_tmp.substr(1)) + '/';
		    }
		    else {
		        hash_get += '&' + i + '=' + vars[i];
		    }
		}
	}
	
	hash_get = hash_get === '' ? '' : '?' + hash_get.substr(1);
	hash = hash_al + hash_get;
	
	if (!this.oldbrowser()) {
		window.history.pushState({mSearch2: curr_path + hash}, '', curr_path + hash);
	}
	else {
		window.location.hash = hash;
	}
};

// Перед загрузкой и после загрузки товаров в фильтре
mSearch2.beforeLoad = function () {
	this.results.css('opacity', .3);
	$('.products-preload').css('display','block');
	$(this.options.pagination_link).addClass(this.options.active_class);
	this.filters.find('input, select').prop('disabled', true).addClass(this.options.disabled_class);
};
mSearch2.afterLoad = function() {
    $('.products-preload').css('display','none');
	this.results.css('opacity', 1);
	this.filters.find('.' + this.options.disabled_class).prop('disabled', false).removeClass(this.options.disabled_class);
	brandAjax();
};

function brandAjax() {
    var url = $(mSearch2.options.wrapper).data('url');
    if (url !== undefined) {
        var brand = $("input[name='brand']:checked").length == 1 ? $("input[name='brand']:checked").attr('value') : '';
        $.ajax({
            type: "GET",
            url: "/ajax/brand_ajax.php",
            dataType: "json",
            cache: false,
            data: {
                url:url,
                brand:brand
            },
            success: function(data) {
                $('title').text(data.meta_title);
                $('meta[name="keywords"]').attr("content", data.meta_keywords);
                $('meta[name="description"]').attr("content", data.meta_description);
                $('.crumbs-container').html(data.crumbs);
                $('h1.category-name-container').html(data.meta_h1);
                $('.resource-text-content').html(data.text);
            }
        });
    }
}

// Нажатие на сортировку
mSearch2.handleSort = function() {
	var params = this.Hash.get();
	if (params.sort) {
		var sorts = params.sort.split(mse2Config.values_delimeter);
		for (var i = 0; i < sorts.length; i++) {
			var tmp = sorts[i].split(mse2Config.method_delimeter);
			if (tmp[0] && tmp[1]) {
				$(this.options.sort_link +'[data-sort="' + tmp[0] + '"]').data('dir', tmp[1]).attr('data-dir', tmp[1]).addClass(this.options.active_class);
			}
		}
	}
	
    $(document).off('click', this.options.sort_link);
	$(document).on('click', this.options.sort_link, function(e) {
		if ($(this).hasClass(mSearch2.options.active_class) && $(this).data('dir') == '') {
			return false;
		}
		$(mSearch2.options.sort_link).removeClass(mSearch2.options.active_class);
		$(this).addClass(mSearch2.options.active_class);
		
		// Добавляем класс для парента
		$(mSearch2.options.sort_link).parent().removeClass(mSearch2.options.active_class);
		$(this).parent().addClass(mSearch2.options.active_class);
		//-----------
		
		var dir;
		if ($(this).data('dir') == '') {
			dir = $(this).data('default');
		}
		else {
			dir = $(this).data('dir') == 'desc'
				? 'asc'
				: 'desc';
		}
		$(mSearch2.options.sort_link).data('dir', '').attr('data-dir', '');
		$(this).data('dir', dir).attr('data-dir', dir);

		var sort = $(this).data('sort');
		if (dir) {
			sort += mse2Config.method_delimeter + dir;
		}
		mse2Config.sort = (sort != mse2Config.start_sort) ? sort : '';
		var params = mSearch2.getFilters();
		
		// Скрываем блок сортировки
		$(mSearch2.options.sort+' .sorting-content').removeClass('visible');
		//-----------
		
		mSearch2.Hash.set(params);
		mSearch2.load(params);

		return false;
	});
}
mSearch2.handleSort();