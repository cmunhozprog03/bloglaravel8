@extends('adminlte::page')

@section('title', 'Criar Post')

@section('content_header')

    <a href="{{ route('admin.posts.create') }}" class="btn btn-secondary btn-sm float-right">Novo Post</a>
    <h1>Criar Post</h1>
@stop

@section('content')
    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="card">
          <div class="card-body shadow-lg">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off']) !!}

            <div class="form-group">
              {!! Form::label('name', 'Nome') !!}
              {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Insira o título do post...']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('slug', 'Slug') !!}
              {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('category', 'Categoria') !!}
              {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              <p class="font-weight-bold">Etiquetas</p>
              @foreach ($tags as $tag)
              <label class="mr-2">
                {!! Form::checkbox('tags[]', $tag->id, null)!!}
                {{ $tag->name }}
              </label>
              @endforeach
            </div>

            <div class="form-group">
              <p class="font-weight-bold">Status</p>
              <label class="mr-3">
                {!! Form::radio('status', 1, true) !!}
                Rasculho
              </label>
              <label>
                {!! Form::radio('status', 2) !!}
                Publicado
              </label>
            </div>

            <div class="form-group">
              {!! Form::label('extract', 'Resumo')!!}
              {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('body', 'Texto do Post')!!}
              {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>

            <button type="submit" class="btn btn-success">Criar Post</button>

            {!! Form::close() !!}
          </div>
        </div>
      </div>

    </div>
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

    </script>
@stop