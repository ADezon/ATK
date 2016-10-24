$(document).ready(function() {

    // USER ACTIONS (click first time)
    $('#mobile-option').click(function () {
        // Hide if case
        $('#invoice-wrapper').hide();

        $('#mobil-wrapper').show();
        $('#register-info-wrapper').show();
    });

    $('#invoice-option').click(function () {
        // Hide if case
        $('#mobil-wrapper').hide();

        $('#invoice-wrapper').show();
        $('#register-info-wrapper').show();
    });

    // RELOADED PAGE WITH ckecked item (errors, i.e).
    if ($('#mobile-option').attr('checked')) {
        $('#mobil-wrapper').show();
        $('#register-info-wrapper').show();
    }
   if ($('#invoice-option').attr('checked')) {
     $('#invoice-wrapper').show();
     $('#register-info-wrapper').show();
   }


    // **** TOOLTIPS *****


    // tooltip-number-invoice
    var composedHTMLNumberInvoice = '<span>Info HERE about what user have to do. We CAN HAVE <a href="http://www.google.com">link to a page</a></span>';
    $('#tooltip-number-invoice').tooltipster({
        interactive: true,
        position: 'left',
        trigger: 'click',
        content: $(composedHTMLNumberInvoice)
    });

    // tooltip-two-digits
    var composedHTMLtwoDigits = '<span>Another related Info HERE. We CAN HAVE <a href="http://www.google.com">link to a page</a></span>';
    $('#tooltip-two-digits').tooltipster({
        interactive: true,
        position: 'left',
        trigger: 'click',
        content: $(composedHTMLtwoDigits)
    });

});