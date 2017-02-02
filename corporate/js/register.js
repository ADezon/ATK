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
    var composedHTMLNumberInvoice = '<span>El trobaràs a la teva factura, sota el nom “Factura núm.”</span>';
    $('#tooltip-number-invoice').tooltipster({
        interactive: true,
        position: 'left',
        trigger: 'click',
        content: $(composedHTMLNumberInvoice)
    });

    // tooltip-two-digits
    var composedHTMLtwoDigits = '<span>Els trobaràs al rebut del teu banc, sota el nom “Núm. compte”</span>';
    $('#tooltip-two-digits').tooltipster({
        interactive: true,
        position: 'left',
        trigger: 'click',
        content: $(composedHTMLtwoDigits)
    });

});