@extends('admin.templates.form')

@section('title', 'Crear Tag')

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


{!! Form::open(['route'=>'admin.tags.store', 'method' => 'POST', 'class'=>'formulario', 'name'=>'formulario_registro' ]) !!}

	<div class="input-grupo">
		{!! Form::text('name', null, ['id' => 'name','required']) !!}
		{!! Form::label('name', 'Etiqueta', ['class' => 'label','required']) !!}		
	</div>
	

	<div class="form-group">
		{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
		<hr>
		<a href="{{ route('admin.tags.index')}}"  type="button" class="btn btn-default btn-lg btn-block">Volver</a>
		
	</div>


   
{!! Form::close() !!}


@endsection