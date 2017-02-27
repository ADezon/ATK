<?php include 'includes/header_loged_profile.php'; ?>

  <div id="main-content">

    <!--BEGIN SPECIFIC PAGE PROFILE-->
    <div class="cont-wrapper profile-text">
        <div class="content">
            <?php include 'includes/breadcrumb.php'; ?>
            <h1 class="main-title">Perfil</h1>
            <div class="field-body">
                <p>A continuació, et mostrem el teu perfil, en el que podràs consultar i editar, sempre que ho desitgis, les teves dades de client.</p>
            </div>
        </div>
    </div>
    <div id="profile-info" class="cont-wrapper">
        <div class="content">
            <div class="profile-info-element clear">
                <div class="half-page">
                    <h1 class="main-title"><span class="icons icon-client"></span>Dades de client</h1>
                    <div class="profile-info-data">
                        <h4>Número de client</h4>
                        <p>9141994200113748633</p>
                        <h4>Nom d'usuari</h4>
                        <p>ajimenez</p>
                        <h4>Nom</h4>
                        <p>Alejandra Jiménez Vidal</p>
                        <h4>Telèfon</h4>
                        <p>728893</p>
                        <h4>Correu electrònic</h4>
                        <p>ajimenezvidal@gmail.com</p>
                        <h4>Contrasenya</h4>
                        <p>******</p>
                        <a href="#" class="button-pink">Editar</a>
                    </div>
                </div>
                <div class="half-page">
                    <h1 class="main-title"><span class="icons icon-addresses"></span>Direcció</h1>
                    <div class="profile-info-data">
                        <h4>Carrer</h4>
                        <p>Andorra, Andorra la Vella, Andorra la Vella, Pere d’Urg, Mont Duca</p>
                        <h4>Número</h4>
                        <p>10, 3, 08</p>
                        <h4>Codi postal</h4>
                        <p>AD500</p>
                        <h4>Població</h4>
                        <p>Andorra la Vella</p>
                        <h4>Parròquia</h4>
                        <p>Andorra la Vella</p>
                    </div>
                </div>
            </div>
            <div class="profile-info-element clear">
                <div class="half-page">
                    <h1 class="main-title"><span class="icons icon-invoices"></span>Facturació</h1>
                    <div class="profile-info-data">
                        <h4>Selecciona el teu compte</h4>
                        <select>
                            <option>123456789</option>
                            <option>123456790</option>
                            <option>123456791</option>
                            <option>123456792</option>
                            <option>123456793</option>
                            <option>123456794</option>
                            <option>123456795</option>
                        </select>
                        <h4>Nom del compte</h4>
                        <p>1223943</p>
                        <h4>Entitat</h4>
                        <p>Crèdit Andorrà</p>
                        <h4>Factura</h4>
                        <p class="no-padding">Electrònica(.pdf)</p>
                        <p class="info-small">* L’activació de la factura electrònica implica la NO recepció de la factura en format paper.</p>
                        <a href="#" class="button-pink">Editar</a>
                    </div>
                </div>
                <div class="half-page">
                    <h1 class="main-title"><span class="icons icon-alerts"></span>Alertes de facturació</h1>
                    <div class="profile-info-data switcher">
                        <p>Vols rebre una notificació quan tinguis disponible la teva factura?</p>

                        <ul class="switch-checks-list">
                            <li>
                                <span>Activar/Descativar alertes SMS</span>
                                <label class="checkbox-custom-switch">
                                    <input type="checkbox">
                                    <div class="switch"></div>
                                </label>
                            </li>
                            <li>
                                <span>Activar/Desactivar alertes Email</span>
                                <label class="checkbox-custom-switch">
                                    <input type="checkbox">
                                    <div class="switch"></div>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END SPECIFIC PAGE PROFILE-->

  </div>

<?php include 'includes/footer.php'; ?>