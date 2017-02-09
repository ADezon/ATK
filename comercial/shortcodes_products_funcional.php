<?php include 'includes/header_shortcodes.php'; ?>

  <div id="main-content">

  <!--BEGIN SPECIFIC PAGE SHORTCODE-->
  <div class="basic-page cont-wrapper shortcode-container">
    <div class="content">
        <?php include 'includes/breadcrumb.php'; ?>
      <h1 class="main-title">ShortCodes more flexible</h1>
      <div class="field-body"><p>
          Campo de texto => No está pensado como un short-code. Se entiende que TODA pagina debe tener un "BODY". Aqui
          está considerado como campo.
          Si se implementa como SHORTCODE, deberá usarse una estructura "plana" de shortcode =>
          div.cont-wrapper.shortcode-container > div.content
        </p>
      </div>
    </div>
  </div>
  <!--END SPECIFIC PAGE SHORTCODE-->

  <!-- BEGIN SECTION 3 COLUMNS -->
  INFO for ISOCO  => (content-box-pinksoft should be optional)
  <div class="cont-wrapper bg-grey shortcode-container">
    <div class="content">
      <h2 class="global-subtitle"> Icono + título + texto</h2>
      <div class="three-columns-row">
        <div class="three-columns-element">
          <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="three-columns-title">Lorem Ipsum</span>
          <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
        <div class="three-columns-element">
          <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="three-columns-title">Lorem Ipsum</span>
          <!--                    <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>-->
        </div>
        <div class="three-columns-element last">
          <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="three-columns-title">Lorem Ipsum</span>
          <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
      </div>
    </div>
  </div>
  <!-- END SECTION 3 COLUMNS -->

  <!-- BEGIN SECTION TEXT & PHOTO -->
  INFO for ISOCO  => (content-box-pinksoft should be optional)
  <div class="cont-wrapper shortcode-container">
    <div class="content">
      <h2 class="global-subtitle">TEXT & PHOTO</h2>
      <div class="section-content-ti item-bgrey">
        <img class="content-ti-img right" src="https://dummyimage.com/300x200/8D0E57/ffffff&text=dummy+image"/>
        <div class="content-ti-text right">
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
          doloremque laudantium, totam rem aperiam,
          sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
          magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>
        <p>
          Another Text putted HERE <strong>(esto es OTRO parrafo)</strong>
        </p>
        </div>
      </div>
      <div class="section-content-ti">
        <img class="content-ti-img left" src="https://dummyimage.com/300x200/8D0E57/ffffff&text=dummy+image" alt="">
        <div class="content-ti-text left">
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
            beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
            dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
            incidunt ut labore et dolore magnam.
          </p>
        </div>

      </div>
      <div class="content-box-pinksoft">
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
          aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
          dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, pariatur.
        </p>
      </div>
    </div>
  </div>
  <!-- END SECTION TEXT & PHOTO -->

  <!-- BEGIN SECTION 2 COLUMNS -->
  INFO for ISOCO  =>  (here bgcolor depends on "bg-grey" class + ICONS are OPTIONALs, also description)
  <div class="cont-wrapper bg-grey shortcode-container">
    <div class="content">
      <h2 class="global-subtitle">Títol secció</h2>
      <div class="two-columns-row">
        <div class="two-columns-element">
          <span class="two-columns-icon"><!--<span class="icons icon-offer"></span>--></span>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum</span>
            <span class="two-columns-description">El siguiente ITEM NO tiene descripción</span>
          </div>
        </div>
        <div class="two-columns-element last">
          <span class="two-columns-icon"><span class="icons icon-offer"></span></span>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum</span>
            <!--                        <span class="two-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>-->
          </div>
        </div>
      </div>
      <div class="two-columns-row">
        <div class="two-columns-element">
          <span class="two-columns-icon"><span class="icons icon-offer"></span></span>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum</span>
            <span class="two-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
        </div>
        <div class="two-columns-element last">
          <span class="two-columns-icon"><span class="icons icon-offer"></span></span>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum</span>
            <span class="two-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
        </div>
      </div>
      <div class="two-columns-row">
        <div class="two-columns-element">
          <span class="two-columns-icon"><span class="icons icon-offer"></span></span>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum</span>
            <span class="two-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
        </div>
        <div class="two-columns-element last">
          <span class="two-columns-icon"><span class="icons icon-offer"></span></span>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum</span>
            <span class="two-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END SECTION 2 COLUMNS -->

  <!-- BEGIN SECTION ACCORDION -->
  INFO for ISOCO =>  (DEFAULT bgColor=> Grey. Add Class="transbg-item" to make background transparent)<br>
  You will see here applied to h3 (title of item) and main div (description).<br>
  Requeriment => Si un campo de deja sin contenido, no se tiene que mostrar => If an item has no description/body, title should not be displayed too.
  <br>
  Here UL (in first accordion item) has class "bullets-rosa". => Depends on CKEditor
  <div class="cont-wrapper shortcode-container">
    <div class="content">
      <h2 class="global-subtitle">Títol secció</h2>

      <div id="accordion">
        <h3>Morbi rhoncus dolor non purus molestie, a blandit lorem condimentum.</h3>
        <div class="transbg-item">
          <p>
            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
            ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
            amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
            odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
          </p>
          <p>
            Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
            inceptos himenaeos.
          </p>
          <ul class="bullets-rosa">
            <li>Item list One</li>
            <li>Item list Two</li>
            <li>Item list Three</li>
            <li>Item list Four</li>
            <li>Item list Five</li>
          </ul>
          This is a <a href="#">link</a>
          <p>
          <div class="full-centered">
            This is a FULL centered <a href="#" class="button-pink">button-link</a>
          </div>
          </p>


        </div>
        <h3>Phasellus eget quam condimentum, tincidunt erat nec, tempus ex.</h3>
        <div>
          <p>
            Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
            purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
            velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
            suscipit faucibus urna.
          </p>
        </div>
        <h3 class="transbg-item">Proin molestie erat vel aliquam fermentum.</h3>
        <div>
          <p>
            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
            Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
            ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
            lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
          </p>
        </div>
        <h3>Sed aliquet mauris non sapien ultricies, nec maximus urna aliquam.</h3>
        <div>
          <p>
            Cras dictum. Pellentesque habitant morbi tristique senectus et netus
            et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
            mauris vel est.
          </p>
          <p>
            Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
            inceptos himenaeos.
          </p>
        </div>
        <h3>Etiam non augue convallis, aliquet quam sit amet, posuere justo.</h3>
        <div>
          <p>
            Cras dictum. Pellentesque habitant morbi tristique senectus et netus
            et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
            mauris vel est.
          </p>
          <p>
            Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
            inceptos himenaeos.
          </p>
        </div>
      </div>

    </div>
    <script>
        // See: http://api.jqueryui.com/accordion/ for options
        $(function () {
            // change the heigh for display on mobile to content height, in desktop, set the taller one.
            function getFillType() {
                return ( (window.innerWidth || document.documentElement.clientWidth) < 720) ? 'content' : 'auto';
            }

            $("#accordion").accordion({
                collapsible: true,
                heightStyle: getFillType()
            });
        });
    </script>
  </div>
  <!-- END SECTION ACCORDION -->

  <!-- BEGIN SECTION STEP -->
  INFO for ISOCO  =>  (here bgcolor depends on "bg-grey" class)
  <div class="cont-wrapper bg-grey shortcode-container custom-destacado">
    <div class="content">
      <h2 class="global-subtitle">Títol secció</h2>
      <h3 class="title-step">
        <span class="rounded-number">1</span>
        <span class="title-step-text">Títol del primer pas</span>
      </h3>
      <div class="content-step">
        <div class="content-step-img">
          <img src="./images/i-imgtest-little.png" alt="">
        </div>
        <div class="content-step-text">
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
            dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
            sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
            magnam aliquam quaerat voluptatem.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END SECTION STEP -->

  <!-- BEGIN SECTION TABS -->
  INFO for ISOCO  =>  (asigning bg-grey to the cont-wrapper will do the changes for TABS)


  <div class="cont-wrapper shortcode-container bg-grey">
    <div class="content">
      <h2 class="global-subtitle only-desktop">TABS Title</h2>

      <div class="tabs-mobile-selector only-mobile">
        <select class="make-me-styled">
          <option value="0" selected>Tab 1 (titulo largo prueba)</option>
          <option value="1">Tab 2 (titulo largo prueba)</option>
          <option value="2">Tab 3 (titulo largo prueba)</option>
          <option value="3">Tab 4 (titulo largo prueba)</option>
        </select>
      </div>

      <div id="tabs">
        <ul>
          <li><a href="#tabs-1">Tab 1 (titulo largo prueba)</a></li>
          <li><a href="#tabs-2">Tab 2 (titulo largo prueba)</a></li>
          <li><a href="#tabs-3">Tab 3 (titulo largo prueba)</a></li>
          <li><a href="#tabs-4">Tab 4 (titulo largo prueba)</a></li>
        </ul>
        <div id="tabs-1">
          <p>Content FIRST tab. <strong>Sed ut perspiciatis unde omnis iste </strong>natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis
            et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
            aspernatur aut odit aut fugit, sed quia consequuntur magni
            dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
            sit amet, consectetur, adipisci velit, sed quia non numquam
            eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
            quis nostrum exercitationem ullam corporis suscipit laboriosam,
            nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit
            esse quam nihil molestiae consequatur, vel illum qui dolorem eum
            fugiat quo voluptas nulla pariatur.</p>
        </div>
        <div id="tabs-2">
          <p><strong>Content SECOND tab.</strong> Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc.
            Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut
            tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam.
            Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc.
            Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat,
            tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris
            consectetur tortor et purus.</p>
        </div>
        <div id="tabs-3">
          <p>03 TAB !!!<br />Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula
            accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti
            sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel
            enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium
            nec, feugiat nec, luctus a, lacus.</p>
          <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla
            facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec
            mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam
            scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor,
            tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo.
            Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
        </div>
        <div id="tabs-4">
          <p><strong>444444</strong>. Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula
            accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti
            sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel
            enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium
            nec, feugiat nec, luctus a, lacus.</p>
          <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla
            facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec
            mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam
            scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor,
            tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo.
            Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
        </div>
      </div>


      <script>
          $(function () {
              $("#tabs").tabs();
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
  <!-- END SECTION TABS -->


  <!-- BEGIN SECTION STEPS -->
  INFO for ISOCO  =>  (here bgcolor depends on "bg-grey" class)<br>
  Items in steps are adaptative. You can add as many as you need.
  <div class="cont-wrapper bg-grey shortcode-container">
    <div class="content">
      <h2 class="global-subtitle">Process title</h2>

      <ol class="progress">
        <li class="is-active" data-step="1">
          Selecciona
        </li>
        <li data-step="2">
          Lorem ipsum
        </li>
        <li data-step="3" class="progress__last">
          Lorem ipsum
        </li>
      </ol>
      <ol class="progress">
        <li class="is-complete" data-step="1">
          Selecciona
        </li>
        <li class="is-active" data-step="2">
          Lorem ipsum
        </li>
        <li data-step="3" class="progress__last">
          Lorem ipsum
        </li>
      </ol>
      <ol class="progress">
        <li class="is-complete" data-step="1">
          Selecciona
        </li>
        <li class="is-complete" data-step="2">
          Lorem ipsum
        </li>
        <li class="is-active" data-step="3" class="progress__last">
          Lorem ipsum
        </li>
      </ol>

      <h3>With 6 ITEMS</h3>
      <ol class="progress">
        <li class="is-complete" data-step="1">
          Selecciona
        </li>
        <li class="is-active" data-step="2">
          Step 2
        </li>
        <li data-step="3">
          Step 3
        </li>
        <li data-step="4">
          Step 4
        </li>
        <li data-step="5">
          Step 5
        </li>
        <li data-step="6" class="progress__last">
          Last Step
        </li>
      </ol>

      <ol class="progress">
        <li class="is-complete" data-step="1">
          Selecciona
        </li>
        <li class="is-complete" data-step="2">
          Step 2
        </li>
        <li class="is-complete" data-step="3">
          Step 3
        </li>
        <li class="is-complete" data-step="4">
          Step 4
        </li>
        <li class="is-complete" data-step="5">
          Step 5
        </li>
        <li class="is-active" data-step="6" class="progress__last">
          Last Step
        </li>
      </ol>
    </div>
  </div>
  <!-- END SECTION STEPS -->

  <!-- BEGIN SECTION LIST -->
  <div class="cont-wrapper shortcode-container w-bottomline">
    <div class="content">
      <h2 class="global-subtitle">Títol secció</h2>
      <ul class="menu-list">
        <li class="active"><a href="#">Preu</a></li>
        <li><a href="#">Característiques</a></li>
        <li><a href="#">Avantatges</a></li>
        <li><a href="#">Canals</a></li>
        <li><a href="#">Requeriments</a></li>
        <li><a href="#">T’ajudem</a></li>
      </ul>
    </div>
  </div>
  <!-- END SECTION LIST -->

  <!-- BEGIN SECTION PRODUCT -->
  <div class="cont-wrapper shortcode-container">
    <div class="content">
      <h2 class="global-subtitle">Ara amb el doble de dades per al teu mòbil</h2>
      <div class="half-page">
        <div class="product-prices">
          <div class="product-prices-general">
            <h3 class="product-prices-title">Des de</h3>
            <p class="product-prices-price">49€<span class="price-month">/mes</span></p>
            <a href="#" class="button-pink">Et truquem gratuïtament</a>
          </div>

          <div class="product-prices-others">
            <div class="product-prices-mini-section"><span>Preus per altres zones</span></div>
            <div class="product-prices-mini-title"><span>Lorem ipsum</span></div>
            <p class="product-prices-mini-price">49€<span class="price-month">/mes</span></p>
          </div>

          <div class="product-prices-others">
            <div class="product-prices-mini-section"><a href="#" title="">Més zones</a></div>
            <div class="product-prices-mini-title"><span>Lorem ipsum</span></div>
            <p class="product-prices-mini-price">49€<span class="price-month">/mes</span></p>
          </div>
        </div>
      </div>
      <div class="half-page">
        <div class="product-features">
          <div class="product-features-element">
            <h4 class="product-features-title">Lorem Ipsum</h4>
            <div class="product-features-text">
              <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
          </div>
          <div class="product-features-element">
            <h4 class="product-features-title">Lorem Ipsum</h4>
            <div class="product-features-text">
              <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
          </div>
          <div class="product-features-element">
            <h4 class="product-features-title">Lorem Ipsum</h4>
            <div class="product-features-text">
              <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
          </div>
          <div class="product-features-element">
            <h4 class="product-features-title">Lorem Ipsum</h4>
            <div class="product-features-text">
              <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END SECTION PRODUCT -->

  <!-- BEGIN SECTION 3 COLUMNS VARIATION (more text below) -->
  IDEM as Icono + título + texto
  <div class="cont-wrapper bg-grey shortcode-container three-cols-variation">
    <div class="content">
      <h2 class="global-subtitle">Característiques</h2>
      <div class="three-columns-row">
        <div class="three-columns-element">
          <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="three-columns-title">Lorem Ipsum</span>
          <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
        <div class="three-columns-element">
          <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="three-columns-title">Lorem Ipsum</span>
          <!--                    <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>-->
        </div>
        <div class="three-columns-element last">
          <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="three-columns-title">Lorem Ipsum</span>
          <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
      </div>

      <div class="three-columns-row">
        <div class="three-columns-element">
          <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="three-columns-title">Lorem Ipsum</span>
          <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
        <div class="three-columns-element">
          <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="three-columns-title">Lorem Ipsum</span>
          <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
        <div class="three-columns-element last">
          <span class="three-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="three-columns-title">Lorem Ipsum</span>
          <span class="three-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
      </div>

    </div>
  </div>
  <!-- END SECTION 3 COLUMNS VARIATION (more text below)-->


  <!-- BEGIN SECTION 3 COLUMNS VARIATION (more text below) -->
  IDEM as Icono + título + texto (FOUR COLUMNS)
  <div class="cont-wrapper bg-grey shortcode-container three-cols-variation">
    <div class="content">
      <h2 class="global-subtitle">Four Columns</h2>
      <div class="four-columns-row">
        <div class="four-columns-item">
          <span class="four-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="four-columns-title">Lorem Ipsum</span>
          <span class="four-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
        <div class="four-columns-item">
          <span class="four-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="four-columns-title">Lorem Ipsum</span>
          <!--                    <span class="four-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>-->
        </div>
        <div class="four-columns-item">
          <span class="four-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="four-columns-title">Lorem Ipsum</span>
          <!--                    <span class="four-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>-->
        </div>
        <div class="four-columns-item last">
          <span class="four-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="four-columns-title">Lorem Ipsum</span>
          <span class="four-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
      </div>

      <div class="four-columns-row">
        <div class="four-columns-item">
          <span class="four-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="four-columns-title">Lorem Ipsum</span>
          <span class="four-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
        <div class="four-columns-item">
          <span class="four-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="four-columns-title">Lorem Ipsum</span>
          <span class="four-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
        <div class="four-columns-item">
          <span class="four-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="four-columns-title">Lorem Ipsum</span>
          <span class="four-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
        <div class="four-columns-item">
          <span class="four-columns-icon"><span class="icons icon-offer"></span></span>
          <span class="four-columns-title">Lorem Ipsum</span>
          <span class="four-columns-description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
        </div>
      </div>

    </div>
  </div>
  <!-- END SECTION 3 COLUMNS VARIATION (more text below)-->

  <!-- BEGIN SECTION SLIDER PRODUCTS -->
  Background color can be changed to Grey With bg-color class in cont-wrapper<br>
  If only have ONE "page" (slide with 12 images or less) slider will NOT show "pager".
  <div class="cont-wrapper shortcode-container">
    <div class="content sliders">
      <h2 class="global-subtitle">Canals que pots veure</h2>

      <div class="slider-multiple-desktop">
        <!-- Slider FOR DESKTOP (multiple items per SLIDE )-->
        <div class="slider-deskt">
          <ul class="slides">
            <li>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items last"><a href="#" title=""><img
                      src="https://dummyimage.com/150x150/000/fff.jpg"/></a></div>

              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a>
              </div>
              <div class="six-items"><a href="#" title=""><img src="https://dummyimage.com/150x150/000/fff.jpg"/></a>
              </div>
              <!--                            <div class="six-items last"><a href="#" title=""><img src="https://dummyimage.com/150x150/d30573/fff.jpg"/></a></div>-->
            </li>
          </ul>
        </div>

        <script language="JavaScript">
            $(document).ready(function () {
                var timering = 7000;
                // SINGLE FLEXSLIDER.
                $('.slider-deskt').flexslider({
                    animation: "slide",
                    directionNav: true,
                    controlNav: false,
                    slideshowSpeed: timering,
                    minItems: 1,
                    maxItems: 1
                });
            });
        </script>
      </div>
      <!-- MOBILE ONLY-->
      <div class="slider-single-mobile">
        <!-- Slider FOR MOBILE (one item per SLIDE )-->
        <div class="slider-mob">
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
          </div>
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
          </div>
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
          </div>
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
          </div>
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
          </div>
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
          </div>
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
          </div>
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
          </div>
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
          </div>
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
          </div>
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/d30573/fff.jpg&text=imatge+slide"/></a>
          </div>
          <div><a href="#" title=""><img src="https://dummyimage.com/210x210/471732/fff.jpg&text=imatge+slide"/></a>
          </div>
        </div>
        <script language="JavaScript">
            $(document).ready(function () {
                // http://kenwheeler.github.io/slick/
                $('.slider-mob').slick({
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 3,
                    responsive: [
                        {
                            breakpoint: 720,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 3
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            });
        </script>
      </div>

    </div>
  </div>
  <!-- END SECTION SLIDER PRODUCTS -->

  <!-- BEGIN SECTION LIST HELP -->
  To choose between ONE or TWO columns, you need 2 templates (HTML structure changes) as in example:
  <div class="cont-wrapper bg-grey shortcode-container">
    <div class="content">
      <h2 class="global-subtitle"><a href="#">T’ajudem (TITULO de Listas con enlace)</a></h2>
      <dl class="help-list">
        <div class="half-page">
          <dt>
            <a href="#"><span>Quins són les tarifes Mobiland roaming?</span><span class="icons icon-right"></span></a>
          </dt>
          <dt>
            <a href="#"><span>Com puc configurar el meu mòbil?</span><span class="icons icon-right"></span></a>
          </dt>
          <dt>
            <a href="#"><span>Què és Mobiland?</span><span class="icons icon-right"></span></a>
          </dt>
        </div>
        <div class="half-page">
          <dt>
            <a href="#"><span>Com contractar?</span><span class="icons icon-right"></span></a>
          </dt>
          <dt>
            <a href="#"><span>Campanya Descatalogació Coure</span><span class="icons icon-right"></span></a>
          </dt>
        </div>
      </dl>
    </div>
    <div class="content">
      <div>One column Only:</div>
      <div class="half-page">
        <dl class="help-list">
          <dt>
            <a href="#"><span>Quins són les tarifes Mobiland roaming?</span><span class="icons icon-right"></span></a>
          </dt>
          <dt>
            <a href="#"><span>Com puc configurar el meu mòbil?</span><span class="icons icon-right"></span></a>
          </dt>
          <dt>
            <a href="#"><span>Què és Mobiland?</span><span class="icons icon-right"></span></a>
          </dt>
          <dt>
            <a href="#"><span>Com contractar?</span><span class="icons icon-right"></span></a>
          </dt>
          <dt>
            <a href="#"><span>Campanya Descatalogació Coure</span><span class="icons icon-right"></span></a>
          </dt>
        </dl>
      </div>

      <div class="half-page">
<!--        /**/        -->
      </div>
    </div>
    <div class="content">
      <div>Two column With ANY content at RIGHT section (half-page class): </div>
      <div class="half-page">
        <dl class="help-list">
          <dt>
            <a href="#"><span>Quins són les tarifes Mobiland roaming?</span><span class="icons icon-right"></span></a>
          </dt>
          <dt>
            <a href="#"><span>Com puc configurar el meu mòbil?</span><span class="icons icon-right"></span></a>
          </dt>
          <dt>
            <a href="#"><span>Què és Mobiland?</span><span class="icons icon-right"></span></a>
          </dt>
          <dt>
            <a href="#"><span>Com contractar?</span><span class="icons icon-right"></span></a>
          </dt>
          <dt>
            <a href="#"><span>Campanya Descatalogació Coure</span><span class="icons icon-right"></span></a>
          </dt>
        </dl>
      </div>

      <div class="half-page">
        <h4>Any other content HERE.</h4>
        <p>
          Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
          Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
          inceptos himenaeos.
        </p>
        <ul class="bullets-rosa">
          <li>Item list One</li>
          <li>Item list Two</li>
          <li>Item list Three</li>
          <li>Item list Four</li>
          <li>Item list Five</li>
        </ul>
        This is a <a href="#">link</a>
        <div class="full-centered">
          This is a full centered <a href="#" class="button-pink">button-link</a>
        </div>
      </div>

    </div>
  </div>
  <!-- END SECTION LIST HELP -->

  <!-- BEGIN SECTION BOTONS i LINKS -->
  <div class="cont-wrapper shortcode-container">
    <div class="content">
      <h2 class="global-subtitle">Botons i links</h2>
      <!--  BEGIN LINKS-LIST SOLO PARA MOSTRARLOS CENTRADOS COMO EN EL DISEÑO... NO SE UTILIZA ESTE CONTENEDOR CUANDO LO USEN SUELTOS -->
      <div class="links-list">
        <a href="#" class="button-shortcode button-pink">Botó actiu 1</a>
        <a href="#" class="button-shortcode button-active">Botó actiu 2</a>
        <a nohref class="button-shortcode button-disabled">Botó inactiu</a>
        <a href="#" class="button-shortcode button-clean">Link</a>
      </div>
      <!--  END LINKS-LIST SOLO PARA MOSTRARLOS CENTRADOS COMO EN EL DISEÑO... NO SE UTILIZA ESTE CONTENEDOR CUANDO LO USEN SUELTOS -->
      <div class="banner-ads">
        <img src="./images/i-bannertest.jpg" alt="" class="banner-ads-img">
      </div>
    </div>
  </div>
  <!-- END SECTION BOTONS i LINKS -->

<h2>CORPORATIVE</h2>

  <div class="cont-wrapper shortcode-container corporative with-margin-bottom">
    <div class="content">
      <h2 class="global-subtitle">Equip</h2>
      <div class="items-container">
        <div>
          <img src="https://dummyimage.com/200x200/d8d8d8/000.jpg">
          <div class="person">Alejandra Jiménez Bidal</div>
          <div class="department">Recursos Humans</div>
          <div class="social">
            texto SIN nada de redes sociales<br>
            mas texto SIN redes sociales
          </div>
        </div>

        <div>
          <img src="https://dummyimage.com/200x200/d8d8d8/000.jpg">
          <div class="person">Alejandra Jiménez Bidal</div>
          <div class="department">Recursos Humans</div>
          <div class="social">
            texto SIN nada de redes sociales<br>
            mas texto SIN redes sociales
          </div>
        </div>

        <div>
          <img src="https://dummyimage.com/200x200/d8d8d8/000.jpg">
          <div class="person">Alejandra Jiménez Bidal</div>
          <div class="department">Recursos Humans</div>
          <div class="social">
            texto SIN nada de redes sociales<br>
            mas texto SIN redes sociales
          </div>
        </div>

        <div>
          <img src="https://dummyimage.com/100x100/d8d8d8/000.jpg">
          <div class="person">Alejandra Jiménez Bidal</div>
          <div class="department">Recursos Humans</div>
          <div class="social">
            <span class="linkedin">/alejandrajimenezbidal</span>
            <span class="email">ajimenez@andorratelecom.com</span>
          </div>
        </div>

        <div>
          <img src="https://dummyimage.com/100x100/d8d8d8/000.jpg">
          <div class="person">Alejandra Jiménez Bidal</div>
          <div class="department">Recursos Humans</div>
          <div class="social">
            <span class="linkedin">/alejandrajimenezbidal</span>
            <span class="email">ajimenez@andorratelecom.com</span>
          </div>
        </div>

        <div>
          <img src="https://dummyimage.com/100x100/d8d8d8/000.jpg">
          <div class="person">Alejandra Jiménez Bidal</div>
          <div class="department">Recursos Humans</div>
          <div class="social">
            <span class="linkedin">/alejandrajimenezbidal</span>
            <span class="email">ajimenez@andorratelecom.com</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- BEGIN SECTION 2 COLUMNS W/Pictures -->
  <div class="cont-wrapper shortcode-container corporative with-margin-bottom">
    <div class="content">
      <h2 class="global-subtitle">Títol secció (With PICTURES read-more and DESCRIPTION optionals)</h2>
      <div class="two-columns-row">
        <div class="two-columns-element">
          <div class="two-columns-image">
            <img src="https://dummyimage.com/234x160/d8d8d8/000.jpg">
          </div>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum dolor sit amet</span>
            <span class="two-columns-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi… </span>
          </div>
        </div>
        <div class="two-columns-element last">
          <div class="two-columns-image">
            <img src="https://dummyimage.com/234x160/d8d8d8/000.jpg">
          </div>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum dolor sit amet</span>
            <span class="two-columns-description"><a
                  href="#" class="readmore">Llegir més</a></span>
          </div>
        </div>
      </div>
      <div class="two-columns-row">
        <div class="two-columns-element">
          <div class="two-columns-image">
            <img src="https://dummyimage.com/234x160/d8d8d8/000.jpg">
          </div>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum dolor sit amet</span>
<!--            <span class="two-columns-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi… <a-->
<!--                  href="#" class="readmore">Llegir més</a></span>-->
          </div>
        </div>
        <div class="two-columns-element last">
          <div class="two-columns-image">
            <img src="https://dummyimage.com/234x160/d8d8d8/000.jpg">
          </div>
          <div class="two-columns-info">
            <span class="two-columns-title">Lorem Ipsum dolor sit amet</span>
            <span class="two-columns-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi… <a
                  href="#" class="readmore">Llegir més</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END SECTION 2 COLUMNS W/Pictures -->

  <!-- BEGIN SECTION 3 COLUMNS ALARM -->
DEFAULT 3 columns (actual)
  <div class="cont-wrapper bg-grey shortcode-container corporative">
    <div class="content">
      <div class="three-columns-row">
        <div class="three-columns-element">
          <div class="highlighted">70%</div>
          <div class="highlight-info">Lorem ipsum dolor sit</div>
        </div>

        <div class="three-columns-element">
          <div class="highlighted">+70.000</div>
          <div class="highlight-info">Lorem ipsum</div>
        </div>

        <div class="three-columns-element last">
          <div class="highlighted">91%</div>
          <div class="highlight-info">Lorem ipsum dolor sit amet consectetur</div>
        </div>
      </div>
    </div>
  </div>
  <!-- END SECTION 3 COLUMNS ALARM -->

  <!-- BEGIN SECTION 2 COLUMNS ALARM -->
  2 columns ROW  => for RESPONSIVNESS we need change HTML STRUCTURE
  <div class="cont-wrapper bg-grey shortcode-container corporative">
    <div class="content">
      <div class="two-columns-row">
        <div class="two-columns-item">
          <div class="highlighted">70%</div>
          <div class="highlight-info">Lorem ipsum dolor sit</div>
        </div>

        <div class="two-columns-item">
          <div class="highlighted">+70.000</div>
          <div class="highlight-info">Lorem ipsum</div>
        </div>
      </div>
    </div>
  </div>
  <!-- END SECTION 2 COLUMNS ALARM -->

  <!-- BEGIN SECTION 4 COLUMNS ALARM -->
4 columns ROW => for RESPONSIVNESS we need change HTML STRUCTURE
  <div class="cont-wrapper bg-grey shortcode-container corporative">
    <div class="content">
      <div class="four-columns-row">
        <div class="four-columns-item">
          <div class="highlighted">70%</div>
          <div class="highlight-info">Lorem ipsum dolor sit</div>
        </div>

        <div class="four-columns-item">
          <div class="highlighted">+70.000</div>
          <div class="highlight-info">Lorem ipsum</div>
        </div>

        <div class="four-columns-item">
          <div class="highlighted">91%</div>
          <div class="highlight-info">Lorem ipsum dolor sit amet consectetur</div>
        </div>

        <div class="four-columns-item">
          <div class="highlighted">91%</div>
          <div class="highlight-info">Lorem ipsum dolor sit amet consectetur</div>
        </div>
      </div>
    </div>
  </div>
  <!-- END SECTION 3 COLUMNS ALARM -->

  </div>

<?php include 'includes/footer.php'; ?>