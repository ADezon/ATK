$(document).ready(function () {


    // FLEXSLIDER With PAGER

    // SEE BUG at:
    // https://github.com/woothemes/FlexSlider/issues/334
    //store the slider in a local variable
    var $window = $(window),
        flexslider = { vars:{} };

    // tiny helper function to add breakpoints
    function getGridSize() {
        return ( (window.innerWidth || document.documentElement.clientWidth) < 600) ? 2 : 3;
    }

    $window.load(function() {
        // FLEXSLIDER
        $('#home-slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            //itemWidth: 100%
            slideshow: false,
            sync: "#home-carousel",
        });

        $('#home-carousel').flexslider({ // .padre-carousel
            animation: "slide",
            controlNav: false,
            //directionNav:false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 10,
            minItems: getGridSize(),
            maxItems: getGridSize(),
            asNavFor: '#home-slider',
            start: function (slider) {
                flexslider = slider; //Initializing flexslider here.
            }
        });
    });

        // check grid size on resize event
        $window.resize(function () {
            var gridSize = getGridSize();
            flexslider.vars.minItems = gridSize;
            flexslider.vars.maxItems = gridSize;
        });

    // SINGLE FLEXSLIDER.
    $('.slider').flexslider({
        animation: "slide"
    });

});
