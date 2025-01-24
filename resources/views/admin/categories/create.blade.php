@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<h1 id="titulo"> Creación de Categoria</h1>
<form action="{{route('categories.store')}}" method="POST" class="formregistro">
    @csrf
    <br>
    <label for="" class="">Categoria</label>
    <input type="text" name="name_categoria">

    <label for="" class="">Descripción</label>
    <input type="text" name="descripcion">
    
    <label for="" class="">Imagen de referencia</label>
    <input type="file" name="imagen">

    <button type="submit">Registrar</button>
</form>
@endsection
