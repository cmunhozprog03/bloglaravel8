@extends('adminlte::page')

@section('title', 'Etiquetas')

@section('content_header')
    <a href="{{ route('admin.tags.create') }}" class="w3-button w3-round w3-dark-gray float-right">Nova Etiqueta</a>
    <h1>Lista de Etiquetas</h1>
    
    
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
  <strong>{{ session('info') }}</strong>
</div>
@endif

@if ($tags)
  <div class="w3-card-4">
    <div>
      
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th colspan="2"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tags as $tag)
            <tr>
              <td>{{ $tag->id }}</td>
              <td>{{ $tag->name }}</td>
              <td>{{ $tag->color }}</td>
              <td width="10px">
                <a href="{{ route('admin.tags.edit', $tag) }}" class="w3-button w3-round w3-small w3-indigo">Editar</a>
              </td>
              <td width="10px">
                <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="w3-button w3-round w3-small w3-red">Excluir</button>
                </form>
              </td>
              
            </tr>      
          @endforeach
        </tbody>
      </table>
      {{ $tags->links() }}

    </div>
  </div> 
@else
  <div class="w3-container">
    <div class="w3-panel w3-blue-gray">
      <h5>Nenhum registro encontrado!</h5>
    </div>
  </div> 
@endif
  
    
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop