$(function(){
    var $header = $('#header'),
    $headerHeight = $header.innerHeight
    $nav =$('#navigation');

    //Efecto de suavidad

    $('a.scroll').click(function(e){
        e.preventDefault();
        $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
    });


    //scroll

    $(document).ready(function(){
        $("html").niceScroll({
            cursorcolor: "#ffffff",
            zindex: 1100,
            cursorborderradious: 3,
            cursorborder: "1px solid #001f3f",
            horizrailenabled: false,
            cursorfixedheight: 120,
            cursorwidth: "12px",
        });
    });
});