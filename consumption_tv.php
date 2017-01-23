<?php include 'includes/header_consumption.php'; ?>
<?php include 'includes/header_shortcodes.php'; ?>


    <!-- BEGIN SPECIFIC PAGE CONSUMPTION MOBILE -->
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
                <div class="title-consumption-product">MOVISTAR+ (Cambiar por img logo de Movistar+)</div>
                AQUI VA EL SLIDER DE PELICULAS
            </div>
        </div>
        <div class="cont-wrapper shortcode-container">
            <div class="content">
                <h2 class="global-subtitle">Pel·licules</h2>
                <div class="chart-tv-consumption">
                    <div class="tabs-second-level">
                        <ul>
                            <li><a href="#tabs-tv-chart"><span class="icons icon-phone"></span>Gráfic</a></li>
                            <li><a href="#tabs-tv-table"><span class="icons icon-phone"></span>Taula</a></li>
                        </ul>
                        <div id="tabs-tv-chart">
                            <script>
                                google.charts.load('current', {'packages':['corechart']});
                                google.charts.setOnLoadCallback(drawVisualization);


                                function drawVisualization() {
                                    // Some raw data (not necessarily accurate)
                                    var data = google.visualization.arrayToDataTable([
                                        ['Month', 'Import pel·lícules comprades'],
                                        ['10/15',  25],
                                        ['11/15',  15],
                                        ['12/15',  8],
                                        ['01/16',  13],
                                        ['02/16',  14],
                                        ['03/16',  19],
                                        ['04/16',  21],
                                        ['05/16',  27],
                                        ['06/16',  21],
                                        ['07/16',  21],
                                        ['08/16',  16],
                                        ['09/16',  9]
                                    ]);

                                    var options = {
                                        colors: ['#D30572'],
                                        vAxis: {format: 'decimal'},
                                        hAxis: {},
                                        seriesType: 'bars',
                                        series: {1: {type: 'line'}}
                                    };

                                    var chart = new google.visualization.ComboChart(document.getElementById('chart_tv'));
                                    chart.draw(data, options);
                                }
                            </script>
                            <div id="chart_tv" style="width: 100%;"></div>
                        </div>
                        <div id="tabs-tv-table">
                            AQUI VA LA TABLA DE PELICULAS
                        </div>
                    </div>
                </div>
                <script>
                    $(function () {
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
    </div>
    <!-- END SPECIFIC PAGE CONSUMPTION MOBILE -->


<?php include 'includes/footer.php'; ?>