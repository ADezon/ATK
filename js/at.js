$(document).ready(function () {

    // OPEN
    $('#head .icon-alerts').click(function () {
        $('.alert-wrapper').css({
            "opacity": 1,
            "visibility": "visible"
        });
    });
    // CLOSE

    $('.alert-close').click(function () {
        $('.alert-wrapper').css({
            "opacity": 0,
            "visibility": "hidden"
        });
    });

    $(document).mouseup(function (e)
    {
        var container = $('.alert-wrapper .container');

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $('.alert-wrapper').css({
                "opacity": 0,
                "visibility": "hidden"
            });
        }
    });

});
