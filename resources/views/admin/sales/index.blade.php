@extends('layout.main_template')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .colore{
        background: #bbcef1;
    }
    .container{
        max-width: 1800px;
        width: 90%;
        background: #4682f0;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    }
    .container h2{
        padding: 2rem 1rem;
        font-size: 2.5rem;
        text-align: center;
    }
    .tbl{
        width: 100%;
        border-collapse: collapse;
    }
    .tbl thead{
        background: #92b8ff;
        color: #000000;
    }
    .tbl thead th{
        font-size: 0.9rem;
        padding: 0.8rem;
        letter-spacing: 0.2rem;
        vertical-align: top;
        border: 1px solid #4e77fd;
    }
    .tbl tbody tr td{
        font-size: 1rem;
        letter-spacing: 0.2rem;
        font-weight: normal;
        text-align: center;
        border: 1px solid #798cd1;
    }
    a{
        text-decoration: none;
    }
    .topcentral{
        text-align: center;
        margin-block:auto;
        margin-inline:auto;
    }
    @media(max-width: 768px){
        .tbl thead{
            display: none;
        }
        .tbl tr,
        .tbl td{
            display: block;
            width: 100%;
        }
        .tbl tr{
            margin-bottom: 1rem;
        }
        .tbl td::before{
            content: "";
            position: absolute;
        }
        footer {
    background-color: #212d3a;
    color: white;
    text-align: center;
    padding: 1%;
    width: 100%;
    margin-top:50px;
    height:1%;
}
}


</style>
<div class="topcentral">
    <br>
    <h2>Empleados</h2>
    <br>
    
    <button><a href={{route('employees.create')}} >Crear Empleado</a></button>
    <button><a href= {{route('employees.index')}} >Ver Empleados</a></button>
    <br>
    </div>
    
    <br><br>
    <div class="topcentral">
        <h2>Ventas</h2>
        <button><a href="{{ route('sales.create') }}">Registrar Venta</a></button>
    </div>
    
    <div class="container">
        <div class="tbl_container">
            <div class="colore">
                <h2>Lista de Ventas</h2>
            </div>
            <table class="tbl">
                <thead>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Cliente</th>
                    <th>Empleado</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($sales as $sale)
                        <tr>
                            <td>{{ $sale->id }}</td>
                            <td>{{ $sale->products->name_pd}}</td>
                            <td>{{ $sale->client->name_cli }}</td>
                            <td>{{ $sale->employee->name_em}}</td>
                            <td>{{ $sale->sale_date }}</td>
                            <td>
                                <button><a href="{{ route('sales.show', $sale) }}">Detalles</a></button>
                                <button><a href="{{ route('sales.edit', $sale) }}">Editar</a></button>
                                <button><a href="{{ route('sales.delete', $sale) }}">Eliminar</a></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
<br>
<br>
</div>
</div>
<br>

{{$employees->links()}}<!-- GENERA LOS ENLACES DE CADA PÁGINA-->

<br>
<br>
<br>

<footer style="background: #212d3a; color: #fff; padding: 10px 0; text-align: center; margin-top: 50px;">