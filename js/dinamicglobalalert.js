$(document).ready(function() {

    // OPEN
    // alert('Luego de haber hecho alguna acción, aparecerá el "FLOTANTE" con la información necesaria');
    $('.general-alert-wrapper').css({
        "opacity": 1,
        "visibility": "visible"
    });

    // CLOSE
    $('.alert-general-close').click(function () {
        $('.general-alert-wrapper').css({
            "opacity": 0,
            "visibility": "hidden"
        });
    });

    $(document).mouseup(function (e) {
        var container = $('.general-alert-wrapper .content-general-wrapper');
        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $('.general-alert-wrapper').css({
                "opacity": 0,
                "visibility": "hidden"
            });
        }
    });

});