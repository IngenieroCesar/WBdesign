@extends('admin.templates.admin')

@section('title', 'Clientes')

@section('content' )

<div class="gallery" id="clientes">
		<div class="container">
		<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 ">
				<div class="alldesc">
					<div class="col-md-6 col-sm-6 col-xs-12 centertext">
						<p class="all-td">Administra tus clientes</p>
						<h2>Clientes</h2>
					</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<p class="desc">Esta es tú agenda personal, conviertela en tu herramienta principal para manejar a todos tus contactos empresariales, como clientes y proveedores.</p>
					</div>
					</div>
			</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
	@include('flash::message')
		<div class="featurebox no-float center-block">
		<ul class="nav nav-tabs">

				<li role="presentation" class="active"><a href="#">Clientes</a></li>
				<li role="presentation"><a href="{{ route('admin.clients.create')}}">Crear</a></li>

				<!-- Barra de busqueda -->
				{!! Form::open(['route' => 'admin.clients.index', 'method' => 'GET', 'class' => 'navbar-form pull-right', 'role'=>'search']) !!}
					<div class="input-group">
					<span class="input-group-addon" id="search" > Buscar </span>
						{!! Form::text('name', null, ['class' => 'form-control', 'aria-describedby' => 'search']) !!}
						<span class="input-group-addon" id="search" >
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</span>
					</div>
				{!! Form::close() !!}
				<!--       -->
		</ul>
		<br>
		<div class=" table-responsive">
			<table class="table table-striped col-md-6 col-sm-6 col-xs-12 ">
				<thead>
					<th>ID</th>
					<th>Nombre</th>
					<th>Mobil</th>
					<th>Correo</th>
					<th>Tipo</th>
					<th>Editar | Eliminar</th>
				</thead>
				<tbody>
					@foreach($clients as $client)
						<tr>
							<td>{{ $client->id }}</td>
							<td>{{ $client->name }}</td>
							<td>{{ $client->mobile }}</td>
							<td>{{ $client->email }}</td>
							<td>
								@if($client->type == "cliente")
									{{"Cliente"}}
								@else
									{{"Proveedor"}}
								@endif
							</td>
							<td class="">
								<a href="{{ route('admin.clients.edit', $client->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a><em>&nbsp&nbsp&nbsp&nbsp </em>
								<a href="{{ route('admin.clients.destroy', $client->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $clients->render() !!}
		</div>

		</div>
</div>


	</div>
	</div>
</div>


@endsection
