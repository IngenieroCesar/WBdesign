@extends('admin.templates.form')

@section('title', 'Crear Clientes')

@section('content')

@if(count($errors)>0)
	<div class="alert alert-danger" role="alert" >
		<ul>
			@foreach( $errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif


{!! Form::open(['route'=>'admin.clients.store', 'method' => 'POST', 'class'=>'formulario', 'name'=>'formulario_registro' ]) !!}

	<div class="input-grupo text-center" style="color: #312450;">
		<h2> <b>Nuevo Contacto</b> </h2>
	</div>


	<div class="input-grupo">
		{!! Form::text('empresa', null, ['id' => 'name','required']) !!}
		{!! Form::label('empresa', 'Empresa', ['class' => 'label']) !!}
	</div>

	<div class="input-grupo">
		{!! Form::number('nit',null, ['id' => 'nit','required']) !!}
		{!! Form::label('nit', 'NIT', ['class' => 'label','required']) !!}
	</div>

	<div class="input-grupo">
		{!! Form::text('name', null, ['id' => 'name','required']) !!}
		{!! Form::label('name', 'Representante', ['class' => 'label','required']) !!}
	</div>

	<div class="input-grupo">
		{!! Form::text('address', null, ['id' => 'name','required']) !!}
		{!! Form::label('address', 'Dirección', ['class' => 'label','required']) !!}
	</div>

	<div class="input-grupo">
		{!! Form::text('city', null, ['id' => 'name','required']) !!}
		{!! Form::label('city', 'Ciudad', ['class' => 'label','required']) !!}
	</div>

	<div class="input-grupo">
		{!! Form::email('email', null, ['id' => 'email', 'required']) !!}
		{!! Form::label('email', 'Correo Electronico' , ['class' => 'label','required']) !!}
	</div>

	<div class="input-grupo">
		{!! Form::number('phone',null, ['id' => 'mobile','required']) !!}
		{!! Form::label('phone', 'Telefono', ['class' => 'label','required']) !!}
	</div>

	<div class="input-grupo">
		{!! Form::number('mobile',null, ['id' => 'mobile','required']) !!}
		{!! Form::label('mobile', 'Celular', ['class' => 'label','required']) !!}
	</div>


	<div class="input-grupo">
			{!! Form::label('type', 'Tipo') !!}
      		{!! Form::select('type', ['placeholder'=>'Seleccione una categoria...','cliente' => 'Cliente', 'proveedor' => 'Proveedor' ], null, [ 'class' => 'form-control' ])!!}
     </div>

	<div class="form-group">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		<hr>
		<a href="{{ route('admin.clients.index')}}"  type="button" class="btn btn-default btn-lg btn-block">Volver</a>

	</div>



{!! Form::close() !!}


@endsection
