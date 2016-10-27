<?php include 'includes/header.php'; ?>

    <!--BEGIN SPECIFIC PAGE TRAFFIC CONFIG-->
    <div class="basic-page cont-wrapper">
        <div class="content">

            <?php include 'includes/breadcrumb.php'; ?>

            <h1 class="main-title">El trànsit</h1>

            <div class="field-body">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
            </div>

            <form id="traffic-config-form">
                <h4>Què vols fer?</h4>
                <fieldset class="box-suscription-alert">
                    <div class="radio-list">
                        <div class="radio-custom">
                            <input type="radio" id="vull-rebre" name="radio-selector">
                            <label for="vull-rebre">Vull rebre un avís dels canvis de la xarxa viària</label>
                            <div class="radio-css"></div>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" id="no-vull-rebre" name="radio-selector">
                            <label for="no-vull-rebre">No vull rebre més alertes de trànsit</label>
                            <div class="radio-css"></div>
                        </div>
                    </div>
                </fieldset>
                <div id="traffic-selectors">
                <h4>Selecciona les alertes que vulguis rebre</h4>
                <fieldset class="box-traffic-alerts clear">
                    <div class="checkbox-custom">
                        <input type="checkbox" id="ta-option-1" name="traffic-alerts">
                        <label for="ta-option-1">Informació dels incidents viàris</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="ta-option-2" name="traffic-alerts">
                        <label for="ta-option-2">Ús obligatori de cadenes</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="ta-option-3" name="traffic-alerts">
                        <label for="ta-option-3">Retencions / talls de trànsit</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="ta-option-4" name="traffic-alerts">
                        <label for="ta-option-4">Tall de la via</label>
                        <div class="checkbox-css"></div>
                    </div>
                </fieldset>
                <h4>Selecciona el sector</h4>
                <fieldset class="box-traffic-alerts clear">
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-1" name="traffic-alerts-sector">
                        <label for="tas-option-1">Sector Sud <br />(Sant Julià <> Frontera)</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-2" name="traffic-alerts-sector">
                        <label for="tas-option-2">Sector Centre <br />(Sant Julià <> Andorra/Escaldes)</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-3" name="traffic-alerts-sector">
                        <label for="tas-option-3">Vall Nord <br />(Escaldes <> La massana/Ordino)</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-4" name="traffic-alerts-sector">
                        <label for="tas-option-4">Vall Nord accés a pistes <br />(La Massana > Palí/Arinsal)</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-5" name="traffic-alerts-sector">
                        <label for="tas-option-5">Vall Nord accés a pistes <br />(Ordino > Arealis)</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-6" name="traffic-alerts-sector">
                        <label for="tas-option-6">Vall Orient <br />(Escaldes <> Encamp/Canibo)</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-7" name="traffic-alerts-sector">
                        <label for="tas-option-7">Vall Orient accés a pistes <br />(Canibo > Pas de la Casa)</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-8" name="traffic-alerts-sector">
                        <label for="tas-option-8">Vall Orient accés a pistes <br />(Soldeu > Pas de la Casa)</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-9" name="traffic-alerts-sector">
                        <label for="tas-option-9">Vall Orient accés per Port d’Envadira</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-10" name="traffic-alerts-sector">
                        <label for="tas-option-10">Sector Pas de la Casa <br />(E/S frontera direcció França i vv)</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-11" name="traffic-alerts-sector">
                        <label for="tas-option-11">Port d’Envadira</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-12" name="traffic-alerts-sector">
                        <label for="tas-option-12"></label>
                        <div class="checkbox-css">Tunel de Port Pla</div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-13" name="traffic-alerts-sector">
                        <label for="tas-option-13">N-145 (La Seu d’Urgell > Frontera Riu Runer)</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-14" name="traffic-alerts-sector">
                        <label for="tas-option-14">Coll d’Ordino <br /></label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-15" name="traffic-alerts-sector">
                        <label for="tas-option-15">Tram Aixovalt > Os de Civís</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tas-option-16" name="traffic-alerts-sector">
                        <label for="tas-option-16">Accés Camp de Neu de la Rabassa</label>
                        <div class="checkbox-css"></div>
                    </div>
                </fieldset>
                <h4>Vull rebre les alarmes els dies següents</h4>
                <fieldset class="box-traffic-alerts clear">
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tad-option-1" name="traffic-alerts-days">
                        <label for="tad-option-1">Dilluns</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tad-option-2" name="traffic-alerts-days">
                        <label for="tad-option-2">Dimarts</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tad-option-3" name="traffic-alerts-days">
                        <label for="tad-option-3">Dimecres</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tad-option-4" name="traffic-alerts-days">
                        <label for="tad-option-4">Dijous</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tad-option-5" name="traffic-alerts-days">
                        <label for="tad-option-5">Divendres</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tad-option-6" name="traffic-alerts-days">
                        <label for="tad-option-6">Dissabte</label>
                        <div class="checkbox-css"></div>
                    </div>
                    <div class="checkbox-custom">
                        <input type="checkbox" id="tad-option-7" name="traffic-alerts-days">
                        <label for="tad-option-7">Diumenge</label>
                        <div class="checkbox-css"></div>
                    </div>
                </fieldset>
                </div>

                <input value="Enviar" class="recover-user-send button-pink" type="submit" />
            </form>

        </div>
    </div>
    <!--END SPECIFIC PAGE TRAFFIC CONFIG-->

<script>
    $('#vull-rebre').click(function () { $('#traffic-selectors').show(200) });
    $('#no-vull-rebre').click(function () {
        $('#traffic-selectors').hide(200);
        $('input[type="checkbox"]').attr('checked', false);
    });
</script>

<?php include 'includes/footer.php'; ?>