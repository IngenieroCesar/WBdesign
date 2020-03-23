<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>




		<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>@yield( 'title', 'Default') | WBplataform</title>
        <link rel="shortcut icon" href="{{ asset('WBplataform/dist/img/logo.ico')}}">
		<!-- Meta Description -->
        <meta name="description" content="Administra el contenido de tú pagina web">
        <meta name="keywords" content="Plataforma web, diseño web, adaptado para moviles, productos y servicios, ventas en linea, administra tus productos, html5, css3, animaciones css3">
        <meta name="author" content="Muhammad Morshed">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google Font -->

		<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<link rel="alternate" hreflang="es" href="http://wbdesign.co/" />

		<link rel="stylesheet" href="{{ asset('WBplataform/LogIn/css/login.css')}}">

		<!-- Etilo para la pagina - text editor -->
    <link rel="stylesheet" href="{{ asset('WBplataform/dist/css/style.css') }}"/>
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="{{ asset('Web/css/font-awesome.min.css')}}">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="{{ asset('Plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="{{ asset('Web/css/jquery.fancybox.css')}}">
		<!-- animate -->
        <link rel="stylesheet" href="{{ asset('Web/css/animate.css')}}">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ asset('Web/css/main.css')}}">
		<!-- media-queries -->
        <link rel="stylesheet" href="{{ asset('Web/css/media-queries.css')}}">
		<!-- Modernizer Script for old Browsers -->
        <script src="{{ asset('Web/js/modernizr-2.6.2.min.js')}}"></script>

	</head>
	<body >

	@include('admin.templates.partials.header_login')




			<div class="container">
					<!-- service item -->
					<div class="col-md-5 wow fadeInLeft" data-wow-duration="500ms">

								<div class="contenedor-formulario">
									<div class="poiret-style">
									@yield('content')
									</div>
								</div>

					</div>
					<!-- end service item -->

					<!-- service item -->
					<div class="col-md-6 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">

						</div>
					</div>
					<!-- end service item -->

			</div>


	 @include('admin.templates.partials.footer_login')


	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
	     This must be loaded before fileinput.min.js -->
	<script src="{{ asset('Plugins/File/js/plugins/canvas-to-blob.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('Plugins/File/js/fileinput.min.js') }}" type="text/javascript"></script>
	<!-- bootstrap.js below is only needed if you wish to use the feature of viewing details
	     of text file preview via modal dialog -->

	<script src="{{ asset('Plugins/File/js/fileinput_locale_es.js') }}"></script>

	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
	<script src="{{ asset('Plugins/bootstrap-3.3.6/js/bootstrap.js')}}"></script>
	<script src="{{ asset('WBplataform/Formulario/js/contacto.js')}}"></script>
	<script src="{{ asset('Plugins/Chosen/chosen.jquery.js')}}"></script>
	<script src="{{ asset('Plugins/Trumbowyg/trumbowyg.min.js')}}"></script>


	@yield('js')
	</body>

	</html>
