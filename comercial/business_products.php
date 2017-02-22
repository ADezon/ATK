<?php include 'includes/header.php'; ?>

  <div id="main-content">

    <!--BEGIN SPECIFIC PAGE TRAFFIC VALIDATE CODE-->
    <div class="cont-wrapper page-client-products business-products">
      <div class="content">

          <?php include 'includes/breadcrumb.php'; ?>

        <h1 class="main-title">Els meus productes</h1>

        <div class="invoices-select">
          <h3>Selecciona el teu compte</h3>
          <select>
            <option>Tots els comptes</option>
            <option>123456789</option>
            <option>123456791</option>
            <option>123456792</option>
            <option>123456793</option>
            <option>123456794</option>
            <option>123456795</option>
          </select>
        </div>
      </div>

    </div>

    <div class="cont-wrapper">
      <div class="content">

        <div class="full-product-container">
          <!-- BEGIN ALL PARENT ITEMS Inside -->

          <div class="header-product">
            <i class="icons icon-web"></i>
            <h3>Mòdul Accés Internet Empreses / AIE1-0007198530</h3><a href="#" class="controller">Més informació</a>
            <div class="header-product-price">59€</div>

              <div class="info-to-show">
                <div class="odd">
                  <h4>Tipus servei</h4>
                  Mòdul Accés Internet Empreses
                </div>

                <div class="even">
                  <h4>Tipus tarifa</h4>
                  Tarifa plana
                </div>

                <div class="odd">
                  <h4>Service ID </h4>
                  AIE1-0007198530
                </div>

                <div class="even">
                  <h4>Notifiació de les modificacions sobre el producte contractat </h4>
                  No
                </div>
              </div>
          </div>

          <!-- sub-level One Type A >> Inside INFO -->
          <div class="leveltwo-product inside first"><!-- << ALWAYS ADD "first" class to the FIRST sub-level element-->
            <h3>Cost activació AIE1-0007198530</h3><a href="#" class="controller">Més informació</a>

            <div class="info-to-show">
              <div class="odd">
                <h4>Tipus servei</h4>
                Mòdul Accés Internet Empreses
              </div>

              <div class="even">
                <h4>Tipus tarifa</h4>
                Tarifa plana
              </div>
            </div>
          </div>

          <!-- sub-level One Type B >> Outside INFO -->
          <div class="leveltwo-product outside">
            <h3>Internet Stretch Tariffs</h3>

            <div class="last-level">
              <h4 class="last-level-header">Tarifa plana</h4> <a href="#" class="controller">Més informació</a>

              <div class="info-to-show">
                <div class="odd">
                  <h4>Tipus servei</h4>
                  Mòdul Accés Internet Empreses
                </div>

                <div class="even">
                  <h4>Tipus tarifa</h4>
                  Tarifa plana
                </div>
              </div>
            </div>

          </div>
          <!-- END ALL PARENT ITEMS Inside -->
        </div>

        <div class="full-product-container">
          <!-- BEGIN another BLOCK with all PARENT ITEMS Inside -->

          <div class="header-product">
            <i class="icons icon-attention"></i>
            <h3>Mòdul Seguretat  Inforàtica Empreses / SIE2-0017198534</h3><a href="#" class="controller">Més informació</a>
            <div class="header-product-price">90€</div>

            <div class="info-to-show">
              <div class="odd">
                <h4>Tipus servei</h4>
                Mòdul Accés Internet Empreses
              </div>

              <div class="even">
                <h4>Tipus tarifa</h4>
                Tarifa plana
              </div>

              <div class="odd">
                <h4>Service ID </h4>
                AIE1-0007198530
              </div>

              <div class="even">
                <h4>Notifiació de les modificacions sobre el producte contractat </h4>
                No
              </div>

              <div class="odd">
                <h4>Mes info</h4>
                Aquest block conté més informació adicional
              </div>

              <div class="even">
                <h4>Contractacio Lorem Ipsum</h4>
                Contingut de proves
              </div>

              <div class="odd">
                <h4>Service ID </h4>
                AIE1-0007198530
              </div>

              <div class="even">
                <h4>Notifiació de les alertes del servei</h4>
                Si
              </div>
            </div>
          </div>


          <!-- sub-level One Type A >> Inside INFO -->
          <div class="leveltwo-product inside first"><!-- << ALWAYS ADD "first" class to the FIRST sub-level element-->
            <h3>Cost activació SIE2-0017198534</h3><a href="#" class="controller">Més informació</a>

            <div class="info-to-show">
              <div class="odd">
                <h4>Tipus servei</h4>
                Activació Seguretat Informàtica Empreses
              </div>

              <div class="even">
                <h4>Tipus tarifa</h4>
                Tarifa plana
              </div>
            </div>
          </div>

          <!-- sub-level One Type B >> Outside INFO -->
          <div class="leveltwo-product outside">
            <h3>Other ORDER in module Internet Stretch Tariffs</h3>

            <div class="last-level">
              <h4 class="last-level-header">Another LAST level big title</h4> <a href="#" class="controller">Més informació</a>

              <div class="info-to-show">
                <div class="odd">
                  <h4>Tipus servei</h4>
                  Mòdul Accés Internet Empreses
                </div>

                <div class="even">
                  <h4>Tipus tarifa</h4>
                  Tarifa plana
                </div>
              </div>
            </div>
          </div>


          <!-- END ALL PARENT ITEMS Inside -->
        </div>


      </div>

    </div>

    <!--END SPECIFIC PAGE TRAFFIC VALIDATE CODE-->

    <script language="JavaScript">
        $(document).ready(function () {
            $('.controller').click(function (e) {
               e.preventDefault();
               $(this).parent().find('.info-to-show').slideToggle();
               $(this).toggleClass('opened');
            });

        });

    </script>

  </div>

<?php include 'includes/footer.php'; ?>