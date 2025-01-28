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
    <div class="container">
        <div class="tbl_container">
            <div class="colore">
                <h2>Empleados</h2>
            </div>
            <table class="tbl">
                <thead>
                    <th> ID </th>
                    <th> Nombre </th>
                    <th> Apellidos </th>
                    <th> Puesto </th>
                    <th> Teléfono </th>
                    <th> Imagen </th>
                    <th> Acciones </th>
                </thead>
    
                <tbody>
                    @foreach ($employees as $e)
                    <tr>
                        <td>{{$e->id}}</td>
                        <td>{{$e->name_e}}</td>
                        <td>{{$e->surnames_e}}</td>
                        <td>{{$e->position}}</td>
                        <td>{{$e->tel}}</td>
                        <td>
                            @if ($e->image)
                                <img src="{{ asset('image/employees/' . $e->image) }}" width="60" alt="Empleado">
                            @else
                                <span>Sin imagen</span>
                            @endif
                        </td>
                        <td>
                            <button> <a href={{route('employees.show', $e)}}>Detalles</a></button>
                            <button><a href= {{route('employees.edit', $e)}} >Editar</a></button>
                            <button><a href= {{route('employees.delete', $e)}} >Eliminar</a></button>
                        </td>
                    </tr>
    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- TODO Show Image -->
</table>
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
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
        <!-- Secciones importantes -->
        <div style="margin-bottom: 10px;">
            <h3 style="color: #3ce2ff;">Secciones importantes</h3>
            <nav>
                <a href={{route('index')}} style="color: #2ed5ff;">Inicio</a>
                <a href={{route('products.index')}} style="color: #2ed5ff;">Productos</a>
                <a href={{route('clients.index')}} style="color: #2ed5ff;">Clientes</a>
                <a href={{route('sales.index')}} style="color: #2ed5ff;">Ventas</a>
                <a href={{route('employees.index')}} style="color: #2ed5ff;">Empleados</a>
            </nav>
        </div>
  
        <!-- Redes sociales -->
        <div style="margin-bottom: 10px;">
            <h3 style="color: #3ce2ff;">Redes sociales</h3>
            <p>¡Síguenos para promociones y novedades!</p>
            <a href="" style="color: #fff; margin-right: 10px;">Facebook</a>
            <a href="" style="color: #fff; margin-right: 10px;">Instagram</a>
            <a href="" style="color: #fff;">Twitter</a>
        </div>
  
        <!-- Derechos reservados -->
        <div style="margin-top: 10px; border-top: 1px solid #444; padding-top: 10px;">
            <p>© 2025 Electromania. Todos los derechos reservados.</p>
            <p>Creado con ❤️ por Electromania.</p>
        </div>
    </div>
  </footer>
  