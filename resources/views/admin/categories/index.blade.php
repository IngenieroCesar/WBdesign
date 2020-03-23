@extends('admin.templates.admin')
@section('title', 'Clientes')
@section('css')

@endsection
@section('content' )

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categorias
        <small>Inventario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.index')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Categorias</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class=" col-xs-12 col-md-offset-2 col-md-8 ">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Categorias</h3>
							{!! Form::open(['route' => 'admin.categories.index', 'method' => 'GET', 'class' => 'navbar-form pull-right', 'role'=>'search']) !!}
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
              <table class="table table-hover text-center">

									<th>ID</th>
									<th>Nombre</th>
									<th>Acciones</th>

									@foreach($categories as $category)
										<tr>
											<td>{{ $category->id }}</td>
											<td>{{ $category->name }}</td>
											<td class="">
												<a href="{{ route('admin.categories.edit', $category->id)}}" class="btn btn-default" alt="Editar" title="Editar"><span class="fa fa-cogs" aria-hidden="true"></span></a>
												<a href="{{ route('admin.categories.destroy', $category->id)}}" class="btn btn-default" alt="Eliminar" title="Eliminar"><span class="fa fa-times" aria-hidden="true"></span></a>
											</td>
										</tr>
									@endforeach
              </table>
            </div>
						<!-- /.box-body -->
						<div class="box-footer clearfix">
							<ul class="pagination pagination-sm no-margin pull-right">
								{!! $categories->render() !!}
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
@endsection
