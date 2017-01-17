<?php include 'includes/header_shortcodes.php'; ?>


    <!--BEGIN SPECIFIC PAGE PRIVATE AREA HOME-->
    <div class="basic-page cont-wrapper shortcode-container bg-grey">
        <div class="content">
            <?php include 'includes/breadcrumb.php'; ?>
            <div class="alert-invoice-unpaid">
                <p><strong>Disposes de factures pendents de pagament.</strong> Pots
                    abonar-les fàcilment de forma online.</p>
                <a class="button-pay-invoice" href="#">Veure el detall</a>
            </div>
            <h1 class="main-title">Benvinguda Alejandra</h1>
            <div class="field-body">
                <p>Aquí podràs configurar els teus productes, consultar el teu consum i tenir el detall de les teves factures, entre altres. T’ho posem més fàcil que mai perquè puguis gestionar, tu mateix, els teus productes i tot el referent a aquests, d’una manera fàcil i ràpida.</p>
            </div>
        </div>
    </div>
    <!--END SPECIFIC PAGE PRIVATE AREA HOME-->

    <!-- BEGIN SECTION TABS -->
    <div class="cont-wrapper shortcode-container">
        <div class="content">
            <h2 class="global-subtitle">Novembre, 2016</h2>
            <div class="consumption-product-left half-page">
                <h3>Els meus productes</h3>
            </div>
            <div class="consumption-product-left half-page">
                <h3>El meu consum</h3>
            </div>
            <div id="tabs" class="tabs-vertical">
                <ul>
                    <li>
                        <a href="#tabs-1">
                            <span class="icons icon-mobile"></span>
                            <span>Forfet 5</span>
                        </a>
                    </li>
                    <li>
                        <a href="#tabs-2">
                            <span class="icons icon-phone"></span>
                            <span>Lorem ipsum</span>
                        </a>
                    </li>
                    <li>
                        <a href="#tabs-3">
                            <span class="icons icon-tv"></span>
                            <span>Movistar + Familiar</span>
                        </a>
                    </li>
                        <a class="link-in-tab" href="#">Veure els meus productes</a>
                </ul>

                <div id="tabs-1">
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-call pink">&nbsp;</span>
                            <span class="product-consumption-title">Trucades (Minuts)</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <meter value=".75"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">135</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">240</span>
                                </span>
                            </li>

                        </ul>
                    </div>
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-web pink">&nbsp;</span>
                            <span class="product-consumption-title">Dades</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <meter value=".25"></meter>
                                  <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">450</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included"> 2 GB</span>
                                </span>
                            </li>
                            <li>
                                <span>En itinerància</span>
                                <meter value=".25"></meter>
                                  <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">0</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">15 GB</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-email pink">&nbsp;</span>
                            <span class="product-consumption-title">SMS</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <span class="not-included">Fuera del forfet</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">12</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">0</span>
                                </span>
                            </li>

                        </ul>
                    </div>
                    <a href="#" class="link-to-consumption">Veure el detall de consum</a>
                </div>
                <div id="tabs-2">
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-call pink">&nbsp;</span>
                            <span class="product-consumption-title">Trucades (Minuts)</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <meter value=".75"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">135</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">240</span>
                                </span>
                            </li>
                            <li>
                                <span>Internacionals</span>
                                <meter value="1"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">125</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                            </li>
                            <li>
                                <span>En itinerància</span>
                                <meter value="0"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">0</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                            </li>
                            <li>
                                <span>Fora d’itinerància</span>
                                <meter value="0"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">0</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-web pink">&nbsp;</span>
                            <span class="product-consumption-title">Dades</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <meter value=".25"></meter>
                                  <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">450</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included"> 2 GB</span>
                                </span>
                            </li>
                            <li>
                                <span>Internacionals</span>
                                <meter value=".05"></meter>
                                  <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">30</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">500 MB</span>
                                </span>
                            </li>
                            <li>
                                <span>En itinerància</span>
                                <meter value=".25"></meter>
                                  <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">0</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">15 GB</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-email pink">&nbsp;</span>
                            <span class="product-consumption-title">SMS</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <span class="not-included">Fuera del forfet</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">12</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">0</span>
                                </span>
                            </li>
                            <li>
                                <span>En itinerància</span>
                                <span class="not-included">Fuera del forfet</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">10</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">0</span>
                                </span>
                            </li>
                            <li>
                                <span>Forfet de Dades 15 GB</span>
                                <span class="not-included">Fuera del forfet</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">2</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">0</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="link-to-consumption">Veure el detall de consum</a>
                </div>
                <div id="tabs-3">
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-call pink">&nbsp;</span>
                            <span class="product-consumption-title">Trucades (Minuts)</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <meter value=".75"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">135</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">240</span>
                                </span>
                            </li>
                            <li>
                                <span>Internacionals</span>
                                <meter value="1"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">125</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                            </li>
                            <li>
                                <span>En itinerància</span>
                                <meter value="0"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">0</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                            </li>
                            <li>
                                <span>Fora d’itinerància</span>
                                <meter value="0"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">0</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-web pink">&nbsp;</span>
                            <span class="product-consumption-title">Dades</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <meter value=".25"></meter>
                                  <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">450</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included"> 2 GB</span>
                                </span>
                            </li>
                            <li>
                                <span>Internacionals</span>
                                <meter value=".05"></meter>
                                  <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">30</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">500 MB</span>
                                </span>
                            </li>
                            <li>
                                <span>En itinerància</span>
                                <meter value=".25"></meter>
                                  <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">0</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">15 GB</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-email pink">&nbsp;</span>
                            <span class="product-consumption-title">SMS</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <span class="not-included">Fuera del forfet</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">12</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">0</span>
                                </span>
                            </li>
                            <li>
                                <span>En itinerància</span>
                                <span class="not-included">Fuera del forfet</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">10</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">0</span>
                                </span>
                            </li>
                            <li>
                                <span>Forfet de Dades 15 GB</span>
                                <span class="not-included">Fuera del forfet</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">2</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">0</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="link-to-consumption">Veure el detall de consum</a>
                </div>
            </div>
            <script>
                $( function() {
                    $( "#tabs" ).tabs();
                } );

                // @TODO Mechanism to change TABS to SELECT in Mobile
                // REV => https://css-tricks.com/transformer-tabs/
                // http://jsfiddle.net/Gajotres/aX7L9/
            </script>
        </div>
    </div>
    <!-- END SECTION TABS -->

    <div class="cont-wrapper private-area">
        <div class="content">
            <div class="content-ws">
                <h2 class="global-subtitle">Estrenes</h2>

              <div class="slider">

                <div class="slider-premiere">

                  <div class="image-block">
                    <div class="main-image">
                      <a target="_blank" href="http://www.imdb.com/title/tt3783958/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2240084082&pf_rd_r=02QRM9TJ17BYPV9M5C1S&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=moviemeter&ref_=chtmvm_tt_1"><img src="./uploaded_files/cover_films/Capture-the-Flag-2015-cover-122x172.jpg" alt="" /></a>
                    </div>
                    <div class="reflection">
                      <img src="./uploaded_files/cover_films/Capture-the-Flag-2015-cover-122x172.jpg" alt="" />
                      <div class="overlay"></div>
                    </div>
                  </div>

                  <div class="image-block">
                    <div class="main-image">
                    <a target="_blank" href="http://www.imdb.com/title/tt3748528/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2240084082&pf_rd_r=02QRM9TJ17BYPV9M5C1S&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=moviemeter&ref_=chtmvm_tt_2"><img src="./uploaded_files/cover_films/m_475290_e3b4e4d4.jpg" alt="" /></a>
                    </div>
                      <div class="reflection">
                      <img src="./uploaded_files/cover_films/m_475290_e3b4e4d4.jpg" alt="" />
                      <div class="overlay"></div>
                    </div>
                  </div>

                  <div class="image-block">
                    <div class="main-image">
                    <a target="_blank" href="http://www.imdb.com/title/tt1355644/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2240084082&pf_rd_r=02QRM9TJ17BYPV9M5C1S&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=moviemeter&ref_=chtmvm_tt_3"><img src="./uploaded_files/cover_films/50a01d26-3de8-4553-adc8-370fb2217404.jpg" alt="" /></a>
                    </div>
                      <div class="reflection">
                      <img src="./uploaded_files/cover_films/50a01d26-3de8-4553-adc8-370fb2217404.jpg" alt="" />
                      <div class="overlay"></div>
                    </div>
                  </div>

                  <div class="image-block">
                    <div class="main-image">
                    <a target="_blank" href="http://www.imdb.com/title/tt2543164/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2240084082&pf_rd_r=02QRM9TJ17BYPV9M5C1S&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=moviemeter&ref_=chtmvm_tt_4"><img src="./uploaded_files/cover_films/m_1650062_0bd989ce.jpg" alt="" /></a>
                    </div>
                      <div class="reflection">
                      <img src="./uploaded_files/cover_films/m_1650062_0bd989ce.jpg" alt="" />
                      <div class="overlay"></div>
                    </div>
                  </div>

                  <div class="image-block">
                    <div class="main-image">
                    <a target="_blank" href="http://www.imdb.com/chart/moviemeter"><img src="./uploaded_files/cover_films/m_2304933_006c59e8.jpg" alt="" /></a>
                    </div>
                      <div class="reflection">
                      <img src="./uploaded_files/cover_films/m_2304933_006c59e8.jpg" alt="" />
                      <div class="overlay"></div>
                    </div>
                  </div>

                  <div class="image-block">
                    <div class="main-image">
                    <a target="_blank" href="http://www.imdb.com/chart/moviemeter"><img src="./uploaded_files/cover_films/m_810819_53ac028b.jpg" alt="" /></a>
                    </div>
                      <div class="reflection">
                      <img src="./uploaded_files/cover_films/m_810819_53ac028b.jpg" alt="" />
                      <div class="overlay"></div>
                    </div>
                  </div>

                </div>

                <script language="JavaScript">
                    $(document).ready(function () {
                        // http://kenwheeler.github.io/slick/
                        $('.slider-premiere').slick({
                            centerMode: true,
                            centerPadding: '100px',
                            slidesToShow: 3,
                            responsive: [
                                {
                                    breakpoint: 480,
                                    settings: {
                                        arrows: false,
                                        centerMode: true,
                                        centerPadding: '90px',
                                        slidesToShow: 1
                                    }
                                },
                                {
                                    breakpoint: 720,
                                    settings: {
                                        arrows: false,
                                        centerMode: true,
                                        centerPadding: '90px',
                                        slidesToShow: 3
                                    }
                                }
                            ]
                        });
                    });
                </script>
              </div>


                <h2 class="global-subtitle">Esport</h2>
                <!-- CAMBIAR POR SLIDER DE ESPORT -->

              <div class="slider">
                <!-- Slider FOR MOBILE (one item per SLIDE )-->
                <div class="slider-sports">

                  <div class="news-slide">
                    <a href="#" title="Here goes image title"><img src="https://dummyimage.com/164x110/000068/fff.jpg"/></a>
                    <div class="text-info">
                      <div class="full-centered"><a href="#" title="Here goes image title">Uefa Champions League  (16/17)</a></div>
                      <div class="full-centered">Multichampions</div>
                    </div>
                  </div>

                  <div class="news-slide">
                    <a href="#" title="Here goes image title"><img src="https://dummyimage.com/164x110/bda48b/fff.jpg"/></a>
                    <div class="text-info">
                      <div class="full-centered"><a href="#" title="Here goes image title">Uefa Champions League  (16/17)</a></div>
                      <div class="full-centered">Multichampions</div>
                    </div>
                  </div>


                  <div class="news-slide">
                    <a href="#" title="Here goes image title"><img src="https://dummyimage.com/164x110/916030/fff.jpg"/></a>
                    <div class="text-info">
                      <div class="full-centered"><a href="#" title="Here goes image title">Eurolliga de bàsquet: temporada regular (ronda 9)</a></div>
                      <div class="full-centered">Galatasaray - FC Barcelona</div>
                    </div>
                  </div>

                  <div class="news-slide">
                    <a href="#" title="Here goes image title"><img src="https://dummyimage.com/164x110/d30573/fff.jpg"/></a>
                    <div class="text-info">
                      <div class="full-centered"><a href="#" title="Here goes image title">Tour le France</a></div>
                      <div class="full-centered">Etapa 1: Toulouse - Lyon</div>
                    </div>
                  </div>

                  <div class="news-slide">
                    <a href="#" title="Here goes image title"><img src="https://dummyimage.com/164x110/93436e/fff.jpg"/></a>
                    <div class="text-info">
                      <div class="full-centered"><a href="#" title="Here goes image title">Uefa Champions League  (16/17)</a></div>
                        <div class="full-centered">Multichampions</div>
                    </div>
                  </div>

                  <div class="news-slide">
                    <a href="#" title="Here goes image title"><img src="https://dummyimage.com/164x110/619343/fff.jpg"/></a>
                    <div class="text-info">
                      <div class="full-centered"><a href="#" title="Here goes image title">Uefa Champions League  (16/17)</a></div>
                      <div class="full-centered">Multichampions</div>
                    </div>
                  </div>

                </div>

                <script language="JavaScript">
                    $(document).ready(function () {
                        // http://kenwheeler.github.io/slick/
                        $('.slider-sports').slick({
                            centerMode: true,
                            centerPadding: '110px',
                            slidesToShow: 2,
                            responsive: [
                                {
                                    breakpoint: 480,
                                    settings: {
                                        arrows: false,
                                        centerMode: true,
                                        centerPadding: '140px',
                                        slidesToShow: 1
                                    }
                                }
                            ]
                        });
                        $('[aria-hidden="true"] a').click(function (e) {
                           e.preventDefault();
                        });
                    });
                </script>
              </div>

            </div>
            <div class="sidebar">
              <div id="banner-app">
                <div class="block-title">
                  Descobreix la nova app d'Andorra Telecom.
                </div>
                <div class="block-cta full-centered">
                  Descarrega-te-la a:
                </div>

                <div class="full-centered">
                  <a href="#"><img src="./images/icons/googleplayicon.png" /></a>
                </div>
                <div class="full-centered">
                  <a href="#"><img src="./images/icons/app-store.png" /></a>
                </div>
              </div>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>