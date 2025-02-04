@extends('layout.main_template')
@section('content')

<style>
    *{
    box-sizing:border-box;
    }
    form{
    width:450px;
    height:300px;
    padding-inline:20px;
    border-radius: 12px;
    margin-block:auto;
    margin-inline:auto;
    background-color:#212d3a;
    }
  
    #titulo{
        text-align: center;
    }
    form label{
    width:140px;
    height:10px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: inline;
    color:azure;
    text-align:left ;
    }
    form input[type="text"],form input[type="number"]{
    width:200px;
    padding-block: 3px;
    border: 1px solid #ffffff;
    border-radius: 3px;
    background-color: #5b9cff;
    color: #000000;
    margin-block: 4px;
    display:flex;
    }
    form button[type="submit"]{
    width:100%;
    padding: 8px 16px;
    margin-block-start: 32px;
    border-radius: 10px;
    display:block;
    color:#1881c7;
    background-color:#ffffff;
    }
    </style>
    



@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif


<br>
<br>
<br>

<form action="{{ route('sales.update', $sale->id) }}" method="POST">
    @csrf
    @method('PUT')
    <h1>Editar Venta</h1>
    <label for="products">Producto </label>
    <br>
    @if($products->isEmpty())
        <p>No hay productos disponibles.</p>
    @else
        <select name="product_id">
            <option value="">Seleccione una opción</option>
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name_pd }}</option>
            @endforeach
        </select>
    @endif
    <br>
    <label>Nombre del Cliente </label>
    <br>
    <select name="client_id">
        <option value="">Seleccione una opcion</option>
        @foreach ($clients as $client)
            <option value="{{ $client->id }}">{{ $client->name_cli }}</option>
        @endforeach
        
    </select>
<br>
<label>Nombre del Empleado </label>
<br>
@if($employees->isEmpty())
    <p>No hay empleados disponibles.</p>
@else
    <select name="employee_id">
        <option value="">Seleccione una opción</option>
        @foreach ($employees as $employee)
            <option value="{{ $employee->id }}">{{ $employee->name_e }}</option>
        @endforeach
    </select>
@endif
<br>
<br>

    <label>Fecha de Venta</label>
    <input type="date" name="sale_date" value="{{ $sale->sale_date }}">

    <button type="submit">Actualizar</button>
</form>
