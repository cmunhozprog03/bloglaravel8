@extends('adminlte::page')

@section('title', 'Editar Usuário')

@section('content_header')
    <h1>Assinar um Papel</h1>
@stop

@section('content')

  @if (session('info'))
      <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
      </div>
  @endif

    <div class="card shadow-lg">
      <div class="card-body">
        <p class="h5">Nome:</p>
        <p class="form-control">{{ $user->name }}</p>

        <h2 class="h5">Lista de papéis</h2>
        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
          @foreach ($roles as $role)
          <div>
            <label>
              {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
              {{ $role->name }}  
            </label>  
          </div>
             
          @endforeach
          <br>
          {!! Form::submit('Assinar Papel', ['class' => 'btn btn-success']) !!}

        {!! Form::close() !!}
      </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop