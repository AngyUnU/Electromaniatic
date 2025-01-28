@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

    <h1 id="titulo"> Editar Informacion del Cliente</h1>

    <form action="{{route('clients.update', $client->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <br>
        <label>Nombre del Cliente</label>
        <input type="text" name="name_cli" value="{{$client->name_cli}}" required>
    
        <label>Apellidos del Cliente</label>
        <input type="text" name="surnames" value="{{$client->surnames}}" required>
    
        <label>Numero Telefonico</label>
        <input type="tel" name="tel" value="{{$client->tel}}" required>
    
        <label>Imagen de referencia</label>
        <input type="file" name="image" value="{{$client->image}}">
        <br>
              
        <button type="submit">Actualizar</button>
    </form>
    
@endsection