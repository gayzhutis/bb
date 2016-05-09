function numberFormat (number, decimals, dec_point, thousands_sep ) {
    // original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
	// improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// bugfix by: Michael White (http://crestidg.com)
	var i, j, kw, kd, km;
	// input sanitation & defaults
	if( isNaN(decimals = Math.abs(decimals)) ){
		decimals = 2;
	}
	if( dec_point == undefined ){
		dec_point = ",";
	}
	if( thousands_sep == undefined ){
		thousands_sep = ".";
	}
	i = parseInt(number = (+number || 0).toFixed(decimals)) + "";
	if( (j = i.length) > 3 ){
		j = j % 3;
	} else{
		j = 0;
	}
	km = (j ? i.substr(0, j) + thousands_sep : "");
	kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
	kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");
	return km + kw + kd;
}

function js_resizable() {//скрытие невлезающих элементов в блоках '.js-resizable'
    $('.js-resizable').each(function() {
        wrap = $(this).width();
        r_count = $(this).children().length;
        m_count = Math.floor(wrap/263);
        if(m_count<r_count) {
            for (var i = 0; i < r_count; i++) {
                if(i<=(m_count-1))
                    $(this).children().eq(i).removeClass('hidden');
                else
                    $(this).children().eq(i).addClass('hidden');
            }
        }
        else {
            $(this).children().removeClass('hidden');
        }
    });
}

function fast_cart_height() {//функция по пересчету высоты окна предкорзины
    w_height = $(window).height() - 250;
    fс_height = $('.fast-cart .fc-goods-container').height();
    if(w_height > fс_height)
        fc_true_height = fс_height;
    else
        fc_true_height = w_height;
    $('.fast-cart .fc-goods-wrapper').height(fc_true_height);
}

$(".product-number-control").live("click", function () {/*changes for click on product +-*/
    var currNumCont = $(this).siblings(".product-number");
    var currNum = parseInt(currNumCont.val());
    var parent = $(this).parents('.ms2_product');
    currNum = $(this).html() == "+" ? currNum+1 : currNum-1;
    if (currNum === 0) return false;
    if (parent.length > 0) {
        var currNumDataCont = $(".ms2_link",parent);
        currNumDataCont.data("count",currNum);
    }
    currNumCont.val(currNum);
    $(this).parents('.ms2_form').submit();
});

$(document).on('change', '.product-number', function() {
    var currNum = parseInt($(this).val()),
        parent = $(this).parents('.product-row');
    if (currNum === 0) return false;
    if (parent.hasClass('set-row')) {
        var profit = $('.ps-cart-profit', parent).data('one'),
            old = $('.ps-cart-old', parent).data('one'),
            price = $('.ps-cart-price', parent).data('one');
        
        $('.ps-cart-profit', parent).html(currNum*profit);
        $('.ps-cart-old', parent).html(currNum*old);
        $('.ps-cart-price', parent).html(currNum*price);
    }
    else {
        var currPrice = parseFloat($('.price-col', parent).attr('data-one-price'));
        $('.price-col span', parent).html(currNum*currPrice);
    }
});
$(".product-number-control").live("click", function () {
    var currNum = parseInt($(this).siblings(".product-number").val()),
        parent = $(this).parents('.product-row');
    if (currNum === 0) return false;
    if (parent.hasClass('set-row')) {
        var profit = $('.ps-cart-profit', parent).data('one'),
            old = $('.ps-cart-old', parent).data('one'),
            price = $('.ps-cart-price', parent).data('one');
        
        $('.ps-cart-profit', parent).html(currNum*profit);
        $('.ps-cart-old', parent).html(currNum*old);
        $('.ps-cart-price', parent).html(currNum*price);
    }
    else {
        var currPrice = parseFloat($('.price-col', parent).attr('data-one-price'));
        $('.price-col span', parent).html(currNum*currPrice);
    }
});

$(document).on('change', '#msMiniCart .product-number, .fast-cart .product-number', function() {/*changes for change product count input in Minicart*/
    $(this).parents('.ms2_form').submit();
});

$("#msMiniCart").hover(//minicart hover
    function () {
        $(".mc-prod-container").css("display","block").stop().fadeTo(300, 1);        
        if ($(".goods-list-content").height() > 340) 
            $(".goods-list").css("overflow-y","auto");
        else $(".goods-list-content").css("overflow-y","hidden");
    },
    function () {
        $(".mc-prod-container").stop().fadeTo(300, 0, function(){ $(".mc-prod-container").css("display","none"); });
    }
);

