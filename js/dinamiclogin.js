$(document).ready(function() {

    // OPEN
    $('.dinamic-login').click(function () {

        var destination = $(this).data("destination");

        $('#redirection').val(destination);

        var messageLOGpopUp = 'After LOGIN, system should redirect user to:\n' + destination + '\n';
        messageLOGpopUp += 'as you can inspect the hidden input (in the "Pop-Up") filled up with destination path';
        alert(messageLOGpopUp);

        $('.floating-login-wrapper').css({
            "opacity": 1,
            "visibility": "visible"
        });
    });
    // CLOSE
    $('.login-close').click(function () {
        $('.floating-login-wrapper').css({
            "opacity": 0,
            "visibility": "hidden"
        });
    });

    $(document).mouseup(function (e)
    {
        var container = $('.floating-login-wrapper .cont-wrapper');

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $('.floating-login-wrapper').css({
                "opacity": 0,
                "visibility": "hidden"
            });
        }
    });

});