<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700|IBM+Plex+Serif:300,400,500,600&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />

	<!-- One Page Module Specific Stylesheet -->
	<link rel="stylesheet" href="one-page/onepage.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="one-page/css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="one-page/css/fonts.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Scripts para el boton de WhatsApp -->

	<!--Jquery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--Floating WhatsApp css-->
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

<!--  End -->


	<!-- Document Title
	============================================= -->
	<title>Luviher</title>

	<style>
		.font-secondary { font-family: 'IBM Plex Serif', serif !important; }
		.bgchanger { background-color: #EEE; }

		#oc-watch .owl-item,
		#oc-watch .owl-item img {
			width: auto;
			height: auto;
			margin: 0 auto;
		}

		#oc-watch.owl-carousel .owl-stage {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		#oc-watch .owl-dots { bottom: -15px; }

		#oc-watch .owl-dots { counter-reset: dots; }

		#oc-watch.owl-carousel .owl-dots .owl-dot {
			margin: 0 4px;
			width: auto;
			height: auto;
			opacity: .3 !important;
			border: none;
			background-color: transparent !important;
			font-family: 'IBM Plex Serif', serif;
		}

		#oc-watch .owl-dot:after {
			content: "";
			position: absolute;
			background: #111;
			height: 2px;
			width: 0;
			top: 50%;
			margin: -1px 4px 0;
			transition: all .3s ease;
		}

		#oc-watch.owl-carousel .owl-dots .owl-dot.active {
			margin-right: 34px;
			opacity: 1 !important;
		}

		#oc-watch .owl-dot.active:after { width: 26px; }

		#oc-watch .owl-dot:before {
			counter-increment: dots;
			content: counter(dots, decimal-leading-zero);
		}

		#slider {
			-webkit-transition: background-color .4s ease;
			-o-transition: background-color .4s ease;
			transition: background-color .4s ease;
		}

		@-webkit-keyframes mouse-scroll {
			0% { top: 10%; opacity: 1; }
			100% { top: 30%; opacity: 0; }
		}
		@keyframes mouse-scroll {
			0% { top: 10%; opacity: 1; }
			100% { top: 30%; opacity: 0; }
		}

		@-webkit-keyframes scroll-mouse {
		    from { transform: translateY(-7px); }
		    to { transform: translateY(0); }
		}
		@keyframes scroll-mouse {
		    from { transform: translateY(-7px); }
		    to { transform: translateY(0); }
		}
		.scroll-inner {
			position: relative;
			width: 26px;
			height: 40px;
			border-radius: 18px;
			border: 2px solid #555;
			-webkit-animation: scroll-mouse 1s infinite;
			animation: scroll-mouse 1s infinite;
		}

		.scroll-wheel {
			position: absolute;
			top: 10%;
			left: 50%;
			width: 6px;
			height: 6px;
			border-radius: 50%;
			transform: translateX(-50%);
			background-color: #555;
			-webkit-animation: mouse-scroll 1s infinite;
			-moz-animation: mouse-scroll 1s infinite;
			-o-animation: mouse-scroll 1s infinite;
			animation: mouse-scroll 1s infinite;
		}

		.one-page-arrow {
			bottom: 40px;
			right: 40px;
			left: auto;
		}

	</style>

</head>

