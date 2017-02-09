<?php include 'includes/header_onsom.php'; ?>

  <div id="main-content">

    <!--BEGIN SPECIFIC PAGE ON SOM-->
    <div class="basic-page cont-wrapper">
      <div class="content">
          <?php include 'includes/breadcrumb.php'; ?>

        <h1 class="main-title">On som</h1>

        <div class="field-body">
          <p>Andorra Telecom disposa d’una àmplia xarxa de punts d’atenció al públic per facilitar les gestions dels
            nostres clients.<br/>A l’agència comercial, situada al carrer Prat de la Creu número 2 d’Andorra la Vella,
            se sumen els punts d’atenció a la Massana (Comú de la Massana), Sant Julià (plaça Germandat) i el Pas de la
            Casa (oficina del Comú d’Encamp) així com l’espai Connectem a la mateixa agència comercial.</p>
        </div>
      </div>
      <div class="map-container">
        <form class="legend">
          <ul>
            <li>
              <div class="checkbox-custom">
                <input type="checkbox" id="cb-option-1" name="seu" onclick="setMarkers()" checked="checked">
                <label for="cb-option-1"><span class="circle black"></span>Seu Social</label>
                <div class="checkbox-css"></div>
              </div>
            </li>
            <li>
              <div class="checkbox-custom">
                <input type="checkbox" id="cb-option-2" name="agencia" onclick="setMarkers()" checked="checked">
                <label for="cb-option-2"><span class="circle pinkdark"></span>Agència Comercial</label>
                <div class="checkbox-css"></div>
              </div>
            </li>
            <li>
              <div class="checkbox-custom">
                <input type="checkbox" id="cb-option-3" name="punts" onclick="setMarkers()" checked="checked">
                <label for="cb-option-3"><span class="circle pink"></span>Punts d'atenció al client</label>
                <div class="checkbox-css"></div>
              </div>
            </li>
            <!--                <li>-->
            <!--                    <div class="checkbox-custom">-->
            <!--                        <input type="checkbox" id="cb-option-4" name="espais" onclick="setMarkers()" checked="checked">-->
            <!--                        <label for="cb-option-4"><span class="circle greymedium"></span>Espais Connectem</label>-->
            <!--                        <div class="checkbox-css"></div>-->
            <!--                    </div>-->
            <!--                </li>-->
          </ul>
        </form>

        <div id="map"></div>

        <script language="JavaScript">

          /* PREPARE VARS */
          //arrays to populate map with
          // title | lat | lon| URL | address | timetables | image
          var arrays = {};
          arrays.seu = [
              ['Seu Social', 42.4973607, 1.4989885, 'https://www.google.com',
                  'Mn. Lluis Pujol, 8-14 - AD500 Santa Coloma - Principat d\'Andorra',
                  'De dilluns a divendres de 8:30 a 20 hores<br />Dissabte de 8:30 a 13:30 hores.<br />Tràmits ràpids de les 16 a 20 hores',
                  'https://dummyimage.com/93x112/000/fff.jpg'
              ]
          ];
          arrays.agencia = [
              ['Agencia Comercial', 42.5087435, 1.5264895, 'https://www.google.com',
                  'Carrer Prat de la Creu, 2, d’Andorra la Vella',
                  'De dilluns a divendres de 8:30 a 20 hores<br />Dissabte de 8:30 a 13:30 hores.<br />Tràmits ràpids de les 16 a 20 hores',
                  'https://dummyimage.com/93x112/000/fff.jpg'
              ]
          ];
          arrays.punts = [
              ['La Massana', 42.5448609, 1.5133166, 'https://www.google.com',
                  'Avinguda de Sant Antoni núm. 29, a l\'oficina de Tramits del Comú de la Massana.',
                  'Divendres de 8:00h a 14:30h<br />Oficina de Tràmits del Comú de la Massana<br />Tel. 838 280',
                  'https://dummyimage.com/93x112/000/fff.jpg'],
              ['Pas de la Casa', 42.542435, 1.731218, 'https://www.google.com',
                  'Carrer Sant Jordi, núm.2, El Pas de la Casa',
                  'Dijous de 8:45h a 14:45h<br />Oficina de Tràmits del Comú d\'Encamp<br />Tel. 855810 - 321189',
                  'https://dummyimage.com/93x112/000/fff.jpg'],
              ['Sant Julià de Lòria', 42.4651228, 1.4886004, 'https://www.google.com',
                  'Plaça de la Germandat AD600',
                  'Dimarts i dimecres de 8:30h a 15:00h<br />Fax. 842 900',
                  'https://dummyimage.com/93x112/000/fff.jpg']
          ];

          var customIcons = {
              seu: {
                  icon: '../images/icons/seu.png'
              },
              agencia: {
                  icon: '../images/icons/agencia.png'
              },
              punts: {
                  icon: '../images/icons/atencio.png'
              },
              espais: {
                  icon: '../images/icons/espais.png'
              }
          };

          var lang = 'es'; // Allowed Values: ca, es, en. // LRC <= Change LANGUAGE variable as indicated
          var localeConfigs = {
              ca: {adreca: 'Adreça', horaris: 'Horaris'},
              es: {adreca: 'Dirección', horaris: 'Horarios'},
              en: {adreca: 'Address', horaris: 'Timetables'}
          };

          /* INITIALIZE MAP */
          var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 14,
              center: new google.maps.LatLng(arrays['seu'][0][1], arrays['seu'][0][2]),
              scrollwheel: false,
              mapTypeId: google.maps.MapTypeId.ROADMAP
          });

          var infowindow = new google.maps.InfoWindow();
          var bounds = new google.maps.LatLngBounds();
          var marker, i, markers = [];
          function setMarkers() {
              setAllMap(null);
              $('input[type="checkbox"]:checked').each(function () {
                  for (i = 0; i < arrays[this.name].length; i++) {
                      createMarker(arrays[this.name][i], this.name);
                  }
                  map.fitBounds(bounds);
              });
          }
          function createMarker(oficina, type) {
              var icon = customIcons[type] || {};
              marker = new google.maps.Marker({
                  position: new google.maps.LatLng(oficina[1], oficina[2]),
                  icon: icon.icon,
                  map: map
              });
              // tooltips from arrays prepopulated
              // title | lat | lon | URL | address | timetables | image
              //    0  |  1  |  2  |  3  |   4     |     5      |  6
              var address = "<label>" + localeConfigs[lang]['adreca'] + "</label><div class=\"horaris-infowindow\">" + oficina[4] + "</div>";
              var horari = "<label>" + localeConfigs[lang]['horaris'] + "</label><div class=\"horaris-infowindow\">" + oficina[5] + "</div>";
              var ttimage = "<div class=\"infowindow-image\"><img src=\"" + oficina[6] + "\" /></div>";
              var linkedTitle = "<a href=\"" + oficina[3] + "\">" + oficina[0] + "</a>";
              var html = "<div class=\"info-wrapper\">" + ttimage + "<div class=\"infowindow-infocontainer\">" + linkedTitle + address + horari + "</div></div>";

              google.maps.event.addListener(marker, 'click', (function (marker, i) {
                  return function () {
                      infowindow.setContent(html);
                      infowindow.open(map, marker);
                  }
              })(marker, i));
              bounds.extend(new google.maps.LatLng(oficina[1], oficina[2]));
              markers.push(marker);
          }
          function setAllMap(val) {
              for (var i = 0; i < markers.length; i++) {
                  markers[i].setMap(val);
              }
          }
          setMarkers();
        </script>
      </div>

      <div class="content">
        <h2 class="global-subtitle">Telèfons de contacte</h2>
        <div class="contact_phone">
          <div class="half-page">
            <div class="contact_phone_element">
              <div class="phone_number">115</div>
              <div class="phone_name">Servei d’atenció al client</div>
              <div class="phone_info"><p>De 8h a 24h (dilluns a divendres) i de 9h a 23h (dissabtes i diumenges).</p>
                <p>Per pèrdua o robatori d'un terminal mòbil, l'horari és de 24hrs tots els dies de la setmana.</p>
              </div>
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
              <div class="phone_info"><p>De 8h a 24h (dilluns a divendres) i de 9h a 23h (dissabtes i diumenges).</p>
                <p>Per pèrdua o robatori d'un terminal mòbil, l'horari és de 24hrs tots els dies de la setmana.</p>
              </div>
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

  </div>

<?php include 'includes/footer.php'; ?>