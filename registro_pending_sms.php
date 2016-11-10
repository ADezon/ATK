<?php include 'includes/header.php'; ?>

<!--BEGIN SPECIFIC PAGE REGISTER CONFIRM-->
<div class="basic-page cont-wrapper">
    <div class="content">

        <?php include 'includes/breadcrumb.php'; ?>

        <h1 class="main-title">Registre d'usuari.</h1>
        <p class="text-request"><strong>Dades d'usuari</strong></p>
        <div class="field-body">
            <p>En breus moments rebràs un SMS amb un codi.<br />
                Introdueix el codi rebut a la casella  y clica "Validar"
            </p>
        </div>

        <form>
        <fieldset>
            <input type="text" id="codi" placeholder="introdueix codi">
        </fieldset>

        <input type="submit" value="Validar" class="button-pink">
        </form>
        
    </div>
</div>
<!--END SPECIFIC PAGE REGISTER CONFIRM-->

<?php include 'includes/footer.php'; ?>
