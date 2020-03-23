@extends('admin.templates.formimages')

@section('content')

	<div class="container padding">
		<div class="col-md-11 col-centered">

			{!! Form::open(['route'=>'admin.myweb.galeries.store', 'method' => 'POST', 'class'=>'dropzone','id'=>'my-dropzone', 'files' => true  ]) !!}

				<div class="dz-message">
					UN MAXIMO DE 6 IMAGENES
					<span class="note">(Tamaño maximo 2Mb por imagen)</span>	
				</div>

				<div class="dropzone-previews"></div>

			{!! Form::close() !!}

		</div>
	</div>

		<hr>

		<div class="container padding">
			<div class="col-md-8 col-centered">
				<a href="{{ route('admin.myweb.galeries.index')}}"  type="button" class="btn btn-default btn-lg btn-block">Volver</a>
			</div>
		</div>





@endsection

@section('js')

	<script>
		Dropzone.options.myDropzone = {

		  // Prevents Dropzone from uploading dropped files immediately
		  autoProcessQueue: true,
		  uploadMultiple: true,
		  maxFilesize:2.0, //MB
		  maxFiles:6,

		  init: function() {
		    var submitButton = document.querySelector("#submit-all")
		        myDropzone = this; // closure

		    submitButton.addEventListener("click", function(e) {
		    	e.preventDefault();
		    	e.stopPropagation();	
		      myDropzone.processQueue(); // Tell Dropzone to process all queued files.
		    });

		    // You might want to show the submit button only when 
		    // files are dropped here:
		    this.on("addedfile", function(file) {
		      // Show submit button here and/or inform user to click it.
		    });

		    this.on("complete", function(file) {
		      // Show submit button here and/or inform user to click it.
		      myDropzone.removefile(file);
		    });

		  }
		};
	</script>


@endsection