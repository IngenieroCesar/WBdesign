@extends('admin.templates.admin')
@section('title', 'Contenido')
@section('css')

<!-- jvectormap -->
<link rel="stylesheet" href="{{ asset('WBplataform/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">

@endsection
@section('content' )

		@foreach($contents as $content)
		<div class="col-md-6">
			<div class="jumbotron">
				<h1>{!! $content->title !!}</h1>
				{!! $content->content !!}
				<hr>
				<div class="btn-group" role="group" aria-label="...">
					<a href="{{ route('admin.myweb.contents.edit', $content->id)}}"><button type="button" class="btn btn-danger">Editar</button></a>
				</div>

				</div>
		</div>
		@endforeach

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Libreta de Empleados
        <small>Datos Personales</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.index')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Empleados</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Empleados</h3>
							{!! Form::open(['route' => 'admin.users.index', 'method' => 'GET', 'class' => 'navbar-form pull-right', 'role'=>'search']) !!}
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">

									{!! Form::text('name', null, ['class' => 'form-control pull-right', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>



                </div>
              </div>
							{!! Form::close() !!}
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
									<th>ID</th>
									<th>Cedula</th>
									<th>Nombre</th>
									<th>Celular</th>
									<th>Correo</th>
									<th>Tipo</th>
									<th>Acciones</th>
                </tr>
              </table>
            </div>
						<!-- /.box-body -->
						<div class="box-footer clearfix">
							<ul class="pagination pagination-sm no-margin pull-right">
							</ul>
						</div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('js')

<!-- Sparkline -->
<script src="{{ asset('WBplataform/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('WBplataform/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('WBplataform/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- ChartJS 1.0.1 -->
<script src="{{ asset('WBplataform/plugins/chartjs/Chart.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('WBplataform/dist/js/pages/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('WBplataform/dist/js/demo.js') }}"></script>

@endsection
