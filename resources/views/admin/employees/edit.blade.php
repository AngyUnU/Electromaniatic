@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

    <h1 id="titulo"> Editar Empleado</h1>

    <form action="{{route('employees.update', $employee->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <br>
        <label >Nombre</label>
        <input type="text" name="name_e" value="{{$employee->name_e}}">

        <label >Apellidos</label>
        <input type="text" name="surnames_e" value="{{$employee->surnames_e}}">

        <label >Puesto</label>
        <input type="text" name="position" value="{{$employee->position}}">

        <label >Teléfono</label>
        <input type="tel" name="tel" value="{{$employee->tel}}">

        <label >Imagen</label>
        <input type="file" name="image" value="{{$employee->image}}">

        <button type="submit">Actualizar</button>
    </form>
@endsection
