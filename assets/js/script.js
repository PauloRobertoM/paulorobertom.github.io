(function($, window) {
    $('#owl-vitrine').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
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
    $(document).ready(function(){
        $('#myTooltip').tooltip();
        $('#myTooltip2').tooltip();
    });
})(jQuery, window);