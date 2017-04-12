<?php include 'includes/header_shortcodes.php'; ?>

  <div id="main-content">

    <!--BEGIN SPECIFIC PAGE SHORTCODE-->
    <div class="basic-page cont-wrapper shortcode-container">
      <div class="content">
          <?php include 'includes/breadcrumb.php'; ?>
        <h1 class="main-title">Títol pàgina</h1>
        <div class="field-body">
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
            dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>
      </div>
    </div>
    <!--END SPECIFIC PAGE SHORTCODE-->

    <div class="basic-page cont-wrapper shortcode-container shortcode-padding-sup-0 shortcode-padding-inf-0">
      <div class="content">
        <div class="box-info-data">
          <div class="full-centered"><span class="hard">Forfets de dades per navegar a velocitat 4G</span></div>
          <div class="gallery">
            <div><p class="pink">1 GB</p>
              <p class="action-message">10€</p>
              <p class="link" style="background-color: #f5f5f5; margin-bottom: 0px !important; padding-top: 15px;"><a
                    class="button-pink"
                    style="background-color: #d30572; border-radius: 4px; color: #fff; display: inline-block; font-size: 16px; font-weight: bold; line-height: 24px; padding: 4px 16px; text-transform: uppercase; text-align: center;"
                    href="https://pd.andorratelecom.ad/ca/web/comercial/client/contractar?productOfferingId=9135803656113658374">Contractar</a>
              </p></div>
            <div><p class="pink">3 GB</p>
              <p class="action-message">19€</p>
              <p class="link" style="background-color: #f5f5f5; margin-bottom: 0px !important; padding-top: 15px;"><a
                    class="button-pink"
                    style="background-color: #d30572; border-radius: 4px; color: #fff; display: inline-block; font-size: 16px; font-weight: bold; line-height: 24px; padding: 4px 16px; text-transform: uppercase; text-align: center;"
                    href="https://pd.andorratelecom.ad/ca/web/comercial/client/contractar?productOfferingId=9135803656113658370">Contractar</a>
              </p></div>
            <div><p class="pink">5 GB</p>
              <p class="action-message">25€</p>
              <p class="link" style="background-color: #f5f5f5; margin-bottom: 0px !important; padding-top: 15px;"><a
                    class="button-pink"
                    style="background-color: #d30572; border-radius: 4px; color: #fff; display: inline-block; font-size: 16px; font-weight: bold; line-height: 24px; padding: 4px 16px; text-transform: uppercase; text-align: center;"
                    href="https://pd.andorratelecom.ad/ca/web/comercial/client/contractar?productOfferingId=9135803656113658376">Contractar</a>
              </p></div>
          </div>
        </div>


        Si el que necessites és una SIM Addicional, només de dades, per navegar des de la tauleta tàctil o el portàtil,
        dóna’t d’alta a Mobiland Dades i contracta un Forfet de dades.
        <div class="box-info-data">
          <div class="full-centered"><span class="hard">Tarifes SIM addcional</span></div>
          <div class="gallery-two-items">
            <div><p class="pink">Alta</p>
              <p class="hard">15€</p></div>
            <div><p class="pink">Abonament mensual</p>
              <p class="hard">3€/mes</p></div>
          </div>
          <p></p></div>


      </div>
    </div>


    <div class="basic-page cont-wrapper shortcode-container">
      <div class="content">

        <div class="big-banner cont-wrapper">
          <div class="slider big inner-use">
            <!--BEGIN INJECT HERE THE VALUE OF TIMER FOR TRANSITIONS IN MILISECONDS-->
            <script>
                var timering = 7000;

                $(document).ready(function () {

                    // FLEXSLIDER With PAGER

                    // SEE BUG at:
                    // https://github.com/woothemes/FlexSlider/issues/334
                    // store the slider in a local variable
                    var $window = $(window),
                        flexslider = {vars: {}};

                    // tiny helper function to add breakpoints
                    function getGridSize() {
                        return ( (window.innerWidth || document.documentElement.clientWidth) < 600) ? 2 : 4;
                    }

                    $window.load(function () {

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
            </script>
            <!--END INJECT HERE THE VALUE OF TIMER FOR TRANSITIONS IN MILISECONDS-->
            <ul class="slides">
              <li class="one">
                <img src="./uploaded_files/one.jpg"/>
              </li>

              <li class="two">
                <img src="./uploaded_files/two.jpg"/>
              </li>

              <li class="three">
                <img src="./uploaded_files/three.jpg"/>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>

    <!-- BEGIN SECTION 3 COLUMNS -->
    <div class="cont-wrapper bg-grey shortcode-container">
      <div class="content">
        <h2 class="global-subtitle">Títol secció (3 columns)</h2>
        <div class="three-columns-row">
          <div class="three-columns-element">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
          <div class="three-columns-element">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
          <div class="three-columns-element last">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
        </div>
      </div>
    </div>
    <!-- END SECTION 3 COLUMNS -->

    <!-- BEGIN SECTION TEXT & PHOTO -->
    <div class="cont-wrapper shortcode-container">
      <div class="content">
        <h2 class="global-subtitle">TEXT & PHOTO</h2>
        <div class="section-content-ti item-bgrey">
          <img class="content-ti-img right" src="https://dummyimage.com/300x200/8D0E57/ffffff&text=dummy+image"/>
          <div class="content-ti-text right">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
              doloremque laudantium, totam rem aperiam,
              sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
              magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>
            <p>
              Another Text putted HERE <strong>(esto es OTRO parrafo)</strong>
            </p>
          </div>
        </div>
        <div class="section-content-ti">
          <img class="content-ti-img left" src="https://dummyimage.com/300x200/8D0E57/ffffff&text=dummy+image" alt="">
          <div class="content-ti-text left">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
              doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
              beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
              fugit,
              sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
              qui
              dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
              incidunt ut labore et dolore magnam.
            </p>
          </div>

        </div>
        <div class="content-box-pinksoft">
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
            dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, pariatur.
          </p>
        </div>
      </div>
    </div>
    <!-- END SECTION TEXT & PHOTO -->
    <!-- END SECTION TEXT & PHOTO -->

    <!-- BEGIN SECTION 2 COLUMNS -->
    <div class="cont-wrapper bg-grey shortcode-container">
      <div class="content">
        <h2 class="global-subtitle">Títol secció</h2>
        <div class="two-columns-row">
          <div class="two-columns-element">
            <span class="two-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="two-columns-info">
              <span class="two-columns-title">Lorem Ipsum</span>
              <span class="two-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>
          <div class="two-columns-element last">
            <span class="two-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="two-columns-info">
              <span class="two-columns-title">Lorem Ipsum</span>
              <span class="two-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>
        </div>
        <div class="two-columns-row">
          <div class="two-columns-element">
            <span class="two-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="two-columns-info">
              <span class="two-columns-title">Lorem Ipsum</span>
              <span class="two-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>
          <div class="two-columns-element last">
            <span class="two-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="two-columns-info">
              <span class="two-columns-title">Lorem Ipsum</span>
              <span class="two-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>
        </div>
        <div class="two-columns-row">
          <div class="two-columns-element">
            <span class="two-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="two-columns-info">
              <span class="two-columns-title">Lorem Ipsum</span>
              <span class="two-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>
          <div class="two-columns-element last">
            <span class="two-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="two-columns-info">
              <span class="two-columns-title">Lorem Ipsum</span>
              <span class="two-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END SECTION 2 COLUMNS -->

    <!-- BEGIN SECTION 3 COLUMNS -->
    <div class="cont-wrapper bg-grey shortcode-container">
      <div class="content">
        <h2 class="global-subtitle">ICONS (left) + TEXT (a 3 Columnes)</h2>

        <div class="three-columns-row">
          <div class="three-columns-element-lefted">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="three-columns-info">
              <span class="three-columns-title">Lorem Ipsum</span>
              <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>

          <div class="three-columns-element-lefted">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="three-columns-info">
              <span class="three-columns-title">Lorem Ipsum</span>
              <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>

          <div class="three-columns-element-lefted last">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="three-columns-info">
              <span class="three-columns-title">Lorem Ipsum</span>
              <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>
        </div>

        <div class="three-columns-row">
          <div class="three-columns-element-lefted">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="three-columns-info">
              <span class="three-columns-title">Lorem Ipsum</span>
              <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>

          <div class="three-columns-element-lefted">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="three-columns-info">
              <span class="three-columns-title">Lorem Ipsum</span>
              <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>

          <div class="three-columns-element-lefted last">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <div class="three-columns-info">
              <span class="three-columns-title">Lorem Ipsum</span>
              <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- END SECTION 2 COLUMNS -->

    <!-- BEGIN SECTION ACCORDION -->
    <div class="cont-wrapper shortcode-container">
      <div class="content">
        <h2 class="global-subtitle">Títol secció</h2>

        <div id="accordion">
          <h3>Morbi rhoncus dolor non purus molestie, a blandit lorem condimentum.</h3>
          <div>

            <ul>
              <li>One</li>
              <li>Two</li>
              <li>Three</li>
            </ul>

          </div>
          <h3>Phasellus eget quam condimentum, tincidunt erat nec, tempus ex.</h3>
          <div>

            Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
            purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
            velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
            suscipit faucibus urna.

          </div>
          <h3>Proin molestie erat vel aliquam fermentum.</h3>
          <div>
            <p>
              Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
              Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
              ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
              lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
            </p>
          </div>
          <h3>Sed aliquet mauris non sapien ultricies, nec maximus urna aliquam.</h3>
          <div>
            <p>
              Cras dictum. Pellentesque habitant morbi tristique senectus et netus
              et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
              faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
              mauris vel est.
            </p>
            <p>
              Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
              Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
              inceptos himenaeos.
            </p>
          </div>
          <h3>Etiam non augue convallis, aliquet quam sit amet, posuere justo.</h3>
          <div>
            <p>
              Cras dictum. Pellentesque habitant morbi tristique senectus et netus
              et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
              faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
              mauris vel est.
            </p>
            <p>
              Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
              Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
              inceptos himenaeos.
            </p>
          </div>
        </div>

      </div>
      <script>
          // See: http://api.jqueryui.com/accordion/ for options
          $(function () {
              // change the heigh for display on mobile to content height, in desktop, set the taller one.
              function getFillType() {
                  return ( (window.innerWidth || document.documentElement.clientWidth) < 720) ? 'content' : 'auto';
              }

              $("#accordion").accordion({
                  collapsible: true,
                  heightStyle: 'content',
                  autoHeight: false
              });
          });
      </script>
    </div>
    <!-- END SECTION ACCORDION -->

    <!-- BEGIN SECTION STEP -->
    <div class="cont-wrapper bg-grey shortcode-container">
      <div class="content">
        <h2 class="global-subtitle">Títol secció</h2>
        <h3 class="title-step">
          <span class="rounded-number">1</span>
          <span class="title-step-text">Títol del primer pas</span>
        </h3>
        <div class="content-step">
          <div class="content-step-img">
            <img src="./images/i-imgtest-little.png" alt="">
          </div>
          <div class="content-step-text">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem
              aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
              explicabo.
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
              dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
              sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
              magnam aliquam quaerat voluptatem.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- END SECTION STEP -->

    <!-- BEGIN SECTION TABS -->
    <div class="cont-wrapper shortcode-container">
      <div class="content">
        <h2 class="global-subtitle">TABS Title (Normal WHITE BG)</h2>

        <div class="tabs-mobile-selector only-mobile">
          <select class="make-me-styled">
            <option value="0" selected>Tab 1 (titulo largo prueba)</option>
            <option value="1">Tab 2 (titulo largo prueba)</option>
            <option value="2">Tab 3 (titulo largo prueba)</option>
            <option value="3">Tab 4 (titulo largo prueba)</option>
          </select>
        </div>

        <div id="tabs">
          <ul>
            <li><a href="#tabs-1">Tab 1 (titulo largo prueba)</a></li>
            <li><a href="#tabs-2">Tab 2 (titulo largo prueba)</a></li>
            <li><a href="#tabs-3">Tab 3 (titulo largo prueba)</a></li>
            <li><a href="#tabs-4">Tab 4 (titulo largo prueba)</a></li>
          </ul>
          <div id="tabs-1">
            <ul>
              <li>Prueba de ITEM bullets INSIDE - 01</li>
              <li>Prueba de ITEM bullets INSIDE - 02</li>
              <li>Prueba de ITEM bullets INSIDE - 03</li>
              <li>Prueba de ITEM bullets INSIDE - 04</li>
              <li>Prueba de ITEM bullets INSIDE - 05</li>
            </ul>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem
              aperiam, eaque ipsa quae ab illo inventore veritatis
              et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
              aspernatur aut odit aut fugit, sed quia consequuntur magni
              dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
              sit amet, consectetur, adipisci velit, sed quia non numquam
              eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
              veniam,
              quis nostrum exercitationem ullam corporis suscipit laboriosam,
              nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit
              esse quam nihil molestiae consequatur, vel illum qui dolorem eum
              fugiat quo voluptas nulla pariatur.</p>
          </div>
          <div id="tabs-2">
            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id
              nunc.
              Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus,
              ut
              tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit
              aliquam.
              Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc.
              Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas
              feugiat,
              tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris
              consectetur tortor et purus.</p>
          </div>
          <div id="tabs-3">
            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula
              accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti
              sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel
              enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim,
              pretium
              nec, feugiat nec, luctus a, lacus.</p>
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla
              facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti.
              Donec
              mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam
              scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor,
              tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo.
              Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
          </div>
          <div id="tabs-4">
            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula
              accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti
              sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel
              enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim,
              pretium
              nec, feugiat nec, luctus a, lacus.</p>
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla
              facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti.
              Donec
              mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam
              scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor,
              tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo.
              Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
          </div>
        </div>


        <script>
            $(function () {
                $("#tabs").tabs();
            });

            $(document).ready(function () {

                // REV Original: http://tutorialzine.com/2010/11/better-select-jquery-css3/
                // The select element to be replaced:
                var select = $('select.make-me-styled');
                var selectBoxContainer = $('<div>', {
                    width: select.outerWidth(),
                    class: 'atSelect',
                    html: '<div class="selectBox">' + select.find(":selected").text() + '</div>'
                });

                var dropDown = $('<ul>', {class: 'dropDown'});
                var selectBox = selectBoxContainer.find('.selectBox');

                // Set FIRST item in selector.


                // Looping though the options of the original select element

                select.find('option').each(function (i) {
                    var option = $(this);

                    if (i == select.attr('selectedIndex')) {
                        selectBox.html(option.text());
                    }

                    // As of jQuery 1.4.3 we can access HTML5
                    // data attributes with the data() method.

                    if (option.data('skip')) {
                        return true;
                    }

                    // Creating a dropdown item according to the
                    // data-icon and data-html-text HTML5 attributes:

                    // <img src="'+option.data('icon')+'" /> removed
                    var li = $('<li>', {
                        html: option.text()
                    });

                    li.click(function () {

                        selectBox.html(option.text());
                        dropDown.trigger('hide');

                        // When a click occurs, we are also reflecting
                        // the change on the original select element:
                        select.val(option.val());
                        $("#tabs").tabs("option", "active", option.val());


                        return false;
                    });

                    dropDown.append(li);
                });

                selectBoxContainer.append(dropDown.hide());
                select.hide().after(selectBoxContainer);

                // Binding custom show and hide events on the dropDown:

                dropDown.bind('show', function () {

                    if (dropDown.is(':animated')) {
                        return false;
                    }

                    selectBox.addClass('expanded');
                    dropDown.slideDown();

                }).bind('hide', function () {

                    if (dropDown.is(':animated')) {
                        return false;
                    }

                    selectBox.removeClass('expanded');
                    dropDown.slideUp();

                }).bind('toggle', function () {
                    if (selectBox.hasClass('expanded')) {
                        dropDown.trigger('hide');
                    }
                    else dropDown.trigger('show');
                });

                selectBox.click(function () {
                    dropDown.trigger('toggle');
                    return false;
                });

                // If we click anywhere on the page, while the
                // dropdown is shown, it is going to be hidden:

                $(document).click(function () {
                    dropDown.trigger('hide');
                });
            });

        </script>
      </div>
    </div>
    <!-- END SECTION TABS -->

    <!-- BEGIN SECTION TABS -->
    <div class="cont-wrapper shortcode-container bg-grey">
      <div class="content">
        <h2 class="global-subtitle">TABS Title (Normal WHITE BG)</h2>

        <div class="tabs-mobile-selector only-mobile">
          <select class="make-me-styled">
            <option value="0" selected>Tab 1 (titulo largo prueba)</option>
            <option value="1">Tab 2 (titulo largo prueba)</option>
            <option value="2">Tab 3 (titulo largo prueba)</option>
            <option value="3">Tab 4 (titulo largo prueba)</option>
          </select>
        </div>

        <div id="tabs2">
          <ul>
            <li><a href="#tabs-5">Tab 1 (titulo largo prueba)</a></li>
            <li><a href="#tabs-6">Tab 2 (titulo largo prueba)</a></li>
            <li><a href="#tabs-7">Tab 3 (titulo largo prueba)</a></li>
            <li><a href="#tabs-8">Tab 4 (titulo largo prueba)</a></li>
          </ul>
          <div id="tabs-5">
            <ul>
              <li>Prueba de ITEM bullets INSIDE - 01</li>
              <li>Prueba de ITEM bullets INSIDE - 02</li>
              <li>Prueba de ITEM bullets INSIDE - 03</li>
              <li>Prueba de ITEM bullets INSIDE - 04</li>
              <li>Prueba de ITEM bullets INSIDE - 05</li>
            </ul>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem
              aperiam, eaque ipsa quae ab illo inventore veritatis
              et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
              aspernatur aut odit aut fugit, sed quia consequuntur magni
              dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
              sit amet, consectetur, adipisci velit, sed quia non numquam
              eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
              veniam,
              quis nostrum exercitationem ullam corporis suscipit laboriosam,
              nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit
              esse quam nihil molestiae consequatur, vel illum qui dolorem eum
              fugiat quo voluptas nulla pariatur.</p>
          </div>
          <div id="tabs-6">
            <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id
              nunc.
              Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus,
              ut
              tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit
              aliquam.
              Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc.
              Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas
              feugiat,
              tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris
              consectetur tortor et purus.</p>
          </div>
          <div id="tabs-7">
            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula
              accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti
              sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel
              enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim,
              pretium
              nec, feugiat nec, luctus a, lacus.</p>
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla
              facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti.
              Donec
              mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam
              scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor,
              tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo.
              Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
          </div>
          <div id="tabs-8">
            <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula
              accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti
              sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel
              enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim,
              pretium
              nec, feugiat nec, luctus a, lacus.</p>
            <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla
              facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti.
              Donec
              mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam
              scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor,
              tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo.
              Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
          </div>
        </div>


        <script>
            $(function () {
                $("#tabs2").tabs();
            });

            $(document).ready(function () {

                // REV Original: http://tutorialzine.com/2010/11/better-select-jquery-css3/
                // The select element to be replaced:
                var select = $('select.make-me-styled');
                var selectBoxContainer = $('<div>', {
                    width: select.outerWidth(),
                    class: 'atSelect',
                    html: '<div class="selectBox">' + select.find(":selected").text() + '</div>'
                });

                var dropDown = $('<ul>', {class: 'dropDown'});
                var selectBox = selectBoxContainer.find('.selectBox');

                // Set FIRST item in selector.


                // Looping though the options of the original select element

                select.find('option').each(function (i) {
                    var option = $(this);

                    if (i == select.attr('selectedIndex')) {
                        selectBox.html(option.text());
                    }

                    // As of jQuery 1.4.3 we can access HTML5
                    // data attributes with the data() method.

                    if (option.data('skip')) {
                        return true;
                    }

                    // Creating a dropdown item according to the
                    // data-icon and data-html-text HTML5 attributes:

                    // <img src="'+option.data('icon')+'" /> removed
                    var li = $('<li>', {
                        html: option.text()
                    });

                    li.click(function () {

                        selectBox.html(option.text());
                        dropDown.trigger('hide');

                        // When a click occurs, we are also reflecting
                        // the change on the original select element:
                        select.val(option.val());
                        $("#tabs").tabs("option", "active", option.val());


                        return false;
                    });

                    dropDown.append(li);
                });

                selectBoxContainer.append(dropDown.hide());
                select.hide().after(selectBoxContainer);

                // Binding custom show and hide events on the dropDown:

                dropDown.bind('show', function () {

                    if (dropDown.is(':animated')) {
                        return false;
                    }

                    selectBox.addClass('expanded');
                    dropDown.slideDown();

                }).bind('hide', function () {

                    if (dropDown.is(':animated')) {
                        return false;
                    }

                    selectBox.removeClass('expanded');
                    dropDown.slideUp();

                }).bind('toggle', function () {
                    if (selectBox.hasClass('expanded')) {
                        dropDown.trigger('hide');
                    }
                    else dropDown.trigger('show');
                });

                selectBox.click(function () {
                    dropDown.trigger('toggle');
                    return false;
                });

                // If we click anywhere on the page, while the
                // dropdown is shown, it is going to be hidden:

                $(document).click(function () {
                    dropDown.trigger('hide');
                });
            });

        </script>
      </div>
    </div>
    <!-- END SECTION TABS -->

    <!-- BEGIN SECTION STEPS -->
    <div class="cont-wrapper bg-grey shortcode-container">
      <div class="content">
        <ol class="progress">
          <li class="is-active" data-step="1">
            Selecciona
          </li>
          <li data-step="2">
            Lorem ipsum
          </li>
          <li data-step="3" class="progress__last">
            Lorem ipsum
          </li>
        </ol>
        <ol class="progress">
          <li class="is-complete" data-step="1">
            Selecciona
          </li>
          <li class="is-active" data-step="2">
            Lorem ipsum
          </li>
          <li data-step="3" class="progress__last">
            Lorem ipsum
          </li>
        </ol>
        <ol class="progress">
          <li class="is-complete" data-step="1">
            Selecciona
          </li>
          <li class="is-complete" data-step="2">
            Lorem ipsum
          </li>
          <li class="is-active" data-step="3" class="progress__last">
            Lorem ipsum
          </li>
        </ol>
      </div>
    </div>
    <!-- END SECTION STEPS -->

    <!-- BEGIN SECTION LIST -->
    <div class="cont-wrapper shortcode-container w-bottomline">
      <div class="content">
        <h2 class="global-subtitle">Títol secció</h2>
        <ul class="menu-list">
          <li class="active"><a href="#">Preu</a></li>
          <li><a href="#">Característiques</a></li>
          <li><a href="#">Avantatges</a></li>
          <li><a href="#">Canals</a></li>
          <li><a href="#">Requeriments</a></li>
          <li><a href="#">T’ajudem</a></li>
        </ul>
      </div>
    </div>
    <!-- END SECTION LIST -->

    <!-- BEGIN SECTION PRODUCT -->
    <div class="cont-wrapper shortcode-container">
      <div class="content">
        <h2 class="global-subtitle">Ara amb el doble de dades per al teu mòbil</h2>
        <div class="half-page">
          <div class="product-prices">
            <div class="product-prices-general">
              <h3 class="product-prices-title">Des de</h3>
              <p class="product-prices-price">49€<span class="price-month">/mes</span></p>
              <a href="#" class="button-pink">Et truquem gratuïtament</a>
            </div>

            <div class="product-prices-others">
              <div class="product-prices-mini-section"><span>Preus per altres zones</span></div>
              <div class="product-prices-mini-title"><span>Lorem ipsum</span></div>
              <p class="product-prices-mini-price">49€<span class="price-month">/mes</span></p>
            </div>

            <div class="product-prices-others">
              <div class="product-prices-mini-section"><a href="#" title="">Més zones</a></div>
              <div class="product-prices-mini-title"><span>Lorem ipsum</span></div>
              <p class="product-prices-mini-price">49€<span class="price-month">/mes</span></p>
            </div>
          </div>
        </div>
        <div class="half-page">
          <div class="product-features">
            <div class="product-features-element">
              <h4 class="product-features-title">Lorem Ipsum</h4>
              <div class="product-features-text">
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              </div>
            </div>
            <div class="product-features-element">
              <h4 class="product-features-title">Lorem Ipsum</h4>
              <div class="product-features-text">
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              </div>
            </div>
            <div class="product-features-element">
              <h4 class="product-features-title">Lorem Ipsum</h4>
              <div class="product-features-text">
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              </div>
            </div>
            <div class="product-features-element">
              <h4 class="product-features-title">Lorem Ipsum</h4>
              <div class="product-features-text">
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END SECTION PRODUCT -->

    <!-- BEGIN SECTION 3 COLUMNS VARIATION (more text below) -->
    <div class="cont-wrapper bg-grey shortcode-container three-cols-variation">
      <div class="content">
        <h2 class="global-subtitle">Característiques</h2>
        <div class="three-columns-row">
          <div class="three-columns-element">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
          <div class="three-columns-element">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
          <div class="three-columns-element last">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
        </div>

        <div class="three-columns-row">
          <div class="three-columns-element">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
          <div class="three-columns-element">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
          <div class="three-columns-element last">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
        </div>

      </div>
    </div>
    <!-- END SECTION 3 COLUMNS VARIATION (more text below)-->

    <!-- BEGIN SECTION SLIDER PRODUCTS -->
    <div class="cont-wrapper shortcode-container">
      <div class="content sliders">
        <h2 class="global-subtitle">Canals que pots veure</h2>

        <div class="slider-multiple-desktop">
          <!-- Slider FOR DESKTOP (multiple items per SLIDE )-->
          <div class="slider-deskt">
            <ul class="slides">
              <li>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
                </div>
                <div class="six-items last"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/000/fff.jpg"/></a></div>

                <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
                </div>
                <div class="six-items last"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a></div>
              </li>
              <li>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
                </div>
                <div class="six-items last"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/000/fff.jpg"/></a></div>

                <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
                </div>
                <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
                </div>
                <div class="six-items last"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a></div>
              </li>
              <li>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg&text=imatge+slide"/></a></div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/000/fff.jpg&text=imatge+slide"/></a></div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg&text=imatge+slide"/></a></div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/000/fff.jpg&text=imatge+slide"/></a></div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg&text=imatge+slide"/></a></div>
                <div class="six-items last"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/000/fff.jpg&text=imatge+slide"/></a></div>

                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg&text=imatge+slide"/></a></div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/000/fff.jpg&text=imatge+slide"/></a></div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg&text=imatge+slide"/></a></div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/000/fff.jpg&text=imatge+slide"/></a></div>
                <div class="six-items"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/d30573/fff.jpg&text=imatge+slide"/></a></div>
                <div class="six-items last"><a href="#" title=""><img
                        src="https://dummyimage.com/150x150/000/fff.jpg&text=imatge+slide"/></a></div>
              </li>

            </ul>
          </div>

          <script language="JavaScript">
              $(document).ready(function () {
                  var timering = 7000;
                  // SINGLE FLEXSLIDER.
                  $('.slider-deskt').flexslider({
                      animation: "slide",
                      directionNav: true,
                      controlNav: false,
                      slideshowSpeed: timering,
                      minItems: 1,
                      maxItems: 1
                  });
              });
          </script>
        </div>
        <!-- MOBILE ONLY-->
        <div class="slider-single-mobile">
          <!-- Slider FOR MOBILE (one item per SLIDE )-->
          <div class="slider-mob">
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
            </div>
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
            </div>
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
            </div>
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
            </div>
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
            </div>
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
            </div>
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
            </div>
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
            </div>
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
            </div>
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
            </div>
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
            </div>
            <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
            </div>
          </div>
          <script language="JavaScript">
              $(document).ready(function () {
                  var timering = 7000;
                  // SINGLE FLEXSLIDER.
//                        $('.slider-mob').flexslider({
//                            animation: "slide",
//                            slideshowSpeed: timering,
//                            itemWidth: 410,
//                            itemMargin: 10,
//                            minItems: 1,
//                            maxItems: 1,
//                            directionNav: false,
//                            controlNav: false
//                        });

                  // http://kenwheeler.github.io/slick/
                  $('.slider-mob').slick({
                      centerMode: true,
                      centerPadding: '10px',
                      slidesToShow: 3,
                      responsive: [
                          {
                              breakpoint: 720,
                              settings: {
                                  arrows: false,
                                  centerMode: true,
                                  centerPadding: '40px',
                                  slidesToShow: 3
                              }
                          },
                          {
                              breakpoint: 480,
                              settings: {
                                  arrows: false,
                                  centerMode: true,
                                  centerPadding: '40px',
                                  slidesToShow: 1
                              }
                          }
                      ]
                  });
              });
          </script>
        </div>

      </div>
    </div>
    <!-- END SECTION SLIDER PRODUCTS -->

    <!-- BEGIN SECTION LIST HELP -->
    <div class="cont-wrapper bg-grey shortcode-container">
      <div class="content">
        <h2 class="global-subtitle">T’ajudem</h2>
        <dl class="help-list">
          <div class="half-page">
            <dt>
              <a href="#"><span>Quins són les tarifes Mobiland roaming?</span><span class="icons icon-right"></span></a>
            </dt>
            <dt>
              <a href="#"><span>Com puc configurar el meu mòbil?</span><span class="icons icon-right"></span></a>
            </dt>
            <dt>
              <a href="#"><span>Què és Mobiland?</span><span class="icons icon-right"></span></a>
            </dt>
          </div>
          <div class="half-page">
            <dt>
              <a href="#"><span>Com contractar?</span><span class="icons icon-right"></span></a>
            </dt>
            <dt>
              <a href="#"><span>Campanya Descatalogació Coure</span><span class="icons icon-right"></span></a>
            </dt>
          </div>
        </dl>
      </div>
    </div>
    <!-- END SECTION LIST HELP -->

    <!-- BEGIN SECTION OPTIONAL CHANNELS -->
    <div class="cont-wrapper shortcode-container optional-channels">
      <div class="content">
        <h2 class="global-subtitle">Canals opcionals</h2>
        <div class="items-container">
          <div>
            <img src="https://dummyimage.com/110x110/d8d8d8/000.jpg">
            <div class="price"><span class="big">6€</span>/mes</div>
            <div class="description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
              mus.
            </div>
            <div class="link"><a href="" class="button-pink">Contractar</a></div>
          </div>

          <div>
            <img src="https://dummyimage.com/110x110/d8d8d8/000.jpg">
            <div class="price"><span class="big">6€</span>/mes</div>
            <div class="description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
              mus.
            </div>
            <div class="link"><a href="" class="button-pink">Contractar</a></div>
          </div>

          <div>
            <img src="https://dummyimage.com/110x110/d8d8d8/000.jpg">
            <div class="price"><span class="big">6€</span>/mes</div>
            <div class="description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
              mus.
            </div>
            <div class="link"><a href="" class="button-pink">Contractar</a></div>
          </div>

          <div>
            <img src="https://dummyimage.com/110x110/d8d8d8/000.jpg">
            <div class="price"><span class="big">6€</span>/mes</div>
            <div class="description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
              mus.
            </div>
            <div class="link"><a href="" class="button-pink">Contractar</a></div>
          </div>

          <div>
            <img src="https://dummyimage.com/110x110/d8d8d8/000.jpg">
            <div class="price"><span class="big">6€</span>/mes</div>
            <div class="description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
              mus.
            </div>
            <div class="link"><a href="" class="button-pink">Contractar</a></div>
          </div>

          <div>
            <img src="https://dummyimage.com/110x110/d8d8d8/000.jpg">
            <div class="price"><span class="big">6€</span>/mes</div>
            <div class="description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
              mus.
            </div>
            <div class="link"><a href="" class="button-pink">Contractar</a></div>
          </div>

        </div>
      </div>
    </div>
    <!-- END SECTION OPTIONAL CHANNELS -->


    <!-- BEGIN SECTION BOTONS i LINKS -->
    <div class="cont-wrapper shortcode-container">
      <div class="content">
        <h2 class="global-subtitle">Botons i links</h2>
        <!--  BEGIN LINKS-LIST SOLO PARA MOSTRARLOS CENTRADOS COMO EN EL DISEÑO... NO SE UTILIZA ESTE CONTENEDOR CUANDO LO USEN SUELTOS -->
        <div class="links-list full-centered">
          <a href="#" class="button-shortcode button-pink">Botó actiu 1</a>
          <a href="#" class="button-shortcode button-active">Botó actiu 2</a>
          <a nohref class="button-shortcode button-disabled">Botó inactiu</a>
          <a href="#" class="button-shortcode button-clean">Link</a>
        </div>

        <!--NOW with BUTTONS (for forms)-->
        <div class="links-list full-centered">
          <input type="button" class="button-shortcode button-pink" value="Botó actiu 1">
          <input type="button" class="button-shortcode button-active" value="Botó actiu 2">
          <input type="button" class="button-shortcode button-disabled" value="Botó inactiu">
        </div>

        <div class="links-list full-centered">
          <button class="button-shortcode button-pink">Normal "pink"</button>
          <button class="button-shortcode button-active">Active button</button>
          <button class="button-shortcode button-disabled">Botó inactiu</button>
        </div>
        <!--  END LINKS-LIST SOLO PARA MOSTRARLOS CENTRADOS COMO EN EL DISEÑO... NO SE UTILIZA ESTE CONTENEDOR CUANDO LO USEN SUELTOS -->
        <div class="banner-ads">
          <img src="./images/i-bannertest.jpg" alt="" class="banner-ads-img">
        </div>
      </div>
    </div>
    <!-- END SECTION BOTONS i LINKS -->

    <!-- BEGIN SECTION 3 COLUMNS -->
    <div class="cont-wrapper bg-grey shortcode-container">
      <div class="content">
        <h2 class="global-subtitle">Títol secció (3 columns)</h2>
        <div class="three-columns-row">
          <div class="three-columns-element">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
          <div class="three-columns-element">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
          <div class="three-columns-element last">
            <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
            <span class="three-columns-title">Lorem Ipsum</span>
            <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
        </div>
      </div>
    </div>
    <!-- END SECTION 3 COLUMNS -->

  </div>

<?php include 'includes/footer.php'; ?>