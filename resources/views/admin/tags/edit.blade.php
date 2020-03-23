@extends('admin.templates.form')

@section('title', 'Editar Tag ' .$tag->name )

@section('content')
{!! Form::open(['route' => ['admin.tags.update', $tag], 'method' => 'PUT', 'class'=>'formulario', 'name'=>'formulario_registro']) !!}

	<div class="input-grupo">
		{!! Form::text('name', $tag->name , ['id' => 'name','required']) !!}
		{!! Form::label('name', 'Nombre', ['class' => 'label active','required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
		<hr>
		<a href="{{ route('admin.tags.index')}}" ctype="button" class="btn btn-default btn-lg btn-block">Volver</a>
		
		
	</div>


  

{!! Form::close() !!}


@endsection