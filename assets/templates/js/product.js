// Вывод таблицы состава
var id = $(".buy-btn-container input[name='id']").val();
$.ajax({
    type: "POST",
    url: "/ajax/composition.php",
    data: "id=" + id ,
    success: function(msg){
        $(".product-composition-content").append(msg);
        $(".product-composition *").width("auto");
    }
});

// Переключение табов
$(".product-tabs-names-container .product-tab-name:not(.active)").live("click",function() {
    var index = $(".product-tabs-names-container .product-tab-name").index(this);
    $(".product-tabs-names-container .product-tab-name").removeClass("active");
    $(this).addClass("active");
    $(".product-tabs-content .product-tab").removeClass("active");
    $(".product-tabs-content .product-tab:eq("+index+")").addClass("active");
});
$(".product-text-content img").removeAttr('height');

// Min-height buy-char
$(".product-buy-char").css("min-height",$(".product-taste-price-buy").height()+10);

// Ingredients show/hide
$(".hide-char-row").each(function() {
    if ($(".hide-char-row-wrap", this).height() <= $(".hide-char-row-content", this).height()) {
        $(".hide-char-row-content", this).removeClass("hide-char-row-content");
        $(".show-all-hide-but", this).remove();
    }
});
$(".show-all-hide-but span").click(function() {
    var parent = $(this).parents(".hide-char-row");
    if ($(this).is(".show-but")) {
        $(this).parent().addClass("hide");
        $(".hide-char-row-content", parent).height($(".hide-char-row-wrap", parent).height());
    }
    else if ($(this).is(".hide-but")) {
        $(this).parent().removeClass("hide");
        $(".hide-char-row-content", parent).height(36);
    }
});

// Блок товаров в категории с аякс подгрузкой
$(".brand-link").live('click', function (e) {
    e.preventDefault();
    
    var link = $(this),
        vars_arr = {},
        brands_container = $('.brand-products-container'),
        brand_content;
        
    if (!link.hasClass('active')) {
        vars_arr['manufacturer'] = link.data('manufacturer');
        vars_arr['parent'] = link.data('parent');
        brand_content = brands_container.find(".brand-products-content[data-brand='" + vars_arr['manufacturer'] + "']");
        
        if (brand_content.length == 0) {
            $.post('/ajax/ajax_brand_prods.php', {
                data: JSON.stringify(vars_arr)
            }, 
            function(result) {
                brands_container.append(result.result);
            }, 'json');
        }
        $('.brand-link').removeClass('active');
        link.addClass('active');
        $('.brand-products-content').css('display', 'none');
        $(".brand-products-content[data-brand='" + vars_arr['manufacturer'] + "']").fadeIn();
    }
});

var gall_size = $("#msGallery .thumbnail").length;
if (gall_size == 1)  $("body").addClass("gall-one-img");

// Gallery
var gallery = $('a.thumbnail').colorbox({rel:'prodgal', className:'product-gall-colorbox', width: '97%', height: '97%', opacity: 0.6, scrolling: false, returnFocus: false, fixed: true, title: function() {
    var title = $(this).data('title'),
        buy = $(".buy-btn-container").html(),
        price = $(this).data('price'),
        thumbs = '';
    
    if (gall_size > 1) {
        $("#msGallery .thumbnail").each(function() {
            var preview = $(this).data("preview"),
                original = $(this).attr("href");
                
            thumbs += '<div class="gal-prod-thumb">'+
                            '<a href="'+original+'">'+
                                '<img src="'+preview+'" />'+
                            '</a>'+
                      '</div>';
        });
        
        $(".gal-prod-thumb:not(.current) a")
            .live('hover', function(){
                var parent = $(this).parent(),
                    index = parent.index(".gal-prod-thumb");
                    src = $(this).attr("href");
                
                $(".gal-prod-thumb").removeClass("current");
                parent.addClass("current");
                
                $.colorbox.slide(index);
            });
        
        $(".gal-prod-thumb a")
            .live('click', function(e){ e.preventDefault(); });
        
        if (!$(".gal-prod-thumbs-container").length) $("#cboxContent").append('<div class="gal-prod-thumbs-container custom-scroll"><div class="gal-prod-thumbs">'+thumbs+'</div></div>');
    }
    
    price = price == 0 ? '' : '<div class="gal-prod-price">'+price+' <span>грн.</span></div>';
    
    return  '<div class="gal-prod-title">'+title+'</div>'+
            '<div class="gal-prod-buy">'+buy+'</div>'+
            price;
}, onComplete: function(color) {
    var image = $("#cboxLoadedContent .cboxPhoto"),
        src =  image.attr("src"),
        cp_width = image.width(), cp_height = image.height(),
        co_width = image[0].naturalWidth, co_height = image[0].naturalHeight;
        
        //if (co_width > cp_width || co_height > cp_height) $("#cboxLoadedContent").addClass("zoom").zoom({ on:'grab' });
        $(".gal-prod-thumb").removeClass("current");
        $(".gal-prod-thumb a[href='"+src+"']").parent().addClass("current");
}});
$('#product-image-content').click(function() {
    var img = $(this).data('image');
    $('a.thumbnail[href="'+img+'"]').trigger('click');
});

// К отзывам
$(".ec-reviews-count a").click(function(e){
    $('html, body').animate({
        scrollTop: $("#to-reviews").offset().top
    }, 500);
    $(".reviews-question-tab-name").trigger('click');
    e.preventDefault();
});