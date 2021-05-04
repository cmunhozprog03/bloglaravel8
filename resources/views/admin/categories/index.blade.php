@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
  @can('admin.categories.create')
    <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-secondary float-right">Nova Categoria</a>
  @endcan
  <h1>Lista de Categorias</h1>
    

    
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
  <strong>{{ session('info') }}</strong>
</div>
@endif

@if ($categories)
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
          @foreach ($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td width="10px">
                @can('admin.categories.edit')
                  <a href="{{ route('admin.categories.edit', $category) }}" class="w3-button w3-round w3-small w3-indigo">Editar</a>
                @endcan
              </td>
              <td width="10px">
                @can('admin.categories.destroy')
                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="w3-button w3-round w3-small w3-red">Excluir</button>
                </form>
                @endcan
              </td>
              
            </tr>      
          @endforeach
        </tbody>
      </table>
      {{ $categories->links() }}

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