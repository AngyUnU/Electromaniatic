@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Creacion de Productos</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif
<button><a href="{{route('categories.create')}}">Crear Categorias</a></button>
<button><a href="{{route('categories.index')}}">Ver Categorias</a></button>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <br>
    
  
    <label>Nombre Producto</label>
    <input type="text" name="name_pd">
    
    <label>Descripción</label>
    <input type="text" name="description_pd">

    <label>Precio Unitario</label>
    <input type="double" name="price">

    <br>    <label for="categorie">Categoría</label>
    <select name="categorie" id="categorie">
        <option value="">Seleccione una categoría</option>
        @foreach ($categories as $id => $name_categorie)
            <option value="{{ $id }}" {{ old('categorie') == $id ? 'selected' : '' }}>
                {{ $name_categorie }}
            </option>
        @endforeach
    </select>
    
    <br>
    <label>Cantidad de productos</label>
    <input type="number" name="stock">
    <label>Fecha_Registro</label>
    <input type="date" name="entry_date">
    <label>Imagen</label>
    <input type="file" name="image">

    <button type="submit">Registrar</button>
</form>
@endsection