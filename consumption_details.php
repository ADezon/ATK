<?php include 'includes/header_loged.php'; ?>


    <!--BEGIN SPECIFIC PAGE CONSUMPTION DETAIL-->
    <div class="basic-page cont-wrapper">
        <div class="page-consumption-detail cont-wrapper">
            <div class="content">
                <?php include 'includes/breadcrumb.php'; ?>

                <h1 class="main-title">Detall de consum</h1>

            </div>
        </div>
        <div class="cont-wrapper">
            <div class="content">
               <h2 class="global-subtitle">Accés internet</h2>
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
        </div>
        <div class="cont-wrapper">
            <div class="content">
                <div class="">AQUI VA EL DETALLE DE ACCÉS INTERNET</div>
            </div>
        </div>
        <div class="cont-wrapper">
            <div class="content">
                <h2 class="global-subtitle">Telefonía fixa fibra</h2>
                <div class="">AQUI VA EL GRAFICO Y LA TABLA</div>
            </div>
        </div>
        <div class="cont-wrapper">
            <div class="content">
                <div class="">AQUI VA EL DETALLE DE TELEFONÍA FIXA FIBRA</div>
            </div>
        </div>
    </div>
    <!--END SPECIFIC PAGE CONSUMPTION DETAIL-->


<?php include 'includes/footer.php'; ?>