<?php
?>
<!-- BEGIN FOOTER -->
<div id="footer">
  <!-- BEGIN FOOTER LINKS -->
  <div id="footer-links" class="cont-wrapper">
    <div class="content">
      <div class="column-footer">
        <h3>Coneix-nos</h3>
        <ul>
          <li>
            <a href="#" title="">La corporació</a>
          </li>
          <li>
            <a href="#" title="">Sala de premsa</a>
          </li>
          <li>
            <a href="#" title="">Memòries</a>
          </li>
          <li>
            <a href="#" title="">Portal Proveïdors</a>
          </li>
          <li>
            <a href="#" title="">Contractacions Proveïdors/Tercers</a>
          </li>
          <li>
            <a href="#" title="">Configurador de Tarifes</a>
          </li>
        </ul>
      </div>
      <div class="column-footer">
        <h3>Contacte</h3>
        <ul>
          <li>
            <a href="#" title="">Localitzador de punts d’atenció</a>
          </li>
          <li>
            <a href="#" title="">Telèfons d’atenció al client</a>
          </li>
          <li>
            <a href="#" title="">Formulari de contacte</a>
          </li>
          <li>
            <a href="#" title="">Formulari de reclamació</a>
          </li>
        </ul>
      </div>
      <div class="column-footer">
        <h3>Informació</h3>
        <ul>
          <li>
            <a href="#" title="">FAQ’S</a>
          </li>
          <li>
            <a href="#" title="">Política de Privacitat</a>
          </li>
          <li>
            <a href="#" title="">Política de cookies</a>
          </li>
          <li>
            <a href="#" title="">Avís legal</a>
          </li>
          <li>
            <a href="#" title="">Mapa web</a>
          </li>
        </ul>
      </div>
      <div class="column-footer last">
        <a class="button-action" href="#" title=""><span
            class="icons icon-email"></span><span>CORREU.ANDORRA.AD</span></a>
        <a class="button-action" href="#" title="">TREBALLA AMB NOSALTRES</a>
        <h3>Subscriu-te a la nostra newsletter!</h3>
        <!-- FORM INPUT -->
        <!-- FORM SUBMIT -->
        <h3>Segueix-nos a les nostres xarxes</h3>
        <ul class="social-links">
          <li>
            <a href="#" title=""><span class="icons icon-facebook"></span></a>
          </li>
          <li>
            <a href="#" title=""><span class="icons icon-twitter"></span></a>
          </li>
          <li>
            <a href="#" title=""><span class="icons icon-googleplus"></span></a>
          </li>
          <li>
            <a href="#" title=""><span class="icons icon-instagram"></span></a>
          </li>
        </ul>
        <h3>Servei d'atenció al client</h3>
        <span class="phone-callcenter">115</span>
      </div>
    </div>
  </div>
  <!-- END FOOTER LINKS -->
  <!-- BEGIN LEGAL -->
  <div id="legal" class="cont-wrapper">
    <div class="content">
      <div class="copyright">
        Copyright © Andorra Telecom 2016
      </div>
      <ul>
        <li>
          <a href="#" title="">Política de cookies</a>
        </li>
        <li>
          <a href="#" title="">Protecció de dades</a>
        </li>
        <li>
          <a href="#" title="">Avis legal</a>
        </li>
        <li>
          <a href="#" title="">Mapa web</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- END LEGAL -->
</div>
<!-- END FOOTER -->

<!-- BEGIN ALERTS CONTENT -->
<!--PLEASE LOAD  src="/js/alerts.js" SCRIPT IN HEAD-->
<div class="alert-wrapper">
  <div class="cont-wrapper">
    <div class="alert-close">
      <span class="icons icon-close"></span>
    </div>
    <div class="alert-title">
      <span class="icons icon-alerts"></span>
      Avís de interrupció del servei.
    </div>

    <div class="alert-body">
      Este es el cuerpo HTML del mensaje. Puede contener <strong>HTML</strong> por ejemplo <a
        href="www.google.com" target="_blank">un enlace</a>.
    </div>
  </div>
</div>
<!--END ALERTS CONTENT-->
<!-- BEGIN COOKIES-->
<!--You have to INJECT the content (per language) into JS Variables-->
<!--policyUrl, customMessage, linkTitle AND  dimissTitle-->
<script>
  var
    policyUrl = "http://www.google.com",
    customMessage = 'Este sitio usa cookies. Si continuas navengando aceptas su uso.',
    linkTitle = "Mas información",
    dimissTitle = "Entendido";

  window.cookieconsent.initialise({
//    "palette":{"popup":{"background":"#000"},"button":{"background":"#f1d600"}},
    "content": {
      "message": customMessage,
      "dismiss": dimissTitle,
      "link": linkTitle,
      "href": policyUrl
    }
  });</script>
<!-- END COOKIES-->
<!--<script async defer-->
<!--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYW42M0aJDKz-ayDZywdTDJAmd3Kfvq90&callback=initialize">-->
<!--</script>-->
</body>
</html>
