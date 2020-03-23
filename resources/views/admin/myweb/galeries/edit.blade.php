@extends('admin.templates.form')

@section('title', 'Cambiar Imagen')

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


{!! Form::open(['route'=>['admin.myweb.galeries.update', $imagen]	, 'method' => 'PUT', 'class'=>'formulario', 'name'=>'formulario_registro' , 'files' => true  ]) !!}
	
	<div class="input-grupo text-center" style="color: #312450;">
		<h2> <b>Cambiar Imagen : {!! $imagen->id !!} </b> </h2>		
	</div>

    <div class="form-group">
        {!! Form::label('Imagen') !!}
        {!! Form::file('imagen', ['id'=>'input-23', 'class'=>'file', 'data-buttonText'=>'Imagen' ]) !!}     
    </div>

	<div class="form-group">
		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
		<hr>
		<a href="{{ route('admin.myweb.galeries.index')}}"  type="button" class="btn btn-default btn-lg btn-block">Volver</a>
		
	</div>


   
{!! Form::close() !!}


@endsection

@section('js')

	<script>
        $("#input-23").fileinput({
            showUpload: false,
            showRemove: false,
	        initialPreview: [
	            '<img src="/Imagenes/Galerias/{{ $imagen->name }}"class="file-preview-image" alt="The Moon" title="The Moon">',
	        ],
	        overwriteInitial: true,

            initialCaption: "¡Tamaño maximo 2Mb!",
        });
    </script>


@endsection