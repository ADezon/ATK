<?php include 'includes/header_shortcodes.php'; ?>

  <div id="main-content">

    <!-- BEGIN SPECIFIC PAGE VOD FILM DETAIL -->
    <div class="cont-wrapper">
        <div class="content">
            <?php include 'includes/breadcrumb.php'; ?>
        </div>
    </div>
    <div class="cont-wrapper">
        <div class="content">
            <div class="video-film">
                <!-- AQUI VA EL VIDEO -->
<!--              <iframe src="http://www.imdb.com/videoembed/vi1586278169" allowfullscreen width="100%"  height="540"></iframe>-->
              <!--
              <iframe src="http://www.imdb.com/video/imdb/vi1586278169/imdb/embed?autoplay=false&width=1024" allowfullscreen width="100%"  height="600"></iframe>
              This version displays less information, but is NOT fully responsive
              -->

                <!-- AQUI VA EL VIDEO END-->
                <div class="overlay-video-info">
                    <div class="video-title-film">Interstellar</div>
                    <div class="video-more-info">
                        <div class="video-film-age">16</div>
                        <div class="video-film-duration">169’</div>
                        <div class="video-film-genre">Drama</div>
                        <div class="video-film-year">2015</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cont-wrapper">
        <div class="content">
            <div class="info-detail-film">
                <div class="info-detail-img">
                    <img src="./uploaded_files/cover_films/cover_interstellar_film.jpg" alt="" />
                </div>
                <div class="more-info">
                    <div class="more-info-price-quality">HD <strong>5 €</strong> | SD <strong>4 €</strong></div>
                    <div class="more-info-available-until">Disponible fins: 01 d’abril</div>
                    <div class="more-info-description">
                        <h2>Interstellar</h2>
                        <p>Al ver que la vida en la Tierra está llegando a su fin, un grupo de exploradores dirigidos por el piloto Cooper (McConaughey) y la científica Amelia (Hathaway) emprenden una misión que puede ser la más importante de la historia de la humanidad: viajan más allá de nuestra galaxia para descubrir otra que pueda garantizar el futuro de la raza humana.</p>
                    </div>
                    <div class="separator"></div>
                    <h2>Més informació</h2>
                    <div class="more-info-director">
                        <h4 class="title-more-info">DIRECTOR</h4>
                        <span class="content-more-info">Christopher Nolan</span>
                    </div>
                    <div class="more-info-cast">
                        <h4 class="title-more-info">REPARTIMENT</h4>
                        <span class="content-more-info">Matthew McConaughey, Anne Hathaway, David Gyasi, Jessica Chastain</span>
                    </div>
                    <div class="more-info-genre">
                        <h4 class="title-more-info">GÈNERES</h4>
                        <span class="content-more-info">Suspens, Aventura, Drama</span>
                    </div>
                    <div class="more-info-audio">
                        <h4 class="title-more-info">AUDIO</h4>
                        <span class="content-more-info">Català, Castellà, Anglès</span>
                    </div>
                    <div class="more-info-subtitle">
                        <h4 class="title-more-info">SUBTÍTOLS</h4>
                        <span class="content-more-info">Català, Castellà, Anglès</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cont-wrapper bg-grey shortcode-container film-buy">
        <div class="content">
            <h2>Com comprar la pel·lícula </h2>
            <div class="three-columns-row">
                <div class="three-columns-element">
                    <span class="three-columns-icon">
                      <img src="./images/icons/movie-01.png" />
                    </span>
                    <span class="three-columns-description">Accedeix al menú VOD del teu descodificador.</span>
                </div>
                <div class="three-columns-element">
                    <span class="three-columns-icon">
                      <img src="./images/icons/movie-02.png" />
                    </span>
                    <span class="three-columns-description">Introdueix el títol de la pel·lícula al VOD.</span>
                </div>
                <div class="three-columns-element last">
                    <span class="three-columns-icon">
                      <img src="./images/icons/movie-03.png" />
                    </span>
                    <span class="three-columns-description">Selecciona la pel·lícula i completa el procés de compra.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END SPECIFIC PAGE VOD FILM DETAIL -->

  </div>

<?php include 'includes/footer.php'; ?>