@extends('adminlte::page')

@section('title', 'Editar Post')

@section('content_header')
    <h1>Editar Post</h1>
@stop

@section('content')
    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="card">
          <div class="card-body shadow-lg">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            @include('admin.posts._partials.form')

            <button type="submit" class="btn btn-success">Criar Post</button>

            {!! Form::close() !!}
          </div>
        </div>
      </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop