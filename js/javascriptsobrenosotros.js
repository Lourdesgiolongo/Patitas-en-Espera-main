$(document).ready(function() {
    function mostrarLema() {
        var lema = $('#lema');
        var windowHeight = $(window).height();
        var scroll = $(window).scrollTop();

        var lemaTop = lema.offset().top;
        // var lemaHeight = lema.outerHeight();

        if (scroll + windowHeight > lemaTop) {
            lema.addClass('mostrar-lema');
        }
    }

    mostrarLema();
    $(window).scroll(mostrarLema);
});