//owlSlider Script
$( document ).ready(function() {
    var owl = $('.ove-mainSlider');
    owl.owlCarousel(
        {
            "items": 1,
            "autoplay": true,
            "autoplayHoverPause": true,
            "smartSpeed": 500,
            'loop': true
        }
    );
    })