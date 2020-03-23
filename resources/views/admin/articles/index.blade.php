@extends('admin.templates.admin')
@section('title', 'Productos/Servicios')
@section('css')
	<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('WBplataform/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection
@section('content' )

	<!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
      @include('flash::message')
	    <!-- Content Header (Page header) -->
	    <section class="content-header">

	      <h1>
	        Inventario
	        <small>Datos Productos Este Mes</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="{{ route('admin.index')}}"><i class="fa fa-dashboard"></i>Home</a></li>
	        <li class="active">Empleados</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>150</h3>

                <p>Añadir Articulo</p>
              </div>
              <div class="icon">
                <i class="ion ion-plus-circled"></i>
              </div>
              <a href="{{ route('admin.articles.create')}}" class="small-box-footer">Mas Informasión <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Ordenes En Linea</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="" class="small-box-footer">Más Informasión <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>44<sup style="font-size: 20px">%</sup></h3>

                <p>Movimiento de Articulos</p>
              </div>
              <div class="icon">
                <i class="ion ion-loop"></i>
              </div>
              <a href="#" class="small-box-footer">Más Información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>65</h3>

                <p>Estadisticas Mensuales</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Más Información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

	      <div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Empleados</h3>
								{!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right', 'role'=>'search']) !!}
	              <div class="box-tools">
	                <div class="input-group input-group-sm" style="width: 150px;">
										{!! Form::text('title', null, ['class' => 'form-control pull-right', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
	                  <div class="input-group-btn">
	                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
	                  </div>
	                </div>
	              </div>
								{!! Form::close() !!}
	            </div>
	            <!-- /.box-header -->
							<div class="box-body table-responsive">
	              <table id="example2" class="table table-bordered table-hover">
	                <thead>
		                <tr>
											<th>Referencia</th>
											<th>Nombre</th>
											<th>Categoria</th>
											<th>Presio</th>
											<th>Descripción</th>
											<th>Estado</th>
											<th>Acciones</th>
		                </tr>
									</thead>
									<tbody>
									@foreach($articles as $article)
										<tr>
											<td>{{ $article->reference }}</td>
											<td><a href="{{ route('admin.articles.view', $article->id)}}" alt="Ver" title="Ver">{{ $article->title }}</a></td>
											<td>{{ $article->category->name }}</td>
											<td>{{ $article->price }}</td>
											<td>{!! $article->content !!}</td>
											<td><span class="label label-success">Disponoble</span></td>
											<td class="">
												<a href="{{ route('admin.articles.view', $article->id)}}" class="btn btn-default" alt="Ver" title="Ver"><span class="fa fa-eye" aria-hidden="true"></span></a>
												<a href="{{ route('admin.articles.edit', $article->id)}}" class="btn btn-default" alt="Editar" title="Editar"><span class="fa fa-cogs" aria-hidden="true"></span></a>
												<a href="{{ route('admin.articles.destroy', $article->id)}}" class="btn btn-default" alt="Eliminar" title="Eliminar"><span class="fa fa-times" aria-hidden="true"></span></a>
											</td>
										</tr>
									@endforeach
									</tbody>
									<tfoot>
									<tr>
										<th>Referencia</th>
										<th>Nombre</th>
										<th>Categoria</th>
										<th>Presio</th>
										<th>Descripción</th>
										<th>Estado</th>
										<th>Acciones</th>
									</tr>
									</tfoot>
	              </table>
	            </div>
							<!-- /.box-body -->
							<div class="box-footer clearfix">
								<ul class="pagination pagination-sm no-margin pull-right">
									{!! $articles->render() !!}
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
	<!-- AdminLTE for demo purposes -->
  <script src="{{ asset('WBplataform/dist/js/demo.js') }}"></script>
	<!-- DataTables -->
	<script src="{{ asset('WBplataform/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('WBplataform/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
	<script>
  $(function () {
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false
    });
  });
</script>
@endsection
