<?php include 'includes/header.php'; ?>

    <!--BEGIN SPECIFIC PAGE RECOVER PASS CONFIRM-->
    <div class="basic-page cont-wrapper">
        <div class="content">

            <?php include 'includes/breadcrumb.php'; ?>

            <h1 class="main-title">Has oblidat el teu nom d’usuari?</h1>

            <div class="field-body">
                <p>Només cal que introdueixis el teu correu electrònic a continuació i t’enviarem el nom d’usuari al teu compte.</p>
            </div>

            <form id="recover-user-form">
                <h4>Correu electrònic</h4>
                <fieldset class="box-email big-fieldset first odd">
                    <input name="email" type="text" />
                </fieldset>
                <div class="captcha">
                    <img src="./images/captcha.png">
                    <!-- Insert recaptcha. https://www.google.com/recaptcha/intro/index.html -->
                </div>
                <input value="Enviar" class="recover-user-send button-pink" type="submit" />
            </form>
        </div>
    </div>
    <!--END SPECIFIC PAGE RECOVER PASS CONFIRM-->

<?php include 'includes/footer.php'; ?>