	<!DOCTYPE html>
	<html lang="en">
	<head>

	  	<title>@yield( 'title', 'Default') | WBdesign</title>
	  	<link rel="shortcut icon" href="{{ asset('WBplataform/dist/img/logo.ico')}}">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="alternate" hreflang="es" href="http://wbdesign.co/" />
		<link rel="stylesheet" href="{{ asset('Plugins/bootstrap-3.3.6/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('WBplataform/Formulario/css/contacto.css')}}">
		<link href='https://fonts.googleapis.com/css?family=Noto+Serif:400italic' rel='stylesheet' type='text/css'>
 		<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
 		<link rel="stylesheet" href="{{ asset('Plugins/Chosen/chosen.css') }}">
 		<link rel="stylesheet" href="{{ asset('Plugins/Trumbowyg/ui/trumbowyg.css') }}">
 		<script type="text/javascript" src="{{ asset('Plugins/Trumbowyg/langs/es.min.js') }}"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{ asset('Plugins/File/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css" />


	</head>
	<body>

	  <div class="contenedor-formulario">
		<div class="contenedor poiret-style">


			<br>
			<br>
		@yield('content')
		</div>
	  </div>

	</body>
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

	</html>
