// OPEN Global Alert
// You sould trigger an event to show ALERT
// i.e. SEND button at invoices.php
function revealalert() {
    $('.general-alert-wrapper').css({
        "opacity": 1,
        "visibility": "visible"
    });
}
function closeAlert() {
    $('.general-alert-wrapper').css({
        "opacity": 0,
        "visibility": "hidden"
    });
}
$(document).ready(function() {
    // CLOSE
    $('.alert-general-close').click(function () {
        closeAlert();
    });

    $(document).mouseup(function (e) {
        var container = $('.general-alert-wrapper .content-general-wrapper');
        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            closeAlert();
        }
    });
});