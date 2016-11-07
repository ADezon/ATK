//
// PHONEBOOK JS
//
$(document).ready(function () {

    // Open/Close Advanced Search
    $('.capsa_cerca a').click(function (e) {
        e.preventDefault();
        $('.cerca_avancada_section').slideToggle();
        $('.aui-field-select ul').hide();
    });

    // Open/Close items
    $('a.jqTransformSelectOpen').click(function (e) {
        e.preventDefault();
        $(this).siblings('ul').slideToggle(200);
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
       $(this).siblings('.companyDetail').slideToggle();
    });

    // Unfold sending SMS
    $('.sendSms').click(function (e) {
        $('.email-sender').hide();
       $(this).closest('.results-row-content').children('.sms-sender').slideToggle();
    });

    // Unfold sending Emails
    $('.sendEmail').click(function (e) {
        $('.sms-sender').hide();
        $(this).closest('.results-row-content').children('.email-sender').slideToggle();
    });

    // Triggering ACTIONS
    $('.sendsmstrigger').click(function () {
        var mobile = $(this).closest('.sendOption').find('input[name="numeroMovil"]').val();
        var captcha = $(this).closest('.sendOption').find('input[name="uinm_captchaText"]').val();
        var messagePlaceHolder = $(this).closest('.sms-sender').find('.destination-message');

        // Assign handlers immediately after making the request,
        // and remember the jqxhr object for this request
        $.post( "includes/fake_api.php", { mobile: mobile, captchatext: captcha })
            .done(function(data) {
                messagePlaceHolder.html(data);
            })
            .fail(function(data) {
                messagePlaceHolder.html(data);
            });
    });

    $('.sendemailtrigger').click(function () {
        var emailtosend = $(this).closest('.sendOption').find('input[name="email"]').val();
        var captcha = $(this).closest('.sendOption').find('input[name="ocey_captchaText"]').val();
        var messagePlaceHolder = $(this).closest('.email-sender').find('.destination-message');

        // Assign handlers immediately after making the request,
        // and remember the jqxhr object for this request
        $.post( "includes/fake_api.php", { useremail: emailtosend, captchatext: captcha })
            .done(function(data) {
                messagePlaceHolder.html(data);
            })
            .fail(function() {
                messagePlaceHolder.html(data);
            });
    });


});

//
// END PHONEBOOK
//