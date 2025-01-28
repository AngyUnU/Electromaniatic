@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Crear Nuevo cliente </h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif


<form action="{{route('clients.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <br>
    <label>Nombre del Cliente</label>
    <input type="text" name="name_cli" required>

    <label>Apellidos del Cliente</label>
    <input type="text" name="surnames" required>

    <label>Numero Telefonico</label>
    <input type="tel" name="tel" required>

    <label>Imagen de referencia</label>
    <input type="file" name="image" required>

    <button type="submit">Agregar</button>
</form>

@endsection
