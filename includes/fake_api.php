<?php


$received = $_POST;

if (array_key_exists('operation', $received)) {

  if($received['operation'] == 'altamovistar') {
    $title = '<h2>Activa Movistar+</h2><img src="./images/products/movistar-plus.png" />';
    $body = '<form method="post"><label for="select-phone">Selecciona el teu telèfon</label>';
    $body .= '<select id="select-phone" name="select-phone"><option value="zero" selected>123123</option>';
    $body .= '<option value="one">123124</option><option value="two">123125</option></select>';
    $body .= '<label for="user_name">Nom d’usuari Movistar+</label><input type="text" id="user_name">';
    $body .= '<label for="user_pass">Contrasenya Movistar+</label><input type="text" id="user_pass">';
    $body .= '<!-- https://css-tricks.com/password-strength-meter/-->';
    $body .= '<meter value=".75"></meter><p id="password-strength-text">Seguretat <span class="alta">Alta</span></p>';
    $body .= '<label for="user_repass">Repetir contrasenya</label><input type="text" id="user_repass">';
    $body .= '<div class="checkbox-custom"><input type="checkbox" id="cb-conditions" name="cb-selector">';
    $body .= '<label for="cb-conditions">Accepto les <a href="#">condicions legals</a></label>';
    $body .= '<div class="checkbox-css"></div></div>';
    $body .= '<input type="button" class="pink-button activate-mplus" value="Activar"></form>';

    $response = array(
      'title' => $title,
      'body'  => $body
    );

  }
  elseif ($received['operation'] == 'altamovistar_validation') {
    $title = '<h2 class="alta-success">Enhorabona, ara ja ets Movistar+</h2>';
    $body = 'T\'has donat d\'alta amb el número 123123.';
    $body .= '<div class="download-app">';
    $body .= 'Descarrega\'t l\'App';
    $body .= '<div class="app-icons"><img src="./images/icons/get-in-google.png"><img src="./images/icons/down-app-store.png"></div>';
    $body .= '</div>';
    $body .= '<div class="full-centered"><input type="button" class="pink-button mplus-activated centered" value="Continuar"></div>';

    $response = array(
      'title' => $title,
      'body'  => $body
    );

  }

  elseif ($received['operation'] == 'altamovistar_finished') {
    $title = '<h2 class="alta-success">Finished</h2>';
    $body = 'Finished';
    $response = array(
      'title' => $title,
      'body'  => $body
    );
  }

  elseif ($received['operation'] == 'changepass') {
  $title = '<h2 class="half">Canvi de contrasenya per 123123</h2><img src="./images/products/movistar-plus.png" />';
    $body = '<form method="post">';
    $body .= '<label for="user_name">Nom d’usuari Movistar+</label><input type="text" id="user_name">';
    $body .= '<label for="user_pass">Contrasenya Movistar+</label><input type="text" id="user_pass">';
    $body .= '<!-- https://css-tricks.com/password-strength-meter/-->';
    $body .= '<meter value=".5"></meter><p id="password-strength-text">Seguretat <span class="mitja">Mitja</span></p>';
    $body .= '<label for="user_repass">Repetir contrasenya</label><input type="text" id="user_repass">';
    $body .= '<div class="checkbox-custom"><input type="checkbox" id="cb-conditions" name="cb-selector">';
    $body .= '<label for="cb-conditions">Accepto les <a href="#">condicions legals</a></label>';
    $body .= '<div class="checkbox-css"></div></div>';
    $body .= '<input type="button" class="pink-button cp-trigger" value="Actualiztzar contrasenya"></form>';

    $response = array(
      'title' => $title,
      'body'  => $body
    );
  }

  elseif ($received['operation'] == 'confirm_cp') {
    $title = '<h2 class="alta-success">Password Changed</h2>';
    $body = 'You can log-in to Andorra Telecom with your new password';
    $body .= '<div class="full-centered"><input type="button" class="pink-button close-button centered" value="Cerrar"></div>';

    $response = array(
      'title' => $title,
      'body'  => $body
    );
  }

  elseif ($received['operation'] == 'viewchannels') {
    $title = '<h2 class="half">Canals contractats per 123123</h2><img src="./images/products/movistar-plus.png" />';
    $body = '<div class="inner-box">';
    $body .= '<div><a href="/"><img src="./images/products/seleccion-plus.png"></a></div>';
    $body .= '<div><a href="/"><img src="./images/products/cine-plus.png"></a></div>';
    $body .= '<div><a href="/"><img src="./images/products/deporte-plus.png"></a></div>';
    $body .= '<div><a href="/"><img src="./images/products/premium-plus.png"></a></div>';
    $body .= '<div><a href="/"><img src="./images/products/caza-pesca.png"></a></div>';
    $body .= '<div><a href="/"><img src="./images/products/c-plus-liga.png"></a></div>';
    $body .= '<div><a href="/"><img src="./images/products/c-plus-golf.png"></a></div>';
    $body .= '<div><a href="/"><img src="./images/products/c-plus-liga.png"></a></div>';
    $body .= '</div>';
    $response = array(
      'title' => $title,
      'body'  => $body
    );
  }

  elseif ($received['operation'] == 'call-me-now') {
    $body = '<div class="mini-header">Gràcies! Ens posarem en contacte amb tu el més aviat possible.</div>';

    $body .= '<div class="horaris"><span class="icons icon-timer"></span><br>Horari d\'atenció al client<br>';
    $body .= '<span class="twenty bold">Dilluns a divendres de 9h a 18h</span></div>';
    $body .= '<div class="full-centered"><a href="#" class="button-pink dimiss">Acceptar</a></div>';
    $body .= '</div>';
    $response = array(
      'message'  => $body
    );
  }

  header('Content-Type: application/json');
  echo json_encode($response);

}
else {
  var_dump($received);
  print '<h2>Data processed succesfully</h2>';
};