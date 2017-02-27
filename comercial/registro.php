<?php include 'includes/header.php'; ?>

<!--IMPORTANT:: REQUIRES LOAD jquery.tooltipster.min.js BEFORE register.js -->
<!--AND   tooltipster.css-->
<!--SEE: header.php TO guess ORDER of LOADING -->

<div id="main-content">

<!--BEGIN SPECIFIC PAGE REGISTER-->
<div class="basic-page cont-wrapper register-user">
  <div class="content">

    <?php include 'includes/breadcrumb.php'; ?>

    <h1 class="main-title">Registre d’usuari</h1>

    <div class="field-body w-sesenta">
      <p>Si ets clients d’Andorra Telecom i encara no estàs registrat, no saps què t’estàs perdent.
        Registra’t en menys d’un minut i gaudeix de tots els avantatges i possibilitats que t’oferim a la nostra web.</p>
    </div>

    <div class="reclaim">
      <div class="icon-reclaim">
        <i class="icons icon-add-people"></i>
      </div>
      <div class="text-reclaim">
        <h2>Encara no ets client d’Andorra Telecom?</h2>
        <a href="#">Fes-te client</a>
      </div>
    </div>


    <!-- FORM and INFO -->
    <div class="half-page">
      <form class="register-form">
<!--        IN CASE OF ERRORS, SHOW MESSAGE (UNCOMMENT NEXT 3 LINES -->
<!--        <div class="message-error">-->
<!--          <p>S’han produit alguns errors en les dades del formulari:</p>-->
<!--        </div>-->
        <h3>Dades d’usuari</h3>
        <div class="info-message">* Camps obligatoris</div>
        <fieldset class="box-number-client">
            <span class="title-field">Vull fer l’alta per:</span>
            <div class="radio-custom">
              <input type="radio" id="mobile-option" name="selector">
              <label for="mobile-option">Mòbil</label>
              <div class="radio-css"></div>
            </div>
            <div class="radio-custom">
              <input type="radio" id="invoice-option" name="selector">
              <label for="invoice-option">Codi de factura</label>
              <div class="radio-css"></div>
            </div>
        </fieldset>

        <div id="mobil-wrapper">
          <fieldset class="box-number-client">
            <span class="title-field">Número de telèfon mòbil +(376) *</span>
            <input name="number-client" type="text" class=""/>
<!--            class="field-error" make outlined border-->
<!--            <span class="message-error-field">Aquest camp és obligatori</span>-->
          </fieldset>

          <fieldset class="box-id-client">
            <span class="title-field">Passaport, DNI o permís de residència *</span>
            <input name="dni-id-client" type="text" class=""/>
            <!--            class="field-error" make outlined border-->
            <!--            <span class="message-error-field">Aquest camp és obligatori</span>-->
          </fieldset>
        </div>

        <div id="invoice-wrapper">

          <fieldset class="box-number-client">
            <span class="title-field">Número de client *</span>
            <input name="number-invoice" type="text"/>
          </fieldset>

          <fieldset class="box-number-invoice">
            <span class="title-field">Número de factura: STA-201608- *</span>
            <input name="number-invoice" type="text"/>
            <div id="tooltip-number-invoice" class="tooltip-wrapper">
              <span class="icons icon-question"></span>
            </div>
          </fieldset>
          <fieldset class="box-two-digit">
            <span class="title-field">2 últims dígits del compte bancari *</span>
            <input name="two-digit" type="text"/>
            <div id="tooltip-two-digits" class="tooltip-wrapper">
              <span class="icons icon-question"></span>
            </div>
          </fieldset>
        </div>


        <div id="register-info-wrapper">
          <div class="captcha">
            <div class="taglib-captcha"><img alt="Text per identificar" class="captcha"
                                             id="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captcha"
                                             src="http://pd.andorratelecom.ad/ca/web/comercial/inici?p_p_id=ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin&amp;p_p_lifecycle=2&amp;p_p_state=maximized&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;t=1487073535415">
              <span class="refresh lfr-portal-tooltip" data-title="Refresca CAPTCHA"> <a href="javascript:;"
                                                                                         target="_self"
                                                                                         class=" lfr-icon-item taglib-icon"
                                                                                         id="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_refreshCaptcha"> <i
                      class="icon-refresh"></i> <span
                      class="taglib-text hide-accessible">Refresca CAPTCHA</span> </a> </span>
              <div class="form-group input-text-wrapper has-error"><label class="control-label"
                                                                          for="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captchaText">
                  Verificació del text <span class="text-warning"> <svg class="lexicon-icon lexicon-icon-asterisk"
                                                                        role="img" title="" viewBox="0 0 512 512">
<path class="lexicon-icon-outline" d="M323.6,190l146.7-48.8L512,263.9l-149.2,47.6l93.6,125.2l-104.9,76.3l-96.1-126.4l-93.6,126.4L56.9,435.3l92.3-123.9
	L0,263.8l40.4-122.6L188.4,190v-159h135.3L323.6,190L323.6,190z"></path>
</svg> </span> <span class="hide-accessible">Obligatori</span> </label> <input class="field form-control error-field"
                                                                               id="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captchaText"
                                                                               name="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captchaText"
                                                                               type="text" value="" size="10"
                                                                               aria-required="true"
                                                                               aria-describedby="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captchaTextHelper"
                                                                               aria-invalid="true">
                <div class="form-validator-stack help-block"
                     id="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captchaTextHelper">
                  <div role="alert" class="required">Aquest camp és obligatori.</div>
                </div>
              </div>
            </div>
          </div>


          <div class="checkbox-custom">
            <input type="checkbox" id="cb-conditions" name="cb-selector">
            <label for="cb-conditions">Accepto les <a href="#">condicions legals</a> *</label>
            <div class="checkbox-css"></div>
          </div>
          <input value="Registrar" class="register-send button-pink" type="submit"/>
        </div>

      </form>
    </div>
    <div class="half-page">
      <div class="info-banner-vertical">
        <h2>Avantatges de registrar-te:</h2>
        <ul>
          <li>
            <div class="element-signup"><span
                class="icons icon-consumption"></span><span>Revisa el teu consum</span>
            </div>
          </li>
          <li>
            <div class="element-signup"><span
                class="icons icon-offer"></span><span>Gaudeix d’ofertes exclusives per a tu</span>
            </div>
          </li>
          <li>
            <div class="element-signup"><span
                class="icons icon-data"></span><span>Modifica les teves dades</span>
            </div>
          </li>
          <li class="last">
            <div class="element-signup"><span
                class="icons icon-alerts"></span><span>Gestiona i modifica els teus productes contractats</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

</div>

<?php include 'includes/footer.php'; ?>
