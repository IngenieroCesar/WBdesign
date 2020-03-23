@extends('admin.templates.admin')

@section('title', 'E-Commerce')

@section('content' )

<div class="about" id="e-commerce">
		<div class="container">
		<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="alldesc">
						<div class="col-md-6 col-sm-6 col-xs-12 centertext">
						<p class="all-td">Vende tus productos y servicios</p>
						<h2>Productos / Servicios</h2>
					</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<p class="desc">Aqui puedes publicar cada uno de tus productos y/ó servicios en tú pagina web; controla tú inventario, describe tus productos y/ó servicios, agrega imagenes actuales de todos estos!.</p>
					</div>
					</div>
				</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
	@include('flash::message')
		<div class="featurebox no-float center-block">
		<ul class="nav nav-tabs">

				<li role="presentation" class="active"><a href="#">Productos/Serviciòs</a></li>
				<li role="presentation"><a href="{{ route('admin.articles.create')}}">Crear Producto/Servicio</a></li>
				<li role="presentation"><a href="{{ route('admin.categories.index')}}">Categorias</a></li>
				<li role="presentation"><a href="{{ route('admin.tags.index')}}">Etiquetas</a></li>

				<!-- Barra de busqueda -->
				{!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right', 'role'=>'search']) !!}
					<div class="input-group">
					<span class="input-group-addon" id="search" > Nombre </span>
						{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
						<span class="input-group-addon" id="search" >
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</span>
					</div>
				{!! Form::close() !!}
				<!--       -->

		</ul>
		<br>
		<div class=" table-responsive">
			<table class="table table-hover col-md-6 col-sm-6 col-xs-12 ">
				<thead>
					<th>ID</th>
					<th>Nombre</th>
					<th>Presio</th>
					<th>Categoria</th>
					<th>Etiqueta</th>
					<th>Editar / Eliminar</th>
				</thead>
				<tbody>
					@foreach($articles as $article)
						<tr>
							<td>{{ $article->id }}</td>
							<td>{{ $article->title }}</td>
							<td></td>
							<td>{{ $article->category->name }}</td>								
							<td>
								@foreach($article->tags as $tag)
									| {{$tag->name}} | 
								@endforeach
							</td>								
							<td class="">
								<a href="{{ route('admin.articles.edit', $article->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a><em>&nbsp&nbsp|&nbsp&nbsp </em>
								<a href="{{ route('admin.articles.destroy', $article->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $articles->render() !!}
		</div>

		</div>
</div>
			</div>
	</div>
	</div>




@endsection