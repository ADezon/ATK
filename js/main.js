/*global $ */
$(document).ready(function() {

    "use strict";

    $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
    //Checks if li has sub (ul) and adds class for toggle icon - just an UI

    $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
    //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

    $(".button-login-client").after("<a href=\"#\" class=\"menu-mobile\"><span class=\"icons icon-menu\"></span></a>");

    //Adds menu-mobile class (for mobile toggle menu) before the normal menu
    //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
    //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
    //Done this way so it can be used with wordpress without any trouble

    $(".menu > ul > li").hover(function(e) {
        if ($(window).width() > 720) {
            $(this).children(".container-submenu").stop(true, false).fadeToggle(250);
            e.preventDefault();
        }
    });
    //If width is more than 943px dropdowns are displayed on hover

    $(".menu > ul > li").click(function() {
        if ($(window).width() <= 720) {
            $(this).children(".container-submenu").fadeToggle(250);
        }
    });
    //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

    $(".menu-mobile").click(function(e) {
        $(".menu > ul").toggleClass('show-on-mobile');
        $("#topbar").toggleClass('show-on-mobile');
        e.preventDefault();
    });
    //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)



    // ENQUIRE SCRIPTS
    enquire.register("screen and (max-width:720px)", {

        // OPTIONAL
        // If supplied, triggered when a media query matches.
        match : function() {
            $("#topbar").appendTo("#header");
        },

        // OPTIONAL
        // If supplied, triggered when the media query transitions
        // *from a matched state to an unmatched state*.
        unmatch : function() {
            $(".menu > ul").removeClass('show-on-mobile');
            $("#topbar").removeClass('show-on-mobile');
            $("#topbar").insertBefore("#head");
        },

        // OPTIONAL
        // If supplied, triggered once, when the handler is registered.
        setup : function() {

        },

        // OPTIONAL, defaults to false
        // If set to true, defers execution of the setup function
        // until the first time the media query is matched
        deferSetup : true,

        // OPTIONAL
        // If supplied, triggered when handler is unregistered.
        // Place cleanup code here
        destroy : function() {

        }

    });



    // PHONEBOOK REORDER DIVS INFORMATION
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

    // OPEN / CLOSE INFO PHONEBOOK
   
});