<body class="stretched side-push-panel template-contactform-complete template-contactform-error">

	<div class="body-overlay"></div>

	

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header border-full-header" data-sticky-offset="full" data-sticky-offset-negative="200" data-logo-height="100" data-sticky-logo-height="100" data-menu-padding="24">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="one-page/images/canvasone-dark.png"><img src="one-page/images/canvasone.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="one-page/images/canvasone-dark@2x.png"><img src="one-page/images/canvasone@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

					

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
								<li class="menu-item">
									<a href="#" class="menu-link" data-href="#wrapper"><div>Inicio</div></a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-href="#quienes-somos"><div>Quiénes Somos</div></a>
								</li>
							
								<li class="menu-item">
									<a href="#" class="menu-link" data-href="#section-services"><div>Servicios</div></a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-href="#section-clientes"><div>Clientes</div></a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link" data-href="#section-contacto"><div>Contactos</div></a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element min-vh-100 bgchanger include-header" style="background-color: #EEE; background-image: url('one-page/images/page/watch-bg.png'); background-position: center center; background-size: cover;">
			<div class="slider-inner">

				<div class="vertical-middle slider-element-fade">
					<div class="container py-5">
						<div class="row align-items-center">
							<div class="col-md-6 text-center text-md-left">
								<div class="emphasis-title mb-0">
									<span class="text-uppercase d-block text-black-50" style="letter-spacing:10px; font-size: 18px">Con más de 25 años de experiencia</span>
									<h2 class="mt-2 font-weight-semibold font-body" style="font-size: 45px; color: #1132c0; line-height: 1.3; letter-spacing: -2px;">Prestación de Servicios Integrales de Limpieza General, Institucional, Comercial, Residencial e Industrial</h2>
								
									
								</div>
							</div>

							<div class="col-md-6">
								<div id="oc-watch" class="owl-carousel carousel-widget" data-margin="0" data-nav="false" data-pagi="true" data-items="1" data-autoplay="5000" data-speed="1000" data-loop="true">
									<img src="one-page/images/page/watch-2.png" alt="Watch" data-bg="#EEE">
									<img src="one-page/images/page/watch-3.png" alt="Watch" data-bg="#d7d5d5">
									<img src="one-page/images/page/watch-1.png" alt="Watch" data-bg="#b9b2b2">
									
								</div>

							
							</div>
						</div>

					</div>
				</div>

				<a href="#" data-scrollto="#quienes-somos" data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="one-page-arrow">
					<div class="scroll-inner">
				    	<div class="scroll-wheel"></div>
				  </div>
				</a>

			</div>
		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<!-- QUIENES SOMOS -->
		<section id="content">
			<div class="content-wrap py-0">

				<div id="quienes-somos" class="center page-section">

					<div class="container clearfix">

						<h2 class="mx-auto bottommargin font-body" style="max-width: 700px; font-size: 40px;">¿Quiénes Somos?</h2>

						<p class="lead mx-auto bottommargin" style="max-width: 800px;">Con más de 25 años de experiencia, somos una empresa que se dedica a la Prestación de Servicios Integrales de Limpieza General, Institucional, Comercial, Residencial e Industrial; considerando que la Salud de las personas debe ser uno de los pilares objetivo del programa de limpieza en su Compañía. El servicio  integral consta de mano de obra calificada, productos biodegradables, maquinaria y experiencia para brindarles “UN SERVICIO DE CALIDAD AL MEJOR PREC

