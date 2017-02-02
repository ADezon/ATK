<?php include 'includes/header.php'; ?>


  <div class="cont-wrapper">
    <div class="slider-corporate-home">

      <div class="slide-item">
        <div class="img-slider"><img src="uploaded_files/slider-home-corp.jpg"/></a></div>
        <div class="width-limiter">
          <div class="left-block">
            <div class="left-block-content">
              <a href="#" title="Andorra Go" class="button-pink">Qué es Andorra Go!</a>
            </div>

          </div>
          <div class="right-block">
            <div class="right-block-content">
              <div class="appstore">
                <a href="#" title=""><img src="./images/icons/apps/App_Store_black.png" /></a>
                <a href="#" title=""><img src="./images/icons/apps/logo-google-play-vetor.png" /></a>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="slide-item">
        <div class="img-slider"><img src="https://dummyimage.com/1900x400/f4f4f4/333.jpg"/></a></div>
        <div class="width-limiter">
          <div class="left-block"><a href="#" title=""> Aqui va el ENLACE LEFT TWO</a></div>
          <div class="right-block"><a href="#" title=""> Aqui va el ENLACE RIGHT TWO</a></div>
        </div>
      </div>

      <div class="slide-item">
        <div class="img-slider"><img src="https://dummyimage.com/1900x400/f4f4f4/333.jpg"/></a></div>
        <div class="width-limiter">
          <div class="left-block"><a href="#" title=""> Aqui va el ENLACE LEFT THREE</a></div>
          <div class="right-block"><a href="#" title=""> Aqui va el ENLACE RIGHT THREE</a></div>
        </div>
      </div>

    </div>

    <script language="JavaScript">
        $(document).ready(function () {
            $('.img-slider').width(window.innerWidth);
            $('.width-limiter').width(window.innerWidth);
            var distance = (window.innerWidth > 1024) ? ((window.innerWidth - 1024) / 2) : 0;
            $('.left-block').css({left: distance});
            $('.right-block').css({right: distance});

            $('.slider-corporate-home').slick({
                arrows: false,
                dots: true,
                focusOnSelect: true
            });
        });

    </script>
  </div>

  <!-- BEGIN SECTION 2 COLUMNS (+2 inner-responsive) -->
  <div class="cont-wrapper shortcode-container corporative with-margin-bottom">
    <div class="content">

      <!--      // Left content-->
      <div class="content-ws righted">
        <div class="block-header">
          <h2 class="home-subtile">Notícies</h2> <a href="#" class="readmore">Veure totes</a>
        </div>

        <div class="news-featured">
          <a href="#">
            <img src="./uploaded_files/vgp-slide2.png">
          </a>
          <div class="date-home">22/06/2016</div>
          <div class="new-featured-title"><a href="#">ANDORRA TELECOM INCORPORA 19 TREBALLADORS EVENTUALS DURANT
              L'ESTIU</a></div>
          <div class="excerpt">
            Les incorporacions donaran suport principalment als departaments tècnic i d'atenció al client. <a href="#"
                                                                                                              class="readmore">Llegir
              més</a>
          </div>

        </div>
        <div class="news-list">

          <div class="item-list">
            <div class="image-block"><a href="#"><img src="./uploaded_files/thumb-new-home01.png"/></a></div>
            <div class="date-home">22/06/2016</div>
            <a href="#">Andorra Telecom entra a Másmóvil</a>
          </div>

          <div class="item-list">
            <div class="image-block"><a href="#"><img src="./uploaded_files/thumb-new-home02.png"/></a></div>
            <div class="date-home">22/06/2016</div>
            <a href="#">Andorra Telecom abonarà 77.400 euros als afectats per l'avaria del…</a>
          </div>

          <div class="item-list">
            <div class="date-home">22/06/2016</div>
            <a href="#">Andorra Telecom entra a Másmóvil</a>
          </div>

          <div class="item-list">
            <div class="date-home">22/06/2016</div>
            <a href="#">Andorra Telecom abonarà 77.400 euros als afectats per l'avaria del…</a>
          </div>

        </div>
      </div>

      <!--      // Sidebar-->
      <div class="sidebar righted">

        <div class="block-header">
          <h2 class="home-subtile">Agenda</h2> <a href="#" class="readmore">Veure totes</a>
        </div>
        <div class="agenda-item featured">
          <div class="agenda-date">
            <div class="data-day">11</div>
            <div class="data-month">jul</div>
          </div>
          <div class="agenda-info">2N TORNEIG LA WORLD ROBOTIC OLYMPIAD (WRO) ANDORRA TELECOM</div>
        </div>

        <div class="agenda-item">
          <div class="agenda-date">
            <div class="data-day">12</div>
            <div class="data-month">jul</div>
          </div>
          <div class="agenda-info">7È SALÓ DEL VIDEOJOC I INTERNET ANDORRA TELECOM</div>


        </div>
        <div class="agenda-item">
          <div class="agenda-date">
            <div class="data-day">5</div>
            <div class="data-month">ago</div>
          </div>
          <div class="agenda-info">2N TORNEIG LA WORLD ROBOTIC OLYMPIAD (WRO) ANDORRA TELECOM</div>


        </div>
      </div>

    </div>
  </div>
  <!-- END SECTION 2 COLUMNS (+2 inner-responsive) -->


  <!-- BEGIN SECTION FULL-WIDTH -->
  <div class="cont-wrapper content-wide">
    <img src="./uploaded_files/banner-home-corp.jpg">
  </div>
  <!-- END SECTION FULL-WIDTH -->

  <!-- BEGIN SECTION 2 COLUMNS W/Pictures -->
  <div class="cont-wrapper shortcode-container corporative with-margin-bottom home-activity">
    <div class="content">
      <h2 class="home-subtile">La nostra activitat</h2>
      <div class="two-columns-row">
        <div class="two-columns-element">
          <div class="two-columns-image">
            <img src="./uploaded_files/home-activitat-01.jpg">
          </div>
          <div class="two-columns-info">
            <span class="two-columns-title">5È SALÓ DEL VIDEOJOC I INTERNET</span>
            <span class="two-columns-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi… <a
                  href="#" class="readmore">Llegir més</a></span>
          </div>
        </div>
        <div class="two-columns-element last">
          <div class="two-columns-image">
            <img src="./uploaded_files/home-activitat-03.jpg">
          </div>
          <div class="two-columns-info">
            <span class="two-columns-title">MEMÒRIA 2016</span>
            <span class="two-columns-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi… <a
                  href="#" class="readmore">Llegir més</a></span>
          </div>
        </div>
      </div>
      <div class="two-columns-row">
        <div class="two-columns-element">
          <div class="two-columns-image">
            <img src="./uploaded_files/home-activitat-02.jpg">
          </div>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum dolor sit amet</span>
            <span class="two-columns-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi… <a
                  href="#" class="readmore">Llegir més</a></span>
          </div>
        </div>
        <div class="two-columns-element last">
          <div class="two-columns-image">
            <img src="./uploaded_files/home-activitat-04.jpg">
          </div>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum dolor sit amet</span>
            <span class="two-columns-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi… <a
                  href="#" class="readmore">Llegir més</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END SECTION 2 COLUMNS W/Pictures -->


  <!-- BEGIN SECTION 3 COLUMNS ALARM -->
  <div class="cont-wrapper bg-grey shortcode-container corporative">
    <div class="content">
      <div class="three-columns-row">
        <div class="three-columns-element">
          <div class="highlighted">70%</div>
          <div class="highlight-info">DEL TERRITORIO AMB 3G</div>
        </div>

        <div class="three-columns-element">
          <div class="highlighted">+70.000</div>
          <div class="highlight-info">TELÈFONS FIXES</div>
        </div>

        <div class="three-columns-element last">
          <div class="highlighted">91%</div>
          <div class="highlight-info">CLIENTS ATESOS EN MENYS DE 10 MINUTS</div>
        </div>
      </div>
    </div>
  </div>
  <!-- END SECTION 3 COLUMNS ALARM -->

  <!-- BEGIN SECTION 2 COLUMNS (+2 inner-responsive) -->
  <div class="cont-wrapper shortcode-container corporative last">
    <div class="content">

      <!--      // Left content-->
      <div class="content-ws righted">
        <div class="block-header">
          <h2 class="home-subtile">Els nostres patrocinis</h2> <a href="#" class="readmore">Veure totes</a>
        </div>

        <div class="slider-sponsors">
          <!-- IMAGE has to be 672x320 -->
          <div class="sponsor-slide"><a href="#" title=""><img src="./uploaded_files/andorrasax.jpg"/></a></div>
          <div class="sponsor-slide"><a href="#" title=""><img
                  src="https://dummyimage.com/672x320/d30573/fff.jpg&text=imatge+slide"/></a></div>
          <div class="sponsor-slide"><a href="#" title=""><img
                  src="https://dummyimage.com/672x320/000000/fff.jpg&text=imatge+slide"/></a></div>
        </div>
        <script language="JavaScript">
            // Slider Sponsros
            $(document).ready(function () {
                $('.slider-sponsors').slick({
                    arrows: false,
                    dots: true,
                    focusOnSelect: true
                });
            });

        </script>
      </div>

      <!--      // Sidebar-->
      <div class="sidebar righted">
        <div class="block-header">
          <h2 class="home-subtile">Bloc</h2> <a href="#" class="readmore">Veure totes</a>
        </div>
        <div class="bloc-exceprt">
          <a href="#"><img src="./uploaded_files/vgp-slide2.png" height="194px"></a>
          <div class="date-home">22/06/2016</div>
          <div class="excerpt">LA NOSTRA CRÒNICA EN FOTOS DE L'SPARTAN RACE. AROO!</div>
          <a href="#" class="readmore">Llegir més</a>
        </div>

      </div>

    </div>
  </div>
  <!-- END SECTION 2 COLUMNS (+2 inner-responsive) -->

<?php include 'includes/footer.php'; ?>