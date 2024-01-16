$(function(){
    var header = document.getElementById('header')
    var headroom = new Headroom(header);

    headroom.init();

    //Menu responsivo
    //Calculamos elancho de la pantalla
    var ancho = $(window).width(),
        enlaces = $('#enlaces'),
        btnMenu = $('#btn-menu'),
        icono = $('#btn-menu .icono');

    if (ancho<700){
        enlaces.hide();
        icono.addClass('fa-bars');
    }
    
    btnMenu.on('click', function(e){
        enlaces.slideToggle();
        icono.toggleClass('fa-close');
        icono.toggleClass('fa-bars');
    });

    $(window).on('resize', function(){
        if ( $(this).width()>700){
            enlaces.show();
            icono.addClass('fa-bars');
            icono.removeClass('fa-close');
        } else{
            enlaces.hide();
            icono.addClass('fa-bars');
            icono.removeClass('fa-close');
        }
    });

    const sections = document.querySelectorAll('.nav-waypoint');
    const menuLinks = document.querySelectorAll('.enlaces a');

    menuLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            // Evitar el comportamiento predeterminado del enlace
            event.preventDefault();

            // Remover la clase "current" de todos los enlaces
            menuLinks.forEach(link => {
                link.classList.remove('current');
            });

            // Agregar la clase "current" solo al enlace que se ha seleccionado
            link.classList.add('current');

            // Desplazarse a la sección correspondiente
            const targetId = link.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            targetSection.scrollIntoView({ behavior: 'smooth' });
        });
    });


});