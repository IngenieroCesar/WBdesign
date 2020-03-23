	<!DOCTYPE html>
	<html lang="en">
	<head>
	  
	  	<title>@yield( 'title', 'Default') | WBdesign</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="alternate" hreflang="es" href="http://wbdesign.co/" />
		<link rel="stylesheet" href="{{ asset('Plugins/bootstrap-3.3.6/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('WBplataform/Formulario/css/contacto.css')}}">
		<link href='https://fonts.googleapis.com/css?family=Noto+Serif:400italic' rel='stylesheet' type='text/css'>
 		<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
 		<link rel="stylesheet" href="{{ asset('Plugins/Dropzone/dist/dropzone.css') }}">


	</head>
	<body>
	  
	<div class="poiret-style margin">
		@yield('content') 
	</div>


	</body>
	<script src="{{ asset('Plugins/jquery/js/jquery-2.2.0.js')}}"></script>
	<script src="{{ asset('Plugins/bootstrap-3.3.6/js/bootstrap.js')}}"></script>
	<script src="{{ asset('WBplataform/Formulario/js/contacto.js')}}"></script> 
	<script src="{{ asset('Plugins/Dropzone/dist/dropzone.js')}}"></script>
	@yield('js')

	</html>