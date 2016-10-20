<?php include 'includes/header.php'; ?>


<!--BEGIN SPECIFIC PAGE CONTACT-->
<div class="basic-page cont-wrapper">
    <div class="content">
        <?php include 'includes/breadcrumb.php'; ?>

        <h1 class="main-title">Contacta amb nosaltres</h1>

        <div class="field-body">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
        </div>

        <form id="contact-form">
            <div class="message-error">
                <p>S’han produit alguns errors en les dades del formulari:</p>
            </div>
            <fieldset class="box-name small-fieldset first odd">
                <span class="title-field">Nom *</span>
                <input name="name" type="text" class="field-error" />
                <span class="message-error-field">Aquest camp és obligatori</span>
            </fieldset>
            <fieldset class="box-surname big-fieldset even">
                <span class="title-field">Cognoms *</span>
                <input name="surname" type="text" />
            </fieldset>
            <fieldset class="box-phone small-fieldset odd">
                <span class="title-field">Telèfon *</span>
                <input name="phone" type="text"  />
            </fieldset>
            <fieldset class="box-email big-fieldset last even">
                <span class="title-field">Correu electrònic *</span>
                <input name="email" type="text" class="field-error" />
                <span class="message-error-field">El format de correu no és vàlid</span>
            </fieldset>
            <fieldset class="box-message">
                <span class="title-field">Fes la teva consulta *</span>
                <textarea name="message"></textarea>
            </fieldset>
            <div class="info-form">
                <p>* Camps obligatoris</p>
            </div>
            <div class="captcha">
                <!-- Insert recaptcha. https://www.google.com/recaptcha/intro/index.html -->
            </div>
            <div class="checkboxCSS">
                <input type="checkbox" value="ok_conditions" id="cb_conditions" name="check" />
                <label for="cb_conditions"></label>
                <span>Accepto les <a href="#">condicions legals</a></span>
            </div>
            <input value="Enviar" class="contact-send button-pink" type="submit" />
    </div>
    <div id="more-contacts" class="cont-wrapper">
        <div class="content">
            <h1 class="main-title">També ens pots contactar així:</h1>
            <div class="more-contacts-element">
                <span class="more-contacts-icon"><span class="icons icon-mobile"></span></span>
                <span class="more-contacts-title">Truca’ns sense cost</span>
                <span class="more-contacts-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
            <div class="more-contacts-element">
                <span class="more-contacts-icon"><span class="icons icon-hands"></span></span>
                <span class="more-contacts-title">Vine'ns a veure</span>
                <span class="more-contacts-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
            <div class="more-contacts-element last">
                <span class="more-contacts-icon"><span class="icons icon-headphones"></span></span>
                <span class="more-contacts-title">Et truquem nosaltres</span>
                <span class="more-contacts-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
            </div>
        </div>
    </div>
</div>
<!--END SPECIFIC PAGE CONTACT-->


<?php include 'includes/footer.php'; ?>