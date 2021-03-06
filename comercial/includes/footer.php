<?php
?>
<!-- BEGIN FOOTER -->
<div id="footer">
  <!-- BEGIN FOOTER LINKS -->
  <div id="footer-links" class="cont-wrapper">
    <div class="content">
      <div class="column-footer">
        <h3>Coneix Andorra Telecom</h3>
        <ul>
          <li>
            <a href="#" title="">Qui som</a>
          </li>
          <li>
            <a href="#" title="">Innovació</a>
          </li>
          <li>
            <a href="#" title="">Esdeveniments</a>
          </li>
          <li>
            <a href="#" title="">Acció social</a>
          </li>
          <li>
            <a href="#" title="">Notícies</a>
          </li>
        </ul>
      </div>
      <div class="column-footer">
        <h3>On trobar-nos</h3>
        <ul>
          <li>
            <a href="#" title="">On som</a>
          </li>
          <li>
            <a href="#" title="">Contacte</a>
          </li>
          <li>
            <a href="#" title="">Petició de Reclamació</a>
          </li>
          <li>
            <a href="#" title="">Petició de Reclamació</a>
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
            <a href="#" title="">Condicions Particulars</a>
          </li>
          <li>
            <a href="#" title="">Legislació Aplicable</a>
          </li>
        </ul>
      </div>
      <div class="column-footer last">
        <div class="separador">
          <a class="button-action" href="#" title=""><span class="icons icon-email"></span>
            <span>CORREU.ANDORRA.AD</span></a>
        </div>
        <div class="separador">
          <a class="button-action" href="#" title="">TREBALLA AMB NOSALTRES</a>
        </div>

        <!-- FORM INPUT -->
        <!-- FORM SUBMIT -->
        <h3>Segueix-nos a les nostres xarxes</h3>
        <ul class="social-links">
          <li>
            <a href="#" title=""><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#" title=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#" title=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
        </ul>
        <h3>Servei d'atenció al client</h3>
        <span class="phone-callcenter">115</span>
        <h3><a href="#">+376 301115 (des de l’estranger)</a></h3>
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
          <a href="#" title="">Política de Privacitat</a>
        </li>
        <li>
          <a href="#" title="">Política de Galetes</a>
        </li>
        <li>
          <a href="#" title="">Avís legal</a>
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
<div class="portlet">
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
</div>
<!--END ALERTS CONTENT-->
<!-- BEGIN COOKIES-->
<!--You have to INJECT the content (per language) into JS Variables-->
<!--policyUrl, customMessage, linkTitle AND  dimissTitle-->
<script>
    var
        policyUrl = "http://www.google.com",
        customMessage = 'Utilitzem galetes pròpies i de tercers per oferir-te una experiència millor en el nostre portal web. Si continues navegant-hi, considerarem que n’acceptes l’ús.',
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
