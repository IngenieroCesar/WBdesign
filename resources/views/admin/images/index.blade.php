@extends('admin.templates.admin')

@section('title', 'Clientes')

@section('content' )

<hr>


<div class="row">
	@foreach($images as $image)
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<img src="/images/products/{{ $image->name }}" class="img-responsive">
				</div>
				<div class="panel-footer text-center">
					<div >
						{!!$image->article->content!!}	
					</div>
				</div>		
			</div>
		</div>
	@endforeach
	
</div>


@endsection
