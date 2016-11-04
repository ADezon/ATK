$(document).ready(function () {
//
// PHONEBOOK JS
//
    // Open/Close Advanced Search
    $('.capsa_cerca a').click(function (e) {
        e.preventDefault();
        $('.cerca_avancada_section').toggle('fold');
        $('.aui-field-select ul').hide();
    });

    // Open/Close items
    $('a.jqTransformSelectOpen').click(function (e) {
        e.preventDefault();
        $(this).siblings('ul').toggle(200);
    });

    $('.jqTransformSelectWrapper ul li a').click(function (e) {
        e.preventDefault();

        // Select its own OPTION in SELECT input
        // TODO

        // Change TITLE of Container with option
        // TODO

        // And finally, hide unfolded container.
        $(this).parent().parent().hide(200);
    });


    $(document).mouseup(function (e) {
        var container = $('.aui-field-select ul');

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $('.aui-field-select ul').hide();
        }
    });

    // Fold-Unfold Results
    $('.guia-caixa-row-container').click(function() {
       $(this).siblings('.companyDetail').toggle('fold');
    });

//
// END PHONEBOOK
//
});