/*$(document).ready(function() {
			$('#fullpage').fullpage({
				responsiveWidth: 1000
			});
        });*/
$('#spasibo .close').click(function(){
    $('#spasibo').removeClass('active');
});

$(document).ready(function(){

    /**************************/
    $("#form1").submit(function(){

        $.ajax({
            type: "POST",
            url: "/order/place",
            data: $("#form1").serialize(),
            success: function(html) {
            }
        });

        $('#spasibo').toggleClass('active');
        $('#form1').trigger("reset");
        return false;
    });
    /**************************/
});

$('.sertificats_slider').owlCarousel({
    loop:false,
    margin:15,
    nav:true,
    navText:true,
    dots:true,
    items:3,
    responsive:{
        0:{
            items:1,
            margin:10,
            nav:true
        },
        700:{
            items:2,
            nav:true,
            margin:15
        },
        1000:{
            items:3,
            nav:true,
            margin:15
        },
    }
});

$(document).ready(function() {
    $(".fancybox").fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        }
    });
});

$('#button-menu_adaptive').click(function(){
    $(this).parent().toggleClass('menu-open');
    $('header .top_block .fright').toggleClass('visible');
    $('#header .top_block').toggleClass('pad_block');
    $('#header').toggleClass('zIndex');
});

var windowWidth = $(window).width();
if(windowWidth < 767){
    // Do stuff here
    $('.photography .row .block a').removeClass('fancybox');
    $('.photography .row .block a').removeAttr('href')
}

$(document).ready(function(){
    $(".scroll").click(function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });
});


(function($) {

    'use strict';

    // variables
    var $isAnimatedSecond = $('.second .is-animated'),
        $isAnimatedSecondSingle = $('.second .is-animated__single'),
        $isAnimatedThird = $('.third .is-animated'),
        $isAnimatedThirdSingle = $('.third .is-animated__single'),
        $isAnimatedFourth = $('.fourth .is-animated'),
        $isAnimatedFourthSingle = $('.fourth .is-animated__single'),
        $isAnimatedFifth = $('.fifth .is-animated'),
        $isAnimatedSixth = $('.sixth .is-animated'),
        $isAnimatedSixthSingle = $('.sixth .is-animated__single');

    // initialize fullPage
    $('#fullpage').fullpage({

        responsiveWidth: 1000,
        onLeave: function(index, nextIndex, direction) {

            /**
             * use the following condition:
             *
             *   if( index == 1 && direction == 'down' ) {
             *
             * if you haven't enabled the dot navigation
             * or you aren't interested in the animations that occur
             * when you jump (using the dot navigation)
             * from the first section to another sections
             */

            // first animation
            if( index == 1 && nextIndex == 2 ) {
                $isAnimatedSecond.addClass('animated fadeInUpBig');
                $isAnimatedSecond.eq(0).css('animation-delay', '.2s');
                $isAnimatedSecondSingle.addClass('animated rollIn').css('animation-delay', '.6s');
            }

            /**
             * use the following condition:
             *
             *   else if( index == 2 && direction == 'down' ) {
             *
             * if you haven't enabled the dot navigation
             * or you aren't interested in the animations that occur
             * when you jump (using the dot navigation) from the first section to the third one
             */

            // second animation
            else if( ( index == 1 || index == 2 ) && nextIndex == 3 ) {
                $isAnimatedThird.eq(1).addClass('animated fadeInRightBig').css('animation-delay', '.3s');
                $isAnimatedThird.eq(2).addClass('animated fadeInLeftBig').css('animation-delay', '.6s');
                $isAnimatedThird.eq(3).addClass('animated fadeInLeftBig').css('animation-delay', '.6s');
                $isAnimatedThirdSingle.addClass('animated bounceInDown').css('animation-delay', '1.2s');
            }


            /**
             * use the following condition:
             *
             *   else if( index == 3 && direction == 'down' ) {
             *
             * if you haven't enabled the dot navigation
             * or you aren't interested in the animations that occur
             * when you jump (using the dot navigation)
             * from the first or second section to the fourth one
             */

            // third animation
            else if( ( index == 1 || index == 2 || index == 3 ) && nextIndex == 4 ) {
                $isAnimatedFourth.addClass('animated fadeInUpBig');
                $isAnimatedFourth.eq(0).css('animation-delay', '.2s');
                $isAnimatedFourthSingle.addClass('animated rollIn').css('animation-delay', '.6s');
            }

            else if( ( index == 1 || index == 2 || index == 3 || index == 4 ) && nextIndex == 5 ) {
                $isAnimatedFifth.addClass('animated zoomIn').css('animation-delay', '.6s');
            }

            else if( ( index == 1 || index == 2 || index == 3 || index == 4 || index == 5 ) && nextIndex == 6 ) {
                $isAnimatedSixth.eq(1).addClass('animated fadeInRightBig').css('animation-delay', '.3s');
                $isAnimatedSixth.eq(2).addClass('animated fadeInLeftBig').css('animation-delay', '.6s');
                $isAnimatedSixth.eq(3).addClass('animated fadeInLeftBig').css('animation-delay', '.6s');
                $isAnimatedSixth.eq(4).addClass('animated fadeInLeftBig').css('animation-delay', '.6s');
                $isAnimatedSixth.eq(5).addClass('animated zoomIn').css('animation-delay', '.6s');
                $isAnimatedSixthSingle.addClass('animated bounceInDown').css('animation-delay', '1.2s');
            }
        }

    });

})(jQuery);


document.querySelector('#silentMoveTo').addEventListener('click', function(e){
    e.preventDefault();
    fullpage_api.silentMoveTo(2);
});

