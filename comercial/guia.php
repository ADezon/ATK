<?php include 'includes/header_guia.php'; ?>

<div id="main-content">

  <!--BEGIN SPECIFIC PAGE GUIA-->
  <div class="basic-page cont-wrapper">
    <div class="content">
        <?php include 'includes/breadcrumb.php'; ?>

      <h1 class="main-title">Guia</h1>

      <div class="field-body">
        <p>Vols trobar el número de telèfon d’algú conegut o d’una empresa
          en
          concret? Amb la Guia t’ho posem fàcil.
          Troba números de particulars i d’empreses d’Andorra d’una manera
          ràpida
          i senzilla: Selecciona si es tracta d’un particular o empresa,
          el tipus d’activitat, si escau, i la parròquia a la qual
          pertany, i et
          mostrarem els resultats que responguin als teus criteris de
          cerca.</p>
      </div>
    </div>
    <!-- BEGIN SEARCH PHONEBOOK FORM-->
    <form method="post">
      <div class="phonebook-search-elements">

        <div class="rao_social">
          <div class="field-input-wrapper">
            <input class="field-input" type="text">
          </div>
          <input class="rao_img" title="Cerca" type="submit" value="">
        </div>
        <div class="linea_cerca">
          <div class="capsa_cerca">
            <a href="#" title="Cerca avançada">Cerca avançada</a>
          </div>
          <div class="cerca_avancada_section">
            <fieldset class="aui-fieldset  ">
              <div class="aui-fieldset-content ">
               <span class="aui-field aui-field-select aui-field-menu">
                  <span class="aui-field-content">
                     <label class="aui-field-label"
                            for="_laguia_WAR_laguiaportlet_INSTANCE_q3El_type">
                     Cerques un particular o una empresa?
                     </label>
                      <select name="_laguia_WAR_laguiaportlet_INSTANCE_q3El_type"
                              onchange="updateSelect(this);">
                              <option value=""> Qualsevol </option>
                              <option value="empresa"> Empresa </option>
                              <option value="particular"> Particular </option>
                           </select>
                  </span>
               </span><span class="aui-field aui-field-select aui-field-menu">
                  <span class="aui-field-content">
                      <label class="aui-field-label" for="activityId">Tipus activitat</label>
                           <select id="combobox" name="activityId"
                                   id="activityId">
                            <option value=" ">Qualsevol </option>
                              <option value="AB">Academies (all)</option>
                              <option value="AC">Academies Escoles</option>
                              <option value="AE">Academies Idiomes</option>
                              <option value="AG">Academies Hosteleria</option>
                           </select>

                  </span>
               </span>
                <span class="aui-field aui-field-select aui-field-menu">
                  <span class="aui-field-content">
                     <label class="aui-field-label"
                            for="_laguia_WAR_laguiaportlet_INSTANCE_q3El_parroquiaId">
                     En quina parròquia?
                     </label>
                      <select id="_laguia_WAR_laguiaportlet_INSTANCE_q3El_parroquiaId"
                              name="_laguia_WAR_laguiaportlet_INSTANCE_q3El_parroquiaId">
                              <option value=""> Qualsevol </option>
                              <option value="1"> Canillo </option>
                              <option value="3"> Ordino </option>
                              <option value="2"> Encamp </option>
                              <option value="4"> La Massana </option>
                              <option value="5"> Andorra la Vella </option>
                              <option value="7"> Escaldes-Engordany </option>
                              <option value="6"> Sant Julià de Lòria </option>
                           </select>

                  </span>
               </span>
                <span class="aui-field aui-field-select aui-field-menu">
                  <span class="aui-field-content">
                     <label class="aui-field-label"
                            for="_laguia_WAR_laguiaportlet_INSTANCE_q3El_like">
                     Cerca els resultats amb
                     </label>
                           <select id="_laguia_WAR_laguiaportlet_INSTANCE_q3El_like"
                                   name="_laguia_WAR_laguiaportlet_INSTANCE_q3El_like">
                              <option value="ALL_WORDS"> Totes </option>
                              <option value="ANY_WORDS"> Alguna </option>
                              <option value="BY_SENTENCE"> Exactament </option>
                           </select>
                  </span>
               </span>
              </div>
            </fieldset>
            <div class="netejar_form"
                 id="_laguia_WAR_laguiaportlet_INSTANCE_q3El__netejar_section">
              <a
                  href="javascript:_laguia_WAR_laguiaportlet_INSTANCE_q3El_clearForm()"
                  title="Netejar formulari">Netejar formulari</a>
            </div>
          </div>
        </div>
      </div>
      <div class="search-criteria-results">
        <!--         <div class="caixa_criteri">-->
        <!--             <h2>Criteris de cerca</h2>-->
        <!--             <div class="criteria_row">-->
        <!--                 <div class="caixa_criteri_label"> Nom o raó social:-->
        <!--                 </div>-->
        <!--                 <div class="caixa_criteri_value">a</div>-->
        <!--             </div>-->
        <!--             <div class="criteria_row">-->
        <!--                 <div class="caixa_criteri_label">Particular o empresa: </div>-->
        <!--                 <div class="caixa_criteri_value"> Qualsevol-->
        <!--                 </div>-->
        <!--             </div>-->
        <!--             <div class="criteria_row">-->
        <!--                 <div class="caixa_criteri_label">Tipus activitat:</div>-->
        <!--                 <div class="caixa_criteri_value"> Qualsevol-->
        <!--                 </div>-->
        <!--             </div>-->
        <!--             <div class="criteria_row">-->
        <!--                 <div class="caixa_criteri_label">En quina parròquia?:</div>-->
        <!--                 <div class="caixa_criteri_value"> Qualsevol-->
        <!--                 </div>-->
        <!--             </div>-->
        <!--             <div class="criteria_row">-->
        <!--                 <div class="caixa_criteri_label">Resultats amb:</div>-->
        <!--                 <div class="caixa_criteri_value"> Totes les paraules-->
        <!--                 </div>-->
        <!--             </div>-->
        <!--         </div>-->
        <div class="show_results_section">
          <div class="show_results_section_container ">
            <div class="results-grid">
              <div class="total-results">1839 resultats</div>
              <div class="pager-phonebook">Mostrant resultats 1-20
              </div>

              <div class="table-search-iterator">
                <div class="table-search-iterator-body">
                  <div class="results-header">
                    <div class="results-header-content">
                                     <span class="result-column-name">
                                         <a href="#"> Nom o raó social</a>
                                     </span>
                    </div>
                    <div class="results-header-content">
                                     <span class="result-column-name">
                                         <a href="#"> Particular/Empresa</a>
                                     </span>
                    </div>
                    <div class="results-header-content">
                                     <span class="result-column-name">
                                         <a href="#"> Activitat</a>
                                     </span>
                    </div>
                    <div class="results-header-content">
                                     <span class="result-column-name">
                                         Número Servei
                                     </span>
                    </div>
                  </div>

                  <div id="accordion">

                    <div class="results-row">
                      <div class="results-row-content">
                        <div class="guia-caixa-row-container">
                          <div class="guia-caixa-row">
                            <div
                                class="la-guia-table-cell la-guia-table-cell-first">
                              A-TRACCIO-A
                            </div>
                            <div class="la-guia-table-cell">
                              Empresa
                            </div>
                            <div class="la-guia-table-cell">
                              disseny i creacio
                              grafica
                            </div>
                            <div
                                class="la-guia-table-cell la-guia-table-cell-last">
                              867588
                            </div>
                          </div>
                        </div>
                        <div class="companyDetail">
                          <div class="companyInfo">
                            <div class="companyMap">
                              <div class="mapContainer"></div>
                              <input class="mapContainerAddress"
                                     type="hidden"
                                     value="Carrer Ciutat de Valls 16 , Andorra la Vella,  Andorra la Vella"
                                     name="address_0_0">
                            </div>
                            <div class="right">
                              <div class="companyAddressSendOptions">
                                <div class="companyAddress">
                                  <p class="cAddress">
                                    <span><strong>C/ Lorem Ipsum dolor sit n. 22, 4º2ª</strong></span>
                                    <span>Edifici Lorem Ipsum</span>
                                    <span>CP :AD600</span>
                                    <span>Andorra la Vella</span>
                                  </p>
                                </div>
                                <ul class="companySendOptions ">
                                  <li class="sendSms">
                                    Enviar SMS
                                  </li>
                                  <li class="sendEmail">
                                    Enviar Email
                                  </li>
                                </ul>
                              </div>
                              <ul class="companyContact">
                                <li class="landPhone">
                                  867588
                                </li>
                                <li class="fax">
                                  867580
                                </li>
                                <li class="mobilePhone">
                                  123456789
                                </li>
                                <li class="email">
                                  lore@ipsum.com
                                </li>
                                <li class="web">
                                  loreipsum.com
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!-- START SEND SMS AND Emails-->
                        <div class="sms-sender">
                          <div class="destination-message"></div>

                          <fieldset class="sendOption">
                            <span class="title-field">Número Mòbil (+376)</span>
                            <input type="text"
                                   class="mobilenumber"
                                   name="numeroMovil"
                                   size="13"
                                   title="Número Mòbil">

                            <div class="divContainerRowLaGuia">
                              <div class="taglib-guia-captcha">

                              <span
                                  class="title-field">Imatge de seguretat</span>
                                <img alt="captcha"
                                     class="captcha"
                                     src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_SMS&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aACADEMIA+MASEGOSA_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=2&amp;t=1478419731612 ">

                                <div class="ctrl-holder-text-verification-link">
                                  En cas de no
                                  reconeixer les
                                  lletres de la
                                  imatge pots <a
                                      class=""
                                      href="#">
                                    recarregar-la </a>
                                </div>
                                <input name="uinm_captchaText"
                                       size="21"
                                       type="text"
                                       value=""
                                       title="Text captcha">
                              </div>
                            </div>
                            <input type="button"
                                   value="Enviar SMS"
                                   class="button-pink sendsmstrigger">
                          </fieldset>
                        </div>

                        <div class="email-sender">
                          <div class="destination-message"></div>

                          <fieldset class="sendOption">
                            <span class="title-field">Email</span>
                            <input type="text"
                                   name="email"
                                   size="13"
                                   title="Email">

                            <span class="title-field">Imatge de seguretat</span>
                            <img alt="captcha"
                                 class="captcha"
                                 src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_MAIL&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aLES+CLASSES+MARISOL+NAVARRO_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=3&amp;t=1478495528990 ">
                            <div
                                class="ctrl-holder-text-verification-link">
                              En cas de no reconeixer
                              les lletres
                              de la imatge pots <a
                                  href="#">
                                recarregar-la </a>
                            </div>
                            <input name="ocey_captchaText"
                                   size="21" type="text"
                                   value=""
                                   title="Text captcha">
                            <input class="button-pink sendemailtrigger"
                                   type="button"
                                   value="Enviar Email">
                          </fieldset>
                        </div>
                        <!-- END SMS AND Emails-->

                      </div>
                    </div>

                    <div class="results-row">
                      <div class="results-row-content">
                        <div class="guia-caixa-row-container">
                          <div class="guia-caixa-row">
                            <div
                                class="la-guia-table-cell la-guia-table-cell-first">
                              A-TRACCIO-B
                            </div>
                            <div class="la-guia-table-cell">
                              Empresa
                            </div>
                            <div class="la-guia-table-cell">
                              disseny i creacio
                              grafica
                            </div>
                            <div
                                class="la-guia-table-cell la-guia-table-cell-last">
                              867588
                            </div>
                          </div>
                        </div>
                        <div class="companyDetail">
                          <div class="companyInfo">
                            <div class="companyMap">
                              <div class="mapContainer"></div>
                              <input class="mapContainerAddress"
                                     type="hidden"
                                     value="Carrer Ciutat de Valls 16 , Andorra la Vella,  Andorra la Vella"
                                     name="address_0_0">
                            </div>
                            <div class="right">
                              <div class="companyAddressSendOptions">
                                <div class="companyAddress">
                                  <p class="cAddress">
                                    <span><strong>C/ Lorem Ipsum dolor sit n. 22, 4º2ª</strong></span>
                                    <span>Edifici Lorem Ipsum</span>
                                    <span>CP :AD600</span>
                                    <span>Andorra la Vella</span>
                                  </p>
                                </div>
                                <ul class="companySendOptions ">
                                  <li class="sendSms">
                                    Enviar SMS
                                  </li>
                                  <li class="sendEmail">
                                    Enviar Email
                                  </li>
                                </ul>
                              </div>
                              <ul class="companyContact">
                                <li class="landPhone">
                                  867588
                                </li>
                                <li class="fax">
                                  867580
                                </li>
                                <li class="mobilePhone">
                                  123456789
                                </li>
                                <li class="email">
                                  lore@ipsum.com
                                </li>
                                <li class="web">
                                  loreipsum.com
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!-- START SEND SMS AND Emails-->
                        <div class="sms-sender">
                          <div class="destination-message"></div>

                          <fieldset class="sendOption">
                            <span class="title-field">Número Mòbil (+376)</span>
                            <input type="text"
                                   class="mobilenumber"
                                   name="numeroMovil"
                                   size="13"
                                   title="Número Mòbil">

                            <div class="divContainerRowLaGuia">
                              <div class="taglib-guia-captcha">

                              <span
                                  class="title-field">Imatge de seguretat</span>
                                <img alt="captcha"
                                     class="captcha"
                                     src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_SMS&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aACADEMIA+MASEGOSA_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=2&amp;t=1478419731612 ">

                                <div class="ctrl-holder-text-verification-link">
                                  En cas de no
                                  reconeixer les
                                  lletres de la
                                  imatge pots <a
                                      class=""
                                      href="#">
                                    recarregar-la </a>
                                </div>
                                <input name="uinm_captchaText"
                                       size="21"
                                       type="text"
                                       value=""
                                       title="Text captcha">
                              </div>
                            </div>
                            <input type="button"
                                   value="Enviar SMS"
                                   class="button-pink sendsmstrigger">
                          </fieldset>
                        </div>

                        <div class="email-sender">
                          <div class="destination-message"></div>

                          <fieldset class="sendOption">
                            <span class="title-field">Email</span>
                            <input type="text"
                                   name="email"
                                   size="13"
                                   title="Email">

                            <span class="title-field">Imatge de seguretat</span>
                            <img alt="captcha"
                                 class="captcha"
                                 src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_MAIL&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aLES+CLASSES+MARISOL+NAVARRO_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=3&amp;t=1478495528990 ">
                            <div
                                class="ctrl-holder-text-verification-link">
                              En cas de no reconeixer
                              les lletres
                              de la imatge pots <a
                                  href="#">
                                recarregar-la </a>
                            </div>
                            <input name="ocey_captchaText"
                                   size="21" type="text"
                                   value=""
                                   title="Text captcha">
                            <input class="button-pink sendemailtrigger"
                                   type="button"
                                   value="Enviar Email">
                          </fieldset>
                        </div>
                        <!-- END SMS AND Emails-->
                      </div>
                    </div>
                    <div class="results-row">
                      <div class="results-row-content">
                        <div class="guia-caixa-row-container">
                          <div class="guia-caixa-row">
                            <div
                                class="la-guia-table-cell la-guia-table-cell-first">
                              A-TRACCIO-C
                            </div>
                            <div class="la-guia-table-cell">
                              Empresa
                            </div>
                            <div class="la-guia-table-cell">
                              disseny i creacio
                              grafica
                            </div>
                            <div
                                class="la-guia-table-cell la-guia-table-cell-last">
                              867588
                            </div>
                          </div>
                        </div>
                        <div class="companyDetail">
                          <div class="companyInfo">
                            <div class="companyMap">
                              <div class="mapContainer"></div>
                              <input class="mapContainerAddress"
                                     type="hidden"
                                     value="Carrer Ciutat de Valls 16 , Andorra la Vella,  Andorra la Vella"
                                     name="address_0_0">
                            </div>
                            <div class="right">
                              <div class="companyAddressSendOptions">
                                <div class="companyAddress">
                                  <p class="cAddress">
                                    <span><strong>C/ Lorem Ipsum dolor sit n. 22, 4º2ª</strong></span>
                                    <span>Edifici Lorem Ipsum</span>
                                    <span>CP :AD600</span>
                                    <span>Andorra la Vella</span>
                                  </p>
                                </div>
                                <ul class="companySendOptions ">
                                  <li class="sendSms">
                                    Enviar SMS
                                  </li>
                                  <li class="sendEmail">
                                    Enviar Email
                                  </li>
                                </ul>
                              </div>
                              <ul class="companyContact">
                                <li class="landPhone">
                                  867588
                                </li>
                                <li class="fax">
                                  867580
                                </li>
                                <li class="mobilePhone">
                                  123456789
                                </li>
                                <li class="email">
                                  lore@ipsum.com
                                </li>
                                <li class="web">
                                  loreipsum.com
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!-- START SEND SMS AND Emails-->
                        <div class="sms-sender">
                          <div class="destination-message"></div>

                          <fieldset class="sendOption">
                            <span class="title-field">Número Mòbil (+376)</span>
                            <input type="text"
                                   class="mobilenumber"
                                   name="numeroMovil"
                                   size="13"
                                   title="Número Mòbil">

                            <div class="divContainerRowLaGuia">
                              <div class="taglib-guia-captcha">

                              <span
                                  class="title-field">Imatge de seguretat</span>
                                <img alt="captcha"
                                     class="captcha"
                                     src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_SMS&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aACADEMIA+MASEGOSA_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=2&amp;t=1478419731612 ">

                                <div class="ctrl-holder-text-verification-link">
                                  En cas de no
                                  reconeixer les
                                  lletres de la
                                  imatge pots <a
                                      class=""
                                      href="#">
                                    recarregar-la </a>
                                </div>
                                <input name="uinm_captchaText"
                                       size="21"
                                       type="text"
                                       value=""
                                       title="Text captcha">
                              </div>
                            </div>
                            <input type="button"
                                   value="Enviar SMS"
                                   class="button-pink sendsmstrigger">
                          </fieldset>
                        </div>

                        <div class="email-sender">
                          <div class="destination-message"></div>

                          <fieldset class="sendOption">
                            <span class="title-field">Email</span>
                            <input type="text"
                                   name="email"
                                   size="13"
                                   title="Email">

                            <span class="title-field">Imatge de seguretat</span>
                            <img alt="captcha"
                                 class="captcha"
                                 src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_MAIL&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aLES+CLASSES+MARISOL+NAVARRO_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=3&amp;t=1478495528990 ">
                            <div
                                class="ctrl-holder-text-verification-link">
                              En cas de no reconeixer
                              les lletres
                              de la imatge pots <a
                                  href="#">
                                recarregar-la </a>
                            </div>
                            <input name="ocey_captchaText"
                                   size="21" type="text"
                                   value=""
                                   title="Text captcha">
                            <input class="button-pink sendemailtrigger"
                                   type="button"
                                   value="Enviar Email">
                          </fieldset>
                        </div>
                        <!-- END SMS AND Emails-->
                      </div>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form><!-- END SEARCH PHONEBOOK FORM-->
  </div>
  <!--END SPECIFIC PAGE GUIA-->

  <!--<script>-->
  <!--TEST de Autocomplete-->
  <!--   var availableTags = [-->
  <!--      "ActionScript",-->
  <!--      "AppleScript",-->
  <!--      "Asp",-->
  <!--      "BASIC",-->
  <!--      "C",-->
  <!--      "C++",-->
  <!--      "Clojure",-->
  <!--      "COBOL",-->
  <!--      "ColdFusion",-->
  <!--      "Erlang",-->
  <!--      "Fortran",-->
  <!--      "Groovy",-->
  <!--      "Haskell",-->
  <!--      "Java",-->
  <!--      "JavaScript",-->
  <!--      "Lisp",-->
  <!--      "Perl",-->
  <!--      "PHP",-->
  <!--      "Python",-->
  <!--      "Ruby",-->
  <!--      "Scala",-->
  <!--      "Scheme"-->
  <!--   ];-->
  <!--   $( "#auto-complete-data" ).autocomplete({-->
  <!--      source: availableTags-->
  <!--   });-->
  <!--</script>-->

  <div class="floating-sms-emails">

  </div>

</div>

<?php include 'includes/footer.php'; ?>
