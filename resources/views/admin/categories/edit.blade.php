@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

@foreach ($categories as $b)

<h1 id="titulo"> Editar Categorias</h1>
<form action={{route('categories.update',$b->id)}} method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <br>
    <label>Nombre de la categoria</label>
    <input type="text" name="name_categoria"  value={{$b->name_categoria}}>

    <label>Descripcion</label>
    <input type="text" name="descripcion"  value={{$b->descripcion}}>

          <label>Imagen de referencia</label>
    <input type="file" name="imagen">

    </select>

    <button type="submit">Actualizar Categoria</button>
</form>
