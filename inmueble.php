<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en-es">
  <?php
  $gs = 0;
  $ti = 0;
  $ci = 0;
  $zo = 0;
  $pre = 0;
  $pre1 = 0;
  if (isset($_GET["gs"]) && isset($_GET["ti"]) && isset($_GET["ci"]) && isset($_GET["zo"])&& isset($_GET["pre"]) && isset($_GET["pre1"])) {
      $gs = $_GET["gs"];
      $ti = $_GET["ti"];
      $ci = $_GET["ci"];
      $zo = $_GET["zo"];
      $pre = $_GET["pre"];
      $pre= str_replace('.', '', $pre);
      $pre1 = $_GET["pre1"];
    $pre1= str_replace('.', '', $pre1);
    
    
  }
  ?>
<head>
<title>Ruta Inmobiliaria - Inmueble</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">

  <meta name="author" content="Biinyu Games">
  <meta name="description" value="RUTA INMOBILIARIA S.A es una empresa con 4 años en el sector inmobiliario. Nos especializamos 
	en arrendamientos, venta, avalúos y asesorías integrales en todo lo relacionado con propiedad raiz.">
  	 <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
     <meta name="keywords" value="apartaestudios en medellin, apartamentos baratos en medellin, casas en arriendo medellin, inmobiliarias en medellin, agencias inmobiliarias en 
	medellin, apartamentos en arriendo medellin, arriendos baratos medellin, casas en arriendo medellin" >
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127178498-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127178498-1');
</script>
<script type="text/javascript"> window.smartlook||(function(d) { var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0]; var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript'; c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c); })(document); smartlook('init', 'df51edef96e0c83cfcb3f6906c36e2cbdc8921df'); </script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WPN4N86');</script>
<!-- End Google Tag Manager -->

  <link rel="alternate" type="application/rss+xml" title="Realtor - Responsive Real Estate WordPress Theme &raquo; Comments Feed"
    href="../../comments/feed/index.html" />
  <script type="text/javascript">
    window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "http:\/\/premiumlayers.net\/demo\/wp\/realtor\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.7" } };
    !function (a, b, c) { function d(a) { var b, c, d, e, f = String.fromCharCode; if (!k || !k.fillText) return !1; switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) { case "flag": return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 56826, 8203, 55356, 56819), 0, 0), c = j.toDataURL(), b !== c && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447), 0, 0), c = j.toDataURL(), b !== c); case "emoji4": return k.fillText(f(55358, 56794, 8205, 9794, 65039), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55358, 56794, 8203, 9794, 65039), 0, 0), e = j.toDataURL(), d !== e }return !1 } function e(a) { var c = b.createElement("script"); c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c) } var f, g, h, i, j = b.createElement("canvas"), k = j.getContext && j.getContext("2d"); for (i = Array("flag", "emoji4"), c.supports = { everything: !0, everythingExceptFlag: !0 }, h = 0; h < i.length; h++)c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]); c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () { c.DOMReady = !0 }, c.supports.everything || (g = function () { c.readyCallback() }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () { "complete" === b.readyState && c.readyCallback() })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji))) }(window, document, window._wpemojiSettings);
  </script>
  <style type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 .07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel='stylesheet' id='rs-plugin-settings-css' href='wp-content/plugins/revslider/public/assets/css/settings-ver=5.4.1.css'
    type='text/css' media='all' />
  <style id='rs-plugin-settings-inline-css' type='text/css'>
    #rs-demo-id {}
  </style>
  <link rel='stylesheet' id='Roboto-css' href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&ver=4.8.7'
    type='text/css' media='all' />
  <link rel='stylesheet' id='Lato-css' href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&ver=4.8.7' type='text/css'
    media='all' />
  <link rel='stylesheet' id='Montserrat-css' href='http://fonts.googleapis.com/css?family=Montserrat:400,700&ver=4.8.7' type='text/css'
    media='all' />
  <link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/realtor/css/bootstrap.min-ver=1.3.css' type='text/css'
    media='all' />
  <link rel='stylesheet' id='main-theme-css' href='wp-content/themes/realtor/css/main-ver=1.3.css' type='text/css' media='all'
  />
  <link rel='stylesheet' id='main-style-css' href='wp-content/themes/realtor/style-ver=1.3.css' type='text/css' media='all'
  />
  <link rel='stylesheet' id='animate-css' href='wp-content/themes/realtor/css/animate-ver=1.3.css' type='text/css' media='all'
  />
  <link rel='stylesheet' id='responsive-css' href='wp-content/themes/realtor/css/responsive-ver=1.3.css' type='text/css' media='all'
  />
  <link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min-ver=5.1.1.css'
    type='text/css' media='all' />
  <link rel='stylesheet' id='custom-style-css' href='wp-content/themes/realtor/css/custom-ver=1.3.css' type='text/css' media='all'
  />
  <link rel='stylesheet' id='color_scheme-css' href='wp-content/themes/realtor/css/color.php-ver=1.3.css' type='text/css' media='all'
  />
  <link rel='stylesheet' id='theme_optima-express-css' href='wp-content/themes/realtor/css/optimaexpress-ver=1.3.css' type='text/css'
    media='all' />
  <script type='text/javascript' src='wp-includes/js/jquery/jquery-ver=1.12.4.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min-ver=1.4.1.js'></script>
  <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min-ver=5.4.1.js'></script>
  <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min-ver=5.4.1.js'></script>
  <link rel='https://api.w.org/' href='wp-json/index.html' />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php-rsd.xml" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
  <meta name="generator" content="WordPress 4.8.7" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
	crossorigin="anonymous">
  <style type="text/css">
  </style>
  <script type="text/javascript"> if (ajaxurl === undefined) var ajaxurl = "http://premiumlayers.net/demo/wp/realtor/wp-admin/admin-ajax.php"; var wow_themes_realtor_rtl = false;</script>
  <style type="text/css">
  </style>


  <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress." />
  <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="../../wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
  <meta name="generator" content="Powered by Slider Revolution 5.4.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."
  />
  <noscript>
    <style type="text/css">
      .wpb_animate_when_almost_visible {
        opacity: 1;
      }
    </style></noscript></head>

