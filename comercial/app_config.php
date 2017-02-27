<?php include 'includes/header_loged.php'; ?>

  <div id="main-content">

    <!--BEGIN SPECIFIC PAGE APP CONFIG-->
    <div class="cont-wrapper config-app-text bg-grey">
      <div class="content">
          <?php include 'includes/breadcrumb.php'; ?>
        <h1 class="main-title">Configura l’app</h1>
        <div class="field-body">
          <p>A continuació, configura la teva app, adapta-la a les teves necessitats i treu-li el màxim partit. </p>
        </div>
      </div>
    </div>
    <div class="cont-wrapper config-app-text">
      <div class="content">
        <h2 class="global-subtitle">Permisos usuaris</h2>
        <div class="sidebar">
          <p class="full-centered"><span class="icons icon-client"></span><span
                class="icons icon-arrow-rightleft"></span><span class="icons icon-mobile"></span></p>
          <p class="full-centered">Desactiva les línies a les que vols treure l’accés.</p>
        </div>
        <div class="content-ws">
          <div class="permissions-list">
            <div class="permissions-list-title">
              <div class="permissions-list-number">
                <span>NÚMERO MÒBIL</span>
              </div>
              <div class="permissions-list-user">
                <span>USUARI</span>
              </div>
              <div class="permissions-list-action">

              </div>
            </div>
            <div class="permissions-list-row">
              <div class="permissions-list-number">
                <span>7877887</span>
              </div>
              <div class="permissions-list-user">
                <span>Nom Cognom Cognom</span>
              </div>
              <div class="permissions-list-action">
                <label class="checkbox-custom-switch">
                  <input type="checkbox">
                  <div class="switch"></div>
                </label>
              </div>
            </div>
            <div class="permissions-list-row">
              <div class="permissions-list-number">
                <span>6656656</span>
              </div>
              <div class="permissions-list-user">
                <span>Nom Cognom Cognom</span>
              </div>
              <div class="permissions-list-action">
                <label class="checkbox-custom-switch">
                  <input type="checkbox" checked>
                  <div class="switch"></div>
                </label>
              </div>
            </div>
            <div class="permissions-list-row">
              <div class="permissions-list-number">
                <span>Nom renombrat</span>
              </div>
              <div class="permissions-list-user">
                <span>Nom Cognom Cognom</span>
              </div>
              <div class="permissions-list-action">
                <label class="checkbox-custom-switch">
                  <input type="checkbox">
                  <div class="switch"></div>
                </label>
              </div>
            </div>
          </div>
        </div>
        <h2 class="global-subtitle">Connexions al teu descodificador</h2>
        <div class="sidebar">
          <p class="full-centered"><span class="icons icon-device"></span></p>
          <p class="full-centered">Gestiona i controla, quins dispositius estan enllaçats s al teu descodificador.</p>
        </div>
        <div class="content-ws">
          <div class="reclaim">
            <div class="icon-reclaim">
              <span class="icons icon-searchdevice"></span>
            </div>
            <div class="text-reclaim">
              <h2>Vols saber qui està enllaçat al teu descodificador? </h2>
              <a href="#" class="button-pink">CERCAR DISPOSITIUS</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--END SPECIFIC PAGE APP CONFIG-->

  </div>

<?php include 'includes/footer.php'; ?>