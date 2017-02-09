<?php include 'includes/header.php'; ?>

  <div id="main-content">

    <!--BEGIN SPECIFIC PAGE TRAFFIC VALIDATE CODE-->
    <div class="basic-page cont-wrapper">
      <div class="content">

          <?php include 'includes/breadcrumb.php'; ?>

        <h1 class="main-title">El trànsit</h1>
        <div class="title-w-icon">
          <!--<div class="icon-title"><span class="icons icon-mobile-code"></span></div>-->
          <div class="icon-title"><span class="icons icon-mobile"></span></div>
          <p class="text-title">Introducció codi d’activació</p>
        </div>
        <div class="field-body">
          <p>A continuació, introdueix el codi d’activació que t’hem enviat al teu mòbil i prem enviar.
          </p>
        </div>

        <form id="traffic-validate-code-form">
          <h4>Codi d’activació </h4>
          <fieldset class="box-validate-code first">
            <input name="validate-code" type="text"/>
            <input value="Enviar" class="validate-code-send button-pink" type="submit"/>
          </fieldset>
        </form>

        <div class="title-w-icon toclose">
          <div class="icon-title close-trigger"><span class="icons icon-close-rounded"></span></div>
          <p class="text-title">Introducció codi d’activació</p>
          <p class="text-subtitle">El codi d’activació és erroni, torna a internar-ho!</p>
        </div>
      </div>
    </div>
    <!--END SPECIFIC PAGE TRAFFIC VALIDATE CODE-->

    <script>
        $('.close-trigger').click(function () {
            $('.toclose').hide()
        })
    </script>

  </div>

<?php include 'includes/footer.php'; ?>