<body class="archive date customize-support wpb-js-composer js-comp-ver-5.1.1 vc_responsive"  onload="imprimir(1)">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPN4N86"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!-- Page Wrap ===========================================-->
  <div id="wrap" class="home-1">

    <!--======= TOP BAR =========-->

    <div class="top-bar header-ppal">

    </div>


    <!--======= HEADER =========-->
    <header class="sticky menu-ppal">

    </header>
    <!--======= BANNER =========-->
    <div class="sub-banner"  style="background: url(images/Miradordearboleda2.jpg) no-repeat; background-size: 100% 100%;">
      <div class="overlay">
        <div class="container">
          <h1>Inmuebles</h1>
          <ol class="breadcrumb">
            <li class="pull-left">Inmuebles</li>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="index.html">Inmuebles</a></li>
          </ol>
        </div>
      </div>
    </div>

    <!--======= PROPERTIES DETAIL PAGE =========-->
    <section class="properties white-bg">
      <div class="container">
       

            <ul class="row">
              <li class="col-sm-3">
                <label>Codigo del Inmueble</label>
                <input class="location codeInm" autocomplete="off" type="text" placeholder="Location" name="location" id="location" />
             
              </li>

              <li class="col-sm-3">

                <label>Ciudad</label>
                <select class="ciudad" name="search_city " style="width:100%; height:39px">
                  <option>Ciudad</option>
                </select>
              </li>

              <li class="col-sm-3">

                <label>Zona</label>
                <select class="zona" name="property_status " style="width:100%; height:39px">
                  <option >Zona</option>

                </select>
              </li>

              <li class="col-sm-3">

                <label>Tipo de Inmueble</label>

                <select class="inmueble" name="property_type" style="width:100%; height:39px">
                  <option >Tipo de Inmueble</option>

                </select>
              </li>

              <li class="col-sm-3">
                <label>Operacíon</label>
                <select class="operacion" name="property_bedrooms" style="width:100%; height:39px">
                  <option >Operacíon</option>

                </select>
              </li>

              <li class="col-sm-6">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="cost-price-content">
                      <label>Precio: <span id="price-min" class="price-min input-number-1"></span> <i>-</i>
                        <span id="price-max" class="price-max input-number"></span></label>
                      <div id="price-range" class="price-range" data-symbol="$" data-min="0" data-max="500000000"></div>
                    </div>
                    <input id="precio" type="hidden" name="min_price" value="0" />
                    <input  id="price" type="hidden" name="max_price" value="500000000" />
                  </div>

                  <div class="col-sm-3 search">
                    
                    <button type="submit" class="btn search-1">Buscar</button>
                  </div>
                </div>
              </li>
            </ul>
          
      
      </div>
      <div class="container">


        <ul class="row" id="inmb">



        </ul>
        <div class="col-xs-12">
					<div class="pagination-area mb-60">
						<ul class="pagination-list text-center">
							<div class="pagina" style="color:black;"></div>
							<li id="anterior">
								<a href="#" id="banterior" onclick="paginator('ant')">
									<i class="fa fa-angle-left" aria-hidden="true" id="flechas"></i>
								</a>
							</li>
							<li id="siguiente">
								<a href="#" id="bsiguiente" onclick="paginator('sig')">
									<i class="fa fa-angle-right" aria-hidden="true" id="flechas"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
      </div>
    </section>
    <div class="scrollup" id="easy-top" style="display: block;"></div>


    <!--======= FOOTER =========-->
    <footer class="footer-ppal">



    </footer>

    <!--======= RIGHTS =========-->


    <div class="rights">
      <div class="container">
        <p class="font-montserrat"> Copyright © 2018 <a href="https://www.dexcondigital.com/" target="_blank" style="color: #fff;">Dexcon Digital.</a> Todos los derechos reservados.</p>
      </div>
    </div>



  </div>

  <script type='text/javascript' src='wp-includes/js/jquery/ui/core.min-ver=1.11.4.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/widget.min-ver=1.11.4.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/tabs.min-ver=1.11.4.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.min-ver=1.11.4.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/resizable.min-ver=1.11.4.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/draggable.min-ver=1.11.4.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/button.min-ver=1.11.4.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/position.min-ver=1.11.4.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/dialog.min-ver=1.11.4.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.min-ver=1.11.4.js'></script>
  <script type='text/javascript'>
    jQuery(document).ready(function (jQuery) { jQuery.datepicker.setDefaults({ "closeText": "Close", "currentText": "Today", "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "nextText": "Next", "prevText": "Previous", "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"], "dateFormat": "MM d, yy", "firstDay": 1, "isRTL": false }); });
  </script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/menu.min-ver=1.11.4.js'></script>
  <script type='text/javascript' src='wp-includes/js/wp-a11y.min-ver=4.8.7.js'></script>
  <script type='text/javascript'>
    /* <![CDATA[ */
    var uiAutocompleteL10n = { "noResults": "No results found.", "oneResult": "1 result found. Use up and down arrow keys to navigate.", "manyResults": "%d results found. Use up and down arrow keys to navigate.", "itemSelected": "Item selected." };
/* ]]> */
  </script>
  		<script type='text/javascript' src='wp-content/themes/realtor/js/top.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/autocomplete.min-ver=1.11.4.js'></script>
  <script type='text/javascript' src='wp-content/themes/realtor/js/wow.min-ver=1.3.js'></script>
  <script type='text/javascript' src='wp-content/themes/realtor/js/bootstrap-select-ver=1.3.js'></script>
  <script type='text/javascript' src='wp-content/themes/realtor/js/bootstrap.min-ver=1.3.js'></script>
  <script type='text/javascript' src='wp-content/themes/realtor/js/jquery.stellar-ver=1.3.js'></script>
  <script type='text/javascript' src='wp-content/themes/realtor/js/jquery.flexslider-min-ver=1.3.js'></script>
  <script type='text/javascript' src='wp-content/themes/realtor/js/owl.carousel.min-ver=1.3.js'></script>
  <script type='text/javascript' src='wp-content/themes/realtor/js/jquery.sticky-ver=1.3.js'></script>
  <script type='text/javascript' src='wp-content/themes/realtor/js/own-menu-ver=1.3.js'></script>
  <script type='text/javascript' src='wp-content/themes/realtor/js/main-ver=1.3.js'></script>
  <script type='text/javascript' src='wp-includes/js/wp-embed.min-ver=4.8.7.js'></script>
  <script type='text/javascript' src='wp-content/themes/realtor/js/jquery.nouislider.min-ver=1.3.js'></script>
  <script type='text/javascript' src='wp-content/themes/realtor/js/menu.js'></script>

  		
  <?php echo '<script>var gs = ' . $gs . '</script>'; ?>
  <?php echo '<script>var ti = ' . $ti . '</script>'; ?>
  <?php echo '<script>var ci = ' . $ci . '</script>'; ?>
  <?php echo '<script>var zo = ' . $zo . '</script>'; ?>
  <?php echo '<script>var pre = ' . $pre . '</script>'; ?>
  <?php echo '<script>var pre1 = ' . $pre1 . '</script>'; ?>
  
  <script>
  if (typeof(Storage) !== "undefined") {
  // Store
  localStorage.setItem("gestion", gs);
  localStorage.setItem("ciudad", ci);
  localStorage.setItem("tipo", ti);
  localStorage.setItem("zona", zo);
  localStorage.setItem("precio", pre);
  localStorage.setItem("precio1", pre1);
  
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
  }
  </script>
  <script type='text/javascript' src='js/paginador.js'></script>
  <script type='text/javascript' src='js/search.js'></script>

</body>

</html>