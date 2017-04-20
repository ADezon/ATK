<?php include 'includes/header.php'; ?>

  <div id="main-content" class="frontpage"> <!-- ADD Class "frontpage" to the top level of the DOM in fornt page-->

    <div class="cont-wrapper">
      <div class="slider-corporate-home">

        <div class="slide-item full-size">
          <div class="img-slider">
            <img src="./uploaded_files/test-images/1900x412.jpg"/>
            <div class="difuminador">
              <div class="difuminado-left">&nbsp;</div>
              <div class="difuminado-right">&nbsp;</div>
            </div>
          </div>
          <div class="width-limiter">
            <div class="left-block">
              f4f4f4 Aqui puede ir TEXTO (como el SLIDER de la COMERCIAL). En este sentido,
              el BACKGROUND se debería poder escoger desde "BACK", ya que algunas imágenes requieren fondo transparente.
              <a href="#" title=""> Aqui va el ENLACE LEFT One</a>
            </div>
          </div>
        </div>

        <div class="slide-item preset-black">
          <div class="img-slider">
            <img src="./uploaded_files/main-home.jpg"/>
            <div class="difuminador">
              <div class="difuminado-left">&nbsp;</div>
              <div class="difuminado-right">&nbsp;</div>
            </div>
          </div>
          <div class="width-limiter">
            <div class="left-block">
              <div class="slide-title">El nou edifici d'Andorra Telecom serà <strong>un núvol de vidre</strong></div>
              <div class="slide-message">
                "The Cloud" guanya el concurs d'idees per refer l'illa d'edificis que inclou Andorra Telecom i la
                caserna de Bombers a Andorra la Vella
              </div>
              <a href="#" class="button-pink">Llegir més</a>
            </div>
          </div>
        </div>

        <div class="slide-item preset-black">
          <div class="img-slider">
            <img src="./uploaded_files/test-images/new-york-924680_960_720.jpg"/>
            <div class="difuminador difumina-black">
              <div class="difuminado-left">&nbsp;</div>
              <div class="difuminado-right">&nbsp;</div>
            </div>
          </div>

          <div class="width-limiter">
            <div class="right-block" style="background-color: white;">
              Aqui puede ir TEXTO (como el SLIDER de la COMERCIAL). Se ha escogido un fondo BLANCO.
              <a href="#" title=""> Aqui va el ENLACE RIGHT Two</a>
            </div>
          </div>
        </div>

      </div>

      <script language="JavaScript">
          $(document).ready(function () {
              var anchoVentana = $(window).width();
              $('.width-limiter').width(anchoVentana);
              var distance = (anchoVentana > 1024) ? ((anchoVentana - 1024) / 2) : 0;
              $('.left-block').css({left: distance});
              $('.right-block').css({right: distance});

              $('.img-slider').each(function () {
                  $(this).width(anchoVentana);
                  var anchoImagenReal = $('img', this).width();
                  var anchoImagen = (anchoVentana - anchoImagenReal) > 0 ? $('img', this).width() : anchoVentana;
                  // Ahora sumamos 2 pixeles para compensar pixeles fraccionarios de las divisiones
                  // Asi, también restamos 1 en la posicion y queda ok en cualquier caso
                  var positionDifuminador = (anchoVentana - anchoImagen) > 0 ? ((anchoVentana - anchoImagen) / 2) - 1 : 0;
                  var anchoFinalDifuminador = (anchoVentana - anchoImagen) > 0 ? (anchoImagen + 2) : anchoImagen;


                  $('.difuminador', this).width(anchoFinalDifuminador).css({left: positionDifuminador});
              });

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

        <div class="block-header">
          <h2 class="home-subtile">Notícies</h2> <a href="#" class="readmore">Veure totes</a>
        </div>

        <div class="news-featured">
          <a href="#">
            <img src="./uploaded_files/vgp-slide2.png">
          </a>
          <div class="date-home">22/06/2016</div>
          <div class="new-featured-title"><a href="#">Andorra Telecom llança el Forfet Roaming Espanya diari</a></div>
          <div class="excerpt">
            Les incorporacions donaran suport principalment als departaments tècnic i d'atenció al client.
            <br/><a href="#"
                    class="readmore">Llegir
              més</a>
          </div>

        </div>

        <div class="news-list">
          <div class="item-list">
            <div class="image-block"><a href="#"><img src="./uploaded_files/thumb-new-home01.png"/></a></div>
            <div class="date-home">22/06/2016</div>
            <div class="news-mini-content">
              <a href="#">Andorra Telecom entra a Másmóvil</a>
            </div>
          </div>

          <div class="item-list">
            <div class="image-block"><a href="#"><img src="./uploaded_files/thumb-new-home02.png"/></a></div>
            <div class="date-home">22/06/2016</div>
            <div class="news-mini-content">
              <a href="#">Andorra Telecom abonarà 77.400 euros als afectats per l'avaria del laksj ñldj kldj dj ñkaj ads
                ajadkja dd dj dj djs kasdj as das das dkas djas djas djas djñdas dklshfklsdf kljsdf kldjsfh kjsdhf
                klsdjhf kljsdhf kljsd h j…</a>
            </div>
          </div>

          <div class="item-list">
            <div class="date-home">22/06/2016</div>
            <a href="#">Andorra Telecom entra a Másmóvil</a>
          </div>

          <div class="item-list">
            <div class="date-home">22/06/2016</div>
            <div class="news-mini-content">
              <a href="#">Andorra Telecom abonarà 77.400 euros als afectats per l'avaria del…</a>
            </div>
          </div>

        </div>

        <div class="home-small-banner">
          <img src="https://dummyimage.com/48 0x610/b3b3b3/000000.jpg&text=+BANNER"/>
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
              <span class="two-columns-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incidi…
                <br/>
                <a
                    href="#" class="readmore">Llegir més</a></span>
            </div>
          </div>
          <div class="two-columns-element last">
            <div class="two-columns-image">
              <img src="./uploaded_files/home-activitat-03.jpg">
            </div>
            <div class="two-columns-info">
              <span class="two-columns-title">MEMÒRIA 2016</span>
              <span class="two-columns-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi…
                <br/><a
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
              <span class="two-columns-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi…
                <br/><a
                    href="#" class="readmore">Llegir més</a></span>
            </div>
          </div>
          <div class="two-columns-element last">
            <div class="two-columns-image">
              <img src="./uploaded_files/home-activitat-04.jpg">
            </div>
            <div class="two-columns-info">
              <span class="two-columns-title">Lorem Ipsum dolor sit amet</span>
              <span class="two-columns-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi…
                <br/><a
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

        <div class="content-ws righted">
          <div class="block-header">
            <h2 class="home-subtile">Els nostres patrocinis</h2> <a href="#" class="readmore">Veure totes</a>
          </div>

          <div class="slider-sponsors">
            <!-- IMAGE has to be 672x320 -->
            <div class="sponsor-slide"><a href="#" title=""><img src="./uploaded_files/andorrasax.jpg"/></a></div>
            <div class="sponsor-slide"><a href="#" title=""><img
                    src="https://dummyimage.com/1028x340/d30573/fff.jpg&text=imatge+slide"/></a></div>
            <div class="sponsor-slide"><a href="#" title=""><img
                    src="https://dummyimage.com/1028x340/000000/fff.jpg&text=imatge+slide"/></a></div>
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

        <div class="sidebar righted">
          <div class="highlighted-block-home">
            <a href="#" title=""><img
                  src="https://dummyimage.com/320x200/d6d6d6/000.jpg&text=destacat"/></a>
            <div class="highlighted-title">Lorem Ipsum dolor sit amet consectetur</div>
            <div class="highlighted-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incidi
              <br/><a href="#" class="readmore">Llegir més</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  </div>

<?php include 'includes/footer.php'; ?>