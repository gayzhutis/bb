/*!
 * @projectDescription
 * Слайдер изображений под резиновую вёрстку.
 *
 * @author Dmitriy Zarubin (d@moohii.com)
 * @copyright MOOHii.com (http://moohii.com/)
 * @version 1.1
 * @requires jQuery 1.7.2
 */

/*
Слайдер изображений
*********************************************/
function slideSwitch(direction) {
	$('.main-slider-arrow-container').removeClass('clickable-arrow');
    $('.circle-content').removeClass('clickable-circle');
    clearInterval(gallerySlide);
    
    circleSwitch(direction);
    
    $("#main-slider").animate({
		    marginLeft: (-slideWidth*(current+direction+1))+'px'
		}, 
		{duration:animateTime, complete:function(){
				current = current+direction;
				if ( current == 0) {
					current = imgNum;
					$('#main-slider').css('margin-left',(-slideWidth*(imgNum+1))+'px');
				}
				else if ( current > imgNum) {
					current = 1;
					$('#main-slider').css('margin-left','-'+(slideWidth*2)+'px');
				}
				$('.main-slider-arrow-container').addClass('clickable-arrow');
                $('.circle-content').addClass('clickable-circle');
                $('.current-circle').removeClass('clickable-circle');
                gallerySlide = setInterval( "slideSwitch(1)", timeOut);
			}
		}
	);    
}


function circleSwitch(direction) {
    if (direction > 0) {
        var nextCircle = (current+direction-1) == imgNum ? 0 : current+direction-1;
        $(".circle-content:eq("+nextCircle+")").children(".circle-gray").animate({
            opacity: 1
        }, animateTime, function() {$(this).parent().addClass("current-circle"); $(this).removeAttr("style"); });    
        $(".current-circle .circle-gray").animate({
            opacity: 0
        }, animateTime, function() {$(this).parent().removeClass("current-circle"); $(this).removeAttr("style"); });
        
    }
    else {
        var nextCircle = (current+direction-1) < 0 ? imgNum-1 : current+direction-1;
        $(".circle-content:eq("+nextCircle+")").children(".circle-gray").css("opacity","0");
        
        $(".circle-content:eq("+nextCircle+")").children(".circle-gray").animate({
            opacity: 1
        }, animateTime, function() {$(this).parent().addClass("current-circle"); $(this).removeAttr("style"); });    
        $(".current-circle .circle-gray").animate({
            opacity: 0
        }, animateTime, function() {$(this).parent().removeClass("current-circle"); $(this).removeAttr("style"); });        
    }
}


function gradWidthFunc() {
    var gradContWidth = ($('#main-slider-overflow').width()-slideWidth)/2;
    var gradWidth = gradContWidth > 267 ? 267 : gradContWidth;
    $(".slider-gradient-container").width(gradContWidth);
    $(".slider-gradient").width(gradWidth);
}

/*
Основные параметры
*********************************************/
var current = 1; // Первый слайд
var timeOut = 5000; // Задержка изображения
var animateTime = 700; // Время на анимацию
var slideWidth = 481; // Ширина слайда
/********************************************/

gradWidthFunc();
$(window).resize(function() {
    gradWidthFunc();
});

var imgNum = $('#main-slider .fresh-article-content').size();

for (i = 0; i < imgNum; i++) {
    $("#circles-container").append('<div class="circle-content clickable-circle"><div class="circle-gray"></div></div>');
}
$("#circles-container .circle-content:first").addClass("current-circle").removeClass("clickable-circle");

var firstElem = '<div class="fresh-article-content">'+$('#main-slider .fresh-article-content').first().html()+'</div>';
var secondElem = '<div class="fresh-article-content">'+$('#main-slider .fresh-article-content').first().next().html()+'</div>';
var lastElem = '<div class="fresh-article-content">'+$('#main-slider .fresh-article-content').last().html()+'</div>';
var preLastElem = '<div class="fresh-article-content">'+$('#main-slider .fresh-article-content').last().prev().html()+'</div>';

$('#main-slider').prepend(lastElem).prepend(preLastElem).css("margin-left",'-'+(slideWidth*2)+'px').append(firstElem).append(secondElem);

var gallerySlide = setInterval( "slideSwitch(1)", timeOut);

$('.clickable-arrow').live('click',function () {
    if ($(this).attr('rel') == 'next') direction = 1;
    else direction = -1;
	slideSwitch(direction);
	return false;
});


$('.clickable-circle').live('click',function () {
    indexThis = parseInt($(".circle-content").index(this));
    indexCurrent = parseInt($(".current-circle").index(".circle-content"));
    direction = indexThis - indexCurrent;
    slideSwitch(direction);
	return false;
});