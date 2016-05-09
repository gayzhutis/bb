//------------------------------После загрузки страницы----------------------------
$(document).ready(function() {
    $("input#payment_3").attr('checked','checked');
    $("input:radio:checked").parent().addClass("check-ed");//нажатому - класс check-ed
    /*delivery_price();
    $("#msOrder .order-parameter").each(function() {//вносим в заказ все параметры при загрузке страницы
        var key = $(this).attr('name');
        if (key == 'city')
            var value = $(this).val();
        miniShop2.Order.add(key, value);
    })*/

//----------------Отслеживаем изменение типа доставки--------------------------------
    $(".radio-label").click(function() {
        //------------Смена нажатого radio-button-----------
        $(this).parents(".radio-controls").children().children(".radio-input").removeAttr('checked');
        $(this).parents(".radio-controls").children().removeClass("check-ed");
        $(this).parent().children('input:radio').attr('checked');
        $(this).parent().addClass("check-ed");
    });
    $(".li-delivery").click(function() {
        if ($(this).parent().hasClass("li-delivery-1")) {
            $("#order-address").css("display", "none");
            $("#samovivoz-address").css("display", "block");
        }
        else {
            $("#order-address").css("display", "block");
            $("#samovivoz-address").css("display", "none");
            if ($(this).parent().hasClass("li-delivery-3")) {
                $("#new_post_block").css("display", "block");
                $("#street_block").css("display", "none");
                $("#building_block").css("display", "none");
                $("#room_block").css("display", "none");
                $(".not-allowed-np").css("display", "none");
            }
            else {
                $("#new_post_block").css("display", "none");
                $("#street_block").css("display", "block");
                $("#building_block").css("display", "block");
                $("#room_block").css("display", "block");
                $(".not-allowed-np").css("display", "inline-block");
            }
        }
    });
    $('#msCart .cart-order-send').click(function() {
        $('#msOrder').submit();
    });
});

// Fast order fixed
var w_width = $(window).width(),
    fast_offset = $("#c-fast-order").offset(),
    fast_offset_top = w_width < 1380 ? (fast_offset.top - 158) : (fast_offset.top - 118);

$(window).resize( function () {
    w_width = $(window).width(),
    fast_offset = $("#c-fast-order").offset(),
    fast_offset_top = w_width < 1380 ? (fast_offset.top - 158) : (fast_offset.top - 118);
});

if ($(window).scrollTop() > fast_offset_top) $(".fast-order-wrap").addClass("fixed");
else $(".fast-order-wrap").removeClass("fixed");
    
$(window).scroll(function(){
    if ($(window).scrollTop() > fast_offset_top) $(".fast-order-wrap").addClass("fixed");
    else $(".fast-order-wrap").removeClass("fixed");
});

$(".set-row").each(function() {
    $(".ps-cart-container", this).height($(this).parent(".ps-cart").height());
});

miniShop2.Callbacks.Order.submit.before = function() {//callback на удаление товара из корзины
    /*window.onbeforeunload = function (evt) {
	    var message = "Вы уверены, что хотите прервать оформление заказа и покинуть эту страницу?";
	    if (typeof evt == "undefined") {
    		evt = window.event;
    	}
    	if (evt) {
		    evt.returnValue = message;
	    }
	    return message;
    }*/
}