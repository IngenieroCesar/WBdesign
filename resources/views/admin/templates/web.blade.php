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

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
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


                <!-- Template CSS Files Galeria
        ================================================== -->









    </head>

    <body id="body">
    		<!-- preloader -->
		<div id="preloader">
			<img src="{{ asset('Web/img/preloader.gif')}}" alt="Preloader">
		</div>
		<!-- end preloader -->

	@include('admin.templates.partials.header_web')

    @yield('content')

    @include('admin.templates.partials.footer_web')





    <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="{{ asset('Web/js/jquery-1.11.1.min.js')}}"></script>
		<!-- Single Page Nav -->
        <script src="{{ asset('Web/js/jquery.singlePageNav.min.js')}}"></script>
		<!-- Twitter Bootstrap -->
        <script src="{{ asset('Plugins/bootstrap-3.3.6/js/bootstrap.min.js')}}"></script>
		<!-- jquery.fancybox.pack -->
        <script src="{{ asset('Web/js/jquery.fancybox.pack.js')}}"></script>
		<!-- jquery.mixitup.min -->
        <script src="{{ asset('Web/js/jquery.mixitup.min.js')}}"></script>
		<!-- jquery.parallax -->
        <script src="{{ asset('Web/js/jquery.parallax-1.1.3.js')}}"></script>
		<!-- jquery.countTo -->
        <script src="{{ asset('Web/js/jquery-countTo.js')}}"></script>
		<!-- jquery.appear -->
        <script src="{{ asset('Web/js/jquery.appear.js')}}"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
        <script src="{{ asset('Web/js/jquery.easing.min.js')}}"></script>
		<!-- jquery easing -->
        <script src="{{ asset('Web/js/wow.min.js')}}"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script>
		<!-- Custom Functions -->
        <script src="{{ asset('Web/js/custom.js')}}"></script>

		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */

				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
    </body>
</html>
