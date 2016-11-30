<?php include 'includes/header_loged.php'; ?>


    <!-- BEGIN SPECIFIC PAGE CLIENT PRODUCTS -->
    <div class="basic-page cont-wrapper" xmlns="http://www.w3.org/1999/html">
        <div class="page-client-products cont-wrapper">
            <div class="content">
                <?php include 'includes/breadcrumb.php'; ?>

                <h1 class="main-title">Els meus productes</h1>

                <div class="invoices-select">
                    <h3>Selecciona el teu compte</h3>
                    <select>
                        <option>Tots els comptes</option>
                        <option>123456790</option>
                        <option>123456791</option>
                        <option>123456792</option>
                        <option>123456793</option>
                        <option>123456794</option>
                        <option>123456795</option>
                    </select>
                </div>
                <a href="#" class="button-pink">Cercar</a>
            </div>
        </div>
        <div class="result-client-products cont-wrapper">
            <div class="content">
                <div class="services-selector">
                    <div class="services-element">
                       <div class="services-title">
                           <span class="icons icon-mobile"></span>
                           <p>Línia de mòbil</p>
                       </div>
                        <div class="services-price">
                            <span class="icons icon-more"></span> <!-- Change icon -> icon-minus or icon-plus -->
                            <p>30 €</p>
                        </div>
                    </div>
                    <div class="services-full-info">
                        sfsdf sf sdf sdf sdfsf sdf sdfsfsfsdfsdfksljdfh skhf lskhf lsflsk hflshf lsjhf lsfhsf d
                    </div>

                    <div class="services-element">
                        <div class="services-title">
                            <span class="icons icon-phone"></span>
                            <p>Internet i fixe</p>
                        </div>
                        <div class="services-price">
                            <span class="icons icon-more"></span> <!-- Change icon -> icon-minus or icon-plus -->
                            <p>49 €</p>
                        </div>
                    </div>
                    <div class="services-full-info">
                        sfsdf sf sdf sdf sdfsf sdf sdfsfsfsdfsdfksljdfh skhf lskhf lsflsk hflshf lsjhf lsfhsf d
                    </div>

                    <div class="services-element">
                        <div class="services-title">
                            <span class="icons icon-tv"></span>
                            <p>Televisió</p>
                        </div>
                        <div class="services-price">
                            <span class="icons icon-less"></span> <!-- Change icon -> icon-minus or icon-plus -->
                            <p>15 €</p>
                        </div>
                    </div>
                    <div class="services-full-info">
                        sfsdf sf sdf sdf sdfsf sdf sdfsfsfsdfsdfksljdfh skhf lskhf lsflsk hflshf lsjhf lsfhsf d
                    </div>
                </div>
            </div>
        </div>
        <div class="config-client-products cont-wrapper">
            <div class="content">
                <div class="sidebar">
                    <h3>Serveis inclosos</h3>
                    <div class="service-selected">
                        <span class="title-service-selected">Mini</span>
                        <span class="price-service-selected">15 €</span>
                    </div>
                </div>
                <div class="content-ws">
                    <h3>Configuració</h3>
                    <div class="config-box">
                        <h4 class="title-config-box">Activa Movistar+ als teus dispositius</h4>
                    </div>
                    <div class="config-box">
                        <h4 class="title-config-box">Amplia la teva tarifa</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SPECIFIC PAGE CLIENT PRODUCTS -->

    <!--ALERT FOR FLOATING DATA-->
    <div class="general-alert-wrapper fixedone">
        <div class="content-general-wrapper"> <!--wide-alert-->
            <div class="alert-general-close">
                <span class="icons icon-close"></span>
            </div>
            <div class="alert-general-title">
                Canvi de contrasenya per 123123
            </div>

            <div class="alert-general-body">
                <p>
                    Here is the body of the alert<br />
                    contraseña y toda la pesca...
                </p>

                <div class="centered"><input type="button" class="pink-button close-button" value="Continuar"></div>

            </div>
        </div>

    </div>
    <!--IMPORTANT:: REQUIRES LOAD src="/js/dinamicglobalalert.js" SCRIPT IN HEAD-->
    <!--END POP-UP GLOBAL ALERT CONTENT-->

    <script language="JavaScript">
        revealalert();
        $( document ).ready(function() {
            $('input.button-alert').click(function (e) {
                e.preventDefault();
                revealalert();
            });
            $('.close-button').click(function (e) {
                e.preventDefault();
                closeAlert();
            })
        });
    </script>

<?php include 'includes/footer.php'; ?>