// Подкатегории гормошка
/*$(".subcategs-container .arrow").click(function() {
    if ($(this).parent(".subcategs-container").is(".unwrapped")) $(this).parent(".subcategs-container").removeClass("unwrapped");
    else $(this).parent(".subcategs-container").addClass("unwrapped");
    $(this).siblings(".subcategs-container ul").slideToggle(300);
});*/

/* Формат телефона */
$(".phone").mask("+38 (999) 999 99 99");

/**
 * Function to display user authentification popup.
 * 
 * @author Denis Bondarenko <wanderer6i666@gmail.com>
 */
function authPopup(popup) {
    var maskHeight = $(document).height(),
        maskWidth = $(window).width(),
        popup_height = popup.height(),
        popup_width = popup.width(),
        mask = $('#mask');
    // Show mask.
    mask.css({
        'width' : maskWidth,
        'height' : maskHeight,
        'opacity' : '0.6'
    }).fadeIn(250);
    // Show auth popup.
    popup.css({
        'top' : '50%',
        'left' : '50%',
        'margin-top' : -(popup.height() / 2),
        'margin-left' : -(popup.width() / 2)
    }).fadeIn(500);
}

$(document).ready(function() {
    js_resizable();
    /*------------------------Скрипт для регистрации/логина----------------------------------*/
    $('a[name=modal]').live("click", function (e) {
        e.preventDefault();
        authPopup($($(this).attr('href')));
    });
    if($('a[name=modal]').hasClass('reg-must-show')) {
        authPopup($("#registration"));
    }
    if($('.loginMessage').html()) {
        authPopup($("#login"));
    }
    $('.alert-input').click(function () {
        $(this).removeClass('alert-input');
    });
    $('.window .close').click(function (e) {
        e.preventDefault();
        $('#mask, .window').fadeOut(500);
    }); 
    
    $('#mask').click(function () {
        $(this).fadeOut(500);
        $('.window').fadeOut(500);
    });
    
    /*-------------------Ошибки при входе/регистрации---------------*/
    $(".reg-row").hover(//как раз-таки вывод ошибок, в виде всплывающих подсказок в регистрации
        function () {
            $(".alert-message").css("display","none");
            $(this).children(".alert-message").fadeIn();
        },
        function () {
            $(this).children(".alert-message").css("display","none");
        }
    );
    /*------------------------------------------------------*/
    /*-------------------Ошибки при редактировании личного кабинета/смене пароля---------------*/
    $(".cab-row-pass").hover(
        function () {
            $(".alert-cab-message").css("display","none");
            $(this).children(".alert-cab-message").fadeIn();
        },
        function () {
            $(this).children(".alert-cab-message").css("display","none");
        }
    );
    $(".control-group").hover(
        function () {
            $(".alert-cab-message").css("display","none");
            $(this).children(".alert-message").fadeIn();
        },
        function () {
            $(this).children(".alert-message").css("display","none");
        }
    );
    /*------------------------------------------------------*/
    
    /* Header bot menu */
    $(".header-bot-menu a").hover(
        function() {
            $(this).parent().addClass("hover");
        },
        function() {
            $(this).parent().removeClass("hover");
        }
    );
    
    /* Popup forms */
    $(document).click(function(e){    /*Скрытие блока приклике вне его пределов*/
        if ($(e.target).closest(".popup-content").length) return;
        $(".popup-content").removeClass("popup-clicked");
        $('.popup-content').fadeOut(200);
        e.stopPropagation();
    });
    $(".popup-but").live("click",function() {
        var popupCont = $(".popup-content", $(this).parents(".popup-container"));
        
        $(".popup-content").not(popupCont).removeClass("popup-clicked");
        $(".popup-content").not(popupCont).fadeOut(200);
            
        if ($(popupCont).hasClass("popup-clicked")) {
            $(popupCont).removeClass("popup-clicked");
            $(popupCont).fadeOut(200);
        }
        else {
            $(popupCont).addClass("popup-clicked");
            $(popupCont).fadeIn(200);
        }        
        return false;
    });
    
    /* Form submit */
    
        // Display success message.
    function show_message(message, popup_form) {
        var popup_result = $('.popup-result');
        $('.popup-form-preload', popup_form).css('display', 'none');
            
        $(':input', popup_form)
            .removeAttr('checked')
            .removeAttr('selected')
            .not(':button, :submit, :reset, :hidden, :radio, :checkbox')
            .val('');
        popup_form.removeClass('popup-clicked');
        $('.popup-content').fadeOut(200);
        
        // Display succes message.
        $('.popup-result-content').empty().append(message).parent().fadeIn(200);
        popup_result.find('.close').click(function() {
            popup_result.fadeOut(500);
        });
        setTimeout(function() { 
            popup_result.fadeOut(500);
        }, 7000);
    }
    
    /* Form submit */
    
    // Submit callback for one click order form.
    $('.ms2_product .popup-form').submit(function(e) {
        e.preventDefault();
        
        var product_container = $(this).parents('.ms2_product'),
            name = product_container.find("input[name='one_ckick_name']").val(),
            phone = product_container.find("input[name='one_ckick_phone']").val(),
            product_id = product_container.find("input[name='product_id']").val(),
            product_taste,
            popup_form = product_container.find('.popup-form');
            
        $('.popup-form-preload', popup_form).css('display', 'block');
        
        if (product_container.find("select[name='options[color]']").length > 0) {
            product_taste = product_container.find("select[name='options[color]']").val();
        }
        
        if (product_container.find('.not-availabile').length > 0) {
            // Report product availability.
            $.post("/ajax/product_availability.php", {
                product_id: product_id,
                phone: phone,
                name: name
            }, 
            function(result) {
                show_message(result, popup_form);
                
                return;
            });
        }
        else {
            // Buy product oneclick.
            $.post("", {
                submit_oneclick_order: '',
                product_id: product_id, 
                product_taste: product_taste,
                phone: phone,
                name: name
            }, 
            function(result) {});
            
            show_message('Ваш заказ успешно отправлен!', popup_form);
        }
    });
    
    // Submit callback form and question form.
    $(".email-callback-request-form, .question-form").submit(function(e) {
        e.preventDefault();
        var fieldsArr = {},
            fieldsJSON, 
            name,
            parent = $(this).parents(".popup-content, .question-form-content");
            
        $(".popup-form-preload", parent).css("display","block");
        
        $(".send-field",this).each(function() {
            name = $(this).attr("name");
            fieldsArr[name] = $(this).val();
        });
        
        $.ajax({
            type: "POST",
            async: false,
            cache: false,
            url: "/ajax/ajax_form_send.php",
            dataType: 'json',
            data: "data=" + JSON.stringify(fieldsArr),
            success: function(data) {
                show_message(data.result, parent);
            }
        });
    });
    
    /* Drop-down list in filter */
    /*Скрытие блока приклике вне его пределов*/
    $(document).click(function(e){
        if ($(e.target).closest(".drop-down-list-container").length) return;
        $(".drop-down-list").removeClass("visible");
        e.stopPropagation();
    });
    $(".drop-down-list-container").click(function(e) {
        if ($(e.target).closest(".drop-down-list").length && !$(e.target).closest(".sort-link-container.active").length) return;
        var cont = $(".drop-down-list", this);
        $(".drop-down-list").not(cont).removeClass("visible");
        
        if (!cont.hasClass("visible")) cont.addClass("visible");
        else cont.removeClass("visible");
    });
    
    // Categories submenu
    var timeout;
    $(".big-submenu-content").hover(function() {
        clearTimeout(timeout);
        var parent = $(this).parent();
            parent_id = parent.data("parent");
        parent.addClass("show check-hover");
        if (parent_id == 2 || parent_id == 3339) $(".top-menu-3").addClass("hover");
    }, function() {
        var parent = $(this).parent();
            parent_id = parent.data("parent");
        if (parent_id == 2 || parent_id == 3339) $(".top-menu-3").removeClass("hover");
        timeout = setTimeout(function() {
            if (!$(".header-top-menu > ul > li > ul > li.top-menu-"+parent_id).is(".check-hover")) {
                $(".header-top-menu > ul > li > ul > li.top-menu-"+parent_id).removeClass("hover");
                parent.removeClass("show check-hover");
            }
        }, 500);
    });
    
    $(".header-top-menu > ul > li > ul > li").hover(function() {
        $(".big-submenu").removeClass("show check-hover");
        $(".header-top-menu > ul > li > ul > li").removeClass("hover check-hover");
        var child = $(".big-submenu-"+$(this).data("child"));
        if (!child.size()) return;
        child.removeClass("check-hover").addClass("show");
        $(this).addClass("hover check-hover");
    }, function() {
        var elem = $(this),
            child = $(".big-submenu-"+elem.data("child"));
        if (!child.size()) return;
        setTimeout(function() {
            elem.removeClass("check-hover");
            if (!child.is(".check-hover")) {
                elem.removeClass("hover");
                child.removeClass("show");
            }
        }, 50);
    });
    
    /*var menu_h = $(window).height() - 80;
    $(".shop-menu-promo-categories-container").css("max-height", menu_h);
    $(window).resize(function() {
        menu_h = $(window).height() - 80;
        $(".shop-menu-promo-categories-container").css("max-height", menu_h);
    });*/
    
    /* Фиксирование меню */
    var menu_offset = $(".header-menues-container").offset();
    if($(window).scrollTop() > menu_offset.top){
          $(".header-menues-container").addClass("fixed");
          $("#msMiniCart").addClass("fixed");
    } else {
        $(".header-menues-container").removeClass("fixed");
        $("#msMiniCart").removeClass("fixed");
    }
    
    $(window).scroll(function(){
        if($(window).scrollTop() > menu_offset.top){
              $(".header-menues-container").addClass("fixed");
              $("#msMiniCart").addClass("fixed");
        } else {
            $(".header-menues-container").removeClass("fixed");
            $("#msMiniCart").removeClass("fixed");
        }
    });
    
    // Фиксы для меню производителей
    var size = $(".block-letter-brands-header-container").size(),
        half = Math.floor(size/2),
        mod = size%2;
    $(".block-letter-brands-header-content:eq("+half+")").addClass("brd-none");
    if (mod) $('<div class="block-letter-brands-header-container">'+
                    '<div class="block-letter-brands-header-content brd-none">'+
                        '<div class="block-letter-header-content"></div>'+
                    '</div>'+
                '</div>').insertBefore(".brands-submenu-list-content .brands-header-see-all-container");
    
    // Фикс для высоты блока в выпадающем меню подкатегорий
    $(".shop-menu-categories-content > ul > li > ul").each(function() {
        var parent = $(this);
        $('li:gt(15):last', parent).addClass('sub-no-border');
    });
});

