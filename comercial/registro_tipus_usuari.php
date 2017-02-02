<?php include 'includes/header.php'; ?>

<!--IMPORTANT:: REQUIRES LOAD jquery.tooltipster.min.js BEFORE register.js -->
<!--AND   tooltipster.css-->
<!--SEE: header.php TO guess ORDER of LOADING -->

<!--BEGIN SPECIFIC PAGE REGISTER-->
<div class="basic-page cont-wrapper">
  <div class="content">

    <?php include 'includes/breadcrumb.php'; ?>

    <h1 class="main-title">Registre d’usuari</h1>


    <!-- FORM and INFO -->
      <form id="register-form">
<!--        IN CASE OF ERRORS, SHOW MESSAGE (UNCOMMENT NEXT 3 LINES -->
<!--        <div class="message-error">-->
<!--          <p>S’han produit alguns errors en les dades del formulari:</p>-->
<!--        </div>-->
        <h3>Dades d’usuari</h3>
        <fieldset class="box-number-client">
            <div class="radio-custom">
              <input type="radio" id="particular-option" name="tipus">
              <label for="particular-option">Mòbil</label>
              <div class="radio-css"></div>
            </div>
            <div class="radio-custom">
              <input type="radio" id="empresa-option" name="tipus">
              <label for="empresa-option">Empresa</label>
              <div class="radio-css"></div>
            </div>
        </fieldset>

        <div class="half-page">

        <div class="data-wrapper">
          <fieldset class="box-number-client">
            <span class="title-field">Número de client</span>
            <input name="number-invoice" type="text"/>
          </fieldset>

          <fieldset class="box-id-client">
            <span class="title-field">Nom d'usuari</span>
            <input name="nom-usuari" type="text" class=""/>
            <!--            class="field-error" make outlined border-->
            <!--            <span class="message-error-field">Aquest camp és obligatori</span>-->
          </fieldset>

          <fieldset class="box-id-client">
            <span class="title-field">Nom</span>
            <input name="nom-client" type="text" class=""/>
            <!--            class="field-error" make outlined border-->
            <!--            <span class="message-error-field">Aquest camp és obligatori</span>-->
          </fieldset>

          <fieldset class="box-id-client">
            <span class="title-field">Cognoms</span>
            <input name="cognoms-client" type="text" class=""/>
            <!--            class="field-error" make outlined border-->
            <!--            <span class="message-error-field">Aquest camp és obligatori</span>-->
          </fieldset>

          <fieldset class="box-number-client">
            <span class="title-field">Telèfon de contacte +(376)</span>
            <input name="number-client" type="text" class=""/>
            <!--            class="field-error" make outlined border-->
            <!--            <span class="message-error-field">Aquest camp és obligatori</span>-->
          </fieldset>

          <fieldset class="box-number-client">
            <span class="title-field">Adreça de correu electrònic</span>
            <input name="email-client" type="text" class=""/>
            <!--            class="field-error" make outlined border-->
            <!--            <span class="message-error-field">Aquest camp és obligatori</span>-->
          </fieldset>


          <fieldset class="box-number-client">
            <span class="title-field">Contrasenya</span>
            <input name="pass-client" type="text" class=""/>
            <!--            class="field-error" make outlined border-->
            <!--            <span class="message-error-field">Aquest camp és obligatori</span>-->
              <div class="small-item-info">
                <p>
                  Un mínim de 8 caràcters amb almenys una majúscula, una minúscula i un número.
                </p>
              <div class="strength-password">AQUI VA EL WIDGET LR de info de STRONG</div>
          </fieldset>

          <fieldset class="box-number-client">
            <span class="title-field">Repeteix contrasenya</span>
            <input name="repass-client" type="text" class=""/>
            <!--            class="field-error" make outlined border-->
            <!--            <span class="message-error-field">Aquest camp és obligatori</span>-->

          </fieldset>


          <div class="captcha">
            <img src="./images/captcha.png">
            <!-- Insert recaptcha. https://www.google.com/recaptcha/intro/index.html -->
          </div>
          <div class="checkbox-custom">
            <input type="checkbox" id="cb-conditions" name="cb-selector">
            <label for="cb-conditions">Accepto les <a href="#">condicions legals</a></label>
            <div class="checkbox-css"></div>
          </div>
          <input value="Registrar" class="register-send button-pink" type="submit"/>

        </div>

      </form>
    </div>

  </div>
</div>


<?php include 'includes/footer.php'; ?>
