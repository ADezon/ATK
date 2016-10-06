$(document).ready(function () {
//
// PHONEBOOK JS
//
//
// MOVE ELEMENTS
//(CONTENT VISIBLE AFTER CHANGES) (ADD LOADING GIF)
    // SEARCH
        // MOVE ADVANCED SEARCH SECTION AFTER LINK ADVANCED SEARCH
        $(".linea_cerca .cerca_avancada_section").each(function(){
            $(this).insertAfter($(this).next(".capsa_cerca"));
        });

        // MOVE ALL ADVANCED SEARCH AFTER INPUT SEARCH
        $(".linea_cerca").each(function(){
            $(this).insertAfter($(this).next(".rao_social"));
        });

        // MOVE CLEAN SEARCH IN ADVANCED SEARCH SECTION
        $(".netejar_form").each(function(){
            $(this).appendTo($(this).prev(".linea_cerca").children(".cerca_avancada_section"));
        });

    // RESULTS
        // DELETE MAP LINK OPEN (MAP IS VISIBLE)
        $(".companyDetail .companyInfo .companyMapClosed").each(function(){
            $(this).remove();
        });
        // MOVE MAP (FIRST ELEMENT OF companyInfo)
        $(".companyDetail .companyInfo .companyMap").each(function(){
            $(this).prependTo($(this).parent());
        });
        // MOVE CONTACT (LAST ELEMENT OF companyInfo)
        $(".companyDetail .companyInfo .companyContact").each(function(){
            $(this).appendTo($(this).parent());
        });
        // MOVE ADDRESS AND SENDOPTIONS (ADD WRAPPER)
        $(".companyInfo .companyAddress").each(function(index) {
            $(this).next(".companySendOptions ").andSelf().wrapAll("<div class='companyAddressSendOptions'></div>")
        });
        // MOVE ADDRESS/SENDOPTIONS AND CONTACT(ADD WRAPPER)
        $(".companyInfo .companyAddressSendOptions").each(function(index) {
            $(this).next(".companyContact ").andSelf().wrapAll("<div class='right'></div>")
        });

//
// END PHONEBOOK
//
});