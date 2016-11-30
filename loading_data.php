<?php include 'includes/header.php'; ?>


  <!--BEGIN SPECIFIC PAGE LOADING CONTENT-->
  <div id="main-content" class="cont-wrapper ajax-loading">
    <div class="content">

    </div>
  </div>
  <!--END SPECIFIC PAGE LOADING CONTENT-->

  <!--BEGIN LOADING LAYER (to be activated BY AJAX responses) -->
  <div class="loading-data-ajax">
    <div class="ajax-general-wrapper"> <!--wide-alert-->

      <img src="./images/loading_icon.gif">
      <div class="loader-message">Carregant dades...</div>
    </div>

  </div>
  <!--IMPORTANT:: REQUIRES LOAD src="/js/dinamicglobalalert.js" SCRIPT IN HEAD-->
  <!--END LOADING LAYER (to be activated BY AJAX responses) -->

<?php include 'includes/footer.php'; ?>