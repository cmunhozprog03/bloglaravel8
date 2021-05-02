<div class="form-group">
  {!! Form::label('name', 'Nome') !!}
  {!! Form::text('name', null, ['class' => 'w3-input', 'placeholder' => 'Insira o nome da etiqueta']) !!}

  @error('name')
     <span class="text-danger">{{ $message }}</span> 
  @enderror

</div>
<div class="form-group">
  {!! Form::label('slug', 'Slug') !!}
  {!! Form::text('slug', null, ['class' => 'w3-input', 'placeholder' => 'Insira o slug da etiqueta', 'readonly']) !!}

  @error('slug')
     <span class="text-danger">{{ $message }}</span> 
  @enderror

</div>

<div class="form-group">
  {{--<label for="">Cor da etiqueta:</label>
  <select name="color" id="" class="form-control">
      <option value="red">Vermelha</option>
      <option value="green">Verde</option>
      <option value="blue" selected>Azul</option>
  </select>--}}
  {!! Form::label('color', 'Cor da etiqueta') !!}
  {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}

  @error('color')
     <span class="text-danger">{{ $message }}</span> 
  @enderror

</div>