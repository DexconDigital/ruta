<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en-es">
<?php
    $codigo = $_GET["dt"];

    ?>

<?php    $ch = curl_init();
$headers =  'Authorization:OsORyK5XrE9cqZAGvZi8dOMXkcSX8lyKn7Ef42Ex-893';
curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' . $codigo . '');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true); ?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<meta name="author" content="Dexcon Digital">
	<meta name="description" value="RUTA INMOBILIARIA S.A es una empresa con 4 años en el sector inmobiliario. Nos especializamos 
	en arrendamientos, venta, avalúos y asesorías integrales en todo lo relacionado con propiedad raiz.">
	<meta name="keywords" value="apartaestudios en medellin, apartamentos baratos en medellin, casas en arriendo medellin, inmobiliarias en medellin, agencias inmobiliarias en 
	medellin, apartamentos en arriendo medellin, arriendos baratos medellin, casas en arriendo medellin" >
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

	<title>Detalle del Inmueble <?php echo $codigo;?> de Ruta Inmobiliaria</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1, scalable= no">
	<meta property="title" content="Inmueble <?php echo $codigo;?> de Ruta Inmobiliaria" />
<!-- Global site tag (gtag.js) - Google Analytics -->
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
	<meta property="og:site_name" content="Ruta Inmobiliaria"/>
	<?php echo '<meta property="og:url" content="http://rutainmobiliaria.co/detalle-inmueble.php?dt='.$codigo.'" />';?>
	<?php echo '<meta property="og:type" content="place" />';?>
    <?php echo '<meta name="description" content="Detalle de inmueble de Ruta Inmobiliaria">';?>
    <meta property="og:image" content="<?php echo $r["fotos"][0]["foto"];?>" id="metai" />
	<?php echo '<meta property="og:title" content="Inmueble '.$codigo.' de Ruta Inmobiliaria" />';?>
	<?php echo '<meta property="og:description" id="metap" content="Inmueble de Ruta Inmobiliaria"/>';?>
	
	<link rel='dns-prefetch' href='http://fonts.googleapis.com' />
	<link rel='dns-prefetch' href='http://s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="Realtor - Responsive Real Estate WordPress Theme &raquo; Feed" href="feed/index.html"
	/>
	<link rel="alternate" type="application/rss+xml" title="Realtor - Responsive Real Estate WordPress Theme &raquo; Comments Feed"
	 href="comments/feed/index.html" />
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
	<link rel='prev' title='sweet home for small family5' href='sweet-home-for-small-family5/index.html' />
	<meta name="generator" content="WordPress 4.8.7" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
	 crossorigin="anonymous">
	<link rel='shortlink' href='http://premiumlayers.net/demo/wp/realtor/?p=109' />
	<link rel="alternate" type="application/json+oembed" href="http://premiumlayers.net/demo/wp/realtor/wp-json/oembed/1.0/embed?url=http://premiumlayers.net/demo/wp/realtor/property/sweet-home-for-small-family6/"
	/>
	<link rel="alternate" type="text/xml+oembed" href="http://premiumlayers.net/demo/wp/realtor/wp-json/oembed/1.0/embed?url=http://premiumlayers.net/demo/wp/realtor/property/sweet-home-for-small-family6/&format=xml"
	/>
	<style type="text/css">
	</style>
	<script type="text/javascript"> if (ajaxurl === undefined) var ajaxurl = "http://premiumlayers.net/demo/wp/realtor/wp-admin/admin-ajax.php"; var wow_themes_realtor_rtl = false;</script>
	<style type="text/css">
    	    #modalemail {
                top: -2100px;
                float: left;
            }
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

