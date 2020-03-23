@extends('admin.templates.form')

@section('title', 'Crear Contenido')

@section('content')

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert" >
        <ul>
            @foreach( $errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>   
    </div>
@endif


{!! Form::open(['route'=>'admin.myweb.contents.store', 'method' => 'POST', 'class'=>'formulario', 'name'=>'formulario_registro' , 'files' => true  ]) !!}

    <div class="input-grupo">
        {!! Form::text('title', null, ['id' => 'name', 'required']) !!}
        {!! Form::label('title', 'Titulo', ['class' => 'label','required']) !!}     
    </div>

    <div class="input-grupo">
        {!! Form::label('content', 'Descipción') !!}
        {!! Form::textarea('content', null, ['class'=>'textarea-content','required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
        <hr>
        <a href="{{ route('admin.myweb.contents.index')}}"  type="button" class="btn btn-default btn-lg btn-block">Volver</a>
        
    </div>


   
{!! Form::close() !!}


 


@endsection

@section('js')

    <script>
        $('.textarea-content').trumbowyg({
            lang: 'esp',
            fullscreenable: true,
            closable: false,
            btns: [
          '|', 'formatting',
          '|', 'btnGrp-design',
          '|', 'link',
          '|', 'insertImage',
          '|', 'btnGrp-justify',
          '|', 'horizontalRule'
            ]

        });
    </script>

@endsection