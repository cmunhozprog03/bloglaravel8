@extends('adminlte::page')

@section('title', 'Criar Categoria')

@section('content_header')
    <h1>Criar Etiqueta</h1>
@stop

@section('content')
    <div class=" row justify-content-center">
        <div class="col-md-7">
            <div class="w3-card-4 p-2">
                {!! Form::open(['route' => 'admin.tags.store']) !!}

                @include('admin.tags._partials.form')
             
                {!! Form::submit('Criar Etiqueta', ['class' => 'btn btn-success']) !!}

                {!! Form::close() !!}
            </div>   
        </div>
         
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop