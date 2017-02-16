<?php

$destiny = (gethostbyname() == 'G750JX') ? 'http://www.at.dev/comercial/' : 'http://clientes.king-eclient.com/landing/comercial/';

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
    $body .= '<div class="app-icons"><img src="' . $destiny . '/images/icons/get-in-google.png"><img src="' . $destiny . '/images/icons/down-app-store.png"></div>';
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
    $body .= '<div><a href="/"><img src="' . $destiny . '/images/products/seleccion-plus.png"></a></div>';
    $body .= '<div><a href="/"><img src="' . $destiny . '/images/products/cine-plus.png"></a></div>';
    $body .= '<div><a href="/"><img src="' . $destiny . '/images/products/deporte-plus.png"></a></div>';
    $body .= '<div><a href="/"><img src="' . $destiny . '/images/products/premium-plus.png"></a></div>';
    $body .= '<div><a href="/"><img src="' . $destiny . '/images/products/caza-pesca.png"></a></div>';
    $body .= '<div><a href="/"><img src="' . $destiny . '/images/products/c-plus-liga.png"></a></div>';
    $body .= '<div><a href="/"><img src="' . $destiny . '/images/products/c-plus-golf.png"></a></div>';
    $body .= '<div><a href="/"><img src="' . $destiny . '/images/products/c-plus-liga.png"></a></div>';
    $body .= '</div>';
    $response = array(
      'title' => $title,
      'body'  => $body
    );
  }

  elseif ($received['operation'] == 'call-me-now') {
    $body = '<div class="mini-header">Gràcies! Ens posarem en contacte amb tu el més aviat possible.</div>';

    $body .= '<div class="horaris"><i class="icons icon-timer"></i><br>Horari d\'atenció al client<br>';
    $body .= '<span class="twenty bold">Dilluns a divendres de 9h a 18h</span></div>';
    $body .= '<div class="full-centered"><a href="#" class="button-pink dimiss">Acceptar</a></div>';
    $body .= '</div>';
    $response = array(
      'message'  => $body
    );
  }

  elseif ($received['operation'] == 'action_dades_extra') {
      $title = 'Contractar dades extra';
      $body = '<div class="products-floating-box"><div class="config-box"><div class="inner-box trans">';
      $body .= '<div class="gallery-item"><div class="product-promo"><div class="big-pink bold">1 GB</div>';
      $body .= '<div class="entry-price"><span class="twenty grey-medium bold">10€</span> /mes</div></div>';
      $body .= '<div class="custom-links"><a href="#" class="button-pink">Contractar</a><a href="#" class="button-active">+ Info</a>';
      $body .= '</div></div>';
      $body .= '<div class="gallery-item"><div class="product-promo"><div class="big-pink bold">3 GB</div><div class="entry-price">';
      $body .= '<span class="twenty grey-medium bold">19€</span> /mes</div></div><div class="custom-links"><a href="#" class="button-pink">Contractar</a>';
      $body .= '<a href="#" class="button-active">+ Info</a></div></div><div class="gallery-item"><div class="product-promo">';
      $body .= '<div class="big-pink grey-medium bold">5 GB</div><div class="entry-price"><span class="twenty grey-medium bold">25€</span> /mes';
      $body .= '</div></div><div class="custom-links"><a href="#" class="button-pink">Contractar</a><a href="#" class="button-active">+ Info</a>';
      $body .= '</div></div></div></div></div>';

      $response = array(
          'title' => $title,
          'body'  => $body
      );
  }

  elseif ($received['operation'] == 'action_ampliar_forfeit') {
      $title = 'Ampliar forfet';
      $body = '<div class="products-floating-box"><div class="config-box">';
      $body .= '<div class="inner-box"><div class="custom-item one"><div class="message">Amplia a </div>';
      $body .= '<div class="big-pink bold">Forfet 29</div></div>';
      $body .= '<div class="custom-item two"><span class="treinta grey-medium bold">29€</span>&nbsp;<span class="grey-medium bold">/mes</span>';
      $body .= '</div><div class="custom-item three"><div class="actions-container"><a href="#" class="button-pink action-sign-in">Contratar</a>';
      $body .= '<a href="#" class="button-active">+ Info</a></div></div></div></div></div>';

      $response = array(
          'title' => $title,
          'body'  => $body
      );
  }

  elseif ($received['operation'] == 'cancel_operation') {
      $title = '<h2 class="alert-title">Atenció</h2>';

      $body = 'Estas segur de voler cancel·lar l\'ordre pendent?';
      $body .= '<div class="full-centered alert-two-buttons"><a href="#" class="button-active">NO</a> <a href="#" class="button-pink">SI</a></div>';

      $response = array(
          'title' => $title,
          'body'  => $body
      );
  }


  // Resturn...
  header('Content-Type: application/json');
  echo json_encode($response);

}
else {
  var_dump($received);
  print '<h2>Data processed succesfully</h2>';
};