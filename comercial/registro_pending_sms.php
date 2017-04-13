<?php include 'includes/header.php'; ?>

<div id="main-content">
  <!--BEGIN SPECIFIC PAGE REGISTER CONFIRM-->
  <div class="basic-page cont-wrapper">
    <div class="content">

        <?php include 'includes/breadcrumb.php'; ?>

      <h1 class="main-title">Registre d'usuari.</h1>
      <p class="text-request"><strong>Dades d'usuari</strong></p>
      <div class="field-body">
        <p>En breus moments rebràs un SMS amb un codi.<br/>
          Introdueix el codi rebut a la casella y clica "Validar"
        </p>
      </div>

      <form>
        <input type="text" id="codi" placeholder="introdueix codi" class="register-sms-insert-code">
        <input type="submit" value="Validar" class="register-sms-send-code">
      </form>

    </div>
  </div>
  <!--END SPECIFIC PAGE REGISTER CONFIRM-->
</div>
<?php include 'includes/footer.php'; ?>