// Скрытие блоков по ресайзу
window.onresize = function(event) {
    js_resizable();
};

//google analytics events 
    /*
     $(".order-but.order-but-fast-order").on('click', function() { 
      ga('send', 'event', 'buy', 'click');
    
    });
    */
    //one click buy
    $(document).on('click','.one-click-form-button.ajax-form-button',function(e){
        //e.preventDefault();
        //console.log("one-click");
        ga('send', 'event', 'fast_product_buy', 'click');
    });
    //cart add
    $(".buy-btn").on('click', function() {
        ga('send', 'event', 'cart_add', 'click');
    });
    //question add
    $(".question-form-button").on('click', function() {
        ga('send', 'event', 'question', 'click', {'nonInteraction': 1});
    });
    
// Share links modal
$('.social-share-link').click(function() {
	var social_href = $(this).attr('href'),
	    width=screen.width, // Ширина экрана
    	height=screen.height, // Высота экрана
	    left = (width/2)-250,
        top = (height/2)-168;
	
	var OpenWindow = window.open(social_href, "newwin", "height=336,width=500,scrlolbars=1,replace=yes,left="+left+",top="+top);
	return false;
});

miniShop2.Callbacks.Cart.remove.ajax.done = function(res) {//callback на удаление товара из корзины
    if($('#colorbox.fast-cart').css('display') != 'none') {//если открыта предкорзина
        fast_cart_height();//пересчитываем высоту блока
        $.colorbox.resize();//пересчитываем высоту попапа
    }
}

