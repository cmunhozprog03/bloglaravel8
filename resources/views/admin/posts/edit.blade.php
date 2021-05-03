@extends('adminlte::page')

@section('title', 'Editar Post')

@section('content_header')
    <h1>Editar Post</h1>
@stop

@section('content')
  @if (session('info'))
      <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
      </div>
  @endif

    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="card">
          <div class="card-body shadow-lg">
            {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'autocomplete' => 'off', 'files' => true, 'method' => 'PUT']) !!}

            
            @include('admin.posts._partials.form')

            <button type="submit" class="btn btn-success">Atualizar Post</button>

            {!! Form::close() !!}
          </div>
        </div>
      </div>

    </div>
@stop

@section('css')
<style>
  .image-wrapper{
    position: relative;
    padding-bottom: 56.25%;
  }
  .image-wrapper img{
    position: absolute;
    object-fit: cover;
    width: 100%;
    height: 100%;
  }   
</style>
  
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    
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

        //Cambiar imagen
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
@stop