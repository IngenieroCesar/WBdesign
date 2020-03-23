@extends('admin.templates.form')

@section('title', 'Editar Contenido')

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


{!! Form::open(['route'=>['admin.myweb.contents.update', $content], 'method' => 'PUT', 'class'=>'formulario', 'name'=>'formulario_registro' , 'files' => true  ]) !!}

	<div class="input-grupo ">
		{!! Form::text('title', $content->title, ['id' => 'name','required']) !!}
		{!! Form::label('title', 'Titulo', ['class' => 'label active','required']) !!}		
	</div>

    <div class="form-group">
		{!! Form::label('content', 'Contenido') !!}
		{!! Form::textarea('content', $content->content, ['class'=>'textarea-content','required']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
		<hr>
		<a href="{{ route('admin.myweb.contents.index')}}"  type="button" class="btn btn-default btn-lg btn-block">Volver</a>
		
	</div>


   
{!! Form::close() !!}


@endsection

@section('js')

    <script>
        $('.textarea-content').trumbowyg({
            lang: 'esp',
            fullscreenable: true,
            closable: false,
            btns: [
          '|', 'formatting',
          '|', 'btnGrp-design',
          '|', 'link',
          '|', 'insertImage',
          '|', 'btnGrp-justify',
          '|', 'horizontalRule'
            ]

        });
    </script>

@endsection