@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

    <h1 id="titulo"> Editar Categorias</h1>

    <form action="{{route('categories.update', $categories->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
              <br>
    <label >Nombre de la categoria </label>
    <input type="text" name="name_categorie" value="{{$categories->name_categorie}}">

    <label >Descripción</label>
    <input type="text" name="description" value="{{$categories->description}}">

    <label >Imagen</label>
    <input type="file" name="image" value="{{$categories->image}}">

    <button type="submit">Actualizar</button>
</form>
@endsection