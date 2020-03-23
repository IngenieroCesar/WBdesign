@extends('admin.templates.office')

@section('title', 'Home')

@section('content' )

<div class="features" id="home">
		<div class="container">
		<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="alldesc">
						<div class="col-md-6 col-sm-6 col-xs-12 centertext">
						<p class="all-td">Bienvenido a</p>
						<h2>WBoffice</h2>
					</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<p class="desc">WBoffice esta desarrollado justo para ti. Es tú herramineta personal con la cual tendras el control de tú empresa desde tú dispositivo movil en cualquier lugar.</p>
					</div>
					</div>
			</div>
				<div class="col-md-6 col-sm-6 col-xs-12 featurebox">
				<div class="feature-icons"> <img src="{{ asset('WBplataform/dist/img/miweb.ico')}}"/></div>
				<div class="fh-desc">
						<h3>Web Custom</h3>
						<p>El diseño de tú pagina totalmente responsive para dispositivos moviles, y tendencias en diseño web acorde a la imagen de tú empresa.</p>
					</div>
			</div>
				<div class="col-md-6 col-sm-6 col-xs-12 featurebox">
				<div class="feature-icons"> <img src="{{ asset('WBplataform/dist/img/clientes.ico')}}"/> </div>
				<div class="fh-desc">
						<h3>PhoneBook</h3>
						<p>Una agenda con la cual podras Crear, Editar y Eliminar clintes ademas de que ellos tendran la posibilidad de enviarte sus datos desde tú pagina web.</p>
					</div>
			</div>
				<div class="col-md-6 col-sm-6 col-xs-12 featurebox">
				<div class="feature-icons"> <img src="{{ asset('WBplataform/dist/img/productos.ico')}}"/> </div>

				<div class="fh-desc">
						<h3>Products & Services</h3>
						<p>Crea, Edita y Elimina productos y servicios que apareceran en tú pagina web. Creando asi una base de datos para tus productos con acceso inmediato y desde cualquier lugar.</p>
					</div>
			</div>
				<div class="col-md-6 col-sm-6 col-xs-12 featurebox">
				<div class="feature-icons"> <img src="{{ asset('WBplataform/dist/img/ecomerce.ico')}}"/> </div>
				<div class="fh-desc">
						<h3>E-Comerce</h3>
						<p>Ofrece todos tús productos y servicios en nuestra plataforma de pagos, crea edita y vende, todo desde tú panel de administraíón.</p>
					</div>
			</div>
				<div class="col-md-6 col-sm-6 col-xs-12 featurebox">
				<div class="feature-icons"> <img src="{{ asset('WBplataform/dist/img/productos.ico')}}"/> </div>
				<div class="fh-desc">
						<h3>WBoffice</h3>
						<p>Una agenda con la cual podras Crear, Editar y Eliminar clintes ademas de que ellos tendran la posibilidad de enviarte sus datos desde tú pagina web.</p>
					</div>
			</div>
			</div>
	</div>
	</div>



@endsection
