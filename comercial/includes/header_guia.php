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
  <link rel="stylesheet" type="text/css" href="./js/flexslider/flexslider.css">
  <link rel="stylesheet" type="text/css" href="./js/tooltipster/css/tooltipster.css">
  <!--END INYECTED AS REQUIRED-->

  <!--BEGIN GLOBAL-->
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./fonts/font-awesome/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="./css/at-styles.css">
  <!--BEGIN GLOBAL-->

  <!--END STYLES-->


  <!--BEGIN SCRIPTS-->
  <!--************************************-->
  <!--BEGIN GLOBAL-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


  <!--THIS IS A PRIVATE-PERSONAL API KEY. YOU MUST PROVIDE THE CORRECT ONE-->
<!--  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCYW42M0aJDKz-ayDZywdTDJAmd3Kfvq90"></script>-->
  <!--THIS IS A PRIVATE-PERSONAL API KEY. YOU MUST PROVIDE THE CORRECT ONE-->
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.1/cookieconsent.min.js"></script>
  <script src="./js/enquire.min.js"></script>
  <script src="./js/dinamiclogin.js"></script>
  <script src="./js/main.js"></script>


  <script>
    var timering = 7000;
  </script>
  <!--END GLOBAL-->

  <!--BEGIN INYECTED AS REQUIRED-->
  <script src="./js/flexslider/jquery.flexslider-min.js"></script>
  <script src="./js/init-slider.js"></script>
  <script src="./js/alerts.js"></script>
  <script src="./js/phonebook.js"></script>
  <!--END INYECTED AS REQUIRED-->

  <!--END SCRIPTS -->

  <title>Title (VAR TITLE from plattform)</title>
</head>
<body>
<!--[if lt IE 8]><p class="browser-upgrade">Estas usando un navegador <strong>desactualizado</strong>. Por favor, <a
  href="http://browsehappy.com/">actualiza tu navegador</a> para mejorar tu experiencia.</p><![endif]-->
