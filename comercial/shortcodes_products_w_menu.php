<?php include 'includes/header_shortcodes.php'; ?>

<div id="main-content">

  <!--BEGIN SPECIFIC PAGE SHORTCODE-->
  <div class="basic-page cont-wrapper shortcode-container">
    <div class="content">
        <?php include 'includes/breadcrumb.php'; ?>
      <h1 class="main-title">Títol pàgina</h1>
      <!--      <div class="field-body">-->
      <!--        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>-->
      <!--      </div>-->
    </div>
  </div>
  <!--END SPECIFIC PAGE SHORTCODE-->

  <div class="cont-wrapper shortcode-container main-menu-shortcode">
    <div class="content">

        <?php
        /*
        El PRIMER "shortCODE" que se pinte, DEBE tener esta estructura,
        EL RESTO, solo deben añadir la clase "w-menu" al short-code-container

        La esttructura es:
        <sidebar>MENU HERE
        <content-ws>(primer short-CODE HERE) <<< SIN clase "w-menu"

        */
        ?>

      <div class="sidebar">
        <!-- BEGIN SECTION LIST -->
        <div id="nav-anchor"></div>
        <ul class="menu-list floating-menu">
          <li><a class="nav-active" href="#preu">Preu</a></li>
          <li><a href="#caracteristics">Característiques test de NOM molt llarg de paquet moooolt llarg...</a></li>
          <li><a href="#advantatges">Avantatges</a></li>
          <li><a href="#channels">Canals</a></li>
          <li><a href="#requeriments">Requeriments</a></li>
          <li><a href="#help">T'Ajudem</a></li>
        </ul>
        <!-- END SECTION LIST -->

      </div>

      <div class="content-ws">
        <!-- BEGIN SECTION PRODUCT -->

          <div id="preu" class="cont-wrapper shortcode-container">
            <div class="content">


              <h2 class="global-subtitle">Ara amb el doble de dades
                per al teu mòbil</h2>
              <div class="half-page">
                <div class="product-prices">
                  <div class="product-prices-general">
                    <h3 class="product-prices-title">Des de</h3>
                    <p class="product-prices-price">49€<span
                          class="price-month">/mes</span>
                    </p>
                    <a href="#" class="button-pink">Et truquem
                      gratuïtament</a>
                  </div>

                  <div class="product-prices-others">
                    <div class="product-prices-mini-section">
                      <span>Preus per altres zones</span>
                    </div>
                    <div class="product-prices-mini-title">
                      <span>Lorem ipsum</span></div>
                    <p class="product-prices-mini-price">
                      49€<span class="price-month">/mes</span>
                    </p>
                  </div>

                  <div class="product-prices-others">
                    <div class="product-prices-mini-section"><a
                          href="#" title="">Més zones</a>
                    </div>
                    <div class="product-prices-mini-title">
                      <span>Lorem ipsum</span></div>
                    <p class="product-prices-mini-price">
                      49€<span class="price-month">/mes</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="half-page">
                <div class="product-features">
                  <div class="product-features-element">
                    <h4 class="product-features-title">Lorem
                      Ipsum</h4>
                    <div class="product-features-text">
                      <p>Cum sociis natoque penatibus et
                        magnis dis parturient montes,
                        nascetur ridiculus mus.</p>
                    </div>
                  </div>
                  <div class="product-features-element">
                    <h4 class="product-features-title">Lorem
                      Ipsum</h4>
                    <div class="product-features-text">
                      <p>Cum sociis natoque penatibus et
                        magnis dis parturient montes,
                        nascetur ridiculus mus.</p>
                    </div>
                  </div>
                  <div class="product-features-element">
                    <h4 class="product-features-title">Lorem
                      Ipsum</h4>
                    <div class="product-features-text">
                      <p>Cum sociis natoque penatibus et
                        magnis dis parturient montes,
                        nascetur ridiculus mus.</p>
                    </div>
                  </div>
                  <div class="product-features-element">
                    <h4 class="product-features-title">Lorem
                      Ipsum</h4>
                    <div class="product-features-text">
                      <p>Cum sociis natoque penatibus et
                        magnis dis parturient montes,
                        nascetur ridiculus mus.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END SECTION PRODUCT -->
      </div>
    </div>
  </div>


   <!-- BEGIN SECTION 3 COLUMNS -->
    <div id="caracteristics" class="cont-wrapper bg-grey shortcode-container w-menu">
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
    <!-- END SECTION 3 COLUMNS -->

  <!-- BEGIN SECTION 2 COLUMNS -->
  <div id="advantatges" class="cont-wrapper bg-grey shortcode-container w-menu">
    <div class="content">
      <h2 class="global-subtitle">Avantatges</h2>
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

  <!-- BEGIN SECTION SLIDER PRODUCTS -->
  <div id="channels" class="cont-wrapper shortcode-container w-menu">
    <div class="content sliders">
      <h2 class="global-subtitle">Canals que pots veure</h2>

      <div class="slider-multiple-desktop">
        <!-- Slider FOR DESKTOP (multiple items per SLIDE )-->
        <div class="slider-deskt">
          <ul class="slides">
            <li>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items last"><a href="#" title=""><img
                      src="https://dummyimage.com/150x150/000/fff.jpg"/></a></div>

              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items last"><a href="#" title=""><img
                      src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a></div>
            </li>
            <li>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items last"><a href="#" title=""><img
                      src="https://dummyimage.com/150x150/000/fff.jpg"/></a></div>

              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
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

  <!-- BEGIN SECTION BASIC TEXT -->
  <div id="requeriments" class="cont-wrapper bg-grey shortcode-container w-menu">
    <div class="content">
      <h2 class="global-subtitle">Requeriments</h2>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
        enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
        qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
        consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
        quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
        nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
        quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
    </div>
  </div>
  <!-- END SECTION BASIC TEXT -->

  <!-- BEGIN SECTION LIST HELP -->
  <div id="help" class="cont-wrapper bg-grey shortcode-container w-menu last">
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

  <script language="JavaScript">
      $(window).load(function () { // BEGIN OnLoad

          // Altura de nuestro FOOTER.
          var footerHeight = $('#footer').height() + 140, // Add puixels of margin-bottom from LAST ShortCode to FOOTER.
              floatingMenu = document.querySelector('.menu-list.floating-menu'), // Menu flotante container
              bottomSpaceMenu = innerHeight - floatingMenu.offsetTop - floatingMenu.offsetHeight;
          /**
           * This part does the "fixed navigation after scroll" functionality
           * We use the jQuery function scroll() to recalculate our variables as the
           * page is scrolled/
           */
          $(window).scroll(function () {
              var window_top = $(window).scrollTop() + 18; // should equal the margin-top value for nav.stick
              var div_top = $('#nav-anchor').offset().top; // Maintains the value of height for positioning.
              var distanceUntilBottom = document.body.scrollHeight - window.innerHeight - window.scrollY;
//              console.log('Distance until (DOCUMENT) reach bottom: ' + distanceUntilBottom);

              // We want avoid the menu touching the FOOTER (for small screens less than 1024px height,
              // but programmed for ANY screen height.
              // Whe the distance until BOTTOM is less than FOOTER's height, implies FOOTER ENTERS.
              if (distanceUntilBottom < footerHeight) {
                  if ((footerHeight - distanceUntilBottom) > bottomSpaceMenu) {
                      $('.floating-menu').hide();
                  } else { $('.floating-menu').show(); }
              }

              // ADD Sticky CLASS (to fix-position the menu)
              if ((window_top > div_top)) {
                  $('.floating-menu').addClass('stick');
              } else {
                  $('.floating-menu').removeClass('stick');
              }
          });

          /**
           * This part causes smooth scrolling using scrollto.js
           * We target all a tags inside the nav, and apply the scrollto.js to it.
           */
          $(".floating-menu a").click(function (evn) {
              evn.preventDefault();
              $('html,body').scrollTo(this.hash, this.hash);
          });


          /**
           * This part handles the highlighting functionality.
           * We use the scroll functionality again, some array creation and
           * manipulation, class adding and class removing, and conditional testing
           */
          var aChildren = $(".floating-menu li").children(); // find the a children of the list items
          var aArray = []; // create the empty aArray
          for (var i = 0; i < aChildren.length; i++) {
              var aChild = aChildren[i];
              var ahref = $(aChild).attr('href');
              aArray.push(ahref);
          } // this for loop fills the aArray with attribute href values

        /**/
          $(window).scroll(function () {
              var windowPos = $(window).scrollTop() +4; // get the offset of the window from the top of page
              var windowHeight = $(window).height(); // get the height of the window
              var docHeight = $(document).height();

              for (var i = 0; i < aArray.length; i++) {
                  var theID = aArray[i];
                  var divPos = $(theID).offset().top; // get the offset of the div from the top of page
                  var divHeight = $(theID).height(); // get the height of the div in question
                  if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                      $("a[href='" + theID + "']").addClass("nav-active");
                  } else {
                      $("a[href='" + theID + "']").removeClass("nav-active");
                  }
              }

              if (windowPos + windowHeight == docHeight) {
                  if (!$(".floating-menu li:last-child a").hasClass("nav-active")) {
                      var navActiveCurrent = $(".nav-active").attr("href");
                      $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                      $(".floating-menu li:last-child a").addClass("nav-active");
                  }
              }
          });
        /**/

      }); // END OnLoad
  </script>

</div>
<?php include 'includes/footer.php'; ?>