Percibir un ambiente fresco y limpio, un local libre de polvo y una correcta higienización de las instalaciones, repercute en el incremento de la productividad de la empresa.
</p>

						<!--<p class="bottommargin" style="font-size: 16px;"><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="more-link">Learn more <i class="icon-angle-right"></i></a></p> -->

						<div class="clear"></div>


					</div>

				</div>


				<div id="section-services" class="pt-0">

				
						
							<h2 class="mx-auto bottommargin font-body" style="text-align: center; font-size: 40px;">Nuestros Servicios</h2>

						
				

					<div class="row align-items-stretch">

							<div class="col-lg-12">
							<div class="row align-items-stretch grid-border clearfix">
								<div class="col-lg-3 col-md-6 col-padding">


					 <div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><img src="one-page/images/servicios/control-plagas.png" alt="Control de Plagas" /></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Control de Plagas</h3>
											<p>Alias cum repellat velit. Alias cum repellat velit. Alias cum repellat velit.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><img src="one-page/images/servicios/lavado-desinfeccion.png" alt="lavado desinfeccion" /></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Lavado y Desinfección en Áreas Contaminadas</h3>
								
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><img src="one-page/images/servicios/limpieza-industrial.png" alt="Limpieza Industrial" /></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Limpieza Industrial</h3>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><img src="one-page/images/servicios/limpieza-instituciones-financieras.png" alt="Limpieza de Instituciones Financieras" /></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Limpieza de Instituciones Financieras</h3>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><img src="one-page/images/servicios/limpieza-locales-comerciales.png" alt="Limpieza local comerciales" /></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Limpieza locales comerciales</h3>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><img src="one-page/images/servicios/limpieza-obras-reformas.png" alt="Limpieza obras y reformas" /></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Limpieza obras y reformas</h3>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><img src="one-page/images/servicios/limpieza-locales-comerciales.png" alt="Limpieza local comerciales" /></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Limpieza de vidrios externos y superficies de alucobond</h3>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><img src="one-page/images/servicios/limpieza-odorizacion-banos.png" alt="Limpieza y Odorización de baños" /></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Limpieza y Odorización de baños</h3>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><img src="one-page/images/servicios/limpieza-residencial.png" alt="Limpieza residencial y edificios" /></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Limpieza residencial y edificios</h3>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><img src="one-page/images/servicios/mantenimiento-areas-verdes.png" alt="Mantenimiento áreas verdes" /></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Mantenimiento áreas verdes</h3>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				<!--	<div class="section dark m-0">
						<div class="mx-auto center" style="max-width: 900px;">
							<h2 class="mb-0 font-weight-light ls1">Like Our Services? Get an <a href="#" data-scrollto="#template-contactform" data-offset="140" data-easing="easeInOutExpo" data-speed="1250" class="button button-border button-circle button-light button-large my-0" style="position: relative; top: -3px;">Instant Quote</a></h2>
						</div>
					</div> -->

				</div>

<!-- Start Flipcart -->


<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row grid-container" data-layout="masonry" style="overflow: visible">
						<div class="col-lg-4 mb-4">
							<div class="flip-card text-center">
								<div class="flip-card-front dark" style="background-color: #f5f8fa !important;">
									<div class="flip-card-inner">
										<div class="card bg-transparent border-0 text-center">
											<div class="card-body">
											<div >
											<a href="#"><img src="one-page/images/servicios/control-plagas.png" alt="Control de Plagas" /></a>
										</div><br/>
												<h3 class="card-title" style="color: #000;">CONTROL DE PLAGAS</h3>
							
											</div>
										</div>
									</div>
								</div>
								<div class="flip-card-back bg-danger no-after" style="background-image: url('images/services/16.jpg');">
									<div class="flip-card-inner">
										<p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit. Alias cum repellat velit. Alias cum repellat velit.</p>
									<!--	<button type="button" class="btn btn-outline-light mt-2">View Details</button> -->
									</div>
								</div>
							</div>
						</div>

				


					

					
					</div>

			
				

				</div>
			</div>
		</section><!-- #content end -->



