(function($, window) {
    $('#owl-vitrine').owlCarousel({
        loop: false,
        autoplay: false,
        margin: 0,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('#owl-comentarios').owlCarousel({
        loop: false,
        autoplay: false,
        margin: 0,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
})(jQuery, window);