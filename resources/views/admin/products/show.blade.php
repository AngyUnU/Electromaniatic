@extends('layout.main_template')
@section('content')

<style>
    
</style>
<h1>Detalles del Producto</h1>
<h3>Id:{{$products->id}}</h3>
<h3>Producto: {{$products->name_np}}</h3>
<h3>categoria:{{$products->category_id}}</h3>
<h3>fecha_ingreso:{{$products->fecha_ingreso}}</h3>
<h3>Cantidad: {{$products->stock}}</h3>
<h3>Descripcion:{{$products->descripcion_pd}}</h3>
<h3>Precio: {{$products->precio}}</h3>
<h3>Imagen:{{$products->image}}</h3>

<!-- TODO Show Image -->

@endsection