<!-- End Flipcart -->

 
				<div id="section-clientes" class="page-section">

				<h2 class="mx-auto bottommargin font-body" style="text-align: center; font-size: 40px;">Nuestros Clientes</h2>

				
				

					<div class="container topmargin-lg clearfix">

						<div id="oc-clients" class="owl-carousel topmargin image-carousel carousel-widget" data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

							<div class="oc-item"><a href="#"><img src="images/clients/1.jpg" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/2.jpg" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/3.jpg" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/4.jpg" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/5.jpg" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/6.jpg" alt="Clients"></a></div>
						

						</div>

					</div>

				</div>

				<div id="section-contacto" class="page-section pt-0">


				<h2 class="mx-auto bottommargin font-body" style=" text-align: center; font-size: 40px;">¿Dónde Estamos?</h2>

					<div class="row mx-0 bottommargin-lg align-items-stretch">
						<div class="col-lg-8 col-md-6 d-none d-md-block px-0">
							<div class="gmap h-100" >
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8057989177273!2d-78.4848223852467!3d-0.1435449998952651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d58553bc9f3741%3A0x10746526a27cde4a!2sGuisart!5e0!3m2!1ses-419!2sec!4v1591913431869!5m2!1ses-419!2sec" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
						</div>
						<div class="col-lg-4 col-md-6" style="background-color: #F5F5F5;">
							<div class="col-padding">
							<h3 class="font-body font-weight-normal ls1">Datos de Contacto</h3>

								<div style="font-size: 16px; line-height: 1.7;">
									<address style="line-height: 1.7;">
										<strong>Quito, Ecuador:</strong><br>
										Belisario Peña N51-67 y José R. Bustamante, La Kennedy.<br>
									</address>

								
							
									<div class="clear topmargin"></div>

									<abbr title="Phone Number"><strong>Teléfono:</strong></abbr> (02) 2404964<br>
									<abbr title="Fax"><strong>Celular:</strong></abbr> 09 8493 6924<br>
									<abbr title="Correo Electrónico"><strong>Correo Electrónico:</strong></abbr> luvihersa@gmail.com | info@luhiver.com
								</div>
							</div>
						</div>
					</div>

					<div class="container clearfix">

						<div class="mx-auto topmargin" style="max-width: 850px;">

							<div class="form-widget">

								<div class="form-result"></div>

								<h2 class="mx-auto bottommargin font-body" style="text-align: center; font-size: 40px;">Contáctenos</h2>

								<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scale-ripple">
												<div></div>
												<div></div>
												<div></div>
											</div>
										</div>
									</div>

									<div class="col-md-6 mb-4">
										<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Nombre" />
									</div>
									<div class="col-md-6 mb-4">
										<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Correo Electrónico" />
									</div>

									<div class="w-100"></div>

									<div class="col-md-4 mb-4">
										<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control" placeholder="Celular" />
									</div>

									<div class="col-md-8 mb-4">
										<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control border-form-control" placeholder="Asunto" />
									</div>

									<div class="w-100"></div>

									<div class="col-12 mb-4">
										<textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="template-contactform-message" rows="7" cols="30" placeholder="Mensaje"></textarea>
									</div>

									<div class="col-12 center mb-4">
										<button class="button button-border button-circle font-weight-medium ml-0 topmargin-sm" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar Mensaje</button>
										<br>
										<small style="display: block; font-size: 13px; margin-top: 15px;">Le responderemos en las próximas horas.</small>
									</div>

									<div class="w-100"></div>

									<div class="col-12 d-none">
										<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>

							</div>

						</div>

					</div>

				</div>

			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark border-0">

		

			<div id="copyrights">
				<div class="container center clearfix">
					Copyrights Luhiver 2020 | Todos los Derechos Reservados
				</div>
			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>



<!--Div where the WhatsApp will be rendered-->
<div id="WAButton"></div>

<script>

/*  Script for WhatsApp Button */

$(function() {
  $('#WAButton').floatingWhatsApp({
    phone: '593999739206', //WhatsApp Business phone number International format-
    //Get it with Toky at https://toky.co/en/features/whatsapp.
    headerTitle: '¡Encantados en atenderle!', //Popup Title
    popupMessage: '¿Hola, en qué podemos ayudarte?', //Popup Message
    showPopup: true, //Enables popup display
    buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
    //headerColor: 'crimson', //Custom header color
    //backgroundColor: 'crimson', //Custom background button color
    position: "left"    
  });
});

</script>


	<!-- External JavaScripts
	============================================= 
	<script src="js/jquery.js"></script>-->

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script>

		jQuery(window).on( 'pluginCarouselReady', function() {
			var owlWatch	= $('#oc-watch'),
				owlWatchbg	= $('.bgchanger');

			owlWatch.on('translated.owl.carousel changed.owl.carousel', function(event) {
				var bgcolor = owlWatch.find('.active img').attr('data-bg');
				owlWatchbg.css({ 'background-color': bgcolor });
			});
		});


	</script>

</body>
</html>