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
        <li class="active">Create Article</li>
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
              {!! Form::open(['route'=>'admin.articles.store', 'method' => 'POST', 'class'=>'', 'name'=>'formulario_registro' , 'files' => true  ]) !!}
                <!-- text input -->
                <div class="form-group">
                    {!! Form::label('title', 'Producto / Articulo') !!}
                    {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>"Nombre Completo...",'required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('reference', 'Referencia') !!}
                  {!! Form::number('reference', null, ['class' => 'form-control','placeholder'=>"Numero de Referencia...", 'required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('price', 'Precio') !!}
                  {!! Form::number('price', null, ['class' => 'form-control','placeholder'=>"Presio de Compra...", 'required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('iva', 'Impuesto') !!} &nbsp;
                  <input type="checkbox" name="box" onclick="funcion()" />
                  {!! Form::number('iva', null, ['class' => 'form-control', 'name'=>'iva' ,'placeholder'=>"Impuesto Valor Agregado...",'disabled', 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content', 'Descipción') !!}
                    {!! Form::textarea('content', null, ['id'=>'textarea-content', 'placeholder'=>"Descripción disponible para tú pagina Web...",'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('category_id', 'Categoria') !!}
                    {!! Form::select('category_id', $categories, null ,[ 'class'=> 'form-control select-category','multiple', 'required'])!!} <!-- Dbo ver si esto lo puedo reparar!! -->
                </div>

                <div class="form-group">
                  {!! Form::label('tags', 'Etiqueta') !!}
                  {!! Form::select('tags[]', $tags, null , ['class'=> 'form-control select-tag','multiple', 'required'])!!}
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
                    {!! Form::text('umeasure', null, ['class' => 'form-control','placeholder'=>"Litro, Metro, Kilogramo...", 'required']) !!}
                </div>

                <div class="form-group">
                  <label>Rotasión de Salida</label>
                  <input type="text" class="form-control" placeholder="Nombre Completo...">
                </div>

                <div class="form-group">
                    {!! Form::label('Imagen') !!}
                    {!! Form::file('imagen', ['id'=>'input-23', 'class'=>'file', 'data-buttonText'=>'Imagen' ]) !!}
                </div>

                <!-- input states -->
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                  <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group has-warning">
                  <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                    warning</label>
                  <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                  <span class="help-block">Help block with warning</span>
                </div>
                <div class="form-group has-error">
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                  <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                  <span class="help-block">Help block with error</span>
                </div>

                <!-- checkbox -->
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Checkbox 1
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Checkbox 2
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled>
                      Checkbox disabled
                    </label>
                  </div>
                </div>

                <!-- radio -->
                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Option one is this and that&mdash;be sure to include why it's great
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else and selecting it will deselect option one
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                      Option three is disabled
                    </label>
                  </div>
                </div>

                <div class="form-group">
                    {!! Form::submit('Crear', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
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
