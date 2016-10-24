<?php include 'includes/header.php'; ?>

<!--IMPORTANT:: REQUIRES LOAD jquery.tooltipster.min.js BEFORE register.js -->
<!--AND   tooltipster.css-->
<!--SEE: header.php TO guess ORDER of LOADING -->

<!--BEGIN SPECIFIC PAGE REGISTER-->
<div class="basic-page cont-wrapper">
  <div class="content">

    <?php include 'includes/breadcrumb.php'; ?>

    <h1 class="main-title">Registre d’usuari</h1>

    <div class="field-body">
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
        accusantium doloremque
        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
        veritatis et quasi architecto
        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
        aspernatur.</p>
    </div>

    <div class="reclaim">
      <div class="icon-reclaim">
        <span class="icons icon-client"></span>
      </div>
      <div class="text-reclaim">
        <h2>Encara no ets client D’Andorra Telecom?</h2>
        <a href="#">Fes-te client</a>
      </div>
    </div>


    <!-- FORM and INFO -->
    <div class="half-page">
      <form id="register-form">
<!--        IN CASE OF ERRORS, SHOW MESSAGE (UNCOMMENT NEXT 3 LINES -->
<!--        <div class="message-error">-->
<!--          <p>S’han produit alguns errors en les dades del formulari:</p>-->
<!--        </div>-->
        <h3>Dades d’usuari</h3>
        <fieldset class="box-number-client">

          <div class="custom-checks-container">
            <span class="title-field">Vull fer l’alta per:</span>

            <div class="custom-checks">
              <ul>
                <li>
                  <input type="radio" id="mobile-option" name="selector">
                  <label for="mobile-option">Mòbil</label>
                  <div class="check"></div>
                </li>

                <li>
                  <input type="radio" id="invoice-option" name="selector">
                  <label for="invoice-option">Codi de factura</label>
                  <div class="check"></div>
                </li>

              </ul>
            </div>
          </div>
        </fieldset>

        <div id="mobil-wrapper">
          <fieldset class="box-number-client">
            <span class="title-field">Número</span>
            <input name="number-client" type="text" class=""/>
<!--            class="field-error" make outlined border-->
<!--            <span class="message-error-field">Aquest camp és obligatori</span>-->
          </fieldset>
        </div>


        <div id="invoice-wrapper">
          <fieldset class="box-number-invoice">
            <span class="title-field">Número de factura: STA-201608-</span>
            <input name="number-invoice" type="text"/>
            <div id="tooltip-number-invoice" class="tooltip-wrapper">
              <span class="icons icon-question"></span>
            </div>
          </fieldset>
          <fieldset class="box-two-digit">
            <span class="title-field">2 últims dígits del compte bancari</span>
            <input name="two-digit" type="text"/>
            <div id="tooltip-two-digits" class="tooltip-wrapper">
              <span class="icons icon-question"></span>
            </div>
          </fieldset>
        </div>


        <div id="register-info-wrapper">
          <div class="captcha">
            <img src="./images/captcha.png">
            <!-- Insert recaptcha. https://www.google.com/recaptcha/intro/index.html -->
          </div>
          <div class="checkboxCSS">
            <input type="checkbox" value="ok_conditions" id="cb_conditions"
                   name="check"/>
            <label for="cb_conditions"></label>
            <span>Accepto les <a href="#">condicions legals</a></span>
          </div>
          <input value="Enregistrar" class="register-send button-pink" type="submit"/>
        </div>

      </form>
    </div>
    <div class="half-page">
      <div class="info-banner-vertical">
        <h2>Raons per registrar-te a l'àrea clients</h2>
        <ul>
          <li>
            <div class="element-signup"><span
                class="icons icon-consumption"></span><span>Revisa el teu consum</span>
            </div>
          </li>
          <li>
            <div class="element-signup"><span
                class="icons icon-offer"></span><span>Disfruta ofertes exclusives</span>
            </div>
          </li>
          <li>
            <div class="element-signup"><span
                class="icons icon-data"></span><span>Modifica les teves dades</span>
            </div>
          </li>
          <li class="last">
            <div class="element-signup"><span
                class="icons icon-alerts"></span><span>Crea i edita els teus alertes</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<?php include 'includes/footer.php'; ?>
