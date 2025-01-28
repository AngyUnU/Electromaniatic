@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Actualización de Productos</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Esto es necesario para hacer un PUT request -->
    <br>
    <label>Fecha_Registro</label>
    <input type="date" name="entry_date" value="{{ old('entry_date', $products->entry_date) }}">
  
    <label>Nombre Producto</label>
    <input type="text" name="name_pd" value="{{ old('name_pd', $products->name_pd) }}">
    
    <label>Descripción</label>
    <input type="text" name="description_pd" value="{{ old('description_pd', $products->description_pd) }}">

    <label>Precio Unitario</label>
    <input type="number" step="0.01" name="price" value="{{ old('price', $products->price) }}">

    <label>CATEGORIA</label>
    <br>
    <select name="categorie" id="categorie">
    @foreach ($categories as $id => $name)
        <option value="{{ $id }}" {{ $id == old('categorie', $product->categorie) ? 'selected' : '' }}>
            {{ $name }}
        </option>
    @endforeach
</select>
<br><br>

    <label>Cantidad de productos</label>
    <input type="number" name="stock" value="{{ old('stock', $products->stock) }}">

    <label>Imagen</label>
    <input type="file" name="image">

    <button type="submit">Actualizar</button>
</form>
@endsection