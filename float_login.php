<?php include 'includes/header.php'; ?>

<!--IMPORTANT:: REQUIRES LOAD src="/js/dinamiclogin.js" SCRIPT IN HEAD-->

<!--BEGIN SPECIFIC PAGE FLOAT LOGUIN EXAMPLE-->
<div class="basic-page cont-wrapper">
  <div class="content">

    <?php include 'includes/breadcrumb.php'; ?>

    <h1 class="main-title">Example de Registre d’usuari flotant</h1>

    <div class="field-body">
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
      <p>
        If you click <span class="dinamic-login" data-destination="http://www.one-AT-product.com">HERE</span> a pop up wil display inviting you to login
      </p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
      <p>
        If you click <span class="dinamic-login" data-destination="http://www.two-AT-product.com">HERE</span> a pop up wil display inviting you to login
      </p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
      <p>
        If you click <span class="dinamic-login" data-destination="http://www.another-AT-product.com">HERE</span> a pop up wil display inviting you to login
      </p>
    </div>


  </div>
</div>
<!--END SPECIFIC PAGE FLOAT LOGUIN EXAMPLE-->


<!-- BEGIN POP-UP LOGUIN CONTENT -->

<div class="floating-login-wrapper">
  <div class="cont-wrapper">
    <div class="login-close">
      <span class="icons icon-close"></span>
    </div>
    <div class="login-title">
      <span class="icons icon-client"></span>
      Accedeix a l’Àrea Client
    </div>

    <div class="login-body">

      <div class="box-client-area">
        <form class="login-client">
          <div class="message-error">
            <p>Missatge d'error de login</p>
          </div>
          <fieldset class="box-name-client">
            <span class="title-field">Nom d'usuari</span>
            <input name="name-client" type="text">
            <a href="#" class="message-remember">Has oblidat el nom d’usuari?</a>
          </fieldset>
          <fieldset class="box-pass-client">
            <span class="title-field">Contrasenya</span>
            <input name="pass-client" type="password">
            <a href="#" class="message-remember">Has oblidat la contrasenya?</a>
          </fieldset>
          <input id="redirection" type="hidden" value="" name="redirection">
          <input value="Entrar" class="login-send button-pink" type="submit">
        </form>
        <div class="goto-register">
          <span>No ets client d’Andorra Telecom?</span>
          <a href="#">Enregistra’t</a>
        </div>
      </div>

    </div>
  </div>

</div>
<!--IMPORTANT:: REQUIRES LOAD src="/js/dinamiclogin.js" SCRIPT IN HEAD-->
<!--END POP-UP LOGUIN CONTENT-->


<?php include 'includes/footer.php'; ?>
