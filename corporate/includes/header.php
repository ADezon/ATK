<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!--BEGIN STYLES-->
    <!--************************************-->
    <!--BEGIN INYECTED AS REQUIRED-->
    <link rel="stylesheet" type="text/css" href="./js/slick-1.6.0/slick/slick.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--END INYECTED AS REQUIRED-->

    <!--BEGIN GLOBAL-->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./fonts/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="./css/at-corporate.styles.css">
    <!--BEGIN GLOBAL-->

    <!--END STYLES-->


    <!--BEGIN SCRIPTS-->
    <!--************************************-->
    <!--BEGIN GLOBAL-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.1/cookieconsent.min.js"></script>
    <script src="./js/enquire.min.js"></script>
    <script src="./js/main.js"></script>

    <!--END GLOBAL-->

    <!--BEGIN INYECTED AS REQUIRED-->
    <script src="./js/slick-1.6.0/slick/slick.min.js"></script>

    <!--  ONLY FOR LANDING Premsa-->
    <script src="./js/masonry.pkgd.min.js"></script>
    <!-- // Next three ONLY if sticky MENU is enabled -->
    <script src="./js/scrollto/jquery.scrollto.js"></script>
    <!--END INYECTED AS REQUIRED-->

    <!--END SCRIPTS -->

    <title>Corporative >> Title comes from BACK</title>
</head>
<body class="corporate">
<!--[if lt IE 8]><p class="browser-upgrade">Estas usando un navegador <strong>desactualizado</strong>. Por favor, <a
        href="http://browsehappy.com/">actualiza tu navegador</a> para mejorar tu experiencia.</p><![endif]-->
