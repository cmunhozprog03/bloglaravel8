@extends('adminlte::page')

@section('title', 'Editar Categoria')

@section('content_header')
    <h1>Editar Categoria</h1>
    
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
  <strong>{{ session('info') }}</strong>
</div>
@endif

<div class=" row justify-content-center">
    
    <div class="col-md-7">
        <div class="w3-card-4 p-2">
            {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'PUT']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nome') !!}
                {!! Form::text('name', null, ['class' => 'w3-input', 'placeholder' => 'Insira o nome da categoria']) !!}
            
                @error('name')
                   <span class="text-danger">{{ $message }}</span> 
                @enderror

            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'w3-input', 'placeholder' => 'Insira o slug da categoria', 'readonly']) !!}
            
                @error('slug')
                   <span class="text-danger">{{ $message }}</span> 
                @enderror
            
            </div>

            {!! Form::submit('Atualizar Categoris', ['class' => 'btn btn-success']) !!}

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