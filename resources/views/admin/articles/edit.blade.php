@extends('admin.templates.admin')
@section('title', 'Crear Producto')
@section('css')
  <link rel="stylesheet" href="{{ asset('Plugins/Chosen/chosen.css') }}">
  <link rel="stylesheet" href="{{ asset('Plugins/Trumbowyg/ui/trumbowyg.css') }}">
  <script type="text/javascript" src="{{ asset('Plugins/Trumbowyg/langs/es.min.js') }}"></script>
	<link href="{{ asset('Plugins/File/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css" />
@endsection
@section('content' )

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
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Edit Article</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-6 col-md-offset-3">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

							{!! Form::open(['route'=>['admin.articles.update', $article], 'method' => 'PUT', 'class'=>'', 'name'=>'formulario_edición' , 'files' => true  ]) !!}

							<div class="form-group">
								{!! Form::label('title', 'Producto / Articulo') !!}
								{!! Form::text('title', $article->title, ['class' => 'form-control','placeholder'=>"Nombre Completo...",'required']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('reference', 'Referencia') !!}
								{!! Form::number('reference', $article->reference, ['class' => 'form-control','placeholder'=>"Numero de Referencia...", 'required']) !!}
							</div>

              <div class="form-group">
                {!! Form::label('price', 'Precio') !!}
                {!! Form::number('price', $article->price, ['class' => 'form-control','placeholder'=>"Presio de Compra...", 'required']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('iva', 'Impuesto') !!} &nbsp;
                <input type="checkbox" name="box" onclick="funcion()" />
                {!! Form::number('iva', $article->iva, ['class' => 'form-control', 'name'=>'iva' ,'placeholder'=>"Impuesto Valor Agregado...",'disabled', 'required']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('content', 'Descipción') !!}
                  {!! Form::textarea('content', $article->content, ['id'=>'textarea-content', 'placeholder'=>"Descripción disponible para tú pagina Web...",'required']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('category_id', 'Categoria') !!}
                  {!! Form::select('category_id', $categories, $article->category->id,[ 'class'=> 'form-control select-category','multiple', 'required'])!!} <!-- Dbo ver si esto lo puedo reparar!! -->
              </div>

              <div class="form-group">
                {!! Form::label('tags', 'Etiqueta') !!}
                {!! Form::select('tags[]', $tags, $my_tags , ['class'=> 'form-control select-tag','multiple', 'required'])!!}
              </div>

              <div class="form-group">
                <label>Estado FIsico</label>
                <input type="text" class="form-control" placeholder="Estado fisico del Articulo/Producto...">
              </div>

              <div class="form-group">
                <label>Propiedades</label>
                <input type="text" class="form-control" placeholder="Articulos Duraderos/Percederos...">
              </div>

              <div class="form-group">
                  {!! Form::label('umeasure', 'Unidad de Medida') !!}
                  {!! Form::text('umeasure', $article->umeasure, ['class' => 'form-control','placeholder'=>"Litro, Metro, Kilogramo...", 'required']) !!}
              </div>

              <div class="form-group">
                <label>Rotasión de Salida</label>
                <input type="text" class="form-control" placeholder="Nombre Completo...">
              </div>

              <div class="form-group">
                  {!! Form::label('Imagen') !!}
                  {!! Form::file('imagen', ['id'=>'input-23', 'class'=>'file', 'data-buttonText'=>'Imagen' ]) !!}
              </div>

              <div class="form-group">
                  {!! Form::submit('Actualizar', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                  <hr>
                  <a href="{{ route('admin.articles.index')}}"  type="button" class="btn btn-default btn-lg btn-block">Volver</a>
              </div>

              {!! Form::close() !!}
				      </div>
				      <!-- /.box-body -->

      				<form name="formulario">
      				<input type="checkbox" name="box" onclick="funcion()" />
      				<input type="text" name="nombre" disabled />
      				<input type="text" name="campo2" disabled />
      				</form>

      				</div>
      				<!-- /.box -->
      			</div>
      			<!--/.col (right) -->
      		</div>
      		<!-- /.row -->
      	</section>
      	<!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

@endsection
@section('js')
  <!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
	     This must be loaded before fileinput.min.js -->
	<script src="{{ asset('Plugins/File/js/plugins/canvas-to-blob.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('Plugins/File/js/fileinput.min.js') }}" type="text/javascript"></script>
	<!-- bootstrap.js below is only needed if you wish to use the feature of viewing details
	     of text file preview via modal dialog -->
  <script src="{{ asset('Plugins/File/js/fileinput_locale_es.js') }}"></script>
  <script src="{{ asset('Plugins/Chosen/chosen.jquery.js')}}"></script>
  <script src="{{ asset('Plugins/Trumbowyg/trumbowyg.min.js')}}"></script>


  <script>
      $('.select-tag').chosen({
          placeholder_text_multiple: 'Seleccione un maximo de 3 etiquetas',
          max_selected_options: 3,
          search_contains:true,
          no_results_text: 'No se encontraron estas estiquetas'
      });
  </script>
  <script>
      $('.select-category').chosen({
          placeholder_text_multiple: 'Seleccione la categoria',
          max_selected_options: 1,
          search_contains:true,
          no_results_text: 'No se encontraron estas categorias',
      });
  </script>
    <script>
        $('#textarea-content').trumbowyg({
            lang: 'esp',
            fullscreenable: false,
            closable: false,
            btns: [
                ['formatting'],
                'btnGrp-semantic',
                ['link'],
                ['insertImage'],
                'btnGrp-justify',
                'btnGrp-lists',
                ['horizontalRule'],
                ['fullscreen']
            ]

        });
    </script>

	<script>
        $("#input-23").fileinput({
            showUpload: false,
            showRemove: false,
	        initialPreview: [
	            '<img src="/Imagenes/Productos/{{ $imagen->name }}"class="file-preview-image" alt="The Moon" title="The Moon">',
	        ],
	        overwriteInitial: true,

            initialCaption: "¡Tamaño maximo 2Mb!",
        });
    </script>

		<script>
		function funcion(){
				if(document.formulario_registro.box.checked == true){
						document.formulario_registro.iva.disabled = false;

				}
				else{
						document.formulario_registro.iva.disabled = true;

				}
		}
		</script>


@endsection
