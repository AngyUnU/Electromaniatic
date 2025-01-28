@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Creación de Categoria</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{ route('categories.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <br>
    <label>Categoria</label>
    <input type="text" name="name_categorie">

    <label>Descripción</label>
    <input type="text" name="description">
    
    <label>Imagen de referencia</label>
    <input type="file" name="image">

    <button type="submit">Agregar</button>
</form>
@endsection
