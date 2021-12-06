@extends('adminlte::page')

@section('title', 'Editar post')

@section('content_header')
    <h1>Editar post</h1>
@stop

@section('content')

@if (session('info'))

    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    
@endif
    <div class="card">

        <div class="card-body">
            {!! Form::model($ficha,['route' => ['admin.fichas.update', $ficha], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}
           
           {{--  {!! Form::hidden('user_id', auth()->user()->id) !!} --}}

            @include('admin.fichas.partials.form')

            {!! Form::submit('Actualizar datos', ['class' => 'btn btn-primary']) !!}


            {!! Form::close() !!}

        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
<style>
    .image-wrapper{
        position: relative;
        padding-bottom: 56.25%; 
    }

    .image-wrapper img{
        position:absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;

    }

    
    fieldset {
    min-width: 290px;
}

    fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1rem !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }

   legend {

font-size: 1rem;
font-weight: bold !important;

}


</style>
    

@stop

@section('js')

<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1-1.3/jquery.stringToSlug.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
<script>

            $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
        });

        ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );

        //cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
        
</script>


@endsection