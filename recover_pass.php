<?php include 'includes/header.php'; ?>

    <!--BEGIN SPECIFIC PAGE RECOVER PASS CONFIRM-->
    <div class="basic-page cont-wrapper">
        <div class="content">

            <?php include 'includes/breadcrumb.php'; ?>

            <h1 class="main-title">Has oblidat la teva contrasenya?</h1>

            <div class="field-body">
                <p>Només cal que introdueixis el teu nom d’usuari a continuació i t’enviarem un correu electrònic amb el que podràs restablir de nou la contrasenya.</p>
            </div>

            <form id="recover-pass-form">
                <h4>Correu electrònic</h4>
                <fieldset class="box-email big-fieldset first odd">
                    <input name="email" type="text" />
                </fieldset>
                <div class="captcha">
                    <img src="./images/captcha.png">
                    <!-- Insert recaptcha. https://www.google.com/recaptcha/intro/index.html -->
                </div>
                <input value="Enviar" class="recover-pass-send button-pink" type="submit" />
            </form>
        </div>
    </div>
    <!--END SPECIFIC PAGE RECOVER PASS CONFIRM-->

<?php include 'includes/footer.php'; ?>