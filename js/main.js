/*global $ */
$(document).ready(function() {

"use strict";

//
// 1. MEGAMENU
// 2. ENQUIRE (RESPONSIVE)
// 3. LOGUIN System
//

    //
    // 1. MEGAMENU
    //
        $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
        //Checks if li has sub (ul) and adds class for toggle icon - just an UI

        $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
        //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

        $(".button-login-client").after("<a href=\"#\" class=\"menu-mobile\"><span></span><span></span><span></span><span></span></a>");

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
            $(this).toggleClass("open");
            e.preventDefault();
        });
        //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)
    //
    // END MEGAMENU
    //

    //
    // 2. ENQUIRE (RESPONSIVE)
    //
    enquire.register("screen and (max-width:720px)", {

        // OPTIONAL
        // If supplied, triggered when a media query matches.
        match : function() {
            $("#topbar").appendTo("#header");
            $('#header .container-client-area.logged-area').removeClass('active').hide();
            // Remove margin MENU logged
            $('.logged-in #nav-private').css('margin-bottom', '0');

        },

        // OPTIONAL
        // If supplied, triggered when the media query transitions
        // *from a matched state to an unmatched state*.
        // In this case we're working on BIG Screens
        unmatch : function() {
            $(".menu > ul").removeClass('show-on-mobile');
            $("#topbar").removeClass('show-on-mobile');
            $("#topbar").insertBefore("#head");
            $('a.menu-mobile').removeClass('open');

            // Abre el MENU Logueado
            $('#header .container-client-area.logged-area').addClass('active').show();
            $('.logged-in #nav-private').css('margin-bottom', '60px');

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
    //
    // END ENQUIRE (RESPONSIVE)
    //


    // 3. LOGUIN System
    // Pre-RESPONSIVE (Before SCALE)
    if ($(window).width() > 720) {
        // Abre el MENU Logueado
        $('#header .container-client-area.logged-area').addClass('active').show();
        $('.logged-in #nav-private').css('margin-bottom', '60px');
    } else {
    }

    $(function() {
        var button = $('.button-client-area').not(".active-logged");
        var buttonMobile = $('.button-login-client');
        var box = $('.container-client-area');
        button.mouseup(function() {
            box.toggle();
            button.toggleClass('active');
            buttonMobile.toggleClass('active');
            box.toggleClass('active');
        });
    });

    
    // LOGIN MOBILE
    $(function() {
        var button = $('.button-client-area');
        var buttonMobile = $('.button-login-client');
        var box = $('.container-client-area');
        buttonMobile.mouseup(function() {
            box.toggle();
            buttonMobile.toggleClass('active');
            button.toggleClass('active');
            box.toggleClass('active');
        });
    });
});