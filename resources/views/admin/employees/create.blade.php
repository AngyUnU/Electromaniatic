@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Creación de Empleados</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{ route('employees.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <br>
    <label>Nombre</label>
    <input type="text" name="name_e">
    <label>Apellidos</label>
    <input type="text" name="surnames_e">  
    <label>Puesto</label>
    <input type="text" name="position" >

    <label>Teléfono</label>
    <input type="tel" name="tel">
    <label>Imagen de referencia</label>
    <input type="file" name="image"> <!-- Cambiado de 'imagen' a 'image' -->

    <button type="submit">Agregar</button>
</form>

@endsection
