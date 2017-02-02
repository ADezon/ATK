<?php include 'includes/header.php'; ?>


<!--BEGIN SPECIFIC PAGE SEARCH-->
<div class="basic-page cont-wrapper">
    <div class="content">
        <?php include 'includes/breadcrumb.php'; ?>
        
        <div class="search-value-info left">
            <div class="value-search">
                <h1 class="main-title title-value-search">Resultats de la teva cerca:</h1>
                <p class="text-value-search">Lorem ipsu</p>
            </div>
            <div class="recommendation-search">
                <p class="title-recommendation-search">Potser has volgut dir</p>
                <p class="text-recommendation-search">Lorem ipsum</p>
            </div>
        </div>
        <div class="search-value-form right">
          <form>
              <fieldset class="left">
                  <input class="search-value-input" type="text" name="search" placeholder="Cercar">
                  <div class="checkbox-custom">
                      <input type="checkbox" id="cb-option-empresa" name="cb-selector">
                      <label for="cb-option-empresa">Empresa</label>
                      <div class="checkbox-css"></div>
                  </div>
                  <div class="checkbox-custom">
                      <input type="checkbox" id="cb-option-particular" name="cb-selector">
                      <label for="cb-option-particular">Particular</label>
                      <div class="checkbox-css"></div>
                  </div>
              </fieldset>
              <fieldset class="right">
                  <input value="Cercar" class="search-value-send button-pink" type="submit" />
              </fieldset>
          </form>
        </div>
    </div>
    <!-- BEGIN SEARCH FORM RESULTS-->
    <div id="search-results" class="cont-wrapper">
        <div class="content">
            <div class="sidebar">
                <div class="counter-results">
                    1839 resultats
                </div>
                <div class="counter-resultsperpage">
                    Mostrant resultats 1-20
                </div>
                <ul>
                    <li class="active">
                        <a href="#" title=""><span>Sempre</span><span class="counter-filter">10</span></a>
                    </li>
                    <li>
                        <a href="#" title=""><span>L’última hora</span><span class="counter-filter zero">0</span></a>
                    </li>
                    <li>
                        <a href="#" title=""><span>Últimes 24 hores</span><span class="counter-filter">1</span></a>
                    </li>
                    <li>
                        <a href="#" title=""><span>La última setmana</span><span class="counter-filter">2</span></a>
                    </li>
                    <li>
                        <a href="#" title=""><span>L’últim mes</span><span class="counter-filter">7</span></a>
                    </li>
                    <li>
                        <a href="#" title=""><span>L’últim any</span><span class="counter-filter">10</span></a>
                    </li>
                </ul>
            </div>
            <div class="content-ws">
                <div class="results-wrapper">
                    <div class="results-element mobile">
                        <div class="right">
                            <div class="r-type">Particulars</div>
                            <div class="r-title">Lorem ipsum dolor sit amet</div>
                            <div class="r-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis blandit lectus efficitur tincidunt. Quisque a neque in nisl viverra aliquet. Phasellus pulvinar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="results-element email">
                        <div class="right">
                            <div class="r-type">Empreses</div>
                            <div class="r-title">Lorem ipsum dolor sit amet</div>
                            <div class="r-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis blandit lectus efficitur tincidunt. Quisque a neque in nisl viverra aliquet. Phasellus pulvinar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="results-element call">
                        <div class="right">
                            <div class="r-type">Particulars</div>
                            <div class="r-title">Lorem ipsum dolor sit amet</div>
                            <div class="r-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis blandit lectus efficitur tincidunt. Quisque a neque in nisl viverra aliquet. Phasellus pulvinar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="results-element mobile">
                        <div class="right">
                            <div class="r-type">Empreses</div>
                            <div class="r-title">Lorem ipsum dolor sit amet</div>
                            <div class="r-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis blandit lectus efficitur tincidunt. Quisque a neque in nisl viverra aliquet. Phasellus pulvinar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="results-element call">
                        <div class="right">
                            <div class="r-type">Particulars</div>
                            <div class="r-title">Lorem ipsum dolor sit amet</div>
                            <div class="r-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis blandit lectus efficitur tincidunt. Quisque a neque in nisl viverra aliquet. Phasellus pulvinar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="results-element mobile">
                        <div class="right">
                            <div class="r-type">Empreses</div>
                            <div class="r-title">Lorem ipsum dolor sit amet</div>
                            <div class="r-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis blandit lectus efficitur tincidunt. Quisque a neque in nisl viverra aliquet. Phasellus pulvinar.</p>
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
    </div>
    <!-- END SEARCH FORM RESULTS-->
</div>
<!--END SPECIFIC PAGE SEARCH-->


<?php include 'includes/footer.php'; ?>