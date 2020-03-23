@extends('admin.templates.admin')
@section('title', 'Usuarios')
@section('css')

@endsection
@section('content' )

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
								@foreach($users as $user)
								@if($user->id >= 1)
									<tr>
										<td>{{ $user->id }}</td>
										<td>{{ $user->cedula }}</td>
										<td>{{ $user->apellido }} {{ $user->name }}</td>
										<td>{{ $user->mobile }}</td>
										<td>{{ $user->email }}</td>
										<td>

											@if($user->type == "administrador")
                      <span class="label label-primary">
												{{"Administrador"}}
                      </span>
											@else
                      <span class="label label-success">
												@if($user->type == "administrador web")
													{{"Administrador Web"}}
												@else
													@if($user->type == "contador")
														{{"Contador"}}
													@else
														@if($user->type == "auxiliar contable")
															{{"Auxiliar Contable"}}
														@else
															@if($user->type == "empleado")
																{{"Empleado"}}
															@endif
														@endif
													@endif
												@endif
                        </span>
											@endif

										</td>
										<td class="">
											<a href="{{ route('admin.users.edit', $user->id)}}" class="btn btn-default" alt="Editar" title="Editar"><span class="fa fa-cogs" aria-hidden="true"></span></a>
											<a href="{{ route('admin.users.destroy', $user->id)}}" class="btn btn-default" alt="Eliminar" title="Eliminar"><span class="fa fa-times" aria-hidden="true"></span></a>
										</td>
									</tr>
								@endif
								@endforeach
              </table>
            </div>
						<!-- /.box-body -->
						<div class="box-footer clearfix">
							<ul class="pagination pagination-sm no-margin pull-right">
								{!! $users->render() !!}
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
