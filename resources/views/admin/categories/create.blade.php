@extends('admin.templates.form')

@section('title', 'Crear Categoria')

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


{!! Form::open(['route'=>'admin.categories.store', 'method' => 'POST', 'class'=>'formulario', 'name'=>'formulario_registro' ]) !!}

	<div class="input-grupo">
		{!! Form::text('name', null, ['id' => 'name','required']) !!}
		{!! Form::label('name', 'Categoria', ['class' => 'label','required']) !!}		
	</div>
	

	<div class="form-group">
		{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
		<hr>
		<a href="{{ route('admin.categories.index')}}"  type="button" class="btn btn-default btn-lg btn-block">Volver</a>
		
	</div>


   
{!! Form::close() !!}


@endsection