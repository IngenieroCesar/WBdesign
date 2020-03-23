@extends('admin.templates.admin')
@section('title', 'Crear Usuarios')
@section('css')
	<link rel="stylesheet" href="{{ asset('WBplataform/plugins/select2/select2.min.css') }}">
	<link href="{{ asset('Plugins/File/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css" />
@endsection
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

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	 <!-- Content Header (Page header) -->
	 <section class="content-header">
		 <h1>
			 Registrar Empleado
			 <small>Preview</small>
		 </h1>
		 <ol class="breadcrumb">
			 <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			 <li><a href="#">Empleados</a></li>
			 <li class="active">Crear</li>
		 </ol>
	 </section>

	 <!-- Main content -->
	 <section class="content">
		 <div class="row">
			 <!-- left column -->
			 <div class="col-md-offset-3 col-md-6">

				 <!-- general form elements -->
				 <div class="box box-primary">

					 <!-- form start -->

						{!! Form::open(['route'=>'admin.users.store', 'method' => 'POST', 'name'=>'formulario_registro', 'files' => true ]) !!}

						 <div class="box-body">
							 <div class="form-group">
								 {!! Form::label('apellido', 'Apellido', ['required']) !!}
								 {!! Form::text('apellido', null, ['class'=> 'form-control','id' => 'apellido', 'placeholder'=> ' Apellido ','required']) !!}
							 </div>
							 <div class="form-group">
						 		 {!! Form::label('name', 'Nombre', ['required']) !!}
								 {!! Form::text('name', null,  ['class'=> 'form-control','id' => 'name', 'placeholder'=> ' Nombre ','required']) !!}
							 </div>
							 <div class="form-group">
								 {!! Form::label('cedula', 'Cedula' , ['required']) !!}
								 {!! Form::number('cedula', null, ['class'=>'form-control','id' => 'cedula','placeholder'=>' Numero Cedula ', 'required']) !!}
							 </div>
							 <div class="form-group">
								{!! Form::label('email', 'Correo Electronico' , ['required']) !!}
								{!! Form::email('email', null, ['class'=>'form-control', 'id' => 'email','placeholder'=>' Correo Electronico ', 'required']) !!}
							 </div>
							 <div class="form-group">
	 							{!! Form::label('password', 'Contraseña', ['required']) !!}
								{!! Form::password('password', ['class'=>'form-control', 'id' => 'password','placeholder'=>' Password ','required']) !!}
							 </div>
							 <div class="form-grupo">
						    {!! Form::label('type', 'Tipo Empleado') !!}
						    {!! Form::select('type', ['placeholder'=>'Tipo de Empleado...', 'administrador' => 'Administrador','administrador web' => 'Administrador Web','contador' => 'Contador', 'auxiliar contable' => 'Auxiliar Contable', 'empleado' => 'Empleado'], null, [ 'class' => 'form-control select2' ])!!}
						  </div>
							<br>
							 <div class="form-group">
								 {!! Form::label('Image','Fotografia') !!}
 				        {!! Form::file('imagen', ['id'=>'input-23', 'class'=>'file', 'data-buttonText'=>'Imagen' ]) !!}
							 </div>
						 </div>
						 <!-- /.box-body -->

						 <div class="box-footer">
							 <a href="{{ route('admin.users.index')}}" type="button" class="btn btn-default">Cancelar</a>
							 {!! Form::submit('Registrar', ['class' => 'btn btn-primary pull-right']) !!}
						 </div>

				  	{!! Form::close() !!}

				 </div>
				 <!-- /.box -->

			 </div>
			 <!--/.col (left) -->
		 </div>
		 <!-- /.row -->
	 </section>
	 <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->


@endsection
@section('js')
	<!-- Select2 -->
	<script src="{{ asset('WBplataform/plugins/select2/select2.full.min.js') }}"></script>

	<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
	     This must be loaded before fileinput.min.js -->
	<script src="{{ asset('Plugins/File/js/plugins/canvas-to-blob.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('Plugins/File/js/fileinput.min.js') }}" type="text/javascript"></script>
	<!-- bootstrap.js below is only needed if you wish to use the feature of viewing details
	     of text file preview via modal dialog -->
	<script src="{{ asset('Plugins/File/js/fileinput_locale_es.js') }}"></script>

	<script>
	  $(function () {
	    //Initialize Select2 Elements
	    $(".select2").select2();
	  });

        $("#input-23").fileinput({
            showUpload: false,
            showRemove: true,
            initialCaption: "¡Tamaño maximo 2Mb!",
        });
    </script>

@endsection