<!-- BEGIN HEADER-->
<div id="header">
    <!-- BEGIN REGION TOPBAR -->
    <div id="topbar" class="cont-wrapper">
        <div class="content">
            <div class="right">
                <ul class="links-topbar">
                    <li>
                        <a href="#" title="">Contacte</a>
                    </li>
                    <li>
                        <a href="#" title="">Prensa</a>
                    </li>
                    <li>
                        <a href="#" title="">Bloc</a>
                    </li>
                </ul>
                <div class="search">
                    <form>
                        <div class="icons icon-right"></div>
                        <input class="search-form" type="text" name="search" placeholder="Cercar">
                        <div class="icons icon-search"></div>
                    </form>
                </div>
                <div class="languages">
                    <ul>
                        <li>
                            <div
                                    class="portlet-boundary portlet-boundary_82_ portlet-static portlet-static-end portlet-borderless portlet-language"
                                    id="p_p_id_82_">
                                <div id="p_82"></div>
                                <div class="portlet-borderless-container" style="">
                                    <div class="portlet-body">
                                        <div class="taglib-language-list-text" lang="es-CA">Cat</div>
                                        <div id="sub-menu-lang">
                                            <a href="http://172.17.2.9:8080/es/web/guest/home"
                                               class="taglib-language-list-text last"
                                               lang="es-ES">Esp</a>
                                            <a href="http://172.17.2.9:8080/es/web/guest/home"
                                               class="taglib-language-list-text last"
                                               lang="en-EN">Eng</a>
                                            <a href="http://172.17.2.9:8080/en/web/guest/home"
                                               class="taglib-language-list-text last" lang="fr-FR">Fra</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END REGION TOPBAR -->

    <!-- BEGIN REGION HEAD -->
    <div id="head" class="cont-wrapper">
        <div class="content">
            <div class="left">
                <a class="logo" href="#" title="">
                    <img src="./images/logo_at_corp.png" alt="Andorra Telecom"/>
                </a>
            </div>
            <div class="right">
                <ul id="nav-main">
                    <li>
                        <a href="#" title="">Contacte</a>
                    </li>
                    <li>
                        <a href="#" title="">Prensa</a>
                    </li>
                    <li>
                        <a href="#" title="">Bloc</a>
                    </li>
                </ul>
                <div class="append-button-mobile">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- END REGION HEAD -->

    <div class="container-client-area">
        <div class="box-client-area">
            <form class="login-client">
                <div class="message-error">
                    <p>Missatge d'error de login</p>
                </div>
                <fieldset class="box-name-client">
                    <div class="title-field">Nom d'usuari</div>
                    <input name="name-client" type="text"/>
                    <a href="#" class="message-remember">Has oblidat el nom d’usuari?</a>
                </fieldset>
                <fieldset class="box-pass-client">
                    <div class="title-field">Contrasenya</div>
                    <input name="pass-client" type="password"/>
                    <a href="#" class="message-remember">Has oblidat la contrasenya?</a>
                </fieldset>
                <input value="Entrar" class="login-send button-pink" type="submit"/>
            </form>
            <div class="goto-register">
                <div>No ets client d’Andorra Telecom?</div>
                <a href="#">Enregistra’t</a>
            </div>
        </div>
    </div>


    <!-- BEGIN REGION NAV PRIVATE -->
    <div id="nav-private" class="cont-wrapper">
        <div class="menu content content-big">
            <ul>
                <!-- SI el item ES PADRE y tiene "SUB-menu DESPLEGABLE", se requiere esta estructura: <li> principal con un ID UNICO
                y la clase "menu-title" al texto del menu (en este caso "Quisom")-->
                <li id="pot-anar-qualsevol-id-unico" class="active">
                    <div class="title-level-1">
                        <div class="menu-title">Qui som</div>
                    </div>

                    <div class="container-submenu">
                        <ul> <!-- globall inner container -->
                            <li class="menu-block">
                                <ul>
                                    <li><a href="/web/corporativo/qui-som/xifres" title="Les xifres">
                                            <div class="menu-title">Les xifres</div>
                                        </a></li>
                                    <li><a href="/web/corporativo/qui-som/estructura-organitzativa"
                                           title="Estructura organitzativa">
                                            <div class="menu-title">Estructura organitzativa</div>
                                        </a></li>
                                    <li><a href="/web/corporativo/qui-som/qualitat-seguretat"
                                           title="Qualitat i seguretat">
                                            <div class="menu-title">Qualitat i seguretat</div>
                                        </a></li>
                                </ul>
                            </li>

                            <li class="menu-block">
                                <ul>
                                    <li><a href="/web/corporativo/qui-som/misio-visio" title="Misió i visió">
                                            <div class="menu-title">Misió i visió</div>
                                        </a></li>
                                    <li><a href="/web/corporativo/qui-som/estadistiques-telecomunicacions"
                                           title="Estadístiques de telecomunicacions">
                                            <div class="menu-title">Estadístiques de telecomunicacions</div>
                                        </a></li>
                                </ul>
                            </li>


                            <li class="menu-block">
                                <ul>
                                    <li><a href="/web/corporativo/qui-som/nostra-activitat" title="La nostra activitat">
                                            <div class="menu-title">La nostra activitat</div>
                                        </a></li>
                                    <li><a href="/web/corporativo/qui-som/legislacio" title="Legislació">
                                            <div class="menu-title">Legislació</div>
                                        </a>
                                        <ul>
                                            <li><a href="/web/corporativo/qui-som/visio-futur/espic">Espic</a></li>
                                            <li><a href="/web/corporativo/qui-som/visio-futur/masmovil">Másmóvil</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-block">
                                <ul>
                                    <li><a href="www.andorratelecom.ad/memoria" title="Memòria">
                                            <div class="menu-title">Memòria</div>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="/web/corporativo/qui-som/estructura-organitzativa/consell-administracio">Consell
                                                    d'administració</a></li>
                                            <li><a href="/web/corporativo/qui-som/estructura-organitzativa/comite-executiu">Comité
                                                    executiu</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="/web/corporativo/qui-som/visio-futur" title="Visió de futur">
                                            <div class="menu-title">Visió de futur</div>
                                        </a>
                                        <ul>
                                            <li><a href="/web/corporativo/qui-som/qualitat-seguretat/qualitat">Qualitat</a></li>
                                            <li><a href="/web/corporativo/qui-som/qualitat-seguretat/seguretat">Seguretat</a>
                                            </li>
                                        </ul>
                                    </li>


                                </ul>
                            </li>

                            <li class="banners-mmenu-corporate">
                                <div class="banner-item first"><a href="" title=""> <img src="./uploaded_files/example-banner-menu.jpg"> </a>
                                    <div class="banner-title">El nou edifici d'Andorra Telecom serà un núvol de vidre</div>
                                </div>
                                <div class="banner-item second"><a href="" title=""> <img src="./uploaded_files/example-banner-menu.jpg"> </a>
                                    <div class="banner-title">El nou edifici d'Andorra Telecom serà un núvol de vidre</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </li>

                <!-- SI el ITEM No es PADRE, no debe tener ID (ni submenu). De esta manera,
                 se pueden incorporar enlaces directos -->
                <li>
                    <div class="title-level-1">
                        <div><a href="https://www.google.es" target="_blank">INNOVACIÓ</a></div>
                    </div>
                </li>
                <li id="tercer-id-cualquiera">
                  <div class="title-level-1">
                    <div class="menu-title">Esdeveniments</div>
                  </div>

                  <div class="container-submenu">
                    <ul class="three-rows"> <!-- globall inner container -->
                      <li class="menu-block">
                        <ul>
                          <li><a href="/web/corporativo/qui-som/xifres" title="Les xifres">
                              <div class="menu-title">Les xifres</div>
                            </a></li>
                          <li><a href="/web/corporativo/qui-som/estructura-organitzativa"
                                 title="Estructura organitzativa">
                              <div class="menu-title">Estructura organitzativa</div>
                            </a></li>
                          <li><a href="/web/corporativo/qui-som/qualitat-seguretat"
                                 title="Qualitat i seguretat">
                              <div class="menu-title">Qualitat i seguretat</div>
                            </a></li>
                        </ul>
                      </li>

                      <li class="menu-block">
                        <ul>
                          <li><a href="/web/corporativo/qui-som/misio-visio" title="Misió i visió">
                              <div class="menu-title">Misió i visió</div>
                            </a></li>
                          <li><a href="/web/corporativo/qui-som/estadistiques-telecomunicacions"
                                 title="Estadístiques de telecomunicacions">
                              <div class="menu-title">Estadístiques de telecomunicacions</div>
                            </a></li>
                        </ul>
                      </li>


                      <li class="menu-block">
                        <ul>
                          <li><a href="/web/corporativo/qui-som/nostra-activitat" title="La nostra activitat">
                              <div class="menu-title">La nostra activitat</div>
                            </a></li>
                          <li><a href="/web/corporativo/qui-som/legislacio" title="Legislació">
                              <div class="menu-title">Legislació</div>
                            </a>
                            <ul>
                              <li><a href="/web/corporativo/qui-som/visio-futur/espic">Espic</a></li>
                              <li><a href="/web/corporativo/qui-som/visio-futur/masmovil">Másmóvil</a></li>
                              <li><a href="/web/corporativo/qui-som/visio-futur/masmovil">Másmóvil</a></li>
                              <li><a href="/web/corporativo/qui-som/visio-futur/masmovil">Másmóvil</a></li>
                              <li><a href="/web/corporativo/qui-som/visio-futur/masmovil">Másmóvil</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="banners-mmenu-corporate">
                        <div class="banner-item first"><a href="" title=""> <img src="./uploaded_files/example-banner-menu.jpg"> </a>
                          <div class="banner-title">El nou edifici d'Andorra Telecom serà un núvol de vidre</div>
                        </div>
                        <div class="banner-item second"><a href="" title=""> <img src="./uploaded_files/example-banner-menu.jpg"> </a>
                          <div class="banner-title">El nou edifici d'Andorra Telecom serà un núvol de vidre</div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                    <div class="title-level-1">
                        <div>ACCIÓ SOCIAL</div>
                    </div>
                </li>
                <li>
                    <div class="title-level-1">
                        <div>NOTÍCIES</div>
                    </div>
                </li>
                <li>
                    <div class="title-level-1">
                        <div>AGENDA</div>
                    </div>
                </li>
            </ul>
            <div class="button-client-area">
                <div>Client</div>
            </div>
        </div>
    </div>
    <!--END REGION NAV PRIVATE-->

</div>
<!-- END HEADER-->
