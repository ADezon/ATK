<?php include 'includes/header_loged.php'; ?>


    <!-- BEGIN SPECIFIC PAGE CONSUMPTION FIXED -->
    <div class="basic-page page-consumption cont-wrapper" xmlns="http://www.w3.org/1999/html">
        <div class="cont-wrapper bg-grey">
            <div class="content">
                <?php include 'includes/breadcrumb.php'; ?>

                <h1 class="main-title">Els meu consum</h1>

                <div class="select-w-title">
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
                <div class="select-w-title">
                    <h3>Selecciona el teu producte</h3>
                    <select>
                        <option>Telefonia mòbil</option>
                        <option>Telefonia i internet residencial</option>
                        <option>Televisió</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="cont-wrapper">
            <div class="content">
                <h2 class="global-subtitle">Setembre, 2016</h2>
                <div class="title-consumption-product">Tarifa telefonia i internet residencial</div>
                <div class="consumption-product-left half-page">
                    <h3>Consum del mes actual</h3>
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-call pink">&nbsp;</span>
                            <span class="product-consumption-title">Trucades (Minuts)</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">135</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">240</span>
                                </span>
                                <meter value=".75"></meter>
                            </li>
                            <li>
                                <span>Nacionals a mòbil</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">125</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                                <meter value="1"></meter>
                            </li>
                            <li>
                                <span>Internacionals fixos <br />Horari normal</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">50</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                                <meter value="0.5"></meter>
                            </li>
                            <li>
                                <span>Internacionals fixos <br />Horari reduït</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">20</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                                <meter value="0.2"></meter>
                            </li>
                            <li>
                                <span>Internacionals mòbil <br />Horari normal</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">50</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                                <meter value="0.5"></meter>
                            </li>
                            <li>
                                <span>Internacionals mòbil <br />Horari reduït</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">0</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                                <meter value="0"></meter>
                            </li>
                        </ul>
                    </div>
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-web pink">&nbsp;</span>
                            <span class="product-consumption-title">Dades</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">450</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included"> 2 GB</span>
                                </span>
                                <meter value=".25"></meter>
                            </li>
                            <li>
                                <span>Internacionals</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">30</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">500 MB</span>
                                </span>
                                <meter value=".05"></meter>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="consumption-product-right half-page">
                    <h3>Vull ampliar la meva tarifa</h3>
                    <div class="config-box">
                        <h4 class="title-config-box">Amplia la teva tarifa</h4>
                        <div class="inner-box">
                            <div class="custom-item one">
                                <div class="message">
                                    Amplia a
                                </div>
                                <div class="big-pink bold">
                                    Tarifa plana
                                </div>
                            </div>
                            <div class="custom-item two">
                                <div class="full-centered">
                                    <br><br>
                                    <span class="treinta grey-medium bold">50€</span> <span class="grey-medium bold">/mes</span>
                                </div>
                            </div>
                            <div class="custom-item three">
                                <div class="actions-container">
                                    <a href="#"
                                       class="button-pink action-sign-in">Contractar</a>
                                    <a href="#" class="button-active">+ Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont-wrapper">
            <div class="content">
                <h2 class="global-subtitle">Trucades / Dades / (Cambiar por tabs)</h2>
                <div class="chart-call-consumption">
                    AQUI VA EL CHART DE LLAMADAS
                </div>
                <div class="chart-data-consumption">
                    AQUI VA EL CHART DE DATOS
                </div>
            </div>
        </div>
        <div class="result-table-consumption cont-wrapper bg-grey">
            <div class="content">
                <div class="select-w-title">
                    <h3>Ordenar per</h3>
                    <select>
                        <option>Preu descendent</option>
                        <option>Preu ascendent</option>
                        <option>Data d'inici</option>
                        <option>Durada</option>
                        <option>País</option>
                        <option>Destí</option>
                    </select>
                </div>
                <div class="consumption-counter-paginator">
                    <ul class="results-paginator">
                        <li><a href="#"><span class="icons icon-left"></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#"><span class="icons icon-right"></span></a></li>
                    </ul>
                    <div class="counter-resultsperpage">Resultats 1-12 de 36</div>
                </div>
                <div class="consumption-list">
                    <div class="consumption-list-title">
                        <div class="consumption-list-column">
                            <span>Destí</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>País</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>Inici</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>Durada</span>
                        </div>
                        <div class="consumption-list-column column-amount">
                            <span>Import</span>
                        </div>
                    </div>
                    <div class="consumption-list-row">
                        <div class="consumption-list-column">
                            <span>0034699226772</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>ESPANYA</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>00:03:03</span>
                        </div>
                        <div class="consumption-list-column column-amount">
                            <span>0.92</span>
                        </div>
                    </div>
                    <div class="consumption-list-row">
                        <div class="consumption-list-column">
                            <span>331643</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>ANDORRA</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>00:03:03</span>
                        </div>
                        <div class="consumption-list-column column-amount">
                            <span>0.92</span>
                        </div>
                    </div>
                    <div class="consumption-list-row">
                        <div class="consumption-list-column">
                            <span>0034699226772</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>ESPANYA</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>00:03:03</span>
                        </div>
                        <div class="consumption-list-column column-amount">
                            <span>0.92</span>
                        </div>
                    </div>
                    <div class="consumption-list-row">
                        <div class="consumption-list-column">
                            <span>331643</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>ANDORRA</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>00:03:03</span>
                        </div>
                        <div class="consumption-list-column column-amount">
                            <span>0.92</span>
                        </div>
                    </div>
                    <div class="consumption-list-row">
                        <div class="consumption-list-column">
                            <span>0034699226772</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>ESPANYA</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>00:03:03</span>
                        </div>
                        <div class="consumption-list-column column-amount">
                            <span>0.92</span>
                        </div>
                    </div>
                    <div class="consumption-list-row">
                        <div class="consumption-list-column">
                            <span>331643</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>ANDORRA</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>00:03:03</span>
                        </div>
                        <div class="consumption-list-column column-amount">
                            <span>0.92</span>
                        </div>
                    </div>
                    <div class="consumption-list-row">
                        <div class="consumption-list-column">
                            <span>0034699226772</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>ESPANYA</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>00:03:03</span>
                        </div>
                        <div class="consumption-list-column column-amount">
                            <span>0.92</span>
                        </div>
                    </div>
                    <div class="consumption-list-row">
                        <div class="consumption-list-column">
                            <span>331643</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>ANDORRA</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>00:03:03</span>
                        </div>
                        <div class="consumption-list-column column-amount">
                            <span>0.92</span>
                        </div>
                    </div>
                    <div class="consumption-list-row">
                        <div class="consumption-list-column">
                            <span>0034699226772</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>ESPANYA</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>00:03:03</span>
                        </div>
                        <div class="consumption-list-column column-amount">
                            <span>0.92</span>
                        </div>
                    </div>
                    <div class="consumption-list-row">
                        <div class="consumption-list-column">
                            <span>331643</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>ANDORRA</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column">
                            <span>00:03:03</span>
                        </div>
                        <div class="consumption-list-column column-amount">
                            <span>0.92</span>
                        </div>
                    </div>
                </div>
                <ul class="results-paginator">
                    <li><a href="#"><span class="icons icon-left"></span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#"><span class="icons icon-right"></span></a></li>
                </ul>
                <ul class="results-paginator-mobile">
                    <li><a href="#"><span class="icons icon-left"></span></a></li>
                    <li class="number-page"><span>Pàgina  1 / 6</span></li>
                    <li><a href="#"><span class="icons icon-right"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END SPECIFIC PAGE CONSUMPTION FIXED -->


<?php include 'includes/footer.php'; ?>