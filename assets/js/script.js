(function($, window) {
    $('#owl-dicas').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 30,
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
                items:2
            }
        }
    });
    jQuery(document).ready(function($) { 
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1500);
        });
    });
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 100) {
            $('header').addClass('fixed-header');
        }
        else {
            $('header').removeClass('fixed-header');
        }
    });
})(jQuery, window);