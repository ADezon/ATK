<?php include 'includes/header.php'; ?>

    <!--BEGIN SPECIFIC PAGE TRAFFIC REQUEST CODE-->
    <div class="basic-page cont-wrapper">
        <div class="content">

            <?php include 'includes/breadcrumb.php'; ?>

            <h1 class="main-title">El trànsit</h1>
            <h2 class="main-subtitle">Vols rebre al teu mòbil o configurar les notificacions sobre l’estat del trànsit?</h2>
            <div class="field-body">
                <p>Facilita’ns el teu número i gaudiràs d’un <strong>servei d’alertes completament gratuït</strong>.</p>
            </div>

            <form id="traffic-request-code-form">
                <h4>Número mòbil</h4>
                <fieldset class="box-number-mobile first">
                    <span>+376</span>
                    <input name="number-mobile" type="text" />
                    <input value="Enviar" class="request-code-send button-pink" type="submit" />
                </fieldset>
            </form>

            <div class="info-banner-horizontal">
                <h2>Rebràs notificacions sobre</h2>
                <ul>
                    <li>
                        <div class="element-banner-h">
                            <!--<span class="icons icon-road-accidents"></span>-->
                            <span class="icons icon-mobile"></span>
                            <span>Accidents viàris</span>
                        </div>
                    </li>
                    <li>
                        <div class="element-banner-h">
                            <!--<span class="icons icon-snow-chains"></span>-->
                            <span class="icons icon-mobile"></span>
                            <span>Ús de cadenes (neu)</span>
                        </div>
                    </li>
                    <li>
                        <div class="element-banner-h">
                            <!--<span class="icons icon-road-retentions"></span>-->
                            <span class="icons icon-mobile"></span>
                            <span>Retencions</span>
                        </div>
                    </li>
                    <li class="last">
                        <div class="element-banner-h">
                            <!--<span class="icons icon-road-cuts"></span>-->
                            <span class="icons icon-mobile"></span>
                            <span>Talls a la xarxa viària Andorrana</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--END SPECIFIC PAGE TRAFFIC REQUEST CODE-->

<?php include 'includes/footer.php'; ?>