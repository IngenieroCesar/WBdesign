@extends('admin.templates.form')

@section('title', 'Editar Empleado ' .$client->name )

@section('content')
{!! Form::open(['route' => ['admin.clients.update', $client], 'method' => 'PUT', 'class'=>'formulario', 'name'=>'formulario_registro']) !!}

	<div class="input-grupo text-center" style="color: #312450;">
		<h2> <b>Editar {!! $client->type !!}</b> </h2>
	</div>

	<div class="input-grupo">
		{!! Form::text('name', $client->name , ['id' => 'name','required']) !!}
		{!! Form::label('name', 'Nombre', ['class' => 'label active','required']) !!}
	</div>
	<div class="input-grupo">
		{!! Form::email('email', $client->email , ['id' => 'email', 'required']) !!}
		{!! Form::label('email', 'Correo Electronico', ['class' => 'label active','required']) !!}

	</div>
	<div class="input-grupo">
		{!! Form::number('mobile',$client->mobile, ['id' => 'mobile','required']) !!}
		{!! Form::label('mobile', 'Mobil', ['class' => 'label active','required']) !!}
	</div>
	<div class="input-grupo">
		{!! Form::label('type', 'tipo') !!}
		{!! Form::select('type',['proveedor' => 'Proveedor', 'cliente' => 'Cliente' ], $client->type ,[ 'class' => 'form-control' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
		<hr>
		<a href="{{ route('admin.clients.index')}}" ctype="button" class="btn btn-default btn-lg btn-block">Volver</a>


	</div>




{!! Form::close() !!}


@endsection
