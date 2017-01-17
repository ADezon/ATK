<?php include 'includes/header_loged.php'; ?>


    <!-- BEGIN SPECIFIC PAGE CONSUMPTION MOBILE -->
    <div class="basic-page cont-wrapper" xmlns="http://www.w3.org/1999/html">
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
                <div class="title-consumption-product">Tarifa Forfet Mobiland 29</div>
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
                                <meter value=".75"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">135</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">240</span>
                                </span>
                            </li>
                            <li>
                                <span>Internacionals</span>
                                <meter value="1"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">125</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                            </li>
                            <li>
                                <span>En itinerància</span>
                                <meter value="0"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">0</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
                            </li>
                            <li>
                                <span>Fora d’itinerància</span>
                                <meter value="0"></meter>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">0</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">100</span>
                                </span>
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
                                <meter value=".25"></meter>
                                  <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">450</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included"> 2 GB</span>
                                </span>
                            </li>
                            <li>
                                <span>Internacionals</span>
                                <meter value=".05"></meter>
                                  <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">30</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">500 MB</span>
                                </span>
                            </li>
                            <li>
                                <span>En itinerància</span>
                                <meter value=".25"></meter>
                                  <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed">0</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">15 GB</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="current-consumption">
                        <div class="product-consumption">
                            <span class="icons icon-email pink">&nbsp;</span>
                            <span class="product-consumption-title">SMS</span>
                        </div>
                        <ul class="info-list-product-consumption">
                            <li>
                                <span>Nacionals</span>
                                <span class="not-included">Fuera del forfet</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">12</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">0</span>
                                </span>
                            </li>
                            <li>
                                <span>En itinerància</span>
                                <span class="not-included">Fuera del forfet</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">10</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">0</span>
                                </span>
                            </li>
                            <li>
                                <span>Forfet de Dades 15 GB</span>
                                <span class="not-included">Fuera del forfet</span>
                                <span class="info-detail-product-consumption">
                                    <span class="info-detail-consumed excess">2</span>
                                    <span>/</span>
                                    <span class="info-detail-consumption-included">0</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="consumption-product-right half-page">
                    <h3>Vull ampliar la meva tarifa</h3>
                    <div class="config-box">
                        <h4 class="title-config-box">Necessites
                            un forfet superior?</h4>
                        <div class="inner-box">
                            <div class="custom-item one">
                                <div class="message">
                                    Amplia a
                                </div>
                                <div class="big-pink bold">
                                    1 GB / Tarifa plana
                                </div>
                            </div>
                            <div class="custom-item two">
                                <div class="full-centered">
                                    <br><br>
                                    <span class="treinta grey-medium bold">29€</span> <span class="grey-medium bold">/mes</span>
                                </div>
                            </div>
                            <div class="custom-item three">
                                <div class="actions-container">
                                    <a href="#"
                                       class="button-pink action-sign-in">Contratar</a>
                                    <a href="#" class="button-active">+ Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="config-box">
                        <h4 class="title-config-box">Contracta
                            més GB</h4>
                        <div class="inner-box trans">
                            <div class="gallery-item">
                                <div class="product-promo">
                                    <div class="big-pink bold">
                                        500 MB
                                    </div>
                                    <div class="entry-price">
                                        <span class="twenty grey-medium bold">4€</span> /mes
                                    </div>
                                </div>
                                <div class="custom-links">
                                    <a href="#" class="button-pink">Contractar</a>
                                    <a href="#" class="button-active">+ Info</a>
                                </div>
                            </div>
                            <div class="gallery-item">
                                <div class="product-promo">
                                    <div class="big-pink bold">
                                        1 GB
                                    </div>
                                    <div class="entry-price">
                                        <span class="twenty grey-medium bold">6€</span> /mes
                                    </div>
                                </div>
                                <div class="custom-links">
                                    <a href="#" class="button-pink">Contractar</a>
                                    <a href="#" class="button-active">+ Info</a>
                                </div>
                            </div>
                            <div class="gallery-item">
                                <div class="product-promo">
                                    <div class="big-pink grey-medium bold">
                                        2 GB
                                    </div>
                                    <div class="entry-price">
                                        <span class="twenty grey-medium bold">8€</span> /mes
                                    </div>
                                </div>
                                <div class="custom-links">
                                    <a href="#" class="button-pink">Contractar</a>
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
                <h2 class="global-subtitle">Trucades / Dades / SMS (Cambiar por tabs)</h2>
                <div class="chart-call-consumption">
                    AQUI VA EL CHART DE LLAMADAS
                </div>
                <div class="chart-data-consumption">
                    <script>
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawVisualization);


                        function drawVisualization() {
                            // Some raw data (not necessarily accurate)
                            var data = google.visualization.arrayToDataTable([
                                ['Month', 'Internet Nacional', 'Internet Internacional'],
                                ['2015/10',  25,      21],
                                ['2015/11',  11,      14],
                                ['2015/12',  20,      7],
                                ['2016/01',  27,      13],
                                ['2016/02',  23,      14],
                                ['2016/03',  30,      19],
                                ['2016/04',  17,      20],
                                ['2016/05',  19,      27],
                                ['2016/06',  24,      21],
                                ['2016/07',  30,      21],
                                ['2016/08',  26,      16],
                                ['2016/09',  12,      8],
                            ]);

                            var options = {
                                colors: ['#D30572', '#8D0E57'],
                                vAxis: {format: 'decimal'},
                                hAxis: {},
                                seriesType: 'bars',
                                series: {2: {type: 'line'}}
                            };

                            var chart = new google.visualization.ComboChart(document.getElementById('chart_internet'));
                            chart.draw(data, options);
                        }
                    </script>
                    <div id="chart_internet" style="width: 1024px; height: 500px;"></div>
                </div>
                <div class="chart-sms-consumption">
                    AQUI VA EL CHART DE SMS
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
    <!-- END SPECIFIC PAGE CONSUMPTION MOBILE -->


<?php include 'includes/footer.php'; ?>