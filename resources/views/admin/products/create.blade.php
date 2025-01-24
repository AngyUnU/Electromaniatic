@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Create de Productos</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<h1 id="titulo"> Creación de Producto</h1>
<form action="{{route('products.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <br>
    <label>Nombre Producto</label>
    <input type="text" name="name_np">

    <label>Category</label>
    <br>
    <select name="categories_id" id="">
        <option value="">Selecciona. . .</option>
        @foreach ($categories as $categories => $id)
        <option value="{{$id}}">{{$categories}}</option>     
        @endforeach
    </select>

    <br>
    <label>Cantidad</label>
    <input type="number" name="stock">

    <label >Precio Unitario</label>
    <input type="text" name="precio">

    <label >Descrpcion</label>
    <input type="text" name="descripcion_pd">

    <label >Imagen</label>
    <input type="file" name="image">

    <button type="submit">Registrar</button>
</form>

@endsection
