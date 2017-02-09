<?php include 'includes/header_loged.php'; ?>

  <div id="main-content">

  <!--BEGIN SPECIFIC PAGE CONTRACTACIO -->
  <div class="cont-wrapper contract-content bg-grey with-bottom">
    <div class="content">
        <?php include 'includes/breadcrumb.php'; ?>
      <h1 class="main-title">Procés de contractació</h1>
      <div class="field-body">
        <p>Si us plau, confirma les dades per poder acabar de processar la contractació.</p>
      </div>
    </div>
  </div>
  <div class="cont-wrapper contract-content">
    <div class="content">
      <div class="content-ws">
        <div class="half-page">
          <div class="item-title">Compte</div>
          <div class="item-content">117879210101</div>
          <div class="item-title">Producte</div>
          <div class="item-content">Forfet Mobiland 15 - 123456</div>
        </div>

        <div class="half-page">
          <div class="config-box">
            <div class="inner-box product-description">
              <div class="half-page">
                <div class="item-title">Nou producte</div>
                <div class="item-content bold pink">
                  Forfeit 29
                </div>

              </div>
              <div class="half-page">
                <div class="item-title">Preu</div>
                <div class="item-content">29 €/mes</div>
              </div>
            </div>

          </div>
        </div>


        <div class="checkbox-custom">
          <input type="checkbox" id="cb-conditions" name="cb-selector">
          <label for="cb-conditions">Accepto les <a href="#">condicions del producte</a> *</label>
          <div class="checkbox-css"></div>
        </div>


        <div class="content shortcode-container">
          <div class="links-list">
            <input type="button" class="button-shortcode button-active" value="Cancelar">
            <input type="button" class="button-shortcode button-pink" value="Confirmar">
          </div>
        </div>

      </div>

    </div>
  </div>
  <!-- END SPECIFIC CONTRACTACIO -->

  </div>

<?php include 'includes/footer.php'; ?>