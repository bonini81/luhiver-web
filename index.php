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

	<!-- Document Title
	============================================= -->
	<title>Watch - One Page Module | Canvas</title>

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

		#oc-watch .owl-dots { bottom: 20px; }

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

<body class="stretched side-push-panel">

	<div class="body-overlay"></div>

	

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header border-full-header" data-sticky-offset="full" data-sticky-offset-negative="200" data-logo-height="70" data-sticky-logo-height="70" data-menu-padding="24">
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
									<h2 class="mt-2 font-weight-semibold font-secondary" style="font-size: 45px; color: #1132c0; line-height: 1.3; letter-spacing: -2px;"><u>Prestación de Servicios Integrales de Limpieza General, Institucional, Comercial, Residencial e Industria</u></h2>
									<h2 class="font-weight-bold mt-4">$200</h2>
									<a href="#" data-animate="fadeInUp" data-delay="600" class="button button-circle button-white button-light button-large text-white mt-4 nott ls0" style="background-color: #E25B45">View Details</a>
								</div>
							</div>

							<div class="col-md-6">
								<div id="oc-watch" class="owl-carousel carousel-widget" data-margin="0" data-nav="false" data-pagi="true" data-items="1" data-autoplay="5000" data-speed="1000" data-loop="true">
									<img src="one-page/images/page/watch-2.png" alt="Watch" data-bg="#EEE">
									<img src="one-page/images/page/watch-3.png" alt="Watch" data-bg="#daec66">
									<img src="one-page/images/page/watch-1.png" alt="Watch" data-bg="#F1D4CA">
								</div>

								<div id="oc-watch-bg" style="background: #1132c0; width: 360px; height: 360px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); opacity: 1; border-radius: 50%;"></div>
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

						<p class="bottommargin" style="font-size: 16px;"><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="more-link">Learn more <i class="icon-angle-right"></i></a></p>

						<div class="clear"></div>


					</div>

				</div>


				<div id="section-services" class="page-section pt-0">

					<div class="section m-0">
						<div class="container clearfix">
							<div class="mx-auto center" style="max-width: 900px;">
								<h2 class="mb-0 font-weight-light ls1">We enjoy working on the Services &amp; Products we provide as much as you need them. This help us in delivering your Goals easily. Browse through the wide range of services we provide.</h2>
							</div>
						</div>
					</div>

					<div class="row align-items-stretch">

						<div class="col-lg-4 d-none d-md-block" style="background: url('images/services/main-bg.jpg') center center no-repeat; background-size: cover;"></div>
						<div class="col-lg-8">
							<div class="row align-items-stretch grid-border clearfix">
								<div class="col-lg-4 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-et-mobile op-gradient-icon"></i></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Limpieza Profunda de Fin de Obras y Reformas</h3>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-et-presentation op-gradient-icon"></i></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Limpieza Integral en:</h3>
								<p>Edificios, Fábricas, Oficinas, Instituciones Educativas, Instituciones Financieras, Locales Comerciales</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-et-puzzle op-gradient-icon"></i></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Lavado y desinfección de alfombras, muebles y paneles</h3>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-et-gears op-gradient-icon"></i></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Lavado y desinfección de Cisternas</h3>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-et-genius op-gradient-icon"></i></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Pintura de interiores y exteriores</h3>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-padding">
									<div class="feature-box fbox-center fbox-dark fbox-plain">
										<div class="fbox-icon">
											<a href="#"><i class="icon-et-hotairballoon op-gradient-icon"></i></a>
										</div>
										<div class="fbox-content fbox-content-sm">
											<h3>Limpieza de vidrios externos y superficies de alucobond</h3>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="section dark m-0">
						<div class="mx-auto center" style="max-width: 900px;">
							<h2 class="mb-0 font-weight-light ls1">Like Our Services? Get an <a href="#" data-scrollto="#template-contactform" data-offset="140" data-easing="easeInOutExpo" data-speed="1250" class="button button-border button-circle button-light button-large my-0" style="position: relative; top: -3px;">Instant Quote</a></h2>
						</div>
					</div>

				</div>
 
				<div id="section-clientes" class="page-section">

					<h2 class="text-center text-uppercase font-weight-light ls3 font-body">Nuestros Clientes</h2>

				
				

					<div class="container topmargin-lg clearfix">

						<div id="oc-clients" class="owl-carousel topmargin image-carousel carousel-widget" data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

							<div class="oc-item"><a href="#"><img src="images/clients/1.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/2.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/3.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/4.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/5.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/6.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/7.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/8.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/9.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/10.png" alt="Clients"></a></div>

						</div>

					</div>

				</div>

				<div id="section-contacto" class="page-section pt-0">

					<div class="row mx-0 bottommargin-lg align-items-stretch">
						<div class="col-lg-8 col-md-6 d-none d-md-block px-0">
							<div class="gmap h-100" data-address="Melbourne, Australia" data-maptype="ROADMAP" data-zoom="14" data-markers='[{ address: "Melbourne, Australia", html: "Melbourne, Australia", icon:{ image: "one-page/images/icons/map-icon-red.png", iconsize: [32, 32], iconanchor: [14,44] } }]' data-styles='[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"74"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]'></div>
						</div>
						<div class="col-lg-4 col-md-6" style="background-color: #F5F5F5;">
							<div class="col-padding">
								<h3 class="font-body font-weight-normal ls1">Contactos</h3>

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

			<!--<div class="container center">
				<div class="footer-widgets-wrap">

					<div class="row mx-auto clearfix">

						<div class="col-lg-4">

							<div class="widget clearfix">
								<h4>Site Links</h4>

								<ul class="list-unstyled footer-site-links mb-0">
									<li><a href="#" data-scrollto="#wrapper" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Top</a></li>
									<li><a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">About</a></li>
									<li><a href="#" data-scrollto="#section-works" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Works</a></li>
									<li><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Services</a></li>
									<li><a href="#" data-scrollto="#section-blog" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Blog</a></li>
									<li><a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Contact</a></li>
								</ul>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="widget subscribe-widget clearfix" data-loader="button">
								<h4>Subscribe</h4>

								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control form-control-lg not-dark required email" placeholder="Your Email Address">
									<button class="button button-border button-circle button-light topmargin-sm" type="submit">Subscribe Now</button>
								</form>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="widget clearfix">
								<h4>Contact</h4>

								<p class="lead">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</p>

								<div class="center topmargin-sm">
									<a href="#" class="social-icon inline-block border-0 si-small si-facebook" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block border-0 si-small si-twitter" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon inline-block border-0 si-small si-github" title="Github">
										<i class="icon-github"></i>
										<i class="icon-github"></i>
									</a>
									<a href="#" class="social-icon inline-block border-0 si-small si-pinterest" title="Pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>-->

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

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>

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