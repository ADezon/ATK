<?php include 'includes/header_guia.php'; ?>


<!--BEGIN SPECIFIC PAGE GUIA-->
<div class="basic-page cont-wrapper">
  <div class="content">
    <?php include 'includes/breadcrumb.php'; ?>

    <h1 class="main-title">Guia</h1>

    <div class="field-body">
      <p>Vols trobar el número de telèfon d’algú conegut o d’una empresa en
        concret? Amb la Guia t’ho posem fàcil.
        Troba números de particulars i d’empreses d’Andorra d’una manera ràpida
        i senzilla: Selecciona si es tracta d’un particular o empresa,
        el tipus d’activitat, si escau, i la parròquia a la qual pertany, i et
        mostrarem els resultats que responguin als teus criteris de cerca.</p>
    </div>
  </div>
  <!-- BEGIN SEARCH PHONEBOOK FORM-->
  <form method="post">
    <div class="phonebook-search-elements">

      <div class="rao_social">
        <div class="field-input-wrapper">
          <input class="field-input" type="text">
        </div>
        <input class="rao_img" title="Cerca" type="submit" value="">
      </div>
      <div class="linea_cerca">
        <div class="capsa_cerca">
          <a href="#" title="Cerca avançada">Cerca avançada</a>
        </div>
        <div class="cerca_avancada_section">
          <fieldset class="aui-fieldset  ">
            <div class="aui-fieldset-content ">
               <span class="aui-field aui-field-select aui-field-menu">
                  <span class="aui-field-content">
                     <label class="aui-field-label"
                            for="_laguia_WAR_laguiaportlet_INSTANCE_q3El_type">
                     Cerques un particular o una empresa?
                     </label>
                     <span class="aui-field-element ">
                        <div class="jqTransformSelectWrapper"
                             style="z-index: 10; width: 149px;">
                           <div class="jqTransformSelectInsideWrapper"><span
                               style="width: 120px;">
                              Qualsevol
                              </span>
                           </div>
                           <a href="#" class="jqTransformSelectOpen"></a>
                           <ul
                             style="width: 123px; display: none; visibility: visible; height: 78px; overflow: hidden;">
                              <li><a href="#" index="0" class="selected">
                                 Qualsevol
                                 </a>
                              </li>
                              <li><a href="#" index="1">
                                 Empresa
                                 </a>
                              </li>
                              <li><a href="#" index="2">
                                 Particular
                                 </a>
                              </li>
                           </ul>
                           <select
                             class="aui-field-input aui-field-input-select aui-field-input-menu jqTransformHidden"
                             id="_laguia_WAR_laguiaportlet_INSTANCE_q3El_type"
                             name="_laguia_WAR_laguiaportlet_INSTANCE_q3El_type"
                             onchange="updateSelect(this);">
                              <option value=""> Qualsevol </option>
                              <option value="empresa"> Empresa </option>
                              <option value="particular"> Particular </option>
                           </select>
                        </div>
                     </span>
                  </span>
               </span>
              <span class="aui-field aui-field-select aui-field-menu">
                  <span class="aui-field-content">
                     <label class="aui-field-label">Tipus activitat</label>
                     <div class="ui-widget">
                        <div class="jqTransformSelectWrapper"
                             style="z-index: 9; width: 403px;">
                           <div class="jqTransformSelectInsideWrapper"><span
                               style="width: 374px;">Qualsevol</span></div>
                           <a href="#" class="jqTransformSelectOpen"></a>
                           <ul
                             style="height: 280px; display: none; visibility: visible;">
                              <li><a href="#" index="0" class="selected">Qualsevol </a> </li>
                              <li><a href="#" index="1">ACADEMIES</a> </li>
                              <li><a href="#" index="2">ACADEMIES CONFECCIO</a> </li>
                              <li><a href="#"
                                     index="3">ACADEMIES IDIOMES</a> </li>
                              <li><a href="#"
                                     index="4">ACADEMIES MUSICA</a> </li>
                              <li><a href="#"
                                     index="5">ACADEMIES PERRUQUERIA</a> </li>
                              <li><a href="#" index="6">ACTIVITATS D'ASSESSORAMENT EN DIRECCIÓ I GESTIÓ EMPRESARIAL</a> </li>
                              <li><a href="#" index="7">ACTIVITATS DE SERVEIS PERSONALS</a> </li>
                              <li><a href="#" index="8">ACUPUNTURA</a> </li>
                              <li><a href="#" index="9">ADMINISTRADORS DE FINQUES</a> </li>
                              <li><a href="#" index="10">ADOBS</a> </li>
                              <li><a href="#" index="11">ADVOCATS</a> </li>
                              <li><a href="#"
                                     index="12">AGENCIES DE COL·LOCACIO</a> </li>
                              <li><a href="#"
                                     index="13">AGENCIES MATRIMONIALS</a> </li>
                              <li><a href="#"
                                     index="14">AGENT COMERCIAL</a> </li>
                              <li><a href="#"
                                     index="15">AGENT D'ASSEGURANCES</a> </li>
                              <li><a href="#"
                                     index="16">AGENT DE DUANES</a> </li>
                              <li><a href="#" index="17">AGRICULTURA</a> </li>
                              <li><a href="#" index="18">AGÈNCIA DE NOTÍCIES</a> </li>
                              <li><a href="#" index="19">AIGUES</a> </li>
                              <li><a href="#" index="20">AILLAMENTS</a> </li>
                              <li><a href="#" index="21">ALBERGS</a> </li>
                              <li><a href="#" index="22">ALIMENTACIO</a> </li>
                              <li><a href="#"
                                     index="23">ALIMENTACIO MAJORISTES</a> </li>
                              <li><a href="#" index="24">ALUMINIS</a> </li>
                              <li><a href="#" index="25">AMBIENTADORS</a> </li>
                              <li><a href="#" index="26">AMBULANCIES</a> </li>
                              <li><a href="#" index="27">ANALISIS</a> </li>
                              <li><a href="#" index="28">ANALISIS CLINIQUES</a> </li>
                              <li><a href="#" index="29">ANATOMIA PATOLOGICA</a> </li>
                              <li><a href="#" index="30">ANCORATGES</a> </li>
                              <li><a href="#" index="31">ANESTESIOLOGIA I REANIMACIO</a> </li>
                              <li><a href="#" index="32">ANESTESISTES</a> </li>
                              <li><a href="#" index="33">ANIMALS</a> </li>
                              <li><a href="#" index="34">ANTENES</a> </li>
                              <li><a href="#" index="35">ANTIGUITATS</a> </li>
                              <li><a href="#" index="36">APARCAMENTS</a> </li>
                              <li><a href="#"
                                     index="37">APARELL DIGESTIU</a> </li>
                              <li><a href="#"
                                     index="38">APARELL DIGESTIU</a> </li>
                              <li><a href="#" index="39">APARELLS</a> </li>
                              <li><a href="#"
                                     index="40">APARELLS DE PRECISIO</a> </li>
                              <li><a href="#" index="41">APARELLS RELAXACIO</a> </li>
                              <li><a href="#" index="42">APARTAMENTS</a> </li>
                              <li><a href="#"
                                     index="43">APARTAMENTS LLOGUERS</a> </li>
                              <li><a href="#"
                                     index="44">APARTAMENTS TURÍSTICS</a> </li>
                              <li><a href="#" index="45">APARTHOTELS</a> </li>
                              <li><a href="#" index="46">ARMERIES</a> </li>
                              <li><a href="#" index="47">ARQUITECTES</a> </li>
                              <li><a href="#" index="48">ARQUITECTES TECNICS</a> </li>
                              <li><a href="#"
                                     index="49">ARRANJAMENTS DE ROBA</a> </li>
                              <li><a href="#" index="50">ART</a> </li>
                              <li><a href="#"
                                     index="51">ART EXPOSICIONS</a> </li>
                              <li><a href="#" index="52">ART OBJECTES</a> </li>
                              <li><a href="#" index="53">ARTESANIA</a> </li>
                              <li><a href="#" index="54">ARTICLES</a> </li>
                              <li><a href="#" index="55">ARTICLES DE FESTA</a> </li>
                              <li><a href="#"
                                     index="56">ARTICLES DE SEGONA MÀ</a> </li>
                              <li><a href="#"
                                     index="57">ARTS GRAFIQUES</a> </li>
                              <li><a href="#" index="58">ASCENSORS</a> </li>
                              <li><a href="#" index="59">ASFALTS</a> </li>
                              <li><a href="#" index="60">ASSEGURANCES</a> </li>
                              <li><a href="#"
                                     index="61">ASSEGURANCES AGENCIES</a> </li>
                              <li><a href="#" index="62">ASSESSORAMENT</a> </li>
                              <li><a href="#" index="63">ASSESSORAMENT</a> </li>
                              <li><a href="#"
                                     index="64">ASSESSORAMENT FISCAL</a> </li>
                              <li><a href="#"
                                     index="65">ASSESSORAMENT HOTELER</a> </li>
                              <li><a href="#"
                                     index="66">ASSESSORAMENT IMATGE</a> </li>
                              <li><a href="#"
                                     index="67">ASSESSORAMENT QUALITAT</a> </li>
                              <li><a href="#" index="68">ASSESSORIA D'IMATGE PERSONAL</a> </li>
                              <li><a href="#" index="69">ASSESSORIES</a> </li>
                              <li><a href="#" index="70">ASSESSORIES EMPRESA</a> </li>
                              <li><a href="#" index="71">ASSISTENCIA</a> </li>
                              <li><a href="#" index="72">ASSISTÈNCIA INTEGRAL A PERSONES</a> </li>
                              <li><a href="#" index="73">ASSOCIACIONS</a> </li>
                              <li><a href="#" index="74">ATRACCIONS</a> </li>
                              <li><a href="#"
                                     index="75">AUDIOPROTESISTES</a> </li>
                              <li><a href="#" index="76">AUDIOVISUALS</a> </li>
                              <li><a href="#" index="77">AUDITORIES</a> </li>
                              <li><a href="#"
                                     index="78">AUDITORIES AMBIENTALS</a> </li>
                              <li><a href="#" index="79">AUTOCARS</a> </li>
                              <li><a href="#" index="80">AUTOESCOLES</a> </li>
                              <li><a href="#" index="81">AUTOMOBILS</a> </li>
                              <li><a href="#"
                                     index="82">AUTOMOBILS ACCESSORIS</a> </li>
                              <li><a href="#"
                                     index="83">AUTOMOBILS COMPRA-VENDA</a> </li>
                              <li><a href="#" index="84">AUTOMOBILS CONCESSIONARIS</a> </li>
                              <li><a href="#"
                                     index="85">AUTOMOBILS ELECTRICITAT</a> </li>
                              <li><a href="#" index="86">AUTOMOBILS LLOGUER</a> </li>
                              <li><a href="#" index="87">AUTOMOBILS RECANVIS</a> </li>
                              <li><a href="#" index="88">AVIACIO</a> </li>
                              <li><a href="#" index="89">BACALLANERIES</a> </li>
                              <li><a href="#" index="90">BALLS</a> </li>
                              <li><a href="#" index="91">BANCS</a> </li>
                              <li><a href="#" index="92">BANQUETS</a> </li>
                              <li><a href="#" index="93">BARBERIES</a> </li>
                              <li><a href="#" index="94">BARS</a> </li>
                              <li><a href="#" index="95">BASARS</a> </li>
                              <li><a href="#" index="96">BASE DE DADES</a> </li>
                              <li><a href="#" index="97">BASTIDES</a> </li>
                              <li><a href="#" index="98">BEGUDES</a> </li>
                              <li><a href="#" index="99">BELLES ARTS</a> </li>
                              <li><a href="#" index="100">BIBLIOTEQUES</a> </li>
                              <li><a href="#" index="101">BICICLETES</a> </li>
                              <li><a href="#" index="102">BIJUTERIES</a> </li>
                              <li><a href="#" index="103">BINGOS</a> </li>
                              <li><a href="#" index="104">BIOLEGS</a> </li>
                              <li><a href="#" index="105">BIOQUIMICA CLINICA</a> </li>
                              <li><a href="#" index="106">BOLIGRAFS</a> </li>
                              <li><a href="#" index="107">BOSSES</a> </li>
                              <li><a href="#" index="108">BRODATS</a> </li>
                              <li><a href="#" index="109">BRONZE</a> </li>
                              <li><a href="#" index="110">BUGADERIES</a> </li>
                              <li><a href="#" index="111">CAFES</a> </li>
                              <li><a href="#" index="112">CAFETERIES</a> </li>
                              <li><a href="#" index="113">CALEFACCIONS</a> </li>
                              <li><a href="#" index="114">CALEFACCIONS INSTAL.LACIONS</a> </li>
                              <li><a href="#" index="115">CALEFACCIONS MANTENIMENT</a> </li>
                              <li><a href="#"
                                     index="116">CALEFACCIONS MATERIAL</a> </li>
                              <li><a href="#" index="117">CAMPINGS</a> </li>
                              <li><a href="#"
                                     index="118">CANALITZACIONS</a> </li>
                              <li><a href="#" index="119">CARNISSERIES</a> </li>
                              <li><a href="#" index="120">CARTRONS</a> </li>
                              <li><a href="#" index="121">CASES DE CAMP I GRANGES</a> </li>
                              <li><a href="#" index="122">CATIFES</a> </li>
                              <li><a href="#"
                                     index="123">CENTRAL DE RESERVES</a> </li>
                              <li><a href="#"
                                     index="124">CENTRALS DE COMPRES</a> </li>
                              <li><a href="#" index="125">CENTRES COMERCIALS</a> </li>
                              <li><a href="#" index="126">CENTRES DE MEDICINA DE L'ESPORT</a> </li>
                              <li><a href="#" index="127">CENTRES DE PLANXAT</a> </li>
                              <li><a href="#" index="128">CERAMIQUES</a> </li>
                              <li><a href="#" index="129">CERTIFICACIÓ ENERGÈTICA</a> </li>
                              <li><a href="#" index="130">CERVESERIES</a> </li>
                              <li><a href="#" index="131">CIBERCAFE</a> </li>
                              <li><a href="#" index="132">CIBERTECA</a> </li>
                              <li><a href="#"
                                     index="133">CINEMATOGRAFIA</a> </li>
                              <li><a href="#" index="134">CINEMATOGRAFIA PRODUCCIONS</a> </li>
                              <li><a href="#" index="135">CINEMES</a> </li>
                              <li><a href="#" index="136">CIRURGIA GRAL-APARELL DIGESTIU</a> </li>
                              <li><a href="#" index="137">CLAUS</a> </li>
                              <li><a href="#"
                                     index="138">CLIMATITZACIO</a> </li>
                              <li><a href="#" index="139">CLIMATITZACIO MANTENIMENT</a> </li>
                              <li><a href="#"
                                     index="140">CLINICS I BIOLOGICS</a> </li>
                              <li><a href="#" index="141">CLINIQUES</a> </li>
                              <li><a href="#" index="142">CLINIQUES MEDIQUES</a> </li>
                              <li><a href="#"
                                     index="143">CLINIQUES VETERINARIES</a> </li>
                              <li><a href="#"
                                     index="144">CLUBS ESPORTIUS</a> </li>
                              <li><a href="#" index="145">COL.LEGIS</a> </li>
                              <li><a href="#" index="146">COMESTIBLES</a> </li>
                              <li><a href="#" index="147">COMPLEMENTS</a> </li>
                              <li><a href="#" index="148">COMPTABLES</a> </li>
                              <li><a href="#" index="149">COMUNICACIO</a> </li>
                              <li><a href="#"
                                     index="150">CONCESSIONARIS</a> </li>
                              <li><a href="#" index="151">CONFECCIONS</a> </li>
                              <li><a href="#"
                                     index="152">CONFECCIONS INFANTIL</a> </li>
                              <li><a href="#" index="153">CONFECCIONS SENYOR</a> </li>
                              <li><a href="#"
                                     index="154">CONFECCIONS SENYORA</a> </li>
                              <li><a href="#" index="155">CONFITERIES</a> </li>
                              <li><a href="#" index="156">CONGELATS</a> </li>
                              <li><a href="#" index="157">CONGRESSOS I CONVENCIONS</a> </li>
                              <li><a href="#"
                                     index="158">CONSELLS FILOSOFICS</a> </li>
                              <li><a href="#" index="159">CONSERVES</a> </li>
                              <li><a href="#"
                                     index="160">CONSTRUCCIONS</a> </li>
                              <li><a href="#"
                                     index="161">CONSTRUCCIONS COBERTES</a> </li>
                              <li><a href="#" index="162">CONSTRUCCIONS CONTROL DE MATERIALS</a> </li>
                              <li><a href="#"
                                     index="163">CONSTRUCCIONS MATERIAL</a> </li>
                              <li><a href="#" index="164">CONSTRUCCIONS METAL.LIQUES</a> </li>
                              <li><a href="#" index="165">CONSULTORIA</a> </li>
                              <li><a href="#" index="166">CONSULTORIA EN COMUNICACIO</a> </li>
                              <li><a href="#" index="167">CONSULTORIS</a> </li>
                              <li><a href="#" index="168">CONSULTORIS MEDICS</a> </li>
                              <li><a href="#" index="169">CONSULTORIS VETERINARIS</a> </li>
                              <li><a href="#"
                                     index="170">CONTROLS DE QUALITAT</a> </li>
                              <li><a href="#" index="171">COPISTERIA</a> </li>
                              <li><a href="#" index="172">CORTINES</a> </li>
                              <li><a href="#" index="173">COSMETICS</a> </li>
                              <li><a href="#"
                                     index="174">CREIXEMENT PERSONAL</a> </li>
                              <li><a href="#"
                                     index="175">CRISTALLERIES</a> </li>
                              <li><a href="#" index="176">DANSA</a> </li>
                              <li><a href="#"
                                     index="177">DANSA ARTICLES</a> </li>
                              <li><a href="#" index="178">DE GUIES TURISTICS</a> </li>
                              <li><a href="#" index="179">DE PROPIETATS INDUSTRIALS</a> </li>
                              <li><a href="#" index="180">DECORACIO</a> </li>
                              <li><a href="#" index="181">DECORACIO ARTICLES</a> </li>
                              <li><a href="#" index="182">DECORADORS</a> </li>
                              <li><a href="#"
                                     index="183">DENTISTES-ODONTOLEGS</a> </li>
                              <li><a href="#" index="184">DERMATOLOGIA</a> </li>
                              <li><a href="#" index="185">DESINFECCIO</a> </li>
                              <li><a href="#"
                                     index="186">DESINSECTACIONS</a> </li>
                              <li><a href="#"
                                     index="187">DESRATITZACIONS</a> </li>
                              <li><a href="#"
                                     index="188">DESTIL.LERIES</a> </li>
                              <li><a href="#"
                                     index="189">DESTIL.LERIES</a> </li>
                              <li><a href="#" index="190">DETECTIUS PRIVATS</a> </li>
                              <li><a href="#" index="191">DIBUIXANTS</a> </li>
                              <li><a href="#" index="192">DIETETICA</a> </li>
                              <li><a href="#" index="193">DIETISTES</a> </li>
                              <li><a href="#"
                                     index="194">DIGITALITZACIO</a> </li>
                              <li><a href="#" index="195">DIPÒSITS D'HIDROCARBURS</a> </li>
                              <li><a href="#" index="196">DISCOTEQUES</a> </li>
                              <li><a href="#" index="197">DISCS</a> </li>
                              <li><a href="#" index="198">DISFRESSES</a> </li>
                              <li><a href="#" index="199">DISSENY I CREACIO GRAFICA</a> </li>
                              <li><a href="#"
                                     index="200">DISSENYS PUBLICITARIS</a> </li>
                              <li><a href="#" index="201">DISTRIBUCIONS DE CORREU</a> </li>
                              <li><a href="#" index="202">DISTRIBUCIONS PUBLICITÁRIES</a> </li>
                              <li><a href="#" index="203">DOLÇOS</a> </li>
                              <li><a href="#" index="204">DROGUERIES</a> </li>
                              <li><a href="#" index="205">DUANES</a> </li>
                              <li><a href="#"
                                     index="206">DUANES AGENCIES</a> </li>
                              <li><a href="#" index="207">EBENISTES</a> </li>
                              <li><a href="#" index="208">ECOLOGIA</a> </li>
                              <li><a href="#" index="209">ECONOMISTES</a> </li>
                              <li><a href="#" index="210">EDICIO DE REVISTES</a> </li>
                              <li><a href="#"
                                     index="211">EDIFICACIO SALUDABLE</a> </li>
                              <li><a href="#" index="212">EDITORIALS</a> </li>
                              <li><a href="#"
                                     index="213">ELECTRICISTES</a> </li>
                              <li><a href="#" index="214">ELECTRICITAT</a> </li>
                              <li><a href="#"
                                     index="215">ELECTRICITAT ARTICLES</a> </li>
                              <li><a href="#" index="216">ELECTRICITAT COMPANYIES</a> </li>
                              <li><a href="#" index="217">ELECTRICITAT MAJORISTES</a> </li>
                              <li><a href="#"
                                     index="218">ELECTRICITAT MATERIAL</a> </li>
                              <li><a href="#"
                                     index="219">ELECTRICITAT TALLERS</a> </li>
                              <li><a href="#" index="220">ELECTRODOMESTICS</a> </li>
                              <li><a href="#" index="221">ELECTRODOMESTICS REPARACIONS</a> </li>
                              <li><a href="#"
                                     index="222">ELECTROMECANICA</a> </li>
                              <li><a href="#" index="223">ELECTROMECANICA TALLERS</a> </li>
                              <li><a href="#" index="224">ELECTRONICA</a> </li>
                              <li><a href="#" index="225">EMBALATGES</a> </li>
                              <li><a href="#" index="226">EMBOTITS</a> </li>
                              <li><a href="#"
                                     index="227">EMMAGATZEMATGE</a> </li>
                              <li><a href="#" index="228">EMPAQUETATGE</a> </li>
                              <li><a href="#" index="229">EMPRESES</a> </li>
                              <li><a href="#" index="230">ENDOCRINOLOGIA I NUTRICIO</a> </li>
                              <li><a href="#" index="231">ENERGIA</a> </li>
                              <li><a href="#"
                                     index="232">ENERGIA SOLAR</a> </li>
                              <li><a href="#" index="233">ENGINYERIA</a> </li>
                              <li><a href="#"
                                     index="234">ENGINYERIA MATERIAL</a> </li>
                              <li><a href="#"
                                     index="235">ENGINYERIA PROJECTES</a> </li>
                              <li><a href="#" index="236">ENGINYERIA TRACTAMENT AIGUES-MEDI AMBIENT</a> </li>
                              <li><a href="#" index="237">ENGINYERS</a> </li>
                              <li><a href="#" index="238">ENGINYERS AGRONOMS</a> </li>
                              <li><a href="#" index="239">ENGINYERS CAMINS-CANALS-PORTS</a> </li>
                              <li><a href="#" index="240">ENGINYERS CIVIL I D'URBANISME</a> </li>
                              <li><a href="#"
                                     index="241">ENGINYERS INDUSTRIALS</a> </li>
                              <li><a href="#" index="242">ENGINYERS MEDIAMBIENTALS</a> </li>
                              <li><a href="#" index="243">ENGINYERS TECNICS</a> </li>
                              <li><a href="#" index="244">ENGINYERS TECNICS INDUSTRIALS</a> </li>
                              <li><a href="#" index="245">ENGINYERS TELECOMUNICACIO</a> </li>
                              <li><a href="#"
                                     index="246">ENGINYERS TOPOGRAFS</a> </li>
                              <li><a href="#" index="247">ENGINYERS TRACTAMENT D'AIGÜES-POL.LUCIO</a> </li>
                              <li><a href="#"
                                     index="248">ENQUADERNACIONS</a> </li>
                              <li><a href="#" index="249">ENVANS I FALSOS SOSTRES</a> </li>
                              <li><a href="#"
                                     index="250">ENVERNISSADORS</a> </li>
                              <li><a href="#" index="251">EQUIPAMENTS</a> </li>
                              <li><a href="#"
                                     index="252">EQUIPAMENTS COMERCIALS</a> </li>
                              <li><a href="#"
                                     index="253">EQUIPAMENTS ESPORTS</a> </li>
                              <li><a href="#" index="254">EQUIPAMENTS HOTELS</a> </li>
                              <li><a href="#" index="255">EQUIPAMENTS ROBA DE TREBALL</a> </li>
                              <li><a href="#" index="256">EQUITACIO</a> </li>
                              <li><a href="#" index="257">ESCALES</a> </li>
                              <li><a href="#" index="258">ESCOLA SUP D'ELECTRICITAT DE PARIS</a> </li>
                              <li><a href="#" index="259">ESCOLES</a> </li>
                              <li><a href="#" index="260">ESCRIPTORS</a> </li>
                              <li><a href="#" index="261">ESOTERISME</a> </li>
                              <li><a href="#" index="262">ESPECTACLES</a> </li>
                              <li><a href="#" index="263">ESPECTACLES AGENTS</a> </li>
                              <li><a href="#" index="264">ESPORTIVES</a> </li>
                              <li><a href="#" index="265">ESPORTS</a> </li>
                              <li><a href="#" index="266">ESPORTS ARTICLES</a> </li>
                              <li><a href="#" index="267">ESPORTS AVENTURA</a> </li>
                              <li><a href="#"
                                     index="268">ESPORTS CAÇA I PESCA</a> </li>
                              <li><a href="#" index="269">ESPORTS CICLISME</a> </li>
                              <li><a href="#"
                                     index="270">ESPORTS SUBMARINISME</a> </li>
                              <li><a href="#" index="271">ESQUI</a> </li>
                              <li><a href="#" index="272">ESQUI ABALISAMENT DE PISTES D'ESQUI</a> </li>
                              <li><a href="#"
                                     index="273">ESQUI ESCOLES</a> </li>
                              <li><a href="#"
                                     index="274">ESQUI ESTACIONS</a> </li>
                              <li><a href="#"
                                     index="275">ESQUI MATERIAL</a> </li>
                              <li><a href="#" index="276">ESTACIONS SERVEI</a> </li>
                              <li><a href="#"
                                     index="277">ESTOMATOLOGIA</a> </li>
                              <li><a href="#" index="278">ESTUCADORS</a> </li>
                              <li><a href="#" index="279">ETIQUETES</a> </li>
                              <li><a href="#" index="280">EXCAVACIONS</a> </li>
                              <li><a href="#" index="281">EXCURSIONS</a> </li>
                              <li><a href="#" index="282">EXPOSICIONS</a> </li>
                              <li><a href="#" index="283">EXPOSICIONS SALES</a> </li>
                              <li><a href="#" index="284">EXTINTORS</a> </li>
                              <li><a href="#" index="285">FABRICACIÓ DE TANCAMENTS METÀL·LICS</a> </li>
                              <li><a href="#" index="286">FARMACIES</a> </li>
                              <li><a href="#"
                                     index="287">FARMÀCIES MAJORISTES</a> </li>
                              <li><a href="#" index="288">FEDERACIONS</a> </li>
                              <li><a href="#" index="289">FERRALLA</a> </li>
                              <li><a href="#" index="290">FERRETERIES</a> </li>
                              <li><a href="#" index="291">FERROS</a> </li>
                              <li><a href="#" index="292">FIDUCIARIS</a> </li>
                              <li><a href="#" index="293">FILATELIES</a> </li>
                              <li><a href="#" index="294">FINANCERES</a> </li>
                              <li><a href="#" index="295">FINESTRES</a> </li>
                              <li><a href="#"
                                     index="296">FISIOTERAPEUTES</a> </li>
                              <li><a href="#"
                                     index="297">FITOSANITARIS</a> </li>
                              <li><a href="#" index="298">FLEQUES</a> </li>
                              <li><a href="#" index="299">FLORISTERIES</a> </li>
                              <li><a href="#" index="300">FONAMENTACIONS ESPECIALS</a> </li>
                              <li><a href="#"
                                     index="301">FONEDORS-RAFINADORS</a> </li>
                              <li><a href="#" index="302">FORMACIO</a> </li>
                              <li><a href="#" index="303">FORMACIO CREIXEMENT PERSONAL</a> </li>
                              <li><a href="#" index="304">FORMACIO MANIPULACIO D'ALIMENTS</a> </li>
                              <li><a href="#" index="305">FORMATGES</a> </li>
                              <li><a href="#" index="306">FORMIGONS</a> </li>
                              <li><a href="#"
                                     index="307">FORMIGONS PROJECTATS</a> </li>
                              <li><a href="#" index="308">FORNS</a> </li>
                              <li><a href="#"
                                     index="309">FOTOCOPIADORES</a> </li>
                              <li><a href="#" index="310">FOTOGRAFIA</a> </li>
                              <li><a href="#"
                                     index="311">FOTOGRAFIA LABORATORIS</a> </li>
                              <li><a href="#"
                                     index="312">FOTOGRAFIA MATERIAL</a> </li>
                              <li><a href="#" index="313">FOTOGRAFS</a> </li>
                              <li><a href="#"
                                     index="314">FRED INDUSTRIAL</a> </li>
                              <li><a href="#" index="315">FRED INDUSTRIAL REPARACIONS</a> </li>
                              <li><a href="#" index="316">FRUITERIES</a> </li>
                              <li><a href="#" index="317">FRUITES</a> </li>
                              <li><a href="#" index="318">FRUITES MAGATZEMS</a> </li>
                              <li><a href="#" index="319">FRUITES MAJORISTES</a> </li>
                              <li><a href="#" index="320">FRUITS SECS</a> </li>
                              <li><a href="#" index="321">FUMADOR ARTICLES</a> </li>
                              <li><a href="#" index="322">FUNDACIÓ</a> </li>
                              <li><a href="#" index="323">FUNERARIES</a> </li>
                              <li><a href="#" index="324">FUSTERIES</a> </li>
                              <li><a href="#" index="325">FUSTES</a> </li>
                              <li><a href="#" index="326">GANIVETERIES</a> </li>
                              <li><a href="#" index="327">GARATGES</a> </li>
                              <li><a href="#" index="328">GAS</a> </li>
                              <li><a href="#"
                                     index="329">GAS INDUSTRIAL</a> </li>
                              <li><a href="#" index="330">GAS-OIL</a> </li>
                              <li><a href="#" index="331">GASOLINERES</a> </li>
                              <li><a href="#"
                                     index="332">GENERES DE PUNT</a> </li>
                              <li><a href="#" index="333">GEOBIOLOGIA</a> </li>
                              <li><a href="#" index="334">GEOFÍSICA</a> </li>
                              <li><a href="#" index="335">GEOLOGIA</a> </li>
                              <li><a href="#" index="336">GEOTECNIA</a> </li>
                              <li><a href="#" index="337">GEOTÈRMIA</a> </li>
                              <li><a href="#"
                                     index="338">GESTIÓ DE COBRAMENTS</a> </li>
                              <li><a href="#"
                                     index="339">GESTORA DE PATRIMONIS</a> </li>
                              <li><a href="#" index="340">GESTORIES</a> </li>
                              <li><a href="#" index="341">GESTORS</a> </li>
                              <li><a href="#" index="342">GIMNASOS</a> </li>
                              <li><a href="#" index="343">GLOBUS AEROSTATICS</a> </li>
                              <li><a href="#"
                                     index="344">GRANS MAGATZEMS</a> </li>
                              <li><a href="#" index="345">GRAVADORS</a> </li>
                              <li><a href="#" index="346">GRUES</a> </li>
                              <li><a href="#"
                                     index="347">GUARDERIES INFANTILS</a> </li>
                              <li><a href="#" index="348">GUIES</a> </li>
                              <li><a href="#" index="349">GUIXAIRES</a> </li>
                              <li><a href="#" index="350">HELICOPTERS</a> </li>
                              <li><a href="#" index="351">HERALDICA</a> </li>
                              <li><a href="#" index="352">HERBOLARIS</a> </li>
                              <li><a href="#"
                                     index="353">HIDROGEOLOGIA</a> </li>
                              <li><a href="#" index="354">HIDROLOGIA</a> </li>
                              <li><a href="#" index="355">HIDROSEMBRA</a> </li>
                              <li><a href="#" index="356">HIPICA</a> </li>
                              <li><a href="#" index="357">HOSPITALS</a> </li>
                              <li><a href="#" index="358">HOSTALS</a> </li>
                              <li><a href="#" index="359">HOTELS</a> </li>
                              <li><a href="#" index="360">IL·LUMINACIO</a> </li>
                              <li><a href="#"
                                     index="361">IMMOBILIARIES</a> </li>
                              <li><a href="#" index="362">IMMUNOLOGIA</a> </li>
                              <li><a href="#"
                                     index="363">IMPERMEABILITZACIONS</a> </li>
                              <li><a href="#"
                                     index="364">IMPORT-EXPORT</a> </li>
                              <li><a href="#" index="365">IMPORTACIONS</a> </li>
                              <li><a href="#" index="366">IMPREMTES</a> </li>
                              <li><a href="#" index="367">INFERMERES</a> </li>
                              <li><a href="#" index="368">INFOGRAFIA</a> </li>
                              <li><a href="#" index="369">INFORMATICA</a> </li>
                              <li><a href="#"
                                     index="370">INFORMATICA MATERIAL</a> </li>
                              <li><a href="#"
                                     index="371">INSPECCIO I CONTROL</a> </li>
                              <li><a href="#"
                                     index="372">INSTAL.LACIONS</a> </li>
                              <li><a href="#" index="373">INSTAL.LACIONS COMERCIALS</a> </li>
                              <li><a href="#" index="374">INSTAL.LACIONS ESPORTIVES</a> </li>
                              <li><a href="#" index="375">INSTITUTS</a> </li>
                              <li><a href="#" index="376">INSTITUTS BELLESA</a> </li>
                              <li><a href="#"
                                     index="377">INSTITUTS ENSENYAMENT</a> </li>
                              <li><a href="#" index="378">INSTRUMENTAL MEDIC</a> </li>
                              <li><a href="#" index="379">INSTRUMENTAL MÈDIC REPARACIONS</a> </li>
                              <li><a href="#" index="380">INTERIORISME</a> </li>
                              <li><a href="#"
                                     index="381">INTERMEDIARIS</a> </li>
                              <li><a href="#" index="382">INTERNET</a> </li>
                              <li><a href="#" index="383">INTERNET DISSENY PAGINES WEB</a> </li>
                              <li><a href="#" index="384">INTERNET SERVIDORS</a> </li>
                              <li><a href="#" index="385">INTERPRETS</a> </li>
                              <li><a href="#" index="386">INVERSIONS</a> </li>
                              <li><a href="#" index="387">INVERSIONS IMMOBILIARIES</a> </li>
                              <li><a href="#"
                                     index="388">INVERSIONS MOBILIARIES</a> </li>
                              <li><a href="#" index="389">IOGA</a> </li>
                              <li><a href="#" index="390">JARDINERIA</a> </li>
                              <li><a href="#" index="391">JOCS</a> </li>
                              <li><a href="#" index="392">JOGUINES</a> </li>
                              <li><a href="#" index="393">JOIERIES</a> </li>
                              <li><a href="#"
                                     index="394">JOIERIES MAJORISTES</a> </li>
                              <li><a href="#" index="395">JOIERIES TALLERS</a> </li>
                              <li><a href="#" index="396">JOIERS</a> </li>
                              <li><a href="#" index="397">LABORATORIS</a> </li>
                              <li><a href="#" index="398">LABORATORIS</a> </li>
                              <li><a href="#" index="399">LABORATORIS AIGÜES</a> </li>
                              <li><a href="#" index="400">LABORATORIS PROTESI DENTAL</a> </li>
                              <li><a href="#" index="401">LABORS</a> </li>
                              <li><a href="#" index="402">LAMPISTERIES</a> </li>
                              <li><a href="#" index="403">LAMPISTES</a> </li>
                              <li><a href="#" index="404">LICORS</a> </li>
                              <li><a href="#"
                                     index="405">LINIES AERIES</a> </li>
                              <li><a href="#" index="406">LLANES</a> </li>
                              <li><a href="#"
                                     index="407">LLARS D'INFANTS</a> </li>
                              <li><a href="#" index="408">LLENCERIES</a> </li>
                              <li><a href="#" index="409">LLENYES</a> </li>
                              <li><a href="#" index="410">LLEVADORES</a> </li>
                              <li><a href="#" index="411">LLIBRERIES</a> </li>
                              <li><a href="#" index="412">LLOGUERS</a> </li>
                              <li><a href="#" index="413">LLOGUERS</a> </li>
                              <li><a href="#" index="414">LOGISTICA</a> </li>
                              <li><a href="#" index="415">LOGOPEDES</a> </li>
                              <li><a href="#" index="416">LUBRIFICANTS</a> </li>
                              <li><a href="#" index="417">MAJORISTES</a> </li>
                              <li><a href="#" index="418">MAJORISTES</a> </li>
                              <li><a href="#" index="419">MAJORISTES</a> </li>
                              <li><a href="#" index="420">MANYERIA</a> </li>
                              <li><a href="#" index="421">MAQUINARIA</a> </li>
                              <li><a href="#"
                                     index="422">MAQUINARIA ACCESORIS</a> </li>
                              <li><a href="#" index="423">MAQUINARIA COMPRA-VENDA</a> </li>
                              <li><a href="#" index="424">MAQUINARIA INDUSTRIES HOTELERE</a> </li>
                              <li><a href="#" index="425">MAQUINES</a> </li>
                              <li><a href="#" index="426">MAQUINES FOTOCOPIADORES</a> </li>
                              <li><a href="#"
                                     index="427">MAQUINES MAJORISTES</a> </li>
                              <li><a href="#"
                                     index="428">MAQUINES RECREATIVES</a> </li>
                              <li><a href="#"
                                     index="429">MAQUINÀRIA DE LLOGUER</a> </li>
                              <li><a href="#" index="430">MARBRE</a> </li>
                              <li><a href="#" index="431">MARCS</a> </li>
                              <li><a href="#" index="432">MARKETING</a> </li>
                              <li><a href="#"
                                     index="433">MARROQUINERIA</a> </li>
                              <li><a href="#" index="434">MASSATGISTES</a> </li>
                              <li><a href="#" index="435">MATALASSOS</a> </li>
                              <li><a href="#" index="436">MATERIAL</a> </li>
                              <li><a href="#" index="437">MATERIAL AGRICOLA</a> </li>
                              <li><a href="#" index="438">MATERIAL CLINIC-QUIRURGIC</a> </li>
                              <li><a href="#" index="439">MATERIAL ESCOLAR</a> </li>
                              <li><a href="#"
                                     index="440">MATERIAL MÈDIC</a> </li>
                              <li><a href="#" index="441">MATERIAL OFICINA</a> </li>
                              <li><a href="#" index="442">MEDI AMBIENT</a> </li>
                              <li><a href="#" index="443">MEDICINA BIOLÒGICA</a> </li>
                              <li><a href="#"
                                     index="444">MEDICINA DEL TREBALL</a> </li>
                              <li><a href="#" index="445">MEDICINA ESPORTIVA</a> </li>
                              <li><a href="#" index="446">MEDICINA ESPORTIVA</a> </li>
                              <li><a href="#" index="447">MEDICINA ESTETICA REPARADORA</a> </li>
                              <li><a href="#" index="448">MEDICINA INTERNA</a> </li>
                              <li><a href="#"
                                     index="449">MEDICINA LEGAL</a> </li>
                              <li><a href="#" index="450">MEDICINA, ESTÈTICA I ANTIENVELLIMENT</a> </li>
                              <li><a href="#" index="451">MERCERIES</a> </li>
                              <li><a href="#" index="452">MESTRES</a> </li>
                              <li><a href="#"
                                     index="453">MESTRES ENSENYAMENT</a> </li>
                              <li><a href="#" index="454">METGES</a> </li>
                              <li><a href="#" index="455">METGES AL.LERGIA</a> </li>
                              <li><a href="#" index="456">METGES ANGIOLOGIA</a> </li>
                              <li><a href="#" index="457">METGES CARDIOLOGIA</a> </li>
                              <li><a href="#" index="458">METGES CIRURGIA PULMONAR</a> </li>
                              <li><a href="#" index="459">METGES DERMATOVENEREOLOGIA</a> </li>
                              <li><a href="#" index="460">METGES ELECTRO-ENCEFALOGRAFIA</a> </li>
                              <li><a href="#" index="461">METGES ELECTRO-RADIOLOGIA</a> </li>
                              <li><a href="#" index="462">METGES GINECOLOGIA</a> </li>
                              <li><a href="#" index="463">METGES HEMATOLOGIA I HEMOTERAP</a> </li>
                              <li><a href="#" index="464">METGES HIGIENE I SANITAT</a> </li>
                              <li><a href="#" index="465">METGES HOMEOPATIA</a> </li>
                              <li><a href="#" index="466">METGES MEDICINA GENERAL</a> </li>
                              <li><a href="#" index="467">METGES NATURISTES</a> </li>
                              <li><a href="#" index="468">METGES NEUROPSIQUIATRES</a> </li>
                              <li><a href="#"
                                     index="469">METGES NEURORCIRURGIA</a> </li>
                              <li><a href="#" index="470">METGES ODONTOLOGIA</a> </li>
                              <li><a href="#"
                                     index="471">METGES OFTALMOLOGIA</a> </li>
                              <li><a href="#" index="472">METGES ORTODONCIA</a> </li>
                              <li><a href="#" index="473">METGES OSSOS I ARTICULACIONS</a> </li>
                              <li><a href="#" index="474">METGES OTORRINOLARINGOLOGIA</a> </li>
                              <li><a href="#"
                                     index="475">METGES OXINOTERAPIA</a> </li>
                              <li><a href="#" index="476">METGES PATOLOGIA</a> </li>
                              <li><a href="#" index="477">METGES PEDIATRIA</a> </li>
                              <li><a href="#" index="478">METGES PNEUMOLOGIA</a> </li>
                              <li><a href="#"
                                     index="479">METGES PSICOANALISTES</a> </li>
                              <li><a href="#"
                                     index="480">METGES PSICOTERAPIA</a> </li>
                              <li><a href="#" index="481">METGES PSIQUIATRIA</a> </li>
                              <li><a href="#" index="482">METGES PULMO I COR</a> </li>
                              <li><a href="#"
                                     index="483">METGES RADIODIAGNOSTIC</a> </li>
                              <li><a href="#" index="484">METGES READAPTACIO</a> </li>
                              <li><a href="#" index="485">METGES RECONEIXEMENTS EXHAUSTI</a> </li>
                              <li><a href="#"
                                     index="486">METGES REHABILITACIÓ</a> </li>
                              <li><a href="#" index="487">METGES TRANSFUSIO DE SANG</a> </li>
                              <li><a href="#" index="488">METGES TRAUMATOLOGIA-CIRUR.ORTOPEDICA</a> </li>
                              <li><a href="#" index="489">MICROBIOLOGIA I PARASITOLOGIA</a> </li>
                              <li><a href="#" index="490">MISSATGERS</a> </li>
                              <li><a href="#" index="491">MOBILIARI</a> </li>
                              <li><a href="#"
                                     index="492">MOBILIARI URBA</a> </li>
                              <li><a href="#" index="493">MOBLES</a> </li>
                              <li><a href="#"
                                     index="494">MOBLES COMPRA-VENDA</a> </li>
                              <li><a href="#" index="495">MOBLES DE BANY I ACCESSORIS</a> </li>
                              <li><a href="#"
                                     index="496">MOBLES DE CUINA</a> </li>
                              <li><a href="#" index="497">MOBLES DECORACIÓ</a> </li>
                              <li><a href="#" index="498">MOBLES HOSTALERIA</a> </li>
                              <li><a href="#"
                                     index="499">MOBLES OFICINES</a> </li>
                              <li><a href="#" index="500">MODELISME</a> </li>
                              <li><a href="#" index="501">MODES I NOVETATS</a> </li>
                              <li><a href="#" index="502">MODISTES</a> </li>
                              <li><a href="#" index="503">MOQUETES</a> </li>
                              <li><a href="#" index="504">MOTOCICLETES</a> </li>
                              <li><a href="#" index="505">MOTOCICLETES ACCESSORIS</a> </li>
                              <li><a href="#"
                                     index="506">MOTOCICLETES RECANVIS</a> </li>
                              <li><a href="#"
                                     index="507">MOTOCICLETES TALLERS</a> </li>
                              <li><a href="#" index="508">MOTORS</a> </li>
                              <li><a href="#" index="509">MUDANCES</a> </li>
                              <li><a href="#" index="510">MULTIMÈDIA</a> </li>
                              <li><a href="#" index="511">MUSEUS</a> </li>
                              <li><a href="#"
                                     index="512">MÀQUINES EXPENEDORES</a> </li>
                              <li><a href="#" index="513">MÚSICA</a> </li>
                              <li><a href="#" index="514">MÚSICA FABRICACIÓ</a> </li>
                              <li><a href="#" index="515">MÚSICA REPARACIÓ</a> </li>
                              <li><a href="#" index="516">NATURISTES</a> </li>
                              <li><a href="#" index="517">NAUTICA</a> </li>
                              <li><a href="#" index="518">NEFROLOGIA</a> </li>
                              <li><a href="#" index="519">NEFROLOGIA</a> </li>
                              <li><a href="#" index="520">NETEJA</a> </li>
                              <li><a href="#"
                                     index="521">NETEJA DE NEU</a> </li>
                              <li><a href="#"
                                     index="522">NETEJA DE XEMENEIES</a> </li>
                              <li><a href="#"
                                     index="523">NETEJA EMPRESES</a> </li>
                              <li><a href="#" index="524">NEUROFISIOLOGIA CLINICA</a> </li>
                              <li><a href="#" index="525">NEUROLOGIA</a> </li>
                              <li><a href="#" index="526">NOTARIS</a> </li>
                              <li><a href="#" index="527">NUMISMATICA</a> </li>
                              <li><a href="#"
                                     index="528">OBRES PUBLIQUES</a> </li>
                              <li><a href="#" index="529">OBSTETRICIA I GINECOLOGIA</a> </li>
                              <li><a href="#" index="530">OLIS</a> </li>
                              <li><a href="#"
                                     index="531">OLIS MAGATZEM</a> </li>
                              <li><a href="#" index="532">OPTIQUES</a> </li>
                              <li><a href="#" index="533">ORGANITZACIO D'EMPRESES</a> </li>
                              <li><a href="#"
                                     index="534">ORGANITZACIO DE BODES</a> </li>
                              <li><a href="#" index="535">ORTOFONISTES</a> </li>
                              <li><a href="#" index="536">ORTOPEDIES</a> </li>
                              <li><a href="#" index="537">OSTEÒPATES</a> </li>
                              <li><a href="#" index="538">PAPER</a> </li>
                              <li><a href="#" index="539">PAPER PINTAT</a> </li>
                              <li><a href="#" index="540">PAPERERIES</a> </li>
                              <li><a href="#" index="541">PARCS D'ATRACCIONS</a> </li>
                              <li><a href="#"
                                     index="542">PARCS INFANTILS</a> </li>
                              <li><a href="#" index="543">PARQUETS</a> </li>
                              <li><a href="#" index="544">PARTITS POLITICS</a> </li>
                              <li><a href="#" index="545">PASTISSERIES</a> </li>
                              <li><a href="#" index="546">PATATES FREGIDES</a> </li>
                              <li><a href="#" index="547">PATENTS I MARQUES</a> </li>
                              <li><a href="#" index="548">PATINATGE</a> </li>
                              <li><a href="#" index="549">PAVIMENTS</a> </li>
                              <li><a href="#"
                                     index="550">PAVIMENTS FUSTA</a> </li>
                              <li><a href="#"
                                     index="551">PAVIMENTS GOMA</a> </li>
                              <li><a href="#" index="552">PAVIMENTS PLASTIC</a> </li>
                              <li><a href="#" index="553">PEDRA ARTIFICIAL</a> </li>
                              <li><a href="#" index="554">PEIXATERIES</a> </li>
                              <li><a href="#" index="555">PELLETERIES</a> </li>
                              <li><a href="#" index="556">PENSIONS</a> </li>
                              <li><a href="#" index="557">PERFUMERIES</a> </li>
                              <li><a href="#" index="558">PERITATGE</a> </li>
                              <li><a href="#" index="559">PERITS</a> </li>
                              <li><a href="#" index="560">PERITS INDUSTRIALS</a> </li>
                              <li><a href="#"
                                     index="561">PERRUQUERIES ARTICLES</a> </li>
                              <li><a href="#"
                                     index="562">PERRUQUERIES CANINES</a> </li>
                              <li><a href="#" index="563">PERRUQUERIES PERRUQUERIES</a> </li>
                              <li><a href="#"
                                     index="564">PERRUQUERIES SENYORES</a> </li>
                              <li><a href="#"
                                     index="565">PERRUQUERIES SENYORS</a> </li>
                              <li><a href="#" index="566">PERSIANES</a> </li>
                              <li><a href="#" index="567">PESCA</a> </li>
                              <li><a href="#" index="568">PINSOS</a> </li>
                              <li><a href="#" index="569">PINTORS</a> </li>
                              <li><a href="#" index="570">PINTORS ARTISTICS</a> </li>
                              <li><a href="#" index="571">PINTORS DECORADORS</a> </li>
                              <li><a href="#" index="572">PINTURES</a> </li>
                              <li><a href="#" index="573">PISCICULTURA</a> </li>
                              <li><a href="#" index="574">PISCINES</a> </li>
                              <li><a href="#" index="575">PISCINES INSTAL.LACIONS</a> </li>
                              <li><a href="#" index="576">PISSARRES</a> </li>
                              <li><a href="#"
                                     index="577">PLANXISTERIES</a> </li>
                              <li><a href="#"
                                     index="578">PLATS PREPARATS</a> </li>
                              <li><a href="#"
                                     index="579">PLOMES ESTILOGRAFIQUES</a> </li>
                              <li><a href="#" index="580">PNEUMATICS</a> </li>
                              <li><a href="#" index="581">PNEUMOLOGIA</a> </li>
                              <li><a href="#" index="582">PODOLEGS</a> </li>
                              <li><a href="#" index="583">POLIMENT</a> </li>
                              <li><a href="#" index="584">PORCELLANES</a> </li>
                              <li><a href="#" index="585">PORTES</a> </li>
                              <li><a href="#"
                                     index="586">PORTES AUTOMATIQUES</a> </li>
                              <li><a href="#" index="587">PREMSA</a> </li>
                              <li><a href="#" index="588">PREMSA GUIES TURISTIQUES</a> </li>
                              <li><a href="#" index="589">PREVENCIO DE RISCOS LABORALS</a> </li>
                              <li><a href="#" index="590">PROCURADORS</a> </li>
                              <li><a href="#" index="591">PRODUCCIO D'AUDIOVISUALS</a> </li>
                              <li><a href="#" index="592">PRODUCTES EROTICS</a> </li>
                              <li><a href="#"
                                     index="593">PRODUCTES FARMACEUTICS</a> </li>
                              <li><a href="#" index="594">PRODUCTES MÈDICS I PARAMÈDICS</a> </li>
                              <li><a href="#"
                                     index="595">PRODUCTES SANITARIS</a> </li>
                              <li><a href="#" index="596">PROFESSORS</a> </li>
                              <li><a href="#"
                                     index="597">PROFESSORS CIENCIES</a> </li>
                              <li><a href="#" index="598">PROFESSORS IDIOMES</a> </li>
                              <li><a href="#" index="599">PROFESSORS-MATEMATIQUES</a> </li>
                              <li><a href="#" index="600">PROFESSORS-NATACIO</a> </li>
                              <li><a href="#" index="601">PROMOTORS</a> </li>
                              <li><a href="#" index="602">PROTECCIO LABORAL</a> </li>
                              <li><a href="#"
                                     index="603">PROTESIS DENTAL</a> </li>
                              <li><a href="#" index="604">PSICOLEGS</a> </li>
                              <li><a href="#" index="605">PSICOLOGIA CLÍNICA</a> </li>
                              <li><a href="#"
                                     index="606">PSICOPEDAGOGS</a> </li>
                              <li><a href="#" index="607">PUBLICITAT</a> </li>
                              <li><a href="#"
                                     index="608">PUBLICITAT AGENCIES</a> </li>
                              <li><a href="#" index="609">PUBLICITAT MITJANS</a> </li>
                              <li><a href="#" index="610">PUBS</a> </li>
                              <li><a href="#" index="611">PUERICULTURA</a> </li>
                              <li><a href="#" index="612">QUADRES</a> </li>
                              <li><a href="#" index="613">QUALITAT</a> </li>
                              <li><a href="#" index="614">QUIMICS</a> </li>
                              <li><a href="#" index="615">QUIOSCS</a> </li>
                              <li><a href="#"
                                     index="616">QUIROPRÀCTICA</a> </li>
                              <li><a href="#" index="617">RADIO</a> </li>
                              <li><a href="#"
                                     index="618">RADIO EMISSORES</a> </li>
                              <li><a href="#"
                                     index="619">RADIODIAGNOSTIC</a> </li>
                              <li><a href="#" index="620">RAJOLES</a> </li>
                              <li><a href="#" index="621">RECICLATGE</a> </li>
                              <li><a href="#" index="622">RECLAMS</a> </li>
                              <li><a href="#" index="623">RECOBRIMENTS</a> </li>
                              <li><a href="#"
                                     index="624">RECORDS TIPICS</a> </li>
                              <li><a href="#"
                                     index="625">RECURSOS HUMANS</a> </li>
                              <li><a href="#" index="626">REFLEXOLOGIA</a> </li>
                              <li><a href="#" index="627">REGALS</a> </li>
                              <li><a href="#"
                                     index="628">REGS AUTOMATICS</a> </li>
                              <li><a href="#" index="629">REHABILITACIO D'EDIFICIS</a> </li>
                              <li><a href="#"
                                     index="630">REHABILITZACIO</a> </li>
                              <li><a href="#"
                                     index="631">RELACIONS PUBLIQUES</a> </li>
                              <li><a href="#" index="632">RELAXACIO</a> </li>
                              <li><a href="#" index="633">RELLOTGERIES</a> </li>
                              <li><a href="#" index="634">RELLOTGERIES MAJORISTES</a> </li>
                              <li><a href="#"
                                     index="635">RELLOTGERIES TALLER</a> </li>
                              <li><a href="#" index="636">RELLOTGES</a> </li>
                              <li><a href="#" index="637">RENTAT I GREIXATGE</a> </li>
                              <li><a href="#" index="638">REPARACIONS</a> </li>
                              <li><a href="#"
                                     index="639">REPRESENTANTS</a> </li>
                              <li><a href="#"
                                     index="640">REPRODUCCIO DE PLANOLS</a> </li>
                              <li><a href="#" index="641">RESIDENCIES</a> </li>
                              <li><a href="#" index="642">RESTAURADORS</a> </li>
                              <li><a href="#" index="643">RESTAURANTS</a> </li>
                              <li><a href="#" index="644">RETOLISTES</a> </li>
                              <li><a href="#" index="645">RETOLS</a> </li>
                              <li><a href="#" index="646">REUMATOLOGIA</a> </li>
                              <li><a href="#" index="647">REVEGETACIO</a> </li>
                              <li><a href="#" index="648">REVESTIMENTS</a> </li>
                              <li><a href="#" index="649">RISCS GEOLÒGICS I NATURALS</a> </li>
                              <li><a href="#" index="650">ROCÒDROMS</a> </li>
                              <li><a href="#" index="651">SABATERIES</a> </li>
                              <li><a href="#" index="652">SABATERS</a> </li>
                              <li><a href="#" index="653">SAIG</a> </li>
                              <li><a href="#" index="654">SALES</a> </li>
                              <li><a href="#" index="655">SALES DE BITLLES</a> </li>
                              <li><a href="#"
                                     index="656">SALES DE FESTES</a> </li>
                              <li><a href="#"
                                     index="657">SALES DE JOCS</a> </li>
                              <li><a href="#" index="658">SALONS DE BELLESA</a> </li>
                              <li><a href="#" index="659">SALONS DE TE</a> </li>
                              <li><a href="#" index="660">SANITARIS</a> </li>
                              <li><a href="#" index="661">SASTRERIES</a> </li>
                              <li><a href="#" index="662">SASTRES</a> </li>
                              <li><a href="#" index="663">SAUNES</a> </li>
                              <li><a href="#" index="664">SEGELLS DE CAUTXU</a> </li>
                              <li><a href="#"
                                     index="665">SEGURETAT ALIMENTÀRIA</a> </li>
                              <li><a href="#"
                                     index="666">SELECCIO DE PERSONAL</a> </li>
                              <li><a href="#"
                                     index="667">SENYALITZACIONS</a> </li>
                              <li><a href="#" index="668">SENYALS INDICADORS</a> </li>
                              <li><a href="#" index="669">SERIGRAFIA</a> </li>
                              <li><a href="#" index="670">SERRALLERIES</a> </li>
                              <li><a href="#" index="671">SERVEIS</a> </li>
                              <li><a href="#"
                                     index="672">SERVEIS EMPRESARIALS</a> </li>
                              <li><a href="#" index="673">SERVEIS ENERGÈTICS</a> </li>
                              <li><a href="#" index="674">SERVEIS PERSONALS</a> </li>
                              <li><a href="#"
                                     index="675">SISTEMES DE CONTROL</a> </li>
                              <li><a href="#" index="676">SISTEMES, SERVEIS DE SEGURETAT</a> </li>
                              <li><a href="#" index="677">SOCIETATS</a> </li>
                              <li><a href="#" index="678">SOCIETATS FILANTRÒPIQUES</a> </li>
                              <li><a href="#" index="679">SOLDADURES</a> </li>
                              <li><a href="#" index="680">SONDEIG</a> </li>
                              <li><a href="#" index="681">SONORITZACIO</a> </li>
                              <li><a href="#" index="682">SUBMARINISME</a> </li>
                              <li><a href="#" index="683">SUBMINISTRAMENTS INDUSTRIALS</a> </li>
                              <li><a href="#" index="684">SUPERMERCATS</a> </li>
                              <li><a href="#" index="685">TABACS</a> </li>
                              <li><a href="#" index="686">TABACS FABRIQUES</a> </li>
                              <li><a href="#" index="687">TALLERS</a> </li>
                              <li><a href="#" index="688">TALLERS MECANICS</a> </li>
                              <li><a href="#" index="689">TAPISSERIES</a> </li>
                              <li><a href="#" index="690">TAPISSERS</a> </li>
                              <li><a href="#" index="691">TARGETES</a> </li>
                              <li><a href="#" index="692">TATUATGES</a> </li>
                              <li><a href="#" index="693">TAXACIONS</a> </li>
                              <li><a href="#" index="694">TAXIS</a> </li>
                              <li><a href="#" index="695">TEIXITS</a> </li>
                              <li><a href="#"
                                     index="696">TELECOMUNICACIO</a> </li>
                              <li><a href="#" index="697">TELEVISIO</a> </li>
                              <li><a href="#" index="698">TELEVISIO ANTENES</a> </li>
                              <li><a href="#" index="699">TELEVISIO APARELLS</a> </li>
                              <li><a href="#"
                                     index="700">TELEVISIO EMISSORES</a> </li>
                              <li><a href="#"
                                     index="701">TELEVISIO REPARACIONS</a> </li>
                              <li><a href="#" index="702">TENDALS</a> </li>
                              <li><a href="#" index="703">TERAPEUTES</a> </li>
                              <li><a href="#"
                                     index="704">TERAPEUTES OCUPACIONAL</a> </li>
                              <li><a href="#"
                                     index="705">TERAPIA VISUAL</a> </li>
                              <li><a href="#"
                                     index="706">TEXTIL PER A LA LLAR</a> </li>
                              <li><a href="#" index="707">TINTORERIES</a> </li>
                              <li><a href="#" index="708">TOPOGRAFIA</a> </li>
                              <li><a href="#" index="709">TOPOGRAFS</a> </li>
                              <li><a href="#" index="710">TRADUCTORS</a> </li>
                              <li><a href="#" index="711">TRANSITS INTERNACIONALS</a> </li>
                              <li><a href="#" index="712">TRANSPORT SANITARI</a> </li>
                              <li><a href="#"
                                     index="713">TRANSPORTISTES</a> </li>
                              <li><a href="#" index="714">TRANSPORTS</a> </li>
                              <li><a href="#"
                                     index="715">TRANSPORTS VIATGERS</a> </li>
                              <li><a href="#" index="716">TREBALL TEMPORAL</a> </li>
                              <li><a href="#"
                                     index="717">TREBALLS ACROBATICS</a> </li>
                              <li><a href="#" index="718">TREBALLS FORESTALS</a> </li>
                              <li><a href="#" index="719">TREBALLS PUBLICS</a> </li>
                              <li><a href="#" index="720">TROFEUS</a> </li>
                              <li><a href="#" index="721">TURISME</a> </li>
                              <li><a href="#" index="722">TURISME OFICINES</a> </li>
                              <li><a href="#" index="723">ULLERES</a> </li>
                              <li><a href="#" index="724">ULLERES MAJORISTES</a> </li>
                              <li><a href="#" index="725">UNIFORMES</a> </li>
                              <li><a href="#" index="726">UNIVERSITAT</a> </li>
                              <li><a href="#" index="727">URBANISTES</a> </li>
                              <li><a href="#" index="728">UROLOGIA</a> </li>
                              <li><a href="#" index="729">VALORACIONS IMMOBILIARIES</a> </li>
                              <li><a href="#" index="730">VENTILACIONS</a> </li>
                              <li><a href="#"
                                     index="731">VESTUARI PROFESSIONAL</a> </li>
                              <li><a href="#" index="732">VETERINARIS</a> </li>
                              <li><a href="#" index="733">VIATGES</a> </li>
                              <li><a href="#" index="734">VIATGES AGENCIES</a> </li>
                              <li><a href="#" index="735">VIATGES ARTICLES</a> </li>
                              <li><a href="#" index="736">VIDEO-CLUBS</a> </li>
                              <li><a href="#" index="737">VIDRES</a> </li>
                              <li><a href="#" index="738">VIMET</a> </li>
                              <li><a href="#"
                                     index="739">VIMET ARTICLES</a> </li>
                              <li><a href="#" index="740">VINS</a> </li>
                              <li><a href="#" index="741">XARCUTERIES</a> </li>
                              <li><a href="#" index="742">XEMENEIES</a> </li>
                              <li><a href="#" index="743">XOCOLATERIES</a> </li>
                           </ul>
                           <select id="combobox" name="activityId"
                                   class="jqTransformHidden"
                                   style="display: none;">
                              <option value=" ">Qualsevol </option>
                              <option value="AB">ACADEMIES</option>
                              <option value="AC">ACADEMIES CONFECCIO</option>
                              <option value="AE">ACADEMIES IDIOMES</option>
                              <option value="AG">ACADEMIES MUSICA</option>
                              <option value="AH">ACADEMIES PERRUQUERIA</option>
                              <option value="XY">ACTIVITATS D'ASSESSORAMENT EN DIRECCIÓ I GESTIÓ EMPRESARIAL</option>
                              <option
                                value="ZA">ACTIVITATS DE SERVEIS PERSONALS</option>
                              <option value="AK">ACUPUNTURA</option>
                              <option
                                value="AL">ADMINISTRADORS DE FINQUES</option>
                              <option value="AM">ADOBS</option>
                              <option value="AP">ADVOCATS</option>
                              <option
                                value="XZ">AGENCIES DE COL·LOCACIO</option>
                              <option value="61">AGENCIES MATRIMONIALS</option>
                              <option value="AX">AGENT COMERCIAL</option>
                              <option value="AW">AGENT D'ASSEGURANCES</option>
                              <option value="AY">AGENT DE DUANES</option>
                              <option value="A4">AGRICULTURA</option>
                              <option value="FC">AGÈNCIA DE NOTÍCIES</option>
                              <option value="A5">AIGUES</option>
                              <option value="A6">AILLAMENTS</option>
                              <option value="4P">ALBERGS</option>
                              <option value="BA">ALIMENTACIO</option>
                              <option value="BB">ALIMENTACIO MAJORISTES</option>
                              <option value="BF">ALUMINIS</option>
                              <option value="4E">AMBIENTADORS</option>
                              <option value="BG">AMBULANCIES</option>
                              <option value="64">ANALISIS</option>
                              <option value="RT">ANALISIS CLINIQUES</option>
                              <option value="AD">ANATOMIA PATOLOGICA</option>
                              <option value="4I">ANCORATGES</option>
                              <option
                                value="4Q">ANESTESIOLOGIA I REANIMACIO</option>
                              <option value="4R">ANESTESISTES</option>
                              <option value="5W">ANIMALS</option>
                              <option value="GU">ANTENES</option>
                              <option value="BK">ANTIGUITATS</option>
                              <option value="BL">APARCAMENTS</option>
                              <option value="RV">APARELL DIGESTIU</option>
                              <option value="74">APARELL DIGESTIU</option>
                              <option value="BQ">APARELLS</option>
                              <option value="4K">APARELLS DE PRECISIO</option>
                              <option value="BR">APARELLS RELAXACIO</option>
                              <option value="BS">APARTAMENTS</option>
                              <option value="BT">APARTAMENTS LLOGUERS</option>
                              <option value="H3">APARTAMENTS TURÍSTICS</option>
                              <option value="48">APARTHOTELS</option>
                              <option value="BW">ARMERIES</option>
                              <option value="BX">ARQUITECTES</option>
                              <option value="BY">ARQUITECTES TECNICS</option>
                              <option value="YT">ARRANJAMENTS DE ROBA</option>
                              <option value="BZ">ART</option>
                              <option value="B0">ART EXPOSICIONS</option>
                              <option value="B1">ART OBJECTES</option>
                              <option value="B2">ARTESANIA</option>
                              <option value="75">ARTICLES</option>
                              <option value="91">ARTICLES DE FESTA</option>
                              <option value="E5">ARTICLES DE SEGONA MÀ</option>
                              <option value="CA">ARTS GRAFIQUES</option>
                              <option value="CB">ASCENSORS</option>
                              <option value="CD">ASFALTS</option>
                              <option value="CF">ASSEGURANCES</option>
                              <option value="CG">ASSEGURANCES AGENCIES</option>
                              <option value="65">ASSESSORAMENT</option>
                              <option value="77">ASSESSORAMENT</option>
                              <option value="CÑ">ASSESSORAMENT FISCAL</option>
                              <option value="CY">ASSESSORAMENT HOTELER</option>
                              <option value="CH">ASSESSORAMENT IMATGE</option>
                              <option value="66">ASSESSORAMENT QUALITAT</option>
                              <option
                                value="C2">ASSESSORIA D'IMATGE PERSONAL</option>
                              <option value="CI">ASSESSORIES</option>
                              <option value="CJ">ASSESSORIES EMPRESA</option>
                              <option value="CK">ASSISTENCIA</option>
                              <option
                                value="E8">ASSISTÈNCIA INTEGRAL A PERSONES</option>
                              <option value="4S">ASSOCIACIONS</option>
                              <option value="CM">ATRACCIONS</option>
                              <option value="A2">AUDIOPROTESISTES</option>
                              <option value="CO">AUDIOVISUALS</option>
                              <option value="CN">AUDITORIES</option>
                              <option value="67">AUDITORIES AMBIENTALS</option>
                              <option value="CP">AUTOCARS</option>
                              <option value="CQ">AUTOESCOLES</option>
                              <option value="CS">AUTOMOBILS</option>
                              <option value="CT">AUTOMOBILS ACCESSORIS</option>
                              <option
                                value="CU">AUTOMOBILS COMPRA-VENDA</option>
                              <option
                                value="CV">AUTOMOBILS CONCESSIONARIS</option>
                              <option
                                value="CW">AUTOMOBILS ELECTRICITAT</option>
                              <option value="CX">AUTOMOBILS LLOGUER</option>
                              <option value="CZ">AUTOMOBILS RECANVIS</option>
                              <option value="ZJ">AVIACIO</option>
                              <option value="C1">BACALLANERIES</option>
                              <option value="62">BALLS</option>
                              <option value="C3">BANCS</option>
                              <option value="BH">BANQUETS</option>
                              <option value="C5">BARBERIES</option>
                              <option value="C6">BARS</option>
                              <option value="C7">BASARS</option>
                              <option value="5P">BASE DE DADES</option>
                              <option value="GG">BASTIDES</option>
                              <option value="C9">BEGUDES</option>
                              <option value="76">BELLES ARTS</option>
                              <option value="DD">BIBLIOTEQUES</option>
                              <option value="DE">BICICLETES</option>
                              <option value="DJ">BIJUTERIES</option>
                              <option value="73">BINGOS</option>
                              <option value="4J">BIOLEGS</option>
                              <option value="AF">BIOQUIMICA CLINICA</option>
                              <option value="DK">BOLIGRAFS</option>
                              <option value="DN">BOSSES</option>
                              <option value="DO">BRODATS</option>
                              <option value="5N">BRONZE</option>
                              <option value="DP">BUGADERIES</option>
                              <option value="DX">CAFES</option>
                              <option value="DZ">CAFETERIES</option>
                              <option value="D7">CALEFACCIONS</option>
                              <option
                                value="D8">CALEFACCIONS INSTAL.LACIONS</option>
                              <option
                                value="EA">CALEFACCIONS MANTENIMENT</option>
                              <option value="D9">CALEFACCIONS MATERIAL</option>
                              <option value="EF">CAMPINGS</option>
                              <option value="4G">CANALITZACIONS</option>
                              <option value="EP">CARNISSERIES</option>
                              <option value="ET">CARTRONS</option>
                              <option
                                value="Z2">CASES DE CAMP I GRANGES</option>
                              <option value="EW">CATIFES</option>
                              <option value="5V">CENTRAL DE RESERVES</option>
                              <option value="EX">CENTRALS DE COMPRES</option>
                              <option value="38">CENTRES COMERCIALS</option>
                              <option
                                value="21">CENTRES DE MEDICINA DE L'ESPORT</option>
                              <option value="5X">CENTRES DE PLANXAT</option>
                              <option value="E0">CERAMIQUES</option>
                              <option
                                value="UN">CERTIFICACIÓ ENERGÈTICA</option>
                              <option value="E1">CERVESERIES</option>
                              <option value="CC">CIBERCAFE</option>
                              <option value="ES">CIBERTECA</option>
                              <option value="FF">CINEMATOGRAFIA</option>
                              <option
                                value="FG">CINEMATOGRAFIA PRODUCCIONS</option>
                              <option value="FH">CINEMES</option>
                              <option
                                value="R0">CIRURGIA GRAL-APARELL DIGESTIU</option>
                              <option value="FR">CLAUS</option>
                              <option value="FS">CLIMATITZACIO</option>
                              <option
                                value="FT">CLIMATITZACIO MANTENIMENT</option>
                              <option value="OZ">CLINICS I BIOLOGICS</option>
                              <option value="FV">CLINIQUES</option>
                              <option value="FW">CLINIQUES MEDIQUES</option>
                              <option value="53">CLINIQUES VETERINARIES</option>
                              <option value="FX">CLUBS ESPORTIUS</option>
                              <option value="FY">COL.LEGIS</option>
                              <option value="F2">COMESTIBLES</option>
                              <option value="GS">COMPLEMENTS</option>
                              <option value="F5">COMPTABLES</option>
                              <option value="4U">COMUNICACIO</option>
                              <option value="F6">CONCESSIONARIS</option>
                              <option value="F7">CONFECCIONS</option>
                              <option value="F8">CONFECCIONS INFANTIL</option>
                              <option value="F9">CONFECCIONS SENYOR</option>
                              <option value="GA">CONFECCIONS SENYORA</option>
                              <option value="GB">CONFITERIES</option>
                              <option value="GC">CONGELATS</option>
                              <option
                                value="4F">CONGRESSOS I CONVENCIONS</option>
                              <option value="ZY">CONSELLS FILOSOFICS</option>
                              <option value="GD">CONSERVES</option>
                              <option value="GF">CONSTRUCCIONS</option>
                              <option value="GE">CONSTRUCCIONS COBERTES</option>
                              <option value="F4">CONSTRUCCIONS CONTROL DE MATERIALS</option>
                              <option value="GH">CONSTRUCCIONS MATERIAL</option>
                              <option
                                value="GI">CONSTRUCCIONS METAL.LIQUES</option>
                              <option value="5I">CONSULTORIA</option>
                              <option
                                value="GM">CONSULTORIA EN COMUNICACIO</option>
                              <option value="GJ">CONSULTORIS</option>
                              <option value="GK">CONSULTORIS MEDICS</option>
                              <option
                                value="GL">CONSULTORIS VETERINARIS</option>
                              <option value="4V">CONTROLS DE QUALITAT</option>
                              <option value="A8">COPISTERIA</option>
                              <option value="GP">CORTINES</option>
                              <option value="GR">COSMETICS</option>
                              <option value="ZC">CREIXEMENT PERSONAL</option>
                              <option value="GV">CRISTALLERIES</option>
                              <option value="G0">DANSA</option>
                              <option value="G1">DANSA ARTICLES</option>
                              <option value="55">DE GUIES TURISTICS</option>
                              <option
                                value="52">DE PROPIETATS INDUSTRIALS</option>
                              <option value="G2">DECORACIO</option>
                              <option value="G3">DECORACIO ARTICLES</option>
                              <option value="G4">DECORADORS</option>
                              <option value="G7">DENTISTES-ODONTOLEGS</option>
                              <option value="R4">DERMATOLOGIA</option>
                              <option value="HD">DESINFECCIO</option>
                              <option value="D3">DESINSECTACIONS</option>
                              <option value="D2">DESRATITZACIONS</option>
                              <option value="HF">DESTIL.LERIES</option>
                              <option value="GO">DESTIL.LERIES</option>
                              <option value="HG">DETECTIUS PRIVATS</option>
                              <option value="HJ">DIBUIXANTS</option>
                              <option value="HK">DIETETICA</option>
                              <option value="AU">DIETISTES</option>
                              <option value="ZD">DIGITALITZACIO</option>
                              <option
                                value="G5">DIPÒSITS D'HIDROCARBURS</option>
                              <option value="HM">DISCOTEQUES</option>
                              <option value="HN">DISCS</option>
                              <option value="HO">DISFRESSES</option>
                              <option
                                value="54">DISSENY I CREACIO GRAFICA</option>
                              <option value="5R">DISSENYS PUBLICITARIS</option>
                              <option
                                value="1C">DISTRIBUCIONS DE CORREU</option>
                              <option
                                value="DA">DISTRIBUCIONS PUBLICITÁRIES</option>
                              <option value="5Y">DOLÇOS</option>
                              <option value="H0">DROGUERIES</option>
                              <option value="H1">DUANES</option>
                              <option value="H2">DUANES AGENCIES</option>
                              <option value="H4">EBENISTES</option>
                              <option value="5Z">ECOLOGIA</option>
                              <option value="H5">ECONOMISTES</option>
                              <option value="HZ">EDICIO DE REVISTES</option>
                              <option value="C0">EDIFICACIO SALUDABLE</option>
                              <option value="H6">EDITORIALS</option>
                              <option value="IA">ELECTRICISTES</option>
                              <option value="IB">ELECTRICITAT</option>
                              <option value="IC">ELECTRICITAT ARTICLES</option>
                              <option
                                value="ID">ELECTRICITAT COMPANYIES</option>
                              <option
                                value="IE">ELECTRICITAT MAJORISTES</option>
                              <option value="IF">ELECTRICITAT MATERIAL</option>
                              <option value="IG">ELECTRICITAT TALLERS</option>
                              <option value="IJ">ELECTRODOMESTICS</option>
                              <option
                                value="IK">ELECTRODOMESTICS REPARACIONS</option>
                              <option value="IM">ELECTROMECANICA</option>
                              <option
                                value="IN">ELECTROMECANICA TALLERS</option>
                              <option value="IP">ELECTRONICA</option>
                              <option value="IU">EMBALATGES</option>
                              <option value="IW">EMBOTITS</option>
                              <option value="ZQ">EMMAGATZEMATGE</option>
                              <option value="X8">EMPAQUETATGE</option>
                              <option value="IZ">EMPRESES</option>
                              <option
                                value="R8">ENDOCRINOLOGIA I NUTRICIO</option>
                              <option value="UM">ENERGIA</option>
                              <option value="5G">ENERGIA SOLAR</option>
                              <option value="I2">ENGINYERIA</option>
                              <option value="I3">ENGINYERIA MATERIAL</option>
                              <option value="I4">ENGINYERIA PROJECTES</option>
                              <option value="I8">ENGINYERIA TRACTAMENT AIGUES-MEDI AMBIENT</option>
                              <option value="I5">ENGINYERS</option>
                              <option value="I6">ENGINYERS AGRONOMS</option>
                              <option
                                value="I7">ENGINYERS CAMINS-CANALS-PORTS</option>
                              <option
                                value="49">ENGINYERS CIVIL I D'URBANISME</option>
                              <option value="I9">ENGINYERS INDUSTRIALS</option>
                              <option
                                value="ZP">ENGINYERS MEDIAMBIENTALS</option>
                              <option value="JE">ENGINYERS TECNICS</option>
                              <option
                                value="JG">ENGINYERS TECNICS INDUSTRIALS</option>
                              <option
                                value="JC">ENGINYERS TELECOMUNICACIO</option>
                              <option value="JD">ENGINYERS TOPOGRAFS</option>
                              <option value="JA">ENGINYERS TRACTAMENT D'AIGÜES-POL.LUCIO</option>
                              <option value="JM">ENQUADERNACIONS</option>
                              <option
                                value="5A">ENVANS I FALSOS SOSTRES</option>
                              <option value="JQ">ENVERNISSADORS</option>
                              <option value="JR">EQUIPAMENTS</option>
                              <option value="JU">EQUIPAMENTS COMERCIALS</option>
                              <option value="JS">EQUIPAMENTS ESPORTS</option>
                              <option value="JT">EQUIPAMENTS HOTELS</option>
                              <option
                                value="D4">EQUIPAMENTS ROBA DE TREBALL</option>
                              <option value="MG">EQUITACIO</option>
                              <option value="ZS">ESCALES</option>
                              <option value="CL">ESCOLA SUP D'ELECTRICITAT DE PARIS</option>
                              <option value="J1">ESCOLES</option>
                              <option value="J2">ESCRIPTORS</option>
                              <option value="G9">ESOTERISME</option>
                              <option value="J8">ESPECTACLES</option>
                              <option value="J9">ESPECTACLES AGENTS</option>
                              <option value="KB">ESPORTIVES</option>
                              <option value="KC">ESPORTS</option>
                              <option value="KD">ESPORTS ARTICLES</option>
                              <option value="KF">ESPORTS AVENTURA</option>
                              <option value="KE">ESPORTS CAÇA I PESCA</option>
                              <option value="KA">ESPORTS CICLISME</option>
                              <option value="ZE">ESPORTS SUBMARINISME</option>
                              <option value="KG">ESQUI</option>
                              <option value="K3">ESQUI ABALISAMENT DE PISTES D'ESQUI</option>
                              <option value="KH">ESQUI ESCOLES</option>
                              <option value="KI">ESQUI ESTACIONS</option>
                              <option value="KJ">ESQUI MATERIAL</option>
                              <option value="KL">ESTACIONS SERVEI</option>
                              <option value="R9">ESTOMATOLOGIA</option>
                              <option value="KQ">ESTUCADORS</option>
                              <option value="H7">ETIQUETES</option>
                              <option value="KS">EXCAVACIONS</option>
                              <option value="KU">EXCURSIONS</option>
                              <option value="KW">EXPOSICIONS</option>
                              <option value="KX">EXPOSICIONS SALES</option>
                              <option value="KY">EXTINTORS</option>
                              <option value="ZX">FABRICACIÓ DE TANCAMENTS METÀL·LICS</option>
                              <option value="K2">FARMACIES</option>
                              <option value="IX">FARMÀCIES MAJORISTES</option>
                              <option value="5J">FEDERACIONS</option>
                              <option value="K4">FERRALLA</option>
                              <option value="K6">FERRETERIES</option>
                              <option value="K8">FERROS</option>
                              <option value="JV">FIDUCIARIS</option>
                              <option value="LB">FILATELIES</option>
                              <option value="LE">FINANCERES</option>
                              <option value="LF">FINESTRES</option>
                              <option value="LI">FISIOTERAPEUTES</option>
                              <option value="5K">FITOSANITARIS</option>
                              <option value="LJ">FLEQUES</option>
                              <option value="LK">FLORISTERIES</option>
                              <option
                                value="63">FONAMENTACIONS ESPECIALS</option>
                              <option value="AZ">FONEDORS-RAFINADORS</option>
                              <option value="5L">FORMACIO</option>
                              <option
                                value="ZU">FORMACIO CREIXEMENT PERSONAL</option>
                              <option
                                value="ZT">FORMACIO MANIPULACIO D'ALIMENTS</option>
                              <option value="LR">FORMATGES</option>
                              <option value="LU">FORMIGONS</option>
                              <option value="4H">FORMIGONS PROJECTATS</option>
                              <option value="LV">FORNS</option>
                              <option value="LX">FOTOCOPIADORES</option>
                              <option value="LZ">FOTOGRAFIA</option>
                              <option value="L0">FOTOGRAFIA LABORATORIS</option>
                              <option value="L1">FOTOGRAFIA MATERIAL</option>
                              <option value="L4">FOTOGRAFS</option>
                              <option value="L6">FRED INDUSTRIAL</option>
                              <option
                                value="L7">FRED INDUSTRIAL REPARACIONS</option>
                              <option value="L9">FRUITERIES</option>
                              <option value="MA">FRUITES</option>
                              <option value="MB">FRUITES MAGATZEMS</option>
                              <option value="MC">FRUITES MAJORISTES</option>
                              <option value="MD">FRUITS SECS</option>
                              <option value="MF">FUMADOR ARTICLES</option>
                              <option value="13">FUNDACIÓ</option>
                              <option value="MH">FUNERARIES</option>
                              <option value="MJ">FUSTERIES</option>
                              <option value="MI">FUSTES</option>
                              <option value="MS">GANIVETERIES</option>
                              <option value="ML">GARATGES</option>
                              <option value="MM">GAS</option>
                              <option value="5M">GAS INDUSTRIAL</option>
                              <option value="MN">GAS-OIL</option>
                              <option value="MP">GASOLINERES</option>
                              <option value="MX">GENERES DE PUNT</option>
                              <option value="UH">GEOBIOLOGIA</option>
                              <option value="17">GEOFÍSICA</option>
                              <option value="78">GEOLOGIA</option>
                              <option value="5B">GEOTECNIA</option>
                              <option value="YY">GEOTÈRMIA</option>
                              <option value="9J">GESTIÓ DE COBRAMENTS</option>
                              <option value="FA">GESTORA DE PATRIMONIS</option>
                              <option value="MZ">GESTORIES</option>
                              <option value="M0">GESTORS</option>
                              <option value="M1">GIMNASOS</option>
                              <option value="M5">GLOBUS AEROSTATICS</option>
                              <option value="M8">GRANS MAGATZEMS</option>
                              <option value="NA">GRAVADORS</option>
                              <option value="NB">GRUES</option>
                              <option value="NC">GUARDERIES INFANTILS</option>
                              <option value="ND">GUIES</option>
                              <option value="NE">GUIXAIRES</option>
                              <option value="NF">HELICOPTERS</option>
                              <option value="NI">HERALDICA</option>
                              <option value="NJ">HERBOLARIS</option>
                              <option value="5C">HIDROGEOLOGIA</option>
                              <option value="NK">HIDROLOGIA</option>
                              <option value="68">HIDROSEMBRA</option>
                              <option value="NM">HIPICA</option>
                              <option value="NP">HOSPITALS</option>
                              <option value="NQ">HOSTALS</option>
                              <option value="NR">HOTELS</option>
                              <option value="01">IL·LUMINACIO</option>
                              <option value="NU">IMMOBILIARIES</option>
                              <option value="AN">IMMUNOLOGIA</option>
                              <option value="NV">IMPERMEABILITZACIONS</option>
                              <option value="NW">IMPORT-EXPORT</option>
                              <option value="NX">IMPORTACIONS</option>
                              <option value="NY">IMPREMTES</option>
                              <option value="N5">INFERMERES</option>
                              <option value="F3">INFOGRAFIA</option>
                              <option value="N6">INFORMATICA</option>
                              <option value="N7">INFORMATICA MATERIAL</option>
                              <option value="4Y">INSPECCIO I CONTROL</option>
                              <option value="OA">INSTAL.LACIONS</option>
                              <option
                                value="OB">INSTAL.LACIONS COMERCIALS</option>
                              <option
                                value="OC">INSTAL.LACIONS ESPORTIVES</option>
                              <option value="OD">INSTITUTS</option>
                              <option value="OE">INSTITUTS BELLESA</option>
                              <option value="OF">INSTITUTS ENSENYAMENT</option>
                              <option value="OH">INSTRUMENTAL MEDIC</option>
                              <option
                                value="58">INSTRUMENTAL MÈDIC REPARACIONS</option>
                              <option value="50">INTERIORISME</option>
                              <option value="5F">INTERMEDIARIS</option>
                              <option value="79">INTERNET</option>
                              <option
                                value="BP">INTERNET DISSENY PAGINES WEB</option>
                              <option value="80">INTERNET SERVIDORS</option>
                              <option value="OK">INTERPRETS</option>
                              <option value="OL">INVERSIONS</option>
                              <option
                                value="OM">INVERSIONS IMMOBILIARIES</option>
                              <option value="ON">INVERSIONS MOBILIARIES</option>
                              <option value="E9">IOGA</option>
                              <option value="OQ">JARDINERIA</option>
                              <option value="OR">JOCS</option>
                              <option value="OS">JOGUINES</option>
                              <option value="OT">JOIERIES</option>
                              <option value="OU">JOIERIES MAJORISTES</option>
                              <option value="OV">JOIERIES TALLERS</option>
                              <option value="OW">JOIERS</option>
                              <option value="OY">LABORATORIS</option>
                              <option value="AI">LABORATORIS</option>
                              <option value="O0">LABORATORIS AIGÜES</option>
                              <option
                                value="O2">LABORATORIS PROTESI DENTAL</option>
                              <option value="51">LABORS</option>
                              <option value="O6">LAMPISTERIES</option>
                              <option value="O7">LAMPISTES</option>
                              <option value="O9">LICORS</option>
                              <option value="PA">LINIES AERIES</option>
                              <option value="PE">LLANES</option>
                              <option value="DC">LLARS D'INFANTS</option>
                              <option value="PJ">LLENCERIES</option>
                              <option value="PK">LLENYES</option>
                              <option value="PO">LLEVADORES</option>
                              <option value="PQ">LLIBRERIES</option>
                              <option value="46">LLOGUERS</option>
                              <option value="P4">LLOGUERS</option>
                              <option value="XM">LOGISTICA</option>
                              <option value="4Z">LOGOPEDES</option>
                              <option value="P5">LUBRIFICANTS</option>
                              <option value="W0">MAJORISTES</option>
                              <option value="P8">MAJORISTES</option>
                              <option value="EQ">MAJORISTES</option>
                              <option value="02">MANYERIA</option>
                              <option value="QD">MAQUINARIA</option>
                              <option value="QE">MAQUINARIA ACCESORIS</option>
                              <option
                                value="QF">MAQUINARIA COMPRA-VENDA</option>
                              <option
                                value="QG">MAQUINARIA INDUSTRIES HOTELERE</option>
                              <option value="QI">MAQUINES</option>
                              <option
                                value="QN">MAQUINES FOTOCOPIADORES</option>
                              <option value="QO">MAQUINES MAJORISTES</option>
                              <option value="QP">MAQUINES RECREATIVES</option>
                              <option value="II">MAQUINÀRIA DE LLOGUER</option>
                              <option value="QQ">MARBRE</option>
                              <option value="QR">MARCS</option>
                              <option value="QT">MARKETING</option>
                              <option value="QU">MARROQUINERIA</option>
                              <option value="QW">MASSATGISTES</option>
                              <option value="QZ">MATALASSOS</option>
                              <option value="Q0">MATERIAL</option>
                              <option value="Q1">MATERIAL AGRICOLA</option>
                              <option
                                value="Q2">MATERIAL CLINIC-QUIRURGIC</option>
                              <option value="Q3">MATERIAL ESCOLAR</option>
                              <option value="Q7">MATERIAL MÈDIC</option>
                              <option value="Q4">MATERIAL OFICINA</option>
                              <option value="5E">MEDI AMBIENT</option>
                              <option value="UU">MEDICINA BIOLÒGICA</option>
                              <option value="03">MEDICINA DEL TREBALL</option>
                              <option value="RU">MEDICINA ESPORTIVA</option>
                              <option value="AO">MEDICINA ESPORTIVA</option>
                              <option
                                value="AJ">MEDICINA ESTETICA REPARADORA</option>
                              <option value="SE">MEDICINA INTERNA</option>
                              <option value="SF">MEDICINA LEGAL</option>
                              <option value="F1">MEDICINA, ESTÈTICA I ANTIENVELLIMENT</option>
                              <option value="RF">MERCERIES</option>
                              <option value="RG">MESTRES</option>
                              <option value="RH">MESTRES ENSENYAMENT</option>
                              <option value="RR">METGES</option>
                              <option value="RS">METGES AL.LERGIA</option>
                              <option value="RB">METGES ANGIOLOGIA</option>
                              <option value="RX">METGES CARDIOLOGIA</option>
                              <option
                                value="R3">METGES CIRURGIA PULMONAR</option>
                              <option
                                value="R5">METGES DERMATOVENEREOLOGIA</option>
                              <option
                                value="R6">METGES ELECTRO-ENCEFALOGRAFIA</option>
                              <option
                                value="R7">METGES ELECTRO-RADIOLOGIA</option>
                              <option value="R2">METGES GINECOLOGIA</option>
                              <option
                                value="SA">METGES HEMATOLOGIA I HEMOTERAP</option>
                              <option
                                value="SB">METGES HIGIENE I SANITAT</option>
                              <option value="SC">METGES HOMEOPATIA</option>
                              <option
                                value="SD">METGES MEDICINA GENERAL</option>
                              <option value="SG">METGES NATURISTES</option>
                              <option
                                value="SJ">METGES NEUROPSIQUIATRES</option>
                              <option value="SH">METGES NEURORCIRURGIA</option>
                              <option value="SL">METGES ODONTOLOGIA</option>
                              <option value="SM">METGES OFTALMOLOGIA</option>
                              <option value="SN">METGES ORTODONCIA</option>
                              <option
                                value="SO">METGES OSSOS I ARTICULACIONS</option>
                              <option
                                value="SP">METGES OTORRINOLARINGOLOGIA</option>
                              <option value="SQ">METGES OXINOTERAPIA</option>
                              <option value="SR">METGES PATOLOGIA</option>
                              <option value="SS">METGES PEDIATRIA</option>
                              <option value="RW">METGES PNEUMOLOGIA</option>
                              <option value="ST">METGES PSICOANALISTES</option>
                              <option value="SU">METGES PSICOTERAPIA</option>
                              <option value="SV">METGES PSIQUIATRIA</option>
                              <option value="SW">METGES PULMO I COR</option>
                              <option value="R1">METGES RADIODIAGNOSTIC</option>
                              <option value="SY">METGES READAPTACIO</option>
                              <option
                                value="SZ">METGES RECONEIXEMENTS EXHAUSTI</option>
                              <option value="S0">METGES REHABILITACIÓ</option>
                              <option
                                value="S2">METGES TRANSFUSIO DE SANG</option>
                              <option value="S3">METGES TRAUMATOLOGIA-CIRUR.ORTOPEDICA</option>
                              <option
                                value="AQ">MICROBIOLOGIA I PARASITOLOGIA</option>
                              <option value="S8">MISSATGERS</option>
                              <option value="S9">MOBILIARI</option>
                              <option value="4O">MOBILIARI URBA</option>
                              <option value="TA">MOBLES</option>
                              <option value="81">MOBLES COMPRA-VENDA</option>
                              <option
                                value="82">MOBLES DE BANY I ACCESSORIS</option>
                              <option value="TC">MOBLES DE CUINA</option>
                              <option value="TD">MOBLES DECORACIÓ</option>
                              <option value="TB">MOBLES HOSTALERIA</option>
                              <option value="TJ">MOBLES OFICINES</option>
                              <option value="TM">MODELISME</option>
                              <option value="TO">MODES I NOVETATS</option>
                              <option value="TP">MODISTES</option>
                              <option value="TQ">MOQUETES</option>
                              <option value="TT">MOTOCICLETES</option>
                              <option
                                value="TU">MOTOCICLETES ACCESSORIS</option>
                              <option value="TV">MOTOCICLETES RECANVIS</option>
                              <option value="TW">MOTOCICLETES TALLERS</option>
                              <option value="TX">MOTORS</option>
                              <option value="TY">MUDANCES</option>
                              <option value="XQ">MULTIMÈDIA</option>
                              <option value="T2">MUSEUS</option>
                              <option value="B3">MÀQUINES EXPENEDORES</option>
                              <option value="T3">MÚSICA</option>
                              <option value="T4">MÚSICA FABRICACIÓ</option>
                              <option value="T6">MÚSICA REPARACIÓ</option>
                              <option value="T9">NATURISTES</option>
                              <option value="UA">NAUTICA</option>
                              <option value="RY">NEFROLOGIA</option>
                              <option value="AR">NEFROLOGIA</option>
                              <option value="UD">NETEJA</option>
                              <option value="UF">NETEJA DE NEU</option>
                              <option value="57">NETEJA DE XEMENEIES</option>
                              <option value="UE">NETEJA EMPRESES</option>
                              <option
                                value="AS">NEUROFISIOLOGIA CLINICA</option>
                              <option value="SI">NEUROLOGIA</option>
                              <option value="UJ">NOTARIS</option>
                              <option value="UL">NUMISMATICA</option>
                              <option value="UR">OBRES PUBLIQUES</option>
                              <option
                                value="SK">OBSTETRICIA I GINECOLOGIA</option>
                              <option value="U1">OLIS</option>
                              <option value="U2">OLIS MAGATZEM</option>
                              <option value="U5">OPTIQUES</option>
                              <option
                                value="U7">ORGANITZACIO D'EMPRESES</option>
                              <option value="84">ORGANITZACIO DE BODES</option>
                              <option value="VB">ORTOFONISTES</option>
                              <option value="VD">ORTOPEDIES</option>
                              <option value="OO">OSTEÒPATES</option>
                              <option value="VK">PAPER</option>
                              <option value="VO">PAPER PINTAT</option>
                              <option value="VP">PAPERERIES</option>
                              <option value="A9">PARCS D'ATRACCIONS</option>
                              <option value="YX">PARCS INFANTILS</option>
                              <option value="HV">PARQUETS</option>
                              <option value="KK">PARTITS POLITICS</option>
                              <option value="VW">PASTISSERIES</option>
                              <option value="VX">PATATES FREGIDES</option>
                              <option value="VU">PATENTS I MARQUES</option>
                              <option value="BO">PATINATGE</option>
                              <option value="VZ">PAVIMENTS</option>
                              <option value="V0">PAVIMENTS FUSTA</option>
                              <option value="V1">PAVIMENTS GOMA</option>
                              <option value="V2">PAVIMENTS PLASTIC</option>
                              <option value="V4">PEDRA ARTIFICIAL</option>
                              <option value="V6">PEIXATERIES</option>
                              <option value="WA">PELLETERIES</option>
                              <option value="WC">PENSIONS</option>
                              <option value="WE">PERFUMERIES</option>
                              <option value="WK">PERITATGE</option>
                              <option value="WL">PERITS</option>
                              <option value="WP">PERITS INDUSTRIALS</option>
                              <option value="W6">PERRUQUERIES ARTICLES</option>
                              <option value="W2">PERRUQUERIES CANINES</option>
                              <option
                                value="W1">PERRUQUERIES PERRUQUERIES</option>
                              <option value="W3">PERRUQUERIES SENYORES</option>
                              <option value="W4">PERRUQUERIES SENYORS</option>
                              <option value="W5">PERSIANES</option>
                              <option value="W9">PESCA</option>
                              <option value="XE">PINSOS</option>
                              <option value="XI">PINTORS</option>
                              <option value="XJ">PINTORS ARTISTICS</option>
                              <option value="XK">PINTORS DECORADORS</option>
                              <option value="XN">PINTURES</option>
                              <option value="XR">PISCICULTURA</option>
                              <option value="XS">PISCINES</option>
                              <option
                                value="X4">PISCINES INSTAL.LACIONS</option>
                              <option value="XT">PISSARRES</option>
                              <option value="XW">PLANXISTERIES</option>
                              <option value="X0">PLATS PREPARATS</option>
                              <option value="X1">PLOMES ESTILOGRAFIQUES</option>
                              <option value="X2">PNEUMATICS</option>
                              <option value="RZ">PNEUMOLOGIA</option>
                              <option value="X3">PODOLEGS</option>
                              <option value="OG">POLIMENT</option>
                              <option value="X5">PORCELLANES</option>
                              <option value="Z6">PORTES</option>
                              <option value="ZF">PORTES AUTOMATIQUES</option>
                              <option value="YB">PREMSA</option>
                              <option
                                value="YD">PREMSA GUIES TURISTIQUES</option>
                              <option
                                value="YC">PREVENCIO DE RISCOS LABORALS</option>
                              <option value="YE">PROCURADORS</option>
                              <option
                                value="BD">PRODUCCIO D'AUDIOVISUALS</option>
                              <option value="85">PRODUCTES EROTICS</option>
                              <option value="P9">PRODUCTES FARMACEUTICS</option>
                              <option
                                value="PP">PRODUCTES MÈDICS I PARAMÈDICS</option>
                              <option value="P0">PRODUCTES SANITARIS</option>
                              <option value="YG">PROFESSORS</option>
                              <option value="YF">PROFESSORS CIENCIES</option>
                              <option value="YH">PROFESSORS IDIOMES</option>
                              <option
                                value="40">PROFESSORS-MATEMATIQUES</option>
                              <option value="YI">PROFESSORS-NATACIO</option>
                              <option value="YK">PROMOTORS</option>
                              <option value="BM">PROTECCIO LABORAL</option>
                              <option value="YM">PROTESIS DENTAL</option>
                              <option value="YP">PSICOLEGS</option>
                              <option value="19">PSICOLOGIA CLÍNICA</option>
                              <option value="4C">PSICOPEDAGOGS</option>
                              <option value="YU">PUBLICITAT</option>
                              <option value="YV">PUBLICITAT AGENCIES</option>
                              <option value="YW">PUBLICITAT MITJANS</option>
                              <option value="41">PUBS</option>
                              <option value="BI">PUERICULTURA</option>
                              <option value="JW">QUADRES</option>
                              <option value="CR">QUALITAT</option>
                              <option value="Y4">QUIMICS</option>
                              <option value="Y6">QUIOSCS</option>
                              <option value="F0">QUIROPRÀCTICA</option>
                              <option value="Y8">RADIO</option>
                              <option value="ZB">RADIO EMISSORES</option>
                              <option value="SX">RADIODIAGNOSTIC</option>
                              <option value="ZI">RAJOLES</option>
                              <option value="BE">RECICLATGE</option>
                              <option value="ZN">RECLAMS</option>
                              <option value="ZO">RECOBRIMENTS</option>
                              <option value="ZR">RECORDS TIPICS</option>
                              <option value="4M">RECURSOS HUMANS</option>
                              <option value="A7">REFLEXOLOGIA</option>
                              <option value="ZW">REGALS</option>
                              <option value="4L">REGS AUTOMATICS</option>
                              <option
                                value="42">REHABILITACIO D'EDIFICIS</option>
                              <option value="ZZ">REHABILITZACIO</option>
                              <option value="Z0">RELACIONS PUBLIQUES</option>
                              <option value="Z1">RELAXACIO</option>
                              <option value="Z3">RELLOTGERIES</option>
                              <option
                                value="Z4">RELLOTGERIES MAJORISTES</option>
                              <option value="60">RELLOTGERIES TALLER</option>
                              <option value="Z5">RELLOTGES</option>
                              <option value="Z8">RENTAT I GREIXATGE</option>
                              <option value="Z9">REPARACIONS</option>
                              <option value="0B">REPRESENTANTS</option>
                              <option value="0C">REPRODUCCIO DE PLANOLS</option>
                              <option value="0E">RESIDENCIES</option>
                              <option value="0F">RESTAURADORS</option>
                              <option value="0G">RESTAURANTS</option>
                              <option value="0H">RETOLISTES</option>
                              <option value="0I">RETOLS</option>
                              <option value="S1">REUMATOLOGIA</option>
                              <option value="69">REVEGETACIO</option>
                              <option value="0K">REVESTIMENTS</option>
                              <option
                                value="YZ">RISCS GEOLÒGICS I NATURALS</option>
                              <option value="35">ROCÒDROMS</option>
                              <option value="0M">SABATERIES</option>
                              <option value="0N">SABATERS</option>
                              <option value="X9">SAIG</option>
                              <option value="0O">SALES</option>
                              <option value="FJ">SALES DE BITLLES</option>
                              <option value="0P">SALES DE FESTES</option>
                              <option value="0Q">SALES DE JOCS</option>
                              <option value="0R">SALONS DE BELLESA</option>
                              <option value="0S">SALONS DE TE</option>
                              <option value="44">SANITARIS</option>
                              <option value="0V">SASTRERIES</option>
                              <option value="0W">SASTRES</option>
                              <option value="0X">SAUNES</option>
                              <option value="0Y">SEGELLS DE CAUTXU</option>
                              <option value="G6">SEGURETAT ALIMENTÀRIA</option>
                              <option value="0Z">SELECCIO DE PERSONAL</option>
                              <option value="4N">SENYALITZACIONS</option>
                              <option value="00">SENYALS INDICADORS</option>
                              <option value="05">SERIGRAFIA</option>
                              <option value="06">SERRALLERIES</option>
                              <option value="12">SERVEIS</option>
                              <option value="1A">SERVEIS EMPRESARIALS</option>
                              <option value="37">SERVEIS ENERGÈTICS</option>
                              <option value="wz">SERVEIS PERSONALS</option>
                              <option value="70">SISTEMES DE CONTROL</option>
                              <option
                                value="1B">SISTEMES, SERVEIS DE SEGURETAT</option>
                              <option value="Z7">SOCIETATS</option>
                              <option
                                value="D6">SOCIETATS FILANTRÒPIQUES</option>
                              <option value="1F">SOLDADURES</option>
                              <option value="14">SONDEIG</option>
                              <option value="45">SONORITZACIO</option>
                              <option value="ZK">SUBMARINISME</option>
                              <option
                                value="1J">SUBMINISTRAMENTS INDUSTRIALS</option>
                              <option value="1L">SUPERMERCATS</option>
                              <option value="1N">TABACS</option>
                              <option value="1O">TABACS FABRIQUES</option>
                              <option value="1Q">TALLERS</option>
                              <option value="1R">TALLERS MECANICS</option>
                              <option value="1W">TAPISSERIES</option>
                              <option value="1X">TAPISSERS</option>
                              <option value="A1">TARGETES</option>
                              <option value="83">TATUATGES</option>
                              <option value="5Q">TAXACIONS</option>
                              <option value="11">TAXIS</option>
                              <option value="15">TEIXITS</option>
                              <option value="16">TELECOMUNICACIO</option>
                              <option value="2A">TELEVISIO</option>
                              <option value="2B">TELEVISIO ANTENES</option>
                              <option value="2C">TELEVISIO APARELLS</option>
                              <option value="2D">TELEVISIO EMISSORES</option>
                              <option value="2F">TELEVISIO REPARACIONS</option>
                              <option value="2Q">TENDALS</option>
                              <option value="XO">TERAPEUTES</option>
                              <option value="XP">TERAPEUTES OCUPACIONAL</option>
                              <option value="ZV">TERAPIA VISUAL</option>
                              <option value="72">TEXTIL PER A LA LLAR</option>
                              <option value="2L">TINTORERIES</option>
                              <option value="2S">TOPOGRAFIA</option>
                              <option value="2U">TOPOGRAFS</option>
                              <option value="20">TRADUCTORS</option>
                              <option
                                value="23">TRANSITS INTERNACIONALS</option>
                              <option value="04">TRANSPORT SANITARI</option>
                              <option value="24">TRANSPORTISTES</option>
                              <option value="25">TRANSPORTS</option>
                              <option value="26">TRANSPORTS VIATGERS</option>
                              <option value="59">TREBALL TEMPORAL</option>
                              <option value="47">TREBALLS ACROBATICS</option>
                              <option value="71">TREBALLS FORESTALS</option>
                              <option value="27">TREBALLS PUBLICS</option>
                              <option value="3B">TROFEUS</option>
                              <option value="3E">TURISME</option>
                              <option value="3G">TURISME OFICINES</option>
                              <option value="3I">ULLERES</option>
                              <option value="3J">ULLERES MAJORISTES</option>
                              <option value="BN">UNIFORMES</option>
                              <option value="ZG">UNIVERSITAT</option>
                              <option value="3K">URBANISTES</option>
                              <option value="S4">UROLOGIA</option>
                              <option
                                value="5H">VALORACIONS IMMOBILIARIES</option>
                              <option value="3R">VENTILACIONS</option>
                              <option value="28">VESTUARI PROFESSIONAL</option>
                              <option value="3T">VETERINARIS</option>
                              <option value="3U">VIATGES</option>
                              <option value="3V">VIATGES AGENCIES</option>
                              <option value="3W">VIATGES ARTICLES</option>
                              <option value="3X">VIDEO-CLUBS</option>
                              <option value="3Z">VIDRES</option>
                              <option value="30">VIMET</option>
                              <option value="31">VIMET ARTICLES</option>
                              <option value="33">VINS</option>
                              <option value="4A">XARCUTERIES</option>
                              <option value="4B">XEMENEIES</option>
                              <option value="18">XOCOLATERIES</option>
                           </select>
                        </div>
                        <span class="ui-combobox">
                           <input id="auto-complete-data"
                                  class="ui-autocomplete-input ui-state-default ui-combobox-input"
                                  value="Qualsevol">
                           <a tabindex="-1" title="Show All Items"
                              class="ui-button ui-widget ui-state-default ui-button-icon-only ui-corner-right ui-combobox-toggle"
                              role="button" aria-disabled="false">
                              <span
                                class="ui-button-icon-primary ui-icon ui-icon-triangle-1-s"></span><span
                               class="ui-button-text"></span></a>
                        </span>
                     </div>
                  </span>
               </span>
              <span class="aui-field aui-field-select aui-field-menu">
                  <span class="aui-field-content">
                     <label class="aui-field-label"
                            for="_laguia_WAR_laguiaportlet_INSTANCE_q3El_parroquiaId">
                     En quina parròquia?
                     </label>
                     <span class="aui-field-element ">
                        <div class="jqTransformSelectWrapper"
                             style="z-index: 8; width: 149px;">
                           <div class="jqTransformSelectInsideWrapper"><span
                               style="width: 120px;">
                              Qualsevol
                              </span>
                           </div>
                           <a href="#" class="jqTransformSelectOpen"></a>
                           <ul
                             style="width: 123px; display: none; visibility: visible;">
                              <li><a href="#" index="0" class="selected">
                                 Qualsevol
                                 </a>
                              </li>
                              <li><a href="#" index="1">
                                 Canillo
                                 </a>
                              </li>
                              <li><a href="#" index="2">
                                 Ordino
                                 </a>
                              </li>
                              <li><a href="#" index="3">
                                 Encamp
                                 </a>
                              </li>
                              <li><a href="#" index="4">
                                 La Massana
                                 </a>
                              </li>
                              <li><a href="#" index="5">
                                 Andorra la Vella
                                 </a>
                              </li>
                              <li><a href="#" index="6">
                                 Escaldes-Engordany
                                 </a>
                              </li>
                              <li><a href="#" index="7">
                                 Sant Julià de Lòria
                                 </a>
                              </li>
                           </ul>
                           <select
                             class="aui-field-input aui-field-input-select aui-field-input-menu jqTransformHidden"
                             id="_laguia_WAR_laguiaportlet_INSTANCE_q3El_parroquiaId"
                             name="_laguia_WAR_laguiaportlet_INSTANCE_q3El_parroquiaId">
                              <option value=""> Qualsevol </option>
                              <option value="1"> Canillo </option>
                              <option value="3"> Ordino </option>
                              <option value="2"> Encamp </option>
                              <option value="4"> La Massana </option>
                              <option value="5"> Andorra la Vella </option>
                              <option value="7"> Escaldes-Engordany </option>
                              <option value="6"> Sant Julià de Lòria </option>
                           </select>
                        </div>
                     </span>
                  </span>
               </span>
              <span class="aui-field aui-field-select aui-field-menu">
                  <span class="aui-field-content">
                     <label class="aui-field-label"
                            for="_laguia_WAR_laguiaportlet_INSTANCE_q3El_like">
                     Cerca els resultats amb
                     </label>
                     <span class="aui-field-element ">
                        <div class="jqTransformSelectWrapper"
                             style="z-index: 7; width: 149px;">
                           <div class="jqTransformSelectInsideWrapper"><span
                               style="width: 120px;">
                              Totes
                              </span>
                           </div>
                           <a href="#" class="jqTransformSelectOpen"></a>
                           <ul
                             style="width: 123px; display: none; visibility: visible; height: 78px; overflow: hidden;">
                              <li><a href="#" index="0" class="selected">
                                 Totes
                                 </a>
                              </li>
                              <li><a href="#" index="1">
                                 Alguna
                                 </a>
                              </li>
                              <li><a href="#" index="2">
                                 Exactament
                                 </a>
                              </li>
                           </ul>
                           <select
                             class="aui-field-input aui-field-input-select aui-field-input-menu jqTransformHidden"
                             id="_laguia_WAR_laguiaportlet_INSTANCE_q3El_like"
                             name="_laguia_WAR_laguiaportlet_INSTANCE_q3El_like">
                              <option value="ALL_WORDS"> Totes </option>
                              <option value="ANY_WORDS"> Alguna </option>
                              <option value="BY_SENTENCE"> Exactament </option>
                           </select>
                        </div>
                     </span>
                  </span>
               </span>
            </div>
          </fieldset>
          <div class="netejar_form"
               id="_laguia_WAR_laguiaportlet_INSTANCE_q3El__netejar_section"><a
              href="javascript:_laguia_WAR_laguiaportlet_INSTANCE_q3El_clearForm()"
              title="Netejar formulari">Netejar formulari</a></div>
        </div>
      </div>
    </div>
    <div class="search-criteria-results">
      <!--         <div class="caixa_criteri">-->
      <!--             <h2>Criteris de cerca</h2>-->
      <!--             <div class="criteria_row">-->
      <!--                 <div class="caixa_criteri_label"> Nom o raó social:-->
      <!--                 </div>-->
      <!--                 <div class="caixa_criteri_value">a</div>-->
      <!--             </div>-->
      <!--             <div class="criteria_row">-->
      <!--                 <div class="caixa_criteri_label">Particular o empresa: </div>-->
      <!--                 <div class="caixa_criteri_value"> Qualsevol-->
      <!--                 </div>-->
      <!--             </div>-->
      <!--             <div class="criteria_row">-->
      <!--                 <div class="caixa_criteri_label">Tipus activitat:</div>-->
      <!--                 <div class="caixa_criteri_value"> Qualsevol-->
      <!--                 </div>-->
      <!--             </div>-->
      <!--             <div class="criteria_row">-->
      <!--                 <div class="caixa_criteri_label">En quina parròquia?:</div>-->
      <!--                 <div class="caixa_criteri_value"> Qualsevol-->
      <!--                 </div>-->
      <!--             </div>-->
      <!--             <div class="criteria_row">-->
      <!--                 <div class="caixa_criteri_label">Resultats amb:</div>-->
      <!--                 <div class="caixa_criteri_value"> Totes les paraules-->
      <!--                 </div>-->
      <!--             </div>-->
      <!--         </div>-->
      <div class="show_results_section">
        <div class="show_results_section_container ">
          <div class="results-grid">
            <div class="total-results">1839 resultats</div>
            <div class="pager-phonebook">Mostrant resultats 1-20</div>

            <div class="table-search-iterator">
              <div class="table-search-iterator-body">
                <div class="results-header">
                  <div class="results-header-content">
                                     <span class="result-column-name">
                                         <a href="#"> Nom o raó social</a>
                                     </span>
                  </div>
                  <div class="results-header-content">
                                     <span class="result-column-name">
                                         <a href="#"> Particular/Empresa</a>
                                     </span>
                  </div>
                  <div class="results-header-content">
                                     <span class="result-column-name">
                                         <a href="#"> Activitat</a>
                                     </span>
                  </div>
                  <div class="results-header-content">
                                     <span class="result-column-name">
                                         Número Servei
                                     </span>
                  </div>
                </div>

                <div id="accordion">

                  <div class="results-row">
                    <div class="results-row-content">
                      <div class="guia-caixa-row-container">
                        <div class="guia-caixa-row">
                          <div
                            class="la-guia-table-cell la-guia-table-cell-first">
                            A-TRACCIO-A
                          </div>
                          <div class="la-guia-table-cell">Empresa</div>
                          <div class="la-guia-table-cell">disseny i creacio
                            grafica
                          </div>
                          <div
                            class="la-guia-table-cell la-guia-table-cell-last">
                            867588
                          </div>
                        </div>
                      </div>
                      <div class="companyDetail">
                        <div class="companyInfo">
                          <div class="companyMap">
                            <div class="mapContainer"></div>
                            <input class="mapContainerAddress" type="hidden"
                                   value="Carrer Ciutat de Valls 16 , Andorra la Vella,  Andorra la Vella"
                                   name="address_0_0">
                          </div>
                          <div class="right">
                            <div class="companyAddressSendOptions">
                              <div class="companyAddress">
                                <p class="cAddress">
                                  <span><strong>C/ Lorem Ipsum dolor sit n. 22, 4º2ª</strong></span>
                                  <span>Edifici Lorem Ipsum</span>
                                  <span>CP :AD600</span>
                                  <span>Andorra la Vella</span>
                                </p>
                              </div>
                              <ul class="companySendOptions ">
                                <li class="sendSms">Enviar SMS</li>
                                <li class="sendEmail">Enviar Email</li>
                              </ul>
                            </div>
                            <ul class="companyContact">
                              <li class="landPhone"> 867588</li>
                              <li class="fax"> 867580</li>
                              <li class="mobilePhone"> 123456789</li>
                              <li class="email"> lore@ipsum.com</li>
                              <li class="web"> loreipsum.com</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <!-- START SEND SMS AND Emails-->
                      <div class="sms-sender">
                        <fieldset class="sendOption">
                          <span class="title-field">Número Mòbil (+376)</span>
                          <input type="text" name="numeroMovil" size="13" title="Número Mòbil">

                          <div class="divContainerRowLaGuia">
                            <div class="taglib-guia-captcha">

                               <span class="title-field">Imatge de seguretat</span>
                               <img alt="captcha" class="captcha"
                                    src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_SMS&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aACADEMIA+MASEGOSA_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=2&amp;t=1478419731612 ">

                                <div class="ctrl-holder-text-verification-link">
                                  En cas de no reconeixer les lletres

                                  de la imatge pots <a class="" id="setCaptcha"
                                                       href="#">
                                    recarregar-la </a></div>
                              <div id="verificationDiv"
                                   class="ctrl-holder-cell"><input
                                  name="uinm_captchaText"
                                  size="21" type="text" value=""
                                  title="Text captcha"></div>
                            </div>
                          </div>
                          <div class="divContainerRowLaGuia">
                            <div class="divContainerCellPreFiller"></div>
                            <div class="divContainerCellFiller">
                              <div class="aui-button-holder "><input
                                  type="button" value="Enviar SMS"
                                  class="button-pink"
                                  onclick="_laguia_WAR_laguiaportlet_INSTANCE_q3El_2_0_sendSmsGuia();">
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="email-sender">
                        <fieldset class="sendOption">
                          <meta http-equiv="Pragma" content="no-cache">
                          <meta http-equiv="Expires" content="-1">
                          <div class="divContainerRowLaGuia adjustLaGuia2">
                              <span class="title-field">Email</span>
                            <div
                              class="divContainerCellRestoLaGuia inputTextLaGuia">
                              <input type="text"
                                     id="_laguia_WAR_laguiaportlet_INSTANCE_q3El_email"
                                     name="email" size="13" title="Email">
                            </div>
                          </div>
                          <div class="divContainerRowLaGuia">
                            <div class="taglib-guia-captcha">
                              <div class="izquierda">
                                 <span class="title-field">Imatge de seguretat</span>
                                 <img alt="captcha" class="captcha"
                                    src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_MAIL&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aLES+CLASSES+MARISOL+NAVARRO_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=3&amp;t=1478495528990 ">
                                <div
                                  class="ctrl-holder-text-verification-link">
                                  En cas de no reconeixer les lletres

                                  de la imatge pots <a class=""
                                                       id="setCaptcha"
                                                       href="javascript:ocey_actualizar();">
                                    recarregar-la </a></div>
                              </div>
                              <div id="verificationDiv"
                                   class="ctrl-holder-cell derecha"><input
                                  id="captchaText" name="ocey_captchaText"
                                  size="21" type="text" value=""
                                  title="Text captcha"></div>
                            </div>
                          </div>
                          <div class="divContainerRowLaGuia">
                            <div class="divContainerCellPreFiller"></div>
                            <div class="divContainerCellFiller">
                              <div class="aui-button-holder "><input class="button-pink"
                                  type="button" value="Enviar Email"
                                  onclick="_laguia_WAR_laguiaportlet_INSTANCE_q3El_3_0_sendEmailGuia();">
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                       <!-- END SMS AND Emails-->

                    </div>
                  </div>

                  <div class="results-row">
                    <div class="results-row-content">
                      <div class="guia-caixa-row-container">
                        <div class="guia-caixa-row">
                          <div
                            class="la-guia-table-cell la-guia-table-cell-first">
                            A-TRACCIO-B
                          </div>
                          <div class="la-guia-table-cell">Empresa</div>
                          <div class="la-guia-table-cell">disseny i creacio
                            grafica
                          </div>
                          <div
                            class="la-guia-table-cell la-guia-table-cell-last">
                            867588
                          </div>
                        </div>
                      </div>
                      <div class="companyDetail">
                        <div class="companyInfo">
                          <div class="companyMap">
                            <div class="mapContainer"></div>
                            <input class="mapContainerAddress" type="hidden"
                                   value="Carrer Ciutat de Valls 16 , Andorra la Vella,  Andorra la Vella"
                                   name="address_0_0">
                          </div>
                          <div class="right">
                            <div class="companyAddressSendOptions">
                              <div class="companyAddress">
                                <p class="cAddress">
                                  <span><strong>C/ Lorem Ipsum dolor sit n. 22, 4º2ª</strong></span>
                                  <span>Edifici Lorem Ipsum</span>
                                  <span>CP :AD600</span>
                                  <span>Andorra la Vella</span>
                                </p>
                              </div>
                              <ul class="companySendOptions ">
                                <li class="sendSms">Enviar SMS</li>
                                <li class="sendEmail">Enviar Email</li>
                              </ul>
                            </div>
                            <ul class="companyContact">
                              <li class="landPhone"> 867588</li>
                              <li class="fax"> 867580</li>
                              <li class="mobilePhone"> 123456789</li>
                              <li class="email"> lore@ipsum.com</li>
                              <li class="web"> loreipsum.com</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                       <!-- START SEND SMS AND Emails-->
                       <div class="sms-sender">
                          <fieldset class="sendOption">
                             <span class="title-field">Número Mòbil (+376)</span>
                             <input type="text" name="numeroMovil" size="13" title="Número Mòbil">

                             <div class="divContainerRowLaGuia">
                                <div class="taglib-guia-captcha">

                                   <span class="title-field">Imatge de seguretat</span>
                                   <img alt="captcha" class="captcha"
                                        src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_SMS&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aACADEMIA+MASEGOSA_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=2&amp;t=1478419731612 ">

                                   <div class="ctrl-holder-text-verification-link">
                                      En cas de no reconeixer les lletres

                                      de la imatge pots <a class="" id="setCaptcha"
                                                           href="#">
                                         recarregar-la </a></div>
                                   <div id="verificationDiv"
                                        class="ctrl-holder-cell"><input
                                        name="uinm_captchaText"
                                        size="21" type="text" value=""
                                        title="Text captcha"></div>
                                </div>
                             </div>
                             <div class="divContainerRowLaGuia">
                                <div class="divContainerCellPreFiller"></div>
                                <div class="divContainerCellFiller">
                                   <div class="aui-button-holder "><input
                                        type="button" value="Enviar SMS"
                                        class="button-pink"
                                        onclick="_laguia_WAR_laguiaportlet_INSTANCE_q3El_2_0_sendSmsGuia();">
                                   </div>
                                </div>
                             </div>
                          </fieldset>
                       </div>

                       <div class="email-sender">
                          <fieldset class="sendOption">
                             <meta http-equiv="Pragma" content="no-cache">
                             <meta http-equiv="Expires" content="-1">
                             <div class="divContainerRowLaGuia adjustLaGuia2">
                                <span class="title-field">Email</span>
                                <div
                                  class="divContainerCellRestoLaGuia inputTextLaGuia">
                                   <input type="text"
                                          id="_laguia_WAR_laguiaportlet_INSTANCE_q3El_email"
                                          name="email" size="13" title="Email">
                                </div>
                             </div>
                             <div class="divContainerRowLaGuia">
                                <div class="taglib-guia-captcha">
                                   <div class="izquierda">
                                      <span class="title-field">Imatge de seguretat</span>
                                      <img alt="captcha" class="captcha"
                                           src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_MAIL&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aLES+CLASSES+MARISOL+NAVARRO_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=3&amp;t=1478495528990 ">
                                      <div
                                        class="ctrl-holder-text-verification-link">
                                         En cas de no reconeixer les lletres

                                         de la imatge pots <a class=""
                                                              id="setCaptcha"
                                                              href="javascript:ocey_actualizar();">
                                            recarregar-la </a></div>
                                   </div>
                                   <div id="verificationDiv"
                                        class="ctrl-holder-cell derecha"><input
                                        id="captchaText" name="ocey_captchaText"
                                        size="21" type="text" value=""
                                        title="Text captcha"></div>
                                </div>
                             </div>
                             <div class="divContainerRowLaGuia">
                                <div class="divContainerCellPreFiller"></div>
                                <div class="divContainerCellFiller">
                                   <div class="aui-button-holder "><input class="button-pink"
                                                                          type="button" value="Enviar Email"
                                                                          onclick="_laguia_WAR_laguiaportlet_INSTANCE_q3El_3_0_sendEmailGuia();">
                                   </div>
                                </div>
                             </div>
                          </fieldset>
                       </div>
                       <!-- END SMS AND Emails-->
                    </div>
                  </div>
                  <div class="results-row">
                    <div class="results-row-content">
                      <div class="guia-caixa-row-container">
                        <div class="guia-caixa-row">
                          <div
                            class="la-guia-table-cell la-guia-table-cell-first">
                            A-TRACCIO-C
                          </div>
                          <div class="la-guia-table-cell">Empresa</div>
                          <div class="la-guia-table-cell">disseny i creacio
                            grafica
                          </div>
                          <div
                            class="la-guia-table-cell la-guia-table-cell-last">
                            867588
                          </div>
                        </div>
                      </div>
                      <div class="companyDetail">
                        <div class="companyInfo">
                          <div class="companyMap">
                            <div class="mapContainer"></div>
                            <input class="mapContainerAddress" type="hidden"
                                   value="Carrer Ciutat de Valls 16 , Andorra la Vella,  Andorra la Vella"
                                   name="address_0_0">
                          </div>
                          <div class="right">
                            <div class="companyAddressSendOptions">
                              <div class="companyAddress">
                                <p class="cAddress">
                                  <span><strong>C/ Lorem Ipsum dolor sit n. 22, 4º2ª</strong></span>
                                  <span>Edifici Lorem Ipsum</span>
                                  <span>CP :AD600</span>
                                  <span>Andorra la Vella</span>
                                </p>
                              </div>
                              <ul class="companySendOptions ">
                                <li class="sendSms">Enviar SMS</li>
                                <li class="sendEmail">Enviar Email</li>
                              </ul>
                            </div>
                            <ul class="companyContact">
                              <li class="landPhone"> 867588</li>
                              <li class="fax"> 867580</li>
                              <li class="mobilePhone"> 123456789</li>
                              <li class="email"> lore@ipsum.com</li>
                              <li class="web"> loreipsum.com</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                       <!-- START SEND SMS AND Emails-->
                       <div class="sms-sender">
                          <fieldset class="sendOption">
                             <span class="title-field">Número Mòbil (+376)</span>
                             <input type="text" name="numeroMovil" size="13" title="Número Mòbil">

                             <div class="divContainerRowLaGuia">
                                <div class="taglib-guia-captcha">

                                   <span class="title-field">Imatge de seguretat</span>
                                   <img alt="captcha" class="captcha"
                                        src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_SMS&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aACADEMIA+MASEGOSA_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=2&amp;t=1478419731612 ">

                                   <div class="ctrl-holder-text-verification-link">
                                      En cas de no reconeixer les lletres

                                      de la imatge pots <a class="" id="setCaptcha"
                                                           href="#">
                                         recarregar-la </a></div>
                                   <div id="verificationDiv"
                                        class="ctrl-holder-cell"><input
                                        name="uinm_captchaText"
                                        size="21" type="text" value=""
                                        title="Text captcha"></div>
                                </div>
                             </div>
                             <div class="divContainerRowLaGuia">
                                <div class="divContainerCellPreFiller"></div>
                                <div class="divContainerCellFiller">
                                   <div class="aui-button-holder "><input
                                        type="button" value="Enviar SMS"
                                        class="button-pink"
                                        onclick="_laguia_WAR_laguiaportlet_INSTANCE_q3El_2_0_sendSmsGuia();">
                                   </div>
                                </div>
                             </div>
                          </fieldset>
                       </div>

                       <div class="email-sender">
                          <fieldset class="sendOption">
                             <meta http-equiv="Pragma" content="no-cache">
                             <meta http-equiv="Expires" content="-1">
                             <div class="divContainerRowLaGuia adjustLaGuia2">
                                <span class="title-field">Email</span>
                                <div
                                  class="divContainerCellRestoLaGuia inputTextLaGuia">
                                   <input type="text"
                                          id="_laguia_WAR_laguiaportlet_INSTANCE_q3El_email"
                                          name="email" size="13" title="Email">
                                </div>
                             </div>
                             <div class="divContainerRowLaGuia">
                                <div class="taglib-guia-captcha">
                                   <div class="izquierda">
                                      <span class="title-field">Imatge de seguretat</span>
                                      <img alt="captcha" class="captcha"
                                           src="https://www.andorratelecom.ad/web/guest/la-guia.ad?p_p_id=laguia_WAR_laguiaportlet_INSTANCE_q3El&amp;p_p_lifecycle=2&amp;p_p_state=exclusive&amp;p_p_mode=view&amp;p_p_cacheability=cacheLevelPage&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_cmd=captcha&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_CMD=CMD_AJAX_MAIL&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_id=0&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_rowParameters=%5bname%3aLES+CLASSES+MARISOL+NAVARRO_activityId%3aAB_type%3aempresa_parishId%3anull%5d&amp;_laguia_WAR_laguiaportlet_INSTANCE_q3El_row=3&amp;t=1478495528990 ">
                                      <div
                                        class="ctrl-holder-text-verification-link">
                                         En cas de no reconeixer les lletres

                                         de la imatge pots <a class=""
                                                              id="setCaptcha"
                                                              href="javascript:ocey_actualizar();">
                                            recarregar-la </a></div>
                                   </div>
                                   <div id="verificationDiv"
                                        class="ctrl-holder-cell derecha"><input
                                        id="captchaText" name="ocey_captchaText"
                                        size="21" type="text" value=""
                                        title="Text captcha"></div>
                                </div>
                             </div>
                             <div class="divContainerRowLaGuia">
                                <div class="divContainerCellPreFiller"></div>
                                <div class="divContainerCellFiller">
                                   <div class="aui-button-holder "><input class="button-pink"
                                                                          type="button" value="Enviar Email"
                                                                          onclick="_laguia_WAR_laguiaportlet_INSTANCE_q3El_3_0_sendEmailGuia();">
                                   </div>
                                </div>
                             </div>
                          </fieldset>
                       </div>
                       <!-- END SMS AND Emails-->
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form><!-- END SEARCH PHONEBOOK FORM-->
</div>
<!--END SPECIFIC PAGE GUIA-->

<!--<script>-->
<!--TEST de Autocomplete-->
<!--   var availableTags = [-->
<!--      "ActionScript",-->
<!--      "AppleScript",-->
<!--      "Asp",-->
<!--      "BASIC",-->
<!--      "C",-->
<!--      "C++",-->
<!--      "Clojure",-->
<!--      "COBOL",-->
<!--      "ColdFusion",-->
<!--      "Erlang",-->
<!--      "Fortran",-->
<!--      "Groovy",-->
<!--      "Haskell",-->
<!--      "Java",-->
<!--      "JavaScript",-->
<!--      "Lisp",-->
<!--      "Perl",-->
<!--      "PHP",-->
<!--      "Python",-->
<!--      "Ruby",-->
<!--      "Scala",-->
<!--      "Scheme"-->
<!--   ];-->
<!--   $( "#auto-complete-data" ).autocomplete({-->
<!--      source: availableTags-->
<!--   });-->
<!--</script>-->

<div class="floating-sms-emails">


</div>


<?php include 'includes/footer.php'; ?>