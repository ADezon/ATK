<?php include 'includes/header.php'; ?>

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
                <p>Gràcies per utilitzar aquest servei. En breus moments rebràs un SMS al teu mòbil amb un codi.</p>
                <p>Introdueix el codi rebut a la casella. </p>
            </div>

            <form id="traffic-validate-code-form">
                <h4>Codi d’activació </h4>
                <fieldset class="box-validate-code first">
                    <input name="validate-code" type="text" />
                    <input value="Enviar" class="validate-code-send button-pink" type="submit" />
                </fieldset>
            </form>

            <div class="title-w-icon toclose">
                <div class="icon-title close-trigger"><span class="icons icon-close-rounded"></span></div>
                <p class="text-title">Introducció codi d’activació</p>
                <p class="text-subtitle">Sed ut perspiciatis unde omnis iste natus error </p>
            </div>
        </div>
    </div>
    <!--END SPECIFIC PAGE TRAFFIC VALIDATE CODE-->

<script>
    $('.close-trigger').click(function () { $('.toclose').hide()})
</script>
<?php include 'includes/footer.php'; ?>