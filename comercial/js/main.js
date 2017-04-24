// Auxiliary functions
function SetCookie(cookieName, cookieValue, nHours) {
    var today = new Date();
    var expire = new Date();
    if (nHours == null || nHours == 0) nHours = 1;
    expire.setTime(today.getTime() + 3600000 * nHours);
    document.cookie = cookieName + "=" + cookieValue + ";expires=" + expire.toUTCString();
}
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


$(document).ready(function () {

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

    $(".menu > ul > li").click(function (e) {

        if ($(window).width() > 768) {
            var miPadre = $(this).closest('li').attr('id');

            // Close any OTHER Child (except OURs >> if Opened, of course!!!)
            $(".menu > ul > li").not(document.getElementById(miPadre)).children(".container-submenu").hide();

            // console.log($(".menu > ul > li").not(document.getElementById(miPadre)));
            // Affect OUR Children (Sub-Menu)
            $(".menu > ul > li#" + miPadre).children(".container-submenu").fadeToggle(250);
            // $(this).children(".container-submenu").stop(true, false).fadeToggle(250);
        }
    });

    $(document).mouseup(function (e) {
        if ($(window).width() > 768) {
            var letsGoCloseIt = true;
            // ALL Clicks OutSide the MENU will close it.
            if ($(e.target).hasClass("menu-title")
                || $(e.target).hasClass("icons")
                || $(e.target).hasClass("menu-title")
                || $(e.target).hasClass("title-level-1")
            ) { letsGoCloseIt = false; }
            var menuContainer = $('.container-submenu');
            if (letsGoCloseIt
                && !menuContainer.is(e.target) // if the target of the click isn't the container...
                && menuContainer.has(e.target).length === 0 // ... nor a descendant of the container
            ) { $(menuContainer).hide(); }
        }
    });

    //If width is more than 720px dropdowns are displayed on CLICK
    $(".menu > ul > li").click(function () {
        if ($(window).width() <= 768) {
            $(this).children(".container-submenu").fadeToggle(250);
        }
    });
    //If width is less or equal to 720px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

    $(".menu-mobile").click(function (e) {
        // console.log('ready');
        $('#header .container-client-area').removeClass('active').hide();
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
    enquire.register("screen and (max-width:768px)", {

        // OPTIONAL
        // If supplied, triggered when a media query matches.
        match: function () {
            $("#topbar").appendTo("#header");
            $('#header .container-client-area.logged-area').removeClass('active').hide();
            // Remove margin MENU logged
            $('.logged-in #nav-private').css('margin-bottom', '0');
            // console.log('antes de los 720');
        },

        // OPTIONAL
        // If supplied, triggered when the media query transitions
        // *from a matched state to an unmatched state*.
        // In this case we're working on BIG Screens
        unmatch: function () {
            $(".menu > ul").removeClass('show-on-mobile');
            $("#topbar").removeClass('show-on-mobile');
            $("#topbar").insertBefore("#head");
            $('a.menu-mobile').removeClass('open');

            // console.log('pasados los 720');
            // Abre el MENU Logueado
            $('#header .container-client-area.logged-area').addClass('active').show();
            $('.logged-in #nav-private').css('margin-bottom', '52px');

        },

        // OPTIONAL
        // If supplied, triggered once, when the handler is registered.
        setup: function () {

        },

        // OPTIONAL, defaults to false
        // If set to true, defers execution of the setup function
        // until the first time the media query is matched
        deferSetup: true,

        // OPTIONAL
        // If supplied, triggered when handler is unregistered.
        // Place cleanup code here
        destroy: function () {

        }

    });
    //
    // END ENQUIRE (RESPONSIVE)
    //


    // 3. LOGUIN System
    // Pre-RESPONSIVE (Before SCALE)
    if ($(window).width() > 768) {
        // Abre el MENU Logueado
        $('#header .container-client-area.logged-area').addClass('active').show();
        $('.logged-in #nav-private').css('margin-bottom', '52px');
    } else {
    }

    $(function () {
        var button = $('.button-client-area').not(".active-logged");
        var buttonMobile = $('.button-login-client');
        var box = $('.container-client-area');
        button.mouseup(function () {
            box.toggle();
            button.toggleClass('active');
            buttonMobile.toggleClass('active');
            box.toggleClass('active');
        });
    });

    // LOGIN MOBILE
    $(function () {
        var button = $('.button-client-area');
        var buttonMobile = $('.button-login-client');
        var box = $('.container-client-area');
        buttonMobile.mouseup(function () {
            box.toggle();
            buttonMobile.toggleClass('active');
            button.toggleClass('active');
            box.toggleClass('active');
        });
    });
});