miniShop2.Callbacks.Cart.add.ajax.done = function(res) {//callback на добавление товара в корзину
    //console.log(window.location.pathname);
    var cur_url = window.location.pathname;
    var parsedData = JSON.parse(res['responseText']);
    if((parsedData.success === true) && (cur_url.indexOf('cart.html') == -1)) {//если товар успешно добавлен (количество позволяет) и это не страница корзины
        var key = parsedData.data.key;//получаем ключ в сессии добавленного товара
        
        // Фикс для страницы товара
        $('#cboxContent .gal-prod-thumbs-container').remove();
        $.colorbox.close();
        //--------
        
        //Вывод предкорзины
        $.ajax({//получаем предкорзину по аяксу
            type: "POST",
            async:false,
            url: "/ajax/fast_cart_ajax.php",
            data: "key=" + key,
            dataType: "json",
            cache: false,
            success: function(data){
                setTimeout(
                    function() {
                        $.colorbox({//вызываем попап предкорзины
                            className:'fast-cart',
                            width: '980',
                            maxHeight: '99%',
                            opacity: 0.6,
                            trapFocus: false,
                            scrolling: false,
                            returnFocus: false,
                            fixed: true,
                            title: 'Товары в корзине:',
                            html: data.result,
                            onComplete: function() {
                                $(".set-row").each(function() {//задаем высоту блока цен для комплектов
                                    $(".ps-cart-container", this).height($(this).parent(".ps-cart").height());
                                });
                                
                                $('.fast-cart .fc-prod-return').attr('href', data.link);//устанавливаем ссылку на последний добавленый товар
                                fast_cart_height();//пересчитываем высоту блока предкорзины
                                $(this).colorbox.resize();//пересчитываем высоту попапа
                            }
                        });
                    }
                , 300);
            }
        });
    }
}