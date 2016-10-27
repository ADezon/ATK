<?php include 'includes/header_loged.php'; ?>


    <!--BEGIN SPECIFIC PAGE INVOICES-->
    <div class="basic-page cont-wrapper">
        <div class="page-invoices cont-wrapper">
            <div class="content">
                <?php include 'includes/breadcrumb.php'; ?>

                <div class="alert-invoice-unpaid">
                    <p>Tens una <strong>factura del període entre el 20/03/2016 i el 19/04/2016 pendent de pagament</strong> per un import de <strong>42,53 €</strong>.</p>
                    <a class="button-pay-invoice" href="#">Pagar factura</a>
                </div>
                <div class="alert-invoice-unpaid">
                    <p>Tens una <strong>factura del període entre el 20/04/2016 i el 19/05/2016 pendent de pagament</strong> per un import de <strong>50,53 €</strong>.</p>
                    <a class="button-pay-invoice" href="#">Pagar factura</a>
                </div>
                <div class="alert-invoice-unpaid">
                    <p><strong>Disposes de factures pendents de pagament.</strong> Pots abonar-les fàcilment de forma online.</p>
                    <a class="button-pay-invoice" href="#">Veure el detall</a>
                </div>
                <h1 class="main-title">Factures</h1>

                <div class="field-body">
                    <p>A continuació, et mostrem el llistat de les teves últimes factures, on podràs consultar-les en detall i descarregar-te-les.
                        Si vols veure les factures associades a un altre dels teus comptes, selecciona’l i es desplegaran seguidament.</p>
                </div>
            </div>
        </div>
        <div class="result-invoices cont-wrapper">
            <div class="content">
                <div class="invoices-select">
                    <h3>Selecciona el teu compte</h3>
                    <select>
                        <option>123456789</option>
                        <option>123456790</option>
                        <option>123456791</option>
                        <option>123456792</option>
                        <option>123456793</option>
                        <option>123456794</option>
                        <option>123456795</option>
                    </select>
                </div>
                <div class="invoices-counter-paginator">
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
                <div class="invoices-list">
                    <div class="invoices-list-title">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="all_invoices_selector" id="cb_all_invoices" name="check" />
                                <label for="cb_all_invoices"></label>
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <span>Numeració</span>
                        </div>
                        <div class="invoices-list-date">
                            <span>Període</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>Import</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <span>Descàrrega</span>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289865</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2016-10</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>43,75 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289865</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2016-09</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>43,75 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289866</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2016-08</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>48,50 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289867</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2016-07</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>55,75 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289868</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2016-06</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>32,25 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289869</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2016-05</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>68,75 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289870</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2016-04</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>33,75 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289871</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2016-03</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>31,00 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289872</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2016-02</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>70,75 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289873</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2016-01</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>43,75 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289874</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2015-12</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>22,10 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="invoices-list-row">
                        <div class="invoices-list-cb">
                            <div class="checkboxCSS">
                                <input type="checkbox" value="0010289865_invoice_selector" id="cb_invoice_0010289865" name="check" /> <!-- CHANGE IN EACH ROW -->
                                <label for="cb_invoice_0010289865"></label> <!-- CHANGE IN EACH ROW -->
                            </div>
                        </div>
                        <div class="invoices-list-number">
                            <a href="#">0010289875</a>
                        </div>
                        <div class="invoices-list-date">
                            <span>2015-11</span>
                        </div>
                        <div class="invoices-list-amount">
                            <span>90,32 €</span>
                        </div>
                        <div class="invoices-list-downloads">
                            <a target="_blank" href="./uploaded_files/pdf_atelecom.pdf">
                                <img class="icons-download" src="./images/icon-pdf.png" alt=""/>
                            </a>
                            <a target="_blank" href="./uploaded_files/excel_atelecom.xls">
                                <img class="icons-download" src="./images/icon-excel.png" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
                <a href="https://ftp.drupal.org/files/projects/download-7.x-2.5.zip" class="button-pink">DESCARREGA SELECCIONATS</a>
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
    <!--END SPECIFIC PAGE ON SOM-->


<?php include 'includes/footer.php'; ?>