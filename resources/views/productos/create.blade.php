@extends('layouts.principal')

@section('contenido')
    <form class="col s12"
     method="POST"
      action="{{route('productos.store')}}"
      enctype="multipart/form-data"
      >
@csrf

    @if( session('mensajito') )
      <div class="row">
         <strong>{{ session('mensajito') }}</strong>
         </div>
    @endif

    <div class="row">
    <div class="col s8">
    <h1 class="purple-text  text-darken-4" >Nuevo Producto</h1>
    </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nombre Del Producto" id="Nombre" for="first_name" type="text" class="validate" name="nombre">
          <label for="Nombre">Nombre del producto</label>
          <strong>{{ $errors->first('nombre') }}</strong>
        </div>
        <div class="input-field col s6">
          <input id="desc" type="text" class="validate" name="desc">
          <label for="last_name">Descripcion</label>
          <strong class="#d81b60 pink darken-1 ">{{ $errors->first('desc') }}</strong>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input value="Precio" id="Precio" type="text" class="validate" name="precio">
          <label for="disabled">Precio</label>
          <strong class="#d81b60 pink darken-1 ">{{ $errors->first('precio') }}</strong>
        </div>
      </div>

<div class="row">
  <div class="col s8 input-field">
    <select name="marca" id="marca">
        <option value="">
          Elija su marca
        </option>
        @foreach($marcas as $marca)
          <option Value="{{ $marca->id }}">{{ $marca->nombre }}</option>
        @endforeach
    </select>
    <label>Elija marca</label>
    <strong class="#d81b60 pink darken-1 ">{{ $errors->first('marca') }}</strong>
  </div>
</div>
<div class="row">
<div class="col s8 input-field">

<select name="categoria" id="categoria">
  @foreach($categorias as $categoria)
  <option Value="">Elija Categoria</option>
  <option Value="{{ $categoria->id }}" >
    {{ $categoria->nombre}}
  </option>
  @endforeach
</select>
<label >Elija Categoria</label>
<strong class="#d81b60 pink darken-1 ">{{ $errors->first('categoria') }}</strong>
</div>
</div>
    
      <div class="row">
      <div class="file-field input-field">
      <div class="btn">
        <span>Ingresar Imagen</span>
        <input type="file" name="imagen" multiple>
      </div>
      <strong class="#d81b60 pink darken-1 ">{{ $errors->first('imagen') }}</strong>
      <div class="file-path-wrapper">
        <input class="file-path validate" 
        type="text"
        placeholder="Upload one or more files">
      </div>
      </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>

    </form>
 
  @endsection