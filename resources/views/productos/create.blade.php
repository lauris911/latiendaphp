@extends('layouts.principal')

@section('contenido')
    <form class="col s12">
    <div class="row">
    <div class="col s8">
    <h1 class="purple-text  text-darken-4" >Nuevo Producto</h1>
    </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nombre Del Producto" id="Nombre" for="first_name" type="text" class="validate">
          <label for="nombre">Nombre del producto</label>
        </div>
        <div class="input-field col s6">
          <input id="desc" type="text" class="validate">
          <label for="last_name">Descripcion</label>
        </div>
      </div>
<div class="row">
  <div class="col s8 input-field">
    <select name="marca" id="marca">
        <option>
          Elija su marca
        </option>
        @foreach($marcas as $marca)
       <option>{{ $marca->nombre }}</option>
        @endforeach
    </select>
  </div>
</div>

      <div class="row">
        <div class="input-field col s12">
          <input disabled value="Precio" id="disabled" type="text" class="validate">
          <label for="disabled">Precio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
      <div class="file-field input-field">
      <div class="btn">
        <span>Ingresar Imagen</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
      <a class="waves-effect waves-light btn">Enviar</a>

    </form>
 
  @endsection