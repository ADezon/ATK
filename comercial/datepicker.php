<?php include 'includes/header_datepicker.php'; ?>

<!--BEGIN SPECIFIC PAGE REGISTER-->
<div class="basic-page cont-wrapper">
    <div class="content">

        <?php include 'includes/breadcrumb.php'; ?>

        <h1 class="main-title">Consulta Facturas</h1>

        <div id="reportrange"  class="data-range-container" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 30%">
            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
            <input type="text" id="date-ranges" value="Selecciona període">
            <b class="caret"></b>
        </div>
        <div id="content-receiver"></div>
    </div>
</div>


<script type="text/javascript">

    var lang = 'es'; // Allowed Values: ca, es, en.
    var engFormat = 'MMMM D, YYYY';
    var aceFormat = 'D MMMM, YYYY';
    var localeConfigs = {
        ca:{format: aceFormat, labels: ['Avui', 'Ahir', 'Últims 7 dies', 'Últims 30 dies', 'Aquest mes', 'Mes passat']},
        es:{format: aceFormat, labels: ['Hoy', 'Ayer', 'Últimos 7 dias', 'Últimos 30 dies', 'Este mes', 'Mes pasado']},
        en:{format: engFormat, labels: ['Today', 'Yesterday', 'Last 7 Days', 'Last 30 Days', 'This Month', 'Last Month']}
    };

    $(function() {
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
            opens: 'right',
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


<!-- BEGIN POP-Up MESSAGE -->
<!--PLEASE LOAD  src="/js/pop-ups.js" SCRIPT IN HEAD-->
<!--<div class="popup-wrapper">-->
<!--    <div class="content-wrapper">-->
<!--        <div class="popup-close">-->
<!--            <span class="icons icon-close"></span>-->
<!--        </div>-->
<!--        <div class="popup-title">-->
<!--            <span class="icons icon-alerts"></span>-->
<!--            Message HERE-->
<!--        </div>-->
<!---->
<!--        <div class="popup-body"></div>-->
<!--    </div>-->
<!--</div>-->
<!--END POP-Up CONTENT-->


<?php include 'includes/footer.php'; ?>
