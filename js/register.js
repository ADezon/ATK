$(document).ready(function() {

    // tooltip-number-invoice
    var composedHTMLNumberInvoice = '<span><div class="share-links-wrapper">Another related Info HERE. We CAN HAVE <a href="http://www.google.com">link to a page</a></div></span>';
    $('#tooltip-number-invoice').tooltipster({
        interactive: true,
        position: 'right',
        trigger: 'click',
        content: $(composedHTMLNumberInvoice)
    });

    // tooltip-two-digits
    var composedHTMLtwoDigits = '<span><div class="share-links-wrapper">Info HERE about what user have to do. We CAN HAVE <a href="http://www.google.com">link to a page</a></div></span>';
    $('#tooltip-two-digits').tooltipster({
        interactive: true,
        position: 'right',
        trigger: 'click',
        content: $(composedHTMLtwoDigits)
    });


});