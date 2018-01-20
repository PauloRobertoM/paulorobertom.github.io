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
    $( "#retirada" ).click(function() {
        $( "#barra-local1" ).fadeIn( "slow", function() {

        });
        $( "#barra-local2" ).fadeOut( "slow", function() {
            
        });
        $( "#barra-local3" ).fadeOut( "slow", function() {
            
        });
    });
    $( "#devolucao" ).click(function() {
        $( "#barra-local1" ).fadeOut( "slow", function() {
            
        });
        $( "#barra-local2" ).fadeIn( "slow", function() {
            
        });
        $( "#barra-local3" ).fadeOut( "slow", function() {
            
        });
    });
    $( "#dados" ).click(function() {
        $( "#barra-local1" ).fadeOut( "slow", function() {
            
        });
        $( "#barra-local2" ).fadeOut( "slow", function() {
            
        });
        $( "#barra-local3" ).fadeIn( "slow", function() {
            
        });
    });
})(jQuery, window);