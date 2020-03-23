@extends('admin.templates.admin')
@section('title', 'Producto: ')
@section('css')
<!-- jvectormap -->
<link rel="stylesheet" href="{{ asset('WBplataform/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
@endsection
@section('content' )
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Version 2.0</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('admin.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Perfil</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Info boxes -->
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">CPU Traffic</span>
						<span class="info-box-number">90<small>%</small></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Likes</span>
						<span class="info-box-number">41,410</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->

			<!-- fix for small devices only -->
			<div class="clearfix visible-sm-block"></div>

			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Ventas</span>
						<span class="info-box-number">760</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Empleados</span>
						<span class="info-box-number">24</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<div class="col-md-7">
				<!-- TABLE: LATEST ORDERS -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Producto</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
							<table class="table no-margin">

								<tr>
									<td><a href="pages/examples/invoice.html">Referencia</a></td>
									<td>{{ $article->reference }}</td>
									<td><span class="label label-warning">Pending</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">Nombre</a></td>
									<td>{{ $article->title }}</td>
									<td><span class="label label-warning">Pending</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">Precio</a></td>
									<td>{{ $article->price }}</td>
									<td><span class="label label-danger">Delivered</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">IVA</a></td>
									<td>{{ $article->iva }}</td>
									<td><span class="label label-info">Processing</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">Descripción</a></td>
									<td>{{ $article->content }}</td>
									<td><span class="label label-warning">Pending</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">Categoria</a></td>
									<td>{{ $article->category->name }}</td>
									<td><span class="label label-danger">Delivered</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">Etiquetas</a></td>
									<td>
										@foreach($article->tags as $tag)
											<span class="label label-primary">{{$tag->name}}</span>
										@endforeach
									</td>
									<td><span class="label label-success">Shipped</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">Categoria</a></td>
									<td>{{ $article->umeasure }}</td>
									<td><span class="label label-danger">Delivered</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">Cantidad Inicial</a></td>
									<td>{{ $article->initialinv }}</td>
									<td><span class="label label-danger">Delivered</span></td>
								</tr>
								<tr>
									<td><a href="pages/examples/invoice.html">Cantidad Actual</a></td>
									<td>{{ $article->totalinv }}</td>
									<td><span class="label label-danger">Delivered</span></td>
								</tr>

							</table>
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<a href="javascript:void(0)" class="btn btn-sm btn-primary btn-flat pull-left">Generar Nueva Orden</a>
						<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver Ordenes</a>
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- /.box -->
				<!-- MAP & BOX PANE -->
			</div>
			<!-- /.col -->

			<div class="col-md-5">
				<div class="box box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"></h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img src="/Imagenes/Productos/{{ $imagen->name }}" alt="{{ $article->title }}" title="{{ $article->title }}" />

									<div class="carousel-caption">
										<a href="/Imagenes/Productos/{{ $imagen->name }}" STYLE=" color:white">Ver</a>
									</div>
								</div>
							</div>
							</a>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
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
