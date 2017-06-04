//  xRayView script

$( document ).ready(function() {


    qntEventFuncs.xRayView = function(_this){

            $('.x-rayFont').toggleClass('visible');
            $('body').toggleClass('x-ray');
            owl.trigger('destroy.owl.carousel');
            if (! $('body').hasClass('x-ray')){
                var owl = $('.ove-mainSlider');
                owl.owlCarousel(
                    {
                        "items":1,
                        "autoplay":true,
                        "autoplayHoverPause":true,
                        "smartSpeed":500,
                        'loop':true
                    }
                );
            }


        $( "#font14" ).click(function() {
            $('body').css('font-size','14px');
            $('.lightMenu__item ').css('font-size','14px');
            $('p').css('font-size','14px');
        });
        $( "#font18" ).click(function() {
            $('body').css('font-size','18px');
            $('.lightMenu__item ').css('font-size','18px');
            $('p').css('font-size','18px');
        });
        $( "#font24" ).click(function() {
            $('.heroImageHolder').css('margin-top','200px');
            $('body').css('font-size','24px');
            $('.lightMenu__item ').css('font-size','24px');
            $('p').css('font-size','24px');

        });
        qntSwitchSVGIcon(_this, '#eye','#eye.hide');



    }
    $( ".hamburger" ).click(function() {

        $('.lightMenu__list').slideToggle();
        qntSwitchSVGIcon($(this),'#menu','#close');
    });
    qntEventFuncs.search = function(_this){
        qntSwitchSVGIcon(_this,'#magnify','#close');
        $('.searchCtn').toggle();
    }


});