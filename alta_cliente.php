<?php include 'includes/header.php'; ?>


<!--BEGIN SPECIFIC PAGE FORMULARI ALTA AREA PRIVADA-->
<div class="basic-page cont-wrapper">
  <div class="content">

    <?php include 'includes/breadcrumb.php'; ?>

    <h1 class="main-title">Vull ser client</h1>

    <div class="field-body">
      <p>Si vols ser client d’Andorra Telecom t’ho posem fàcil. Omple el següent formulari i comença a gaudir dels serveis que tenim preparats per a tu!</p>
    </div>


    <!-- FORM and INFO -->
    <div class="half-page">
      <form id="alta-client-form">
        <div class="message-error">
          <p>S’han produit alguns errors en les dades del formulari:</p>
        </div>


        <fieldset class="box-client-name small-fieldset first">
          <span class="title-field">Nom *</span>
          <input name="number-client" type="text" class="field-error" />
          <span class="message-error-field">Aquest camp és obligatori</span>
        </fieldset>

        <fieldset class="box-client-surname big-fieldset last">
          <span class="title-field">Cognoms *</span>
          <input name="number-client" type="text" class="field-error" />
          <span class="message-error-field">Aquest camp és obligatori</span>
        </fieldset>

        <fieldset class="box-client-phone small-fieldset first">
          <span class="title-field">Telèfon *</span>
          <input name="client-email" type="text"/>
        </fieldset>

        <fieldset class="box-client-email big-fieldset last">
          <span class="title-field">Correu electrònic *</span>
          <input name="client-email" type="text"/>
        </fieldset>

        <fieldset class="box-client-type small-fieldset first">
          <span class="title-field">Tipus de client *</span>
          <select name="client-type">
            <option  value="zero" selected>Lorem ipsum</option>
            <option value="one">One</option>
            <option value="two">Two</option>
          </select>
        </fieldset>

        <div class="captcha">
          <img src="./images/captcha.png">
          <!-- Insert recaptcha. https://www.google.com/recaptcha/intro/index.html -->
        </div>
        <div class="checkboxCSS">
          <input type="checkbox" value="ok_conditions" id="cb_conditions" name="check" />
          <label for="cb_conditions"></label>
          <span>Accepto les <a href="#">condicions legals</a></span>
        </div>
        <input value="Enviar" class="alta-client-send button-pink" type="submit" />
      </form>
    </div>

  </div>
</div>



<?php include 'includes/footer.php'; ?>
