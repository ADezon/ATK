<?php include 'includes/header.php'; ?>

<div class="cont-wrapper work-page">
    <div class="content">
        <?php include 'includes/breadcrumb.php'; ?>
        <h1 class="main-title">Envia’ns el teu currículum</h1>
        <div class="field-body">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
        </div>
    </div>
</div>

<!-- BEGIN WORK FORM CV -->
<div class="cont-wrapper shortcode-container corporative with-margin-bottom work-page">
    <div class="content">
        <div id="main-content" class="main-page-content work-form">
            <form class="cv-form">
                <div class="message-error">
                    <p>S’han produit alguns errors en les dades del formulari:</p>
                </div>
                <div class="info-form">
                    <p>* Camps obligatoris</p>
                </div>
                <fieldset class="box-name small-field">
                    <span class="title-field">Nom *</span>
                    <input name="name" type="text" class="field-error" />
                    <span class="message-error-field">Aquest camp és obligatori</span>
                </fieldset>
                <fieldset class="box-surname big-field">
                    <span class="title-field">Cognoms *</span>
                    <input name="surname" type="text" class="field-error"  />
                    <span class="message-error-field">Aquest camp és obligatori</span>
                </fieldset>
                <fieldset class="box-phone small-field">
                    <span class="title-field">Telèfon *</span>
                    <input name="phone" type="text" class="field-error"   />
                    <span class="message-error-field">Aquest camp és obligatori</span>
                </fieldset>
                <fieldset class="box-email big-field">
                    <span class="title-field">Correu electrònic *</span>
                    <input name="email" type="text" class="field-error" />
                    <span class="message-error-field">Aquest camp és obligatori</span>
                    <span class="message-error-field">El format de correu no és vàlid</span>
                </fieldset>

              <fieldset class="box-email small-field">
                <span class="title-field">Data de naixement </span>
                <input name="email" type="text" />
              </fieldset>

              <fieldset class="box-email big-field">
                <span class="title-field">Població de residència</span>
                <input name="email" type="text" />
              </fieldset>

                <fieldset class="box-upload-cv">
                  <span class="title-field">Currículum Vitae *</span>
<!--                  <input type="file" name="file" id="upload-file" class="inputfile" name="upload-cv" accept="" />-->
<!--                  <label for="upload-file">Seleccionar arxiu</label>-->

                  <input id="uploadfake" type="text"/>
                    <label for="uploadfield">Seleccionar arxiu</label>
                    <input id="uploadfield" type="file" class="hide-field" />
                  <span class="message-error-field">Aquest camp és obligatori</span>
                </fieldset>

              <script language="JavaScript">

                  $(document).ready(function () {
                      $('#uploadfake').click(function () {
                          $('#uploadfield').click();
                      });
                      $('#uploadfield').change(function () {
                          $('#uploadfake').val($(this).val())
                      });

                  });
              </script>
                <fieldset class="box-message">
                    <span class="title-field">Comentari </span>
                    <textarea name="message"></textarea>
                </fieldset>

              <div class="captcha"> <div class="taglib-captcha"> <img alt="Text per identificar" class="captcha" id="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captcha" src="http://pd.andorratelecom.ad/ca/web/comercial/inici?p_p_id=ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin&amp;p_p_lifecycle=2&amp;p_p_state=maximized&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;t=1487073535415"> <span class="refresh lfr-portal-tooltip" data-title="Refresca CAPTCHA"> <a href="javascript:;" target="_self" class=" lfr-icon-item taglib-icon" id="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_refreshCaptcha"> <i class="icon-refresh"></i> <span class="taglib-text hide-accessible">Refresca CAPTCHA</span> </a> </span> <div class="form-group input-text-wrapper has-error"> <label class="control-label" for="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captchaText"> Verificació del text <span class="text-warning"> <svg class="lexicon-icon lexicon-icon-asterisk" role="img" title="" viewBox="0 0 512 512">
<path class="lexicon-icon-outline" d="M323.6,190l146.7-48.8L512,263.9l-149.2,47.6l93.6,125.2l-104.9,76.3l-96.1-126.4l-93.6,126.4L56.9,435.3l92.3-123.9
	L0,263.8l40.4-122.6L188.4,190v-159h135.3L323.6,190L323.6,190z"></path>
</svg> </span> <span class="hide-accessible">Obligatori</span> </label> <input class="field form-control error-field" id="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captchaText" name="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captchaText" type="text" value="" size="10" aria-required="true" aria-describedby="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captchaTextHelper" aria-invalid="true"><div class="form-validator-stack help-block" id="_ad_at_portal_login_portlet_LoginPortlet_INSTANCE_menuLogin_captchaTextHelper"><div role="alert" class="required">Aquest camp és obligatori.</div></div> </div> </div> </div>


                <div class="checkbox-custom">
                    <input type="checkbox" id="cb-conditions" name="cb-selector">
                    <label for="cb-conditions">Accepto les <a href="#">condicions legals</a></label>
                    <div class="checkbox-css"></div>
                </div>
                <input value="Enviar" class="contact-send button-pink" type="submit" />
        </div>
        </div>
    </div>
</div>
<!-- END WORK FORM CV  -->


<?php include 'includes/footer.php'; ?>


