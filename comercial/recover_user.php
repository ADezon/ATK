<?php include 'includes/header.php'; ?>

  <!--BEGIN SPECIFIC PAGE RECOVER PASS CONFIRM-->
  <div class="basic-page cont-wrapper">
    <div class="content">

        <?php include 'includes/breadcrumb.php'; ?>

      <h1 class="main-title">Has oblidat el teu nom d’usuari?</h1>

      <div class="field-body">
        <p>Només cal que introdueixis el teu correu electrònic a continuació i t’enviarem el nom d’usuari al teu
          compte.</p>
      </div>

      <form class="recover-user-form">
        <h4>Correu electrònic</h4>
        <fieldset class="box-email first odd">
          <input name="email" type="text"/>
        </fieldset>
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
        <input value="Enviar" class="recover-user-send button-pink" type="submit"/>
      </form>
    </div>
  </div>
  <!--END SPECIFIC PAGE RECOVER PASS CONFIRM-->

<?php include 'includes/footer.php'; ?>