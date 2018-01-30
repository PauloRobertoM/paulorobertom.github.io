(function($, window) {
    $('#owl-vitrine').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
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
    $('#owl-carros').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 30,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $(document).ready(function(){
        $('#myTooltip').tooltip();
        $('#myTooltip2').tooltip();
    });
    $('#datepairExample1 .date').datepicker({
        'format': 'd/m/yyyy',
        'autoclose': true
    });
    $('#datepairExample2 .date').datepicker({
        'format': 'd/m/yyyy',
        'autoclose': true
    });
    $( "#proximo2" ).click(function() {
        $( "#item1" ).fadeOut( "slow", function() {

        });
        $( "#item2" ).fadeIn( "slow", function() {
            
        });
        $( "#item3" ).fadeOut( "slow", function() {
            
        });
        $( "#item4" ).fadeOut( "slow", function() {
            
        });
    });
    $( "#proximo3" ).click(function() {
        $( "#item1" ).fadeOut( "slow", function() {

        });
        $( "#item2" ).fadeOut( "slow", function() {
            
        });
        $( "#item3" ).fadeIn( "slow", function() {
            
        });
        $( "#item4" ).fadeOut( "slow", function() {
            
        });
    });
    $( "#proximo4" ).click(function() {
        $( "#item1" ).fadeOut( "slow", function() {

        });
        $( "#item2" ).fadeOut( "slow", function() {
            
        });
        $( "#item3" ).fadeOut( "slow", function() {
            
        });
        $( "#item4" ).fadeIn( "slow", function() {
            
        });
    });

    $( "#anterior3" ).click(function() {
        $( "#item1" ).fadeOut( "slow", function() {

        });
        $( "#item2" ).fadeOut( "slow", function() {
            
        });
        $( "#item3" ).fadeIn( "slow", function() {
            
        });
        $( "#item4" ).fadeOut( "slow", function() {
            
        });
    });
    $( "#anterior2" ).click(function() {
        $( "#item1" ).fadeOut( "slow", function() {

        });
        $( "#item2" ).fadeIn( "slow", function() {
            
        });
        $( "#item3" ).fadeOut( "slow", function() {
            
        });
        $( "#item4" ).fadeOut( "slow", function() {
            
        });
    });
    $( "#anterior1" ).click(function() {
        $( "#item1" ).fadeIn( "slow", function() {

        });
        $( "#item2" ).fadeOut( "slow", function() {
            
        });
        $( "#item3" ).fadeOut( "slow", function() {
            
        });
        $( "#item4" ).fadeOut( "slow", function() {
            
        });
    });
})(jQuery, window);