<?php include 'includes/header_consumption.php'; ?>
<?php include 'includes/header_shortcodes.php'; ?>

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
        <div class="cont-wrapper shortcode-container">
            <div class="content">
                <div class="tabs-mobile-selector only-mobile">
                    <select class="make-me-styled">
                        <option value="0" selected>Trucades</option>
                        <option value="1">Dades</option>
                    </select>
                </div>
                <div id="tabs" class="tabs-first-level">
                    <ul>
                        <li><a href="#tabs-1"><h2 class="global-subtitle">Trucades</h2></a></li>
                        <li><a href="#tabs-2"><h2 class="global-subtitle">Dades</h2></a></li>
                    </ul>
                    <div id="tabs-1">
                        <div class="tabs-second-level">
                            <ul>
                                <li><a href="#tabs-call-chart"><span class="icons icon-phone"></span>Gráfic</a></li>
                                <li><a href="#tabs-call-table"><span class="icons icon-phone"></span>Taula</a></li>
                            </ul>
                            <div id="tabs-call-chart">
                                <script>
                                    google.charts.load('current', {'packages':['corechart']});
                                    google.charts.setOnLoadCallback(drawVisualization);


                                    function drawVisualization() {
                                        // Some raw data (not necessarily accurate)
                                        var data = google.visualization.arrayToDataTable([
                                            ['Month', 'Trucades nacionals', 'Trucades internacionals horari normal', 'Trucades internacionals horari reduït'],
                                            ['10/15',  25,      21,       0],
                                            ['11/15',  11,      14,      25],
                                            ['12/15',  20,      7,      11],
                                            ['01/16',  27,      13,       0],
                                            ['02/16',  23,      14,       0],
                                            ['03/16',  30,      19,       0],
                                            ['04/16',  17,      20,       0],
                                            ['05/16',  19,      27,       0],
                                            ['06/16',  24,      21,       0],
                                            ['07/16',  30,      21,       0],
                                            ['08/16',  26,      16,       0],
                                            ['09/16',  12,      8,       0]
                                        ]);

                                        var options = {
                                            colors: ['#D30572', '#8D0E57', '#9c9e9f'],
                                            vAxis: {format: 'decimal'},
                                            hAxis: {},
                                            seriesType: 'bars',
                                            series: {3: {type: 'line'}}
                                        };

                                        var chart = new google.visualization.ComboChart(document.getElementById('chart_calls'));
                                        chart.draw(data, options);
                                    }
                                </script>
                                <div id="chart_calls" style="width: 100%;"></div>
                            </div>
                            <div id="tabs-call-table">
                                AQUI VA LA TABLA DE LLAMADAS
                            </div>
                        </div>
                    </div>
                    <div id="tabs-2">
                        <div class="tabs-second-level">
                            <ul>
                                <li><a href="#tabs-data-chart"><span class="icons icon-phone"></span>Gráfic</a></li>
                                <li><a href="#tabs-data-table"><span class="icons icon-phone"></span>Taula</a></li>
                            </ul>
                            <div id="tabs-data-chart">
                                AQUI VA EL CHART DE DATOS
                            </div>
                            <div id="tabs-data-table">
                                AQUI VA LA TABLA DE DATOS
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(function () {
                        $("#tabs").tabs();
                        $(".tabs-second-level").tabs();
                    });

                    $(document).ready(function(){

                        // REV Original: http://tutorialzine.com/2010/11/better-select-jquery-css3/
                        // The select element to be replaced:
                        var select = $('select.make-me-styled');
                        var selectBoxContainer = $('<div>',{
                            width		: select.outerWidth(),
                            class	: 'atSelect',
                            html		: '<div class="selectBox">' + select.find(":selected").text() + '</div>'
                        });

                        var dropDown = $('<ul>',{class:'dropDown'});
                        var selectBox = selectBoxContainer.find('.selectBox');

                        // Set FIRST item in selector.


                        // Looping though the options of the original select element

                        select.find('option').each(function(i){
                            var option = $(this);

                            if(i==select.attr('selectedIndex')){
                                selectBox.html(option.text());
                            }

                            // As of jQuery 1.4.3 we can access HTML5
                            // data attributes with the data() method.

                            if(option.data('skip')){
                                return true;
                            }

                            // Creating a dropdown item according to the
                            // data-icon and data-html-text HTML5 attributes:

                            // <img src="'+option.data('icon')+'" /> removed
                            var li = $('<li>',{
                                html:	option.text()
                            });

                            li.click(function(){

                                selectBox.html(option.text());
                                dropDown.trigger('hide');

                                // When a click occurs, we are also reflecting
                                // the change on the original select element:
                                select.val(option.val());
                                $("#tabs").tabs( "option", "active", option.val());


                                return false;
                            });

                            dropDown.append(li);
                        });

                        selectBoxContainer.append(dropDown.hide());
                        select.hide().after(selectBoxContainer);

                        // Binding custom show and hide events on the dropDown:

                        dropDown.bind('show',function(){

                            if(dropDown.is(':animated')){
                                return false;
                            }

                            selectBox.addClass('expanded');
                            dropDown.slideDown();

                        }).bind('hide',function(){

                            if(dropDown.is(':animated')){
                                return false;
                            }

                            selectBox.removeClass('expanded');
                            dropDown.slideUp();

                        }).bind('toggle',function(){
                            if(selectBox.hasClass('expanded')){
                                dropDown.trigger('hide');
                            }
                            else dropDown.trigger('show');
                        });

                        selectBox.click(function(){
                            dropDown.trigger('toggle');
                            return false;
                        });

                        // If we click anywhere on the page, while the
                        // dropdown is shown, it is going to be hidden:

                        $(document).click(function(){
                            dropDown.trigger('hide');
                        });
                    });

                </script>
            </div>
        </div>
        <div class="consumption-period cont-wrapper">
            <div class="content">
                <h3>Període</h3>

                <form action="#">
                    <div class="calendar-container">
                        <div id="reportrange" class="date-picker-main">
                            <input type="text" id="date-ranges" value="Selecciona període">
                        </div>
                    </div>
                    <input type="submit" class="button-pink" value="Cercar">
                    <a href="#" class="button-shortcode button-active">Descarregar Excel</a>
                    <div class="message">
                        * Es mostra un màxim de 10000 comunicacions per cerca.
                    </div>

                    <!--  HERE will appear the Floating Calendar-->
                    <div id="content-receiver"></div>


                </form>


                <script type="text/javascript">

                    var lang = 'es'; // Allowed Values: ca, es, en.
                    var engFormat = 'MMMM D, YYYY';
                    var aceFormat = 'D MMMM, YYYY';
                    var localeConfigs = {
                        ca: {
                            format: aceFormat,
                            labels: ['Avui', 'Ahir', 'Últims 7 dies', 'Últims 30 dies', 'Aquest mes', 'Mes passat']
                        },
                        es: {
                            format: aceFormat,
                            labels: ['Hoy', 'Ayer', 'Últimos 7 dias', 'Últimos 30 dies', 'Este mes', 'Mes pasado']
                        },
                        en: {
                            format: engFormat,
                            labels: ['Today', 'Yesterday', 'Last 7 Days', 'Last 30 Days', 'This Month', 'Last Month']
                        }
                    };

                    $(function () {
                        var start = moment().subtract(29, 'days');
                        var end = moment();
                        moment.locale(lang);
                        start.locale(false);
                        end.locale(false);

                        function cb(start, end) {
                            $('#reportrange #date-ranges').val(start.format(localeConfigs[lang]['format']) + ' - ' + end.format(localeConfigs[lang]['format']));

                            // Aqui llamamos el CALLBACK de la operación con AJAX (en caso de MAX X => LOAD MORE?)
//            $.getJSON('/functions.php', { get_param: 'value' }, function(data) {
//                $.each(data, function(index, element) {
//                    $('body').append($('<div>', {
//                        text: element.name
//                    }));
//                });
//            });
                        }

                        // Range TEXTs can't be translated has they are static strings
                        // LRC Has to translate this.
                        $('#reportrange').daterangepicker({
                            startDate: start,
                            endDate: end,
                            ranges: {
                                'Hoy': [moment(), moment()],
                                'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                'últimos 7 dias': [moment().subtract(6, 'days'), moment()], // Last 7 Days
                                'últimos 30 dias': [moment().subtract(29, 'days'), moment()],
                                'Mes actual': [moment().startOf('month'), moment().endOf('month')],
                                'Mes pasado': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                            },
                            locale: {
//                format: 'MM/DD/YYYY h:mm A'
                                format: 'DD/MM/YYYY',
                                applyLabel: "Aplicar",
                                cancelLabel: "Cancelar",
                                fromLabel: "Desde",
                                toLabel: "Hasta",
                                customRangeLabel: "Personalizado"
                            }
                        }, cb);

                        cb(start, end);

                    });
                </script>
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
                        <div class="consumption-list-column column-date">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column column-time">
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
                        <div class="consumption-list-column column-date">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column column-time">
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
                        <div class="consumption-list-column column-date">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column column-time">
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
                        <div class="consumption-list-column column-date">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column column-time">
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
                        <div class="consumption-list-column column-date">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column column-time">
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
                        <div class="consumption-list-column column-date">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column column-time">
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
                        <div class="consumption-list-column column-date">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column column-time">
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
                        <div class="consumption-list-column column-date">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column column-time">
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
                        <div class="consumption-list-column column-date">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column column-time">
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
                        <div class="consumption-list-column column-date">
                            <span>29/01/2016 13:02:51</span>
                        </div>
                        <div class="consumption-list-column column-time">
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