@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Editar Productos</h1>
<form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <br>
    <label>Nombre Producto</label>
    <input type="text" name="name_np"  value="{{$product->name_np}}">

    <label >Categoria</label>
    <select name="name_categoria" id="">
        <option value="">Selecciona. . .</option>

        @foreach ($categories as $b => $id)
        <option {{$products->categorie_id==$id ? 'selected' : ''}} value="{{$id}}">{{$categories}}</option>     
        @endforeach
        
    </select>
    <br>
    <label >Cantidad</label>
    <input type="number" name="stock" value="{{$products->stock}}">

    <label >Precio Unitario</label>
    <input type="text" name="precio" value="{{$products->precio}}">

    <label >Imagen</label>
    <input type="file" name="image">

    <button type="submit">Actualizar</button>
</form>
@endsection