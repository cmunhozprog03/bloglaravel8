@extends('adminlte::page')

@section('title', 'Lista de Posts')

@section('content_header')

    <a href="{{ route('admin.posts.create') }}" class="btn btn-secondary btn-sm float-right">Novo Post</a>
    <h1>Lista de Posts</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
    </div>
@endif
    @livewire('admin.post-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop