$(document).ready(function () {

    // FLEXSLIDER With PAGER

    // SEE BUG at:
    // https://github.com/woothemes/FlexSlider/issues/334
    // store the slider in a local variable
    var $window = $(window),
        flexslider = { vars:{} };

    // tiny helper function to add breakpoints
    function getGridSize() {
        return ( (window.innerWidth || document.documentElement.clientWidth) < 600) ? 2 : 4;
    }

    $window.load(function() {

        // check grid size on resize event
        $window.resize(function () {
            var gridSize = getGridSize();
            flexslider.vars.minItems = gridSize;
            flexslider.vars.maxItems = gridSize;
        });

        // SINGLE FLEXSLIDER.
        $('.slider').flexslider({
            animation: "slide",
            slideshowSpeed: timering
        });

        // SINGLE FLEXSLIDER.
        $('.slider-four').flexslider({
            animation: "slide",
            slideshow: false,
            itemWidth: 310,
            itemMargin: 10,
            minItems: getGridSize(),
            maxItems: getGridSize(),
            start: function (slider) {
                flexslider = slider; //Initializing flexslider here.
            }
        });


    });



});