<body class="sh_property-template-default single single-sh_property postid-109 customize-support wpb-js-composer js-comp-ver-5.1.1 vc_responsive">

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
		<div class="sub-banner"  style="background: url(images/Miradordearboleda.jpg) no-repeat; background-size: 100% 100%;">
			<div class="overlay">
				<div class="container">
					<h1>Detalle Inmueble</h1>
					<ol class="breadcrumb">
						<li class="pull-left">Detalle Inmueble</li>
						<li><a href="index.html">Inicio</a></li>
						<li><a href="inmueble.php">Inmuebles</a></li>
						<li>Detalle Inmueble</li>
					</ol>
				</div>
			</div>
		</div>

		<!--======= PROPERTIES DETAIL PAGE =========-->
		<section class="properti-detsil">
			<div class="container">
				<div class="row">

					<!-- end sidebar -->

					<!--======= LEFT BAR =========-->
					<div class="print-detail col-md-9 col-sm-9 col-xs-12">




						<!--======= THUMB SLIDER =========-->
						<!-- Responsive navegador -->
						<style>
							@media screen and (min-width:1025px) {
							.carousel-inner{
								height:600px;
								}
							}
							@media screen and (max-width:1024px) {
							.carousel-inner{
								height:500px;
								}
							}
							@media screen and (max-width:758px) {
							.carousel-inner{
								height:380px;
								}
							}
							@media screen and (max-width:425px) {
							.carousel-inner{
								height:215px;
								}
							}
						</style>
						<div class="carousel slide" id="myCarousel" data-ride="carousel">
                                        <div class="carousel-inner" style="text-align:center; background-color:#113670;"></div>
									<a class="left carousel-control" href="#myCarousel" data-slide="prev" >
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next" >
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>


                                    </div>
						<!--======= HOME INNER DETAILS =========-->
						<ul class="home-in">
							<li><span><i class="fa fa-bath" id="banios"></i> </span></li>
							<li><span><i class="fa fa-bed" id="alcobas"></i> </span></li>
							<li><span><i class="fa fa-compress" id="area"></i> </span></li>
							<li><span><i class="fa fa-car" id="garajes"></i></span></li>
							<li><span><a href="detalle-inmueble.php?dt=<?php echo $codigo;?>" title="Imprimir"  onClick="window.print()" target="_blank" class="imprimir-detalle"><i class="fa fa-print"></i> Imprimir</a></span></li>

						</ul>


						<!--======= TITTLE =========-->
						<div class="clearfix">
							<h5 class="pull-left">Descripción</h5>

						</div>
						<script type="text/javascript">var switchTo5x = true;</script>
						<script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
						<script type="text/javascript">stLight.options({ publisher: "e5f231e9-4404-49b7-bc55-0e8351a047cc", doNotHash: false, doNotCopy: false, hashAddressBar: false });</script>




						<p id="descripcion"> </p>



						<!--======= OWNER DETSILS =========-->
						<section class="info-property">
							<h5 class="tittle-head">Información</h5>
							<div class="inner">

								<!--======= OWNER =========-->
								<div class="row">

									<div class="col-sm-12">
										<ul class="row">
											<li class="col-sm-4">
												<p id="code"><i class="fa fa-qrcode" >  </i></p>
												<p id="ubicacion"><i class="fa fa-map-marker-alt" ></i></p>
											</li>
											<li class="col-sm-4">
												<p id="gestion"> </p>
												<p id="tipo"><i class="fa fa-home" ></i></p>
											</li>
											<li class="col-sm-4">
												<p id="precio"></p>
												
											</li>
										</ul>
									</div>
								</div>
							</div>
						</section>
						<section class="info-property location">
						<div class="clearfix">
							<h5 class="tittle-head">Caracteristicas Internas</h5>

						</div>
					
						<ul id="details-1"> </ul>
						</section>
						<section class="info-property location">
						<div class="clearfix">
							<h5 class="tittle-head">Caracteristicas Externas</h5>

						</div>
					
						<ul id="details-2"> </ul>
						</section>








						<!--======= PROPERTY FEATURES =========-->
						<section class="info-property location">
							<h5 class="tittle-head">Ubicación</h5>
						
							<div class="map-position">
                                        <div id="map" style="height:300px"></div>
                                    </div>
							
						</section>


						<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>

						<!-- begin map script-->
						<script type="text/javascript">
							// Use below link if you want to get latitude & longitude
							// http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude.php 
							jQuery(document).ready(function ($) {
								//set up markers 
								var myMarkers = {
									"markers": [{

										"latitude": "",
										"longitude": "",

										"icon": "http://premiumlayers.net/demo/wp/realtor/wp-content/themes/realtor/images/map-locator.png",
										"baloon_text": false
									}]
								};

								//set up map options
								$("#street-map").mapmarker({
									zoom: 17,
									center: false,
									markers: myMarkers
								});
							});
						</script>

					</div>

					<div class="col-sm-3 side-bar">
						<div class="widget m0">
							<h4 class="heading" style="margin-top: 0px !important;padding-top: 0px;">Propiedades Similares</h4>
							<!--======= Recent Properties =========-->
							<div class="recent-come margin-t-40">
								<hr>
								<ul class="recent-come similarListing">
									
								</ul>
							</div>
						</div>

						<div class="widget m0">
							<h4 class="heading">Compartir</h4>
							<div class="socil-action margin-t-40">
								<hr>
								<ul>
									<li> <a class="tw" href="https://twitter.com/?status=Me encanta este Inmueble de http://rutainmobiliaria.co/detalle-inmueble.php?dt=<?php echo $codigo;?>" target="_blank"><i class="fab fa-twitter"></i>Comparte</a> </li>
									<li> <a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=http://rutainmobiliaria.co/detalle-inmueble.php?dt=<?php echo $codigo;?>" target="_blank"><i class="fab fa-facebook"></i>Comparte</a> </li>
									<li> <a class="pin" href="http://pinterest.com/pin/create/button/?url=http://rutainmobiliaria.co/detalle-inmueble.php?dt=<?php echo $codigo;?>" target="_blank"><i class="fab fa-pinterest"></i>Comparte</a> </li>
									<li> <a class="g-plus" href="https://plus.google.com/share?url=http://rutainmobiliaria.co/detalle-inmueble.php?dt=<?php echo $codigo;?>" target="_blank"><i class="fab fa-google-plus"></i>Comparte</a> </li>
									<li> <a class="drib" href="whatsapp://send?text= http://rutainmobiliaria.co/detalle-inmueble.php?dt=<?php echo $codigo;?>" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i>Comparte</a> </li>
									<li> <button class="rss boton-correo" id="myBtn"><i class="fa fa-envelope"></i>Envia Correo</button> </li>
									<div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <span class="close">&times;</span>
                                    </div>
                                    <div class="modal-body">
                                        <div class="contact-form">
                                        	<div class="container">
                                        		
                                        		
                                        		<form name="contact-form" action="" method="post" id="contact_form" class="validate-form" onsubmit="enviar()">
                                        			<ul class="row">
                                        				<li class="col-sm-6">
                                        					<label class="font-montserrat">Nombre * <input type="text" class="form-control" name="name" id="name"
                                        						 placeholder="">
                                        					</label>
                                        				</li>
                                        				<li class="col-sm-6">
                                        					<label class="font-montserrat">E-mail * <input type="text" class="form-control" name="email" id="email"
                                        						 placeholder="">
                                        					</label>
                                        				</li>
                                        				<li class="col-sm-12" style="width: 100%;">
                                        					<label class="font-montserrat">Mensaje <textarea class="form-control" name="message" id="message"
                                        						 rows="5" placeholder=""></textarea>
                                        					</label>
                                        				</li>
                                        				<li class="col-sm-12">
                                        				
                                        					<button  type="submit" value="submit" class="btn font-montserrat boton-footer" id="sendMessageButton" onclick="enviar()" >Enviar</button>
                                        				</li>
                                        			</ul>
                                        		</form>
                                        	</div>
                                        </div>
                                    </div>
                                </div>

                                </div>
								</ul>
							</div>
							<!-- end social -->
						</div>



					</div>
					<!-- end sidebar -->

				</div>

			</div>
		</section>




		<!--======= FOOTER =========-->
		<footer class="footer-ppal">



		</footer>

		<!--======= RIGHTS =========-->


		<div class="rights">
			<div class="container">
				<p class="font-montserrat"> Copyright © 2018 <a href="https://www.dexcondigital.com/" target="_blank" style="color: #fff;">Dexcon
						Digital.
					</a> Todos los derechos reservados.</p>
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
	<script type='text/javascript' src='wp-includes/js/comment-reply.min-ver=4.8.7.js'></script>
	<script type='text/javascript' src='wp-includes/js/wp-embed.min-ver=4.8.7.js'></script>
	<script type='text/javascript' src='http://premiumlayers.net/demo/wp/realtor/wp-content/themes/realtor/js/jquery.print.js?ver=1.3'></script>
	<script type='text/javascript' src='http://premiumlayers.net/demo/wp/realtor/wp-content/themes/realtor/js/mapmarker.js?ver=1.3'></script>
	<script type='text/javascript' src='wp-content/themes/realtor/js/menu.js'></script>
    <script type='text/javascript' src='js/jqBootstrapValidation.min.js'></script>
    <script type='text/javascript' src='js/contact_me.js'></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1IGUhpmCGfJMYiRso7HUY6tYrHhhy5cs"    async defer></script>
	<?php echo "<script> var codeInm ='" . $codigo . "';</script>"; ?>
   <script type="text/javascript">

		   var latitud = 0;
		   var longitud = 0;
		   $.ajax({
			   url: "http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/" + codeInm + "",
			   async: true,
			   type: "GET",
			   dataType: "json",
			   beforeSend: function(xhr) {
				   xhr.setRequestHeader(
					   "Authorization",
					   'Basic ' + btoa('Authorization:OsORyK5XrE9cqZAGvZi8dOMXkcSX8lyKn7Ef42Ex-893')
				   );
			   },
		   success: function(data) {
			   if(data.msn == "Inmueble NO Disponible"){
				   openModal();
				   return;
			   }
				   var j = 1;
				   var carrousel = '';
				   if (data.fotos == undefined) {
					   carrousel += '<div class="item active" style="height:100%">' +
							   '<img src="images/no_image.png" alt=""   style="height:100%"/>'+
							   '</div>';
				   } else {
					   carrousel += '<div class="item active" style="height:100%">' +
							   '<img src="' + data.fotos[0].foto + '" alt=""   style="height:100%"/>'+
						   '</div>';

					   for (var y = 1; y < Object.keys(data.fotos).length - 1; y++) {
						   if (data.fotos[y].foto != undefined) {
							   carrousel += '<div class="item" style="height:100%">' +
							   '<img src="' + data.fotos[y].foto + '" alt=""   style="height:100%"/>'+
								   '</div>';
							   j++;
						   }
					   }
				   }

			   $(".carousel-inner").html(carrousel);

			   
			   $("#precio").append("$ "+data.precio);

			   $("#alcobas").append("  "+data.alcobas);
			   $("#banios").append("  "+data.banos);
			   $("#garajes").append("  "+data.garaje);
			   $("#area").append("  "+data.AreaConstruida + " mts<sup>2</sup>");
			   $("#code").append("  "+data.idInm);
			   $("#estrato").append("  "+data.Estrato);
			   $("#administracion").append(data.Administracion);
			   $("#venta").append("$ "+data.ValorVenta);
			   $("#descripcion").text(data.descripcionlarga);
		   
			   $("#gestion").html('<i class="fa fa-bullseye"></i> <a title="'+data.Gestion+'" >  '+data.Gestion+'</a>');
			   $("#tipo").append('<a title="'+data.Tipo_Inmueble+'" >  '+data.Tipo_Inmueble+'</a>');
			   //$('#mycarousel').owlCarousel();
			   var res = '';
                                if((data.caracteristicasExternas != undefined) ){
                                    for(var x = 0; x < Object.keys(data.caracteristicasExternas).length; x++){
                                            res+= '<li class="detalle-caracteristicas"><i class="jfont"></i>'+data.caracteristicasExternas[x].Descripcion+'</li>';
                                    }
                                }
                                if(Object.keys(data.caracteristicasExternas).length == 0){
                                    res+= '<li><i class="jfont"></i>Garaje: '+data.garaje+'</li>';
                                }
                    var res1 = '';
                    
                                    if(data.caracteristicasInternas != undefined || Object.keys(data.caracteristicasInternas).length > 0){
                                        for(var x = 0; x < Object.keys(data.caracteristicasInternas).length; x++){
                                                res1+= '<li class="detalle-caracteristicas"><i class="jfont"></i>'+data.caracteristicasInternas[x].Descripcion+'</li>';
                                                
                                            }
                                    }   
                    $("#details-1").append(res);
                    $("#details-2").append(res1);
			   window.localStorage.setItem("codigo",data.idInm)
			   window.localStorage.setItem("gestion",data.Tipo_Inmueble)
                           console.log(data)

			   latitud = data.latitud;
			   longitud = data.longitud;
			   $("#ubicacion").append("  "+data.ciudad + ", " + data.depto);

			   initMap(latitud, longitud);
		   },
		   error: function(data) {
			   console.log("Fail");
		   }
	   });

	   function initMap(latitud, longitud) {
		   var uluru = {
			   lat: parseFloat(latitud),
			   lng: parseFloat(longitud)
		   };
		   var map = new google.maps.Map(document.getElementById('map'), {
			   zoom: 17,
			   center: uluru
		   });
		   var marker = new google.maps.Marker({
			   position: uluru,
			   map: map
		   });
	   }
	   function openModal(){
		   $("body").append('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">'+
					 '<div class="modal-dialog" role="document">'+
					   '<div class="modal-content">'+
						 '<div class="modal-header">'+
						   '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>'+
						   '<h4 class="modal-title" id="myModalLabel">Descripción del inmueble</h4>'+
						 '</div>'+
						 '<div class="modal-body">'+
						 'El inmueble no existe en Ruta Inmobiliaria'+
						 '</div>'+
						 '<div class="modal-footer">'+
						   '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>'+
						 '</div>'+
					   '</div>'+
					 '</div>'+
				   '</div>');
				   
			   $(".modal").modal();
			   setTimeout(() => { 
				   redirect();
			   }, 3000);
	   }
	   function redirect(){
		   window.history.back();
	   }


   </script>

   <script>
        $("#sendMessageButton").click(function(){
            var x = Math.random();
            modal = '<div class="modal' + x + ' " id="modalmail" >' +
      
                '<div class="modal-content" id="modalemail">' +
                '<div class="modal-header">' +
                '<button type="button" class="close " data-dismiss="modal"><span aria-hidden="true">&times;</span></button>' +
                '<h4 class="modal-title">Ruta Inmobiliaria</h4>' +
                '</div>' +
                '<div class="modal-body">' +
                '<p>Su mensaje se ha enviado con exito </p>' +
                '</div>' +
                '<div class="modal-footer">' +
                '<button type="button" class="btn btn-default " data-dismiss="modal">Cerrar</button>' +
                '</div>' +
     
                '</div>' +
                '</div>';
                $("body").append(modal);
                $('#modalmail').modal();
            setTimeout(() => {
                console.log(1)
                redirect();
            }, 4000);
              
             function redirect(){
		   location.reload();
	   }
            
        });
    </script>
   <script>
    // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
   <script type='text/javascript' src='js/similar.js'></script>

</body>

</html>