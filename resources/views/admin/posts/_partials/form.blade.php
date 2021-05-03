<div class="form-group">
    {!! Form::label('name', 'Nome') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Insira o título do post...']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category', 'Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach

    @error('tags')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror

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

    @error('status')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
          @isset ($post->image)
            <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="">
          @else
            <img id="picture" src="https://cdn.pixabay.com/photo/2021/04/25/12/23/flowers-6206279_960_720.jpg" alt="">
           @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagem do post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, doloribus reiciendis provident nesciunt odio
            est veritatis, assumenda facere culpa possimus voluptates architecto porro saepe sit animi facilis dolorum
            ex aut!</p>
    </div>
</div>


<div class="form-group">
    {!! Form::label('extract', 'Resumo') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('body', 'Texto do Post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>
