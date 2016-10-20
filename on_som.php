<?php include 'includes/header.php'; ?>


<!--BEGIN SPECIFIC PAGE ON SOM-->
<div class="basic-page cont-wrapper">
    <div class="content">
        <?php include 'includes/breadcrumb.php'; ?>

        <h1 class="main-title">On som</h1>

        <div class="field-body">
            <p>Andorra Telecom disposa d’una àmplia xarxa de punts d’atenció al públic per facilitar les gestions dels nostres clients.<br />A l’agència comercial, situada al carrer Prat de la Creu número 2 d’Andorra la Vella, se sumen els punts d’atenció a la Massana (Comú de la Massana), Sant Julià (plaça Germandat) i el Pas de la Casa (oficina del Comú d’Encamp) així com l’espai Connectem a la mateixa agència comercial.</p>
        </div>
    </div>
    <div class="map-container">
        <div class="legend">

            <ul>
                <li>
                    <div class="checkboxCSS">
                        <input id="cb_social" type="checkbox" onclick="toggleGroup('seu')" checked="checked">
                        <label for="cb_social"></label>
                        <span><span class="circle black"></span>Seu Social</span>
                    </div>
                </li>
                <li>
                    <div class="checkboxCSS">
                        <input id="cb_comercial" type="checkbox" onclick="toggleGroup('agencia')" checked="checked">
                        <label for="cb_comercial"></label>
                        <span><span class="circle pinkdark"></span>Agència Comercial</span>
                    </div>
                </li>
                <li>
                    <div class="checkboxCSS">
                        <input id="cb_client" type="checkbox" onclick="toggleGroup('punts_atencio')" checked="checked">
                        <label for="cb_client"></label>
                        <span><span class="circle pink"></span>Punts d'atenció al client</span>
                    </div>
                </li>
                <li>
                    <div class="checkboxCSS">
                        <input id="cb_espais" type="checkbox" onclick="toggleGroup('espais')" checked="checked">
                        <label for="cb_espais"></label>
                        <span><span class="circle greymedium"></span>Espais Connectem</span>
                    </div>
                </li>
            </ul>
        </div>

        <div id="map" style="width: 100%; height: 400px;"></div>

        <script>
            function xmlParse(str) {
                if (typeof ActiveXObject != 'undefined' && typeof GetObject != 'undefined') {
                    var doc = new ActiveXObject('Microsoft.XMLDOM');
                    doc.loadXML(str);
                    return doc;
                }

                if (typeof DOMParser != 'undefined') {
                    return (new DOMParser()).parseFromString(str, 'text/xml');
                }

                return createElement('div', null);
            }
            var customIcons = {
                seu: {
                    icon: '../images/icons/seu.png'
                },
                agencia: {
                    icon: '../images/icons/agencia.png'
                },
                punts_atencio: {
                    icon: '../images/icons/atencio.png'
                },
                espais: {
                    icon: '../images/icons/espais.png'
                }
            };

            var markerGroups = {
                "seu": [],
                "agencia": [],
                "punts_atencio": [],
                "espais": []
            };

            function load() {
                var map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(42.510165, 1.516373),
                    zoom: 12,
//                    scrollwheel: false,
                    mapTypeId: 'roadmap'
                });
                var infoWindow = new google.maps.InfoWindow();


                map.set('styles', [{
                    zoomControl: false
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#ffd986"
                    }]
                }, {
                    featureType: "road.arterial",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#9e574f"
                    }]
                }, {
                    featureType: "road.local",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#d0cbc0"
                    }, {
                        weight: 1.1
                    }

                    ]
                }, {
                    featureType: 'road',
                    elementType: 'labels',
                    stylers: [{
                        saturation: -100
                    }]
                }, {
                    featureType: 'landscape',
                    elementType: 'geometry',
                    stylers: [{
                        hue: '#ffff00'
                    }, {
                        gamma: 1.4
                    }, {
                        saturation: 82
                    }, {
                        lightness: 96
                    }]
                }, {
                    featureType: 'poi.school',
                    elementType: 'geometry',
                    stylers: [{
                        hue: '#fff700'
                    }, {
                        lightness: -15
                    }, {
                        saturation: 99
                    }]
                }]);


                var lang = 'es'; // Allowed Values: ca, es, en. // LRC <= Change LANGUAGE variable as indicated
                var localeConfigs = {
                    ca:{adreca: 'Adreça', horaris: 'Horaris'},
                    es:{adreca: 'Dirección', horaris: 'Horarios'},
                    en:{adreca: 'Address', horaris: 'Timetables'}
                };

                var url = document.location['origin'] + '/xml/markers.xml'; // LRC <= Change URL where the XML files comes from.
                var  xmlContent;
                downloadUrl(url, function(data, responseCode) {
                    if(responseCode == 200 && typeof data.responseText !== "undefined") {
                        xmlContent = data.responseText;
                    } else {
                        xmlContent = '<markers><marker name="Castelo" address="Rua da Condessa de Valença" lat="38.64351973190569" lng="-8.216521812152905" type="monumento" /><marker name="Anta 1 de Tourais" address="Estrada Nacional 114" lat="38.64260059929888" lng="-8.159376865959189" type="monumento" /><marker name="Hotel da Ameira" address="Herdade da Ameira" lat="38.64109640475479" lng="-8.180432206726096" type="hotel" /><marker name="Hotel Montemor" address="Avenida Gago Coutinho 8, 7050-248 Montemor-o-Novo" lat="38.64925541964039" lng="-8.216489625644726" type="hotel" /><marker name="Restaurante Monte Alentejano" address="Av. Gago Coutinho 8" lat="38.6492329" lng="-8.216665" type="restaurantes" /><marker name="Restaurante A Ribeira" address="Rua de São Domingos" lat="38.6347498199708" lng="-8.206468892765088" type="restaurantes" /><marker name="Núcleo Museológico do Convento de S. Domingos" address="" lat="38.643139" lng="-8.212732" type="museus" /><marker name="Centro Interpretativo do Castelo de Montemor-o-Novo" address="Rua Condessa de Valença" lat="38.64258748216167" lng="-8.21467108793263" type="museus" /></markers>';
                    }
                    var xml = xmlParse(xmlContent);

                    var total = xml.documentElement.getElementsByTagName("marker");
                    var types = xml.documentElement.getElementsByTagName("type");
                    var titles = xml.documentElement.getElementsByTagName("title");
                    var images = xml.documentElement.getElementsByTagName("image");
                    var addresses = xml.documentElement.getElementsByTagName("address");
                    var timetables = xml.documentElement.getElementsByTagName("timetables");
                    var lats = xml.documentElement.getElementsByTagName("lat");
                    var longs = xml.documentElement.getElementsByTagName("long");
                    var links = xml.documentElement.getElementsByTagName("link");

                    for (var i = 0; i < total.length; i++) {
                        var type = types[i].innerHTML;
                        var title = titles[i].innerHTML;
                        var address = "<label>"+ localeConfigs[lang]['adreca'] + "</label><div class=\"horaris-infowindow\">" + addresses[i].innerHTML + "</div>";

                        var horari = '';
                        if(timetables[i].innerHTML.length > 0) {
                            horari = timetables[i].innerHTML;
                            horari = "<label>"+ localeConfigs[lang]['horaris'] + "</label><div class=\"horaris-infowindow\">" + horari.replace(/(?:\r\n|\r|\n)/g, '<br />') + "</div>";
                        }
                        var image = "<div class=\"infowindow-image\"><img src=\"" + images[i].innerHTML + "\" /></div>";
                        var lat = lats[i].innerHTML;
                        var long = longs[i].innerHTML;
                        var link = links[i].innerHTML;
                        var target = links[i].getAttribute("target");

                        var linkedTitle = "<a href=\"" + link + "\" target=\"" + target + "\">" + title + "</a>";

                        var point = new google.maps.LatLng(
                                parseFloat(lat),
                                parseFloat(long));

                        var html = "<div class=\"info-wrapper\">" + image + "<div class=\"infowindow-infocontainer\">" + linkedTitle + address + horari + "</div></div>";
                        var marker = createMarker(point, type, map);
                        bindInfoWindow(marker, map, infoWindow, html);
                    }
                });
            }

            function createMarker(point, type, map) {
                var icon = customIcons[type] || {};
                var marker = new google.maps.Marker({
                    map: map,
                    position: point,
                    icon: icon.icon,
                    shadow: icon.shadow,
                    type: type
                });
                if (!markerGroups[type]) markerGroups[type] = [];
                markerGroups[type].push(marker);
                return marker;
            }

            function toggleGroup(type) {
                for (var i = 0; i < markerGroups[type].length; i++) {
                    var marker = markerGroups[type][i];
                    if (!marker.getVisible()) {
                        marker.setVisible(true);
                    } else {
                        marker.setVisible(false);
                    }
                }
            }

            function bindInfoWindow(marker, map, infoWindow, html) {
                google.maps.event.addListener(marker, 'click', function () {
                    infoWindow.setContent(html);
                    infoWindow.open(map, marker);
                });
            }

            function downloadUrl(url, callback) {
                var request = window.ActiveXObject ? new ActiveXObject('Microsoft.XMLHTTP') : new XMLHttpRequest();

                request.onreadystatechange = function () {
                    if (request.readyState == 4) {
                        request.onreadystatechange = doNothing;
                        callback(request, request.status);
                    }
                };

                request.open('GET', url, true);
                request.send(null);
            }

            function doNothing() {}
            google.maps.event.addDomListener(window, 'load', load);
        </script>
    </div>
    
    <div class="content">
        <h2 class="global-subtitle">Telèfons de contacte</h2>
        <div class="contact_phone">
            <div class="half-page">
                <div class="contact_phone_element">
                    <div class="phone_number">115</div>
                    <div class="phone_name">Servei d’atenció al client</div>
                    <div class="phone_info"><p>De 8h a 24h (dilluns a divendres) i de 9h a 23h (dissabtes i diumenges).</p><p>Per pèrdua o robatori d'un terminal mòbil, l'horari és de 24hrs tots els dies de la setmana.</p></div>
                </div>
                <div class="contact_phone_element">
                    <div class="phone_number">111</div>
                    <div class="phone_name">Informació telefònica nacional i internacional</div>
                    <div class="phone_info"><p>Horari: de 7h a 24h. 365 dies a l'any.</p></div>
                </div>
            </div>
            <div class="half-page">
                <div class="contact_phone_element">
                    <div class="phone_number">00376 301115</div>
                    <div class="phone_name">Servei d'atenció al client, des de l'estranger</div>
                    <div class="phone_info"><p>De 8h a 24h (dilluns a divendres) i de 9h a 23h (dissabtes i diumenges).</p><p>Per pèrdua o robatori d'un terminal mòbil, l'horari és de 24hrs tots els dies de la setmana.</p></div>
                </div>
                <div class="contact_phone_element">
                    <div class="phone_number">875 000</div>
                    <div class="phone_name">Servei d'atenció al client, des de l'estranger</div>
                    <div class="phone_info"><p>Horari: de 8h a 18h.</p></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END SPECIFIC PAGE ON SOM-->


<?php include 'includes/footer.php'; ?>