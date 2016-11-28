<?php include 'includes/header_loged.php'; ?>


  <!--BEGIN SPECIFIC PAGE INVOICES PAY-->
  <div class="basic-page cont-wrapper" xmlns="http://www.w3.org/1999/html">
    <div class="page-invoices cont-wrapper">
      <div class="content">
        <?php include 'includes/breadcrumb.php'; ?>

        <h1 class="main-title">Factures pendents de pagament</h1>

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
      </div>
    </div>
    <div class="result-invoices result-invoices-pay cont-wrapper">
      <div class="content">
        <h3>Selecciona les factures a pagar. </h3>
        <div class="field-body">
          <p>L’ordre de pagament, s’ha de realitzar en base a l’antiguitat de
            les factures, és a dir, de la més antiga a la més actual.</p>
        </div>
        <div class="invoices-list invoices-list-pay">
          <div class="invoices-list-title">
            <div class="invoices-list-date">
              <span>Període</span>
            </div>
            <div class="invoices-list-downloads">
              <span></span>
            </div>
            <div class="invoices-list-number">
              <span>Compte</span>
            </div>
            <div class="invoices-list-cb">
              <div class="checkbox-custom">
                <label for="cb-all-invoices">&nbsp;</label>
                <input type="checkbox" value="all_invoices_selector"
                       id="cb-all-invoices" name="cb-selector">
                <div class="checkbox-css"></div>
              </div>
            </div>
            <div class="invoices-list-amount">
              <span>Import pendent</span>
            </div>
          </div>
          <div class="invoices-list-row">
            <div class="invoices-list-date">
              <span>2016-09 / Setembre</span>
            </div>
            <div class="invoices-list-downloads">
              <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">Veure
                PDF</a>
            </div>
            <div class="invoices-list-number">
              <a href="#">0010289864</a>
            </div>
            <div class="invoices-list-cb">
              <div class="checkbox-custom">
                <label for="cb_invoice_0010289864">&nbsp;</label>
                <input type="checkbox" value="0010289864_invoice_selector"
                       id="cb_invoice_0010289864" name="cb-selector-table">
                <div class="checkbox-css"></div>
              </div>
            </div>
            <div class="invoices-list-amount">
              <span>43,75 €</span>
            </div>
          </div>
          <div class="invoices-list-row">
            <div class="invoices-list-date">
              <span>2016-10 / Octubre</span>
            </div>
            <div class="invoices-list-downloads">
              <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">Veure
                PDF</a>
            </div>
            <div class="invoices-list-number">
              <a href="#">0010289865</a>
            </div>
            <div class="invoices-list-cb">
              <div class="checkbox-custom">
                <label for="cb_invoice_0010289865">&nbsp;</label>
                <input type="checkbox" value="0010289865_invoice_selector"
                       id="cb_invoice_0010289865" name="cb-selector-table">
                <div class="checkbox-css"></div>
              </div>
            </div>
            <div class="invoices-list-amount">
              <span>43,75 €</span>
            </div>
          </div>
          <div class="invoices-list-row">
            <div class="invoices-list-date">
              <span>2016-11 / Novembre</span>
            </div>
            <div class="invoices-list-downloads">
              <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">Veure
                PDF</a>
            </div>
            <div class="invoices-list-number">
              <a href="#">0010289866</a>
            </div>
            <div class="invoices-list-cb">
              <div class="checkbox-custom">
                <label for="cb_invoice_0010289866">&nbsp;</label>
                <input type="checkbox" value="0010289866_invoice_selector"
                       id="cb_invoice_0010289866" name="cb-selector-table">
                <div class="checkbox-css"></div>
              </div>
            </div>
            <div class="invoices-list-amount">
              <span>43,75 €</span>
            </div>
          </div>
          <div class="invoices-list-result">
            <div class="text-total">Total seleccionats</div>
            <div class="amount-total">87,5 €</div>
          </div>
          <input value="Continuar amb el pagament" class="button-pink button-pay" type="submit">
        </div>
      </div>
    </div>
  </div>
  <!--END SPECIFIC PAGE INVOICES PAY-->


  <!--ALERT FOR FLOATING DATA-->
  <div class="general-alert-wrapper fixedone">
    <div class="content-general-wrapper wide-alert">
      <div class="alert-general-close">
        <span class="icons icon-close"></span>
      </div>
      <div class="alert-general-title">
        <span class="icons icon-close-rounded"></span>
        Ho sentim!
      </div>

      <div class="alert-general-body">
        <p>
          Recorda que tenen preferència de pagament les factures més antigues d’aquest compte.
        </p>

        <div class="centered"><input type="button" class="pink-button" value="Continuar"></div>

      </div>
    </div>

  </div>
  <!--IMPORTANT:: REQUIRES LOAD src="/js/dinamicglobalalert.js" SCRIPT IN HEAD-->
  <!--END POP-UP GLOBAL ALERT CONTENT-->




  <script language="JavaScript">
    $( document ).ready(function() {
      $('input.button-pay').click(function (e) {
        e.preventDefault();
        console.log('clicked');
        revealalert();
      });
    });
    $('#cb-all-invoices').click(function () {
      if ($(this).is(":checked")) {
        $('.checkbox-custom input').attr('checked', true);
      } else {
        $('.checkbox-custom input').attr('checked', false);
      }
    });
  </script>


<?php include 'includes/footer.php'; ?>