<!-- BEGIN HEADER-->
<div id="header">
  <!-- BEGIN REGION TOPBAR -->
  <div id="topbar" class="cont-wrapper">
    <div class="content">
      <div class="left">
        <ul class="links-topbar">
          <li>
            <div class="icons icon-mobile"></div><a href="#" title="">Mobiland clic</a>
          </li>
          <li>
            <div class="icons icon-phone"></div><a href="#" title="">Guia Telefònica</a>
          </li>
          <li>
            <div class="icons icon-tv"></div> <a href="#" title="">Programació TV</a>
          </li>
          <li>
            <a href="#" title="">T'ajudem</a>
          </li>
          <li>
            <a href="#" title="">Coneix andorra telecom</a>
          </li>
        </ul>
      </div>
      <div class="right">
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
              <div class="portlet-boundary portlet-boundary_82_ portlet-static portlet-static-end portlet-borderless portlet-language"
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
          <img src="./images/logo-som.png" alt="SOM Andorra Telecom"/>
        </a>
        <ul id="nav-main">
          <li class="current">
            <a href="#" title="">Particulars</a>
          </li>
          <li>
            <a href="#" title="">Empreses</a>
          </li>
        </ul>
      </div>
      <div class="right">
        <a class="button-alerts" href="#" title="">
          <div class="icons icon-alerts"></div>
          <div class="counter-alerts">99</div>
        </a>
        <div class="button-login-client" href="#" title=""><div class="icons icon-client"></div><div>ACCÉS CLIENT</div></div>
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
          <input name="name-client" type="text" />
          <a href="#" class="message-remember">Has oblidat el nom d’usuari?</a>
        </fieldset>
        <fieldset class="box-pass-client">
          <div class="title-field">Contrasenya</div>
          <input name="pass-client" type="password"/>
          <a href="#" class="message-remember">Has oblidat la contrasenya?</a>
        </fieldset>
        <input value="Entrar" class="login-send button-pink" type="submit" />
      </form>
      <div class="goto-register">
        <div>No ets client d’Andorra Telecom?</div>
        <a href="#">Enregistra’t</a>
      </div>
    </div>
  </div>


  <!-- BEGIN REGION BUTTON ALERTS MOBILE -->
  <div id="button-alerts-mobile" class="cont-wrapper">
    <div class="content">
      <a class="button-alerts" href="#" title="">
        <div class="icons icon-alerts"></div>
        <div class="counter-alerts">99</div>
      </a>
      <div class="text-alerts-mobile">Hi ha noves alertes</div>
      <div class="icons icon-close"></div>
    </div>
  </div>
  <!-- END REGION BUTTON ALERTS MOBILE -->

  <!-- BEGIN REGION NAV MAIN MOBILE -->
  <div id="nav-main-mobile" class="cont-wrapper">
    <div class="content">
      <ul>
        <li class="current">
          <a href="#" title="">Particulars</a>
        </li>
        <li>
          <a href="#" title="">Empreses</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- END REGION NAV MAIN MOBILE -->

  <!-- BEGIN REGION NAV PRIVATE -->
  <div id="nav-private" class="cont-wrapper">
    <div class="menu content content-big">
      <ul>
        <li class="active">
          <div class="title-level-1"><div class="icons icon-mobile"></div><div>SOM Telefonia Mòbil</div>
          </div>
          <div class="container-submenu">
            <ul>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Forfets Mobiland</div>
                </a>
                <ul>
                  <li><a href="#">Forfet Mobiland 5</a></li>
                  <li><a href="#">Forfet Mobiland 15</a></li>
                  <li><a href="#">Forfet Mobiland 29</a></li>
                  <li><a href="#">Forfet Mobiland 49</a></li>
                  <li><a href="#">Forfet Mobiland 69</a></li>
                  <li><a href="#">Forfet Mobiland 99</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Forfets de dades</div>
                </a>
                <ul>
                  <li><a href="#">Forfet de dades 1 Gb</a></li>
                  <li><a href="#">Forfet de dades 3 Gb</a></li>
                  <li><a href="#">Forfet de dades 5 Gb</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Prepagament</div>
                </a>
                <ul>
                  <li><a href="#">Mobiland Clic</a></li>
                  <li><a href="#">Forfets de dades</a></li>
                  <li><a href="#">Recarrega la teva tarjeta</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Altres serveis</div>
                </a>
                <ul>
                  <li><a href="#">Qué és?</a></li>
                  <li><a href="#">Bústia de veu</a></li>
                  <li><a href="#">Restricció de trucada</a></li>
                  <li><a href="#">Restricció identificació línia</a></li>
                  <li><a href="#">Fact Paper</a></li>
                  <li><a href="#">SIM Bessona</a></li>
                  <li><a href="#">Duplicat SIM</a></li>
                </ul>
              </li>
              <li class="banners-mmenu">
                <ul>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="title-level-1"><div class="icons icon-phone"></div><div>SOM Internet i Fixa</div>
          </div>
          <div class="container-submenu">
            <ul>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Forfets Mobiland</div>
                </a>
                <ul>
                  <li><a href="#">Forfet Mobiland 5</a></li>
                  <li><a href="#">Forfet Mobiland 15</a></li>
                  <li><a href="#">Forfet Mobiland 29</a></li>
                  <li><a href="#">Forfet Mobiland 49</a></li>
                  <li><a href="#">Forfet Mobiland 69</a></li>
                  <li><a href="#">Forfet Mobiland 99</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Forfets de dades</div>
                </a>
                <ul>
                  <li><a href="#">Forfet de dades 1 Gb</a></li>
                  <li><a href="#">Forfet de dades 3 Gb</a></li>
                  <li><a href="#">Forfet de dades 5 Gb</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Prepagament</div>
                </a>
                <ul>
                  <li><a href="#">Mobiland Clic</a></li>
                  <li><a href="#">Forfets de dades</a></li>
                  <li><a href="#">Recarrega la teva tarjeta</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Altres serveis</div>
                </a>
                <ul>
                  <li><a href="#">Qué és?</a></li>
                  <li><a href="#">Bústia de veu</a></li>
                  <li><a href="#">Restricció de trucada</a></li>
                  <li><a href="#">Restricció identificació línia</a></li>
                  <li><a href="#">Fact Paper</a></li>
                  <li><a href="#">SIM Bessona</a></li>
                  <li><a href="#">Duplicat SIM</a></li>
                </ul>
              </li>
              <li class="banners-mmenu">
                <ul>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="title-level-1"><div class="icons icon-tv"></div><div>SOM Televisió</div></div>
          <div class="container-submenu">
            <ul>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Forfets Mobiland</div>
                </a>
                <ul>
                  <li><a href="#">Forfet Mobiland 5</a></li>
                  <li><a href="#">Forfet Mobiland 15</a></li>
                  <li><a href="#">Forfet Mobiland 29</a></li>
                  <li><a href="#">Forfet Mobiland 49</a></li>
                  <li><a href="#">Forfet Mobiland 69</a></li>
                  <li><a href="#">Forfet Mobiland 99</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Forfets de dades</div>
                </a>
                <ul>
                  <li><a href="#">Forfet de dades 1 Gb</a></li>
                  <li><a href="#">Forfet de dades 3 Gb</a></li>
                  <li><a href="#">Forfet de dades 5 Gb</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Prepagament</div>
                </a>
                <ul>
                  <li><a href="#">Mobiland Clic</a></li>
                  <li><a href="#">Forfets de dades</a></li>
                  <li><a href="#">Recarrega la teva tarjeta</a></li>
                </ul>
              </li>
              <li>
                <a href="#" title="">
                  <div class="menu-title">Altres serveis</div>
                </a>
                <ul>
                  <li><a href="#">Qué és?</a></li>
                  <li><a href="#">Bústia de veu</a></li>
                  <li><a href="#">Restricció de trucada</a></li>
                  <li><a href="#">Restricció identificació línia</a></li>
                  <li><a href="#">Fact Paper</a></li>
                  <li><a href="#">SIM Bessona</a></li>
                  <li><a href="#">Duplicat SIM</a></li>
                </ul>
              </li>
              <li class="banners-mmenu">
                <ul>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                  <li>
                    <a href="#" title=""><img src="https://dummyimage.com/220x85/000/fff.jpg"/></a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </li>
      </ul>
      <div class="button-client-area">
        <div class="icons icon-client"></div>
        <div>Área client</div>
      </div>
    </div>
  </div>
  <!--END REGION NAV PRIVATE-->

</div>
<!-- END HEADER-->
