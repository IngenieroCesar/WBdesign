@extends('admin.templates.form')

@section('title', 'Editar Categoria ' .$category->name )

@section('content')
{!! Form::open(['route' => ['admin.categories.update', $category], 'method' => 'PUT', 'class'=>'formulario', 'name'=>'formulario_registro']) !!}

	<div class="input-grupo">
		{!! Form::text('name', $category->name , ['id' => 'name','required']) !!}
		{!! Form::label('name', 'Nombre', ['class' => 'label active','required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
		<hr>
		<a href="{{ route('admin.categories.index')}}" ctype="button" class="btn btn-default btn-lg btn-block">Volver</a>
		
		
	</div>


  

{!! Form::close() !!}


@endsection