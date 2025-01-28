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
<br>
<br>
<div class="topcentral">
<h2>¡MIRA NUESTROS PRODUCTOS!</h2>
<br>

<marquee scrollamount="15"><img src="https://tm.ibxk.com.br/2022/08/28/28085613743000.jpg?ims=750x"
     height="150px"> <img src="https://www.profesionalreview.com/wp-content/uploads/2019/09/Apple-Watch-Series-5-3.jpg" height="150">
<img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhWnKmsdwla-qrmToJBqSst7TwzkxyYzRo8QC
l_iVHpMgeJgrYDomglL0CsFyiU1gXK_jGD7c-SPaK6IiVGsvIvHPLhyphenhyphenrVENNxqiuSefNQGElyJXhRL-xvtAu41wB923eUu8R0ew
T39ej-h/s1600/samsung-galaxy-camara-640x3.jpg" height="150">
<img src="" height="150px">
</marquee>
<br>
<br>

<button><a href="{{route('products.create')}}">Crear Producto</a></button>
<button><a href="{{route('categories.create')}}">Crear Categorias</a></button>
<button><a href="{{route('categories.index')}}">Ver Categorias</a></button>
<br>
</div>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="tbl_container">
        <div class="colore">
        <h2>Productos en Venta</h2>
    </div>
<table class="tbl">
    <h3> Disponibles</h3>
    <th>Id</th>
    <th>Fecha Ingreso</th>
    <th>Nombre Producto</th>
    <th>Descripcion</th>
    <th>Precio Unitario</th>
    <th>Categoria </th>
    <th>Stock</th>
    <th>Imagen</th>
    <th> Acciones </th>
</thead>
    <tbody>
        @foreach ($products as $p)
        <tr>
            <tr>
                <td>{{$p->id}}</td>
                <th>{{$p->entry_date}}</th>
                <td>{{$p->name_pd}}</td>
                <td>{{$p->description_pd}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->categories->categories}}</td>
                <td>{{$p->stock}}</td>
                <td>
                    @if ($p->image)
                        <img src="{{ asset('image/products/' . $p->image) }}" width="60" alt="Categoría">
                    @endif
                </td>
                <td>
         <button> <a  href={{route('products.show',$p)}}> Detalles </a></button>
         <button><a href= {{route('products.edit', $p)}} >Editar</a></button>
         <button><a href= {{route('products.delete', $p)}} >Eliminar</a></button>
                </td>
            </tr>
            
        @endforeach
    </tbody>
</table>
<br>
<br>
<br>
<br>
<br>
    </div>
</div>

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

@endsection