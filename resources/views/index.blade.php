@extends('layout.main_template')

@section('content')


<style>
    
.cuadro{ 
        display:block;
        grid-template-columns: repeat(1,1fr);
        text-align: center;
    }
    .centrar{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 15px;
        padding-inline: 10px;
        text-justify:inter-word;
        text-align: justify;
        margin: 50px;
    }
    .textcentrar{
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }



    .contenedor{
    position: relative;
    text-align: center;
   
}
.contenedor2{
    display: grid;
        grid-template-columns: repeat(2,1fr);
        text-align: justify;
}

.texto1{
    position: absolute;
    top:50%;
    left: 30%;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-display: 50px;
    font-size: 50px;
    color:rgb(255, 255, 255);
    transform: translate(-10%, -50%);
} 
.texto2{
    position: absolute;
    top:40%;
    right: 30%;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-display: 25px;
    font-size: 25px;
    color:rgb(255, 255, 255);
    transform: translate(-20%, -30%);
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

footer h3 {
    color: #3ce2ff;
}

footer a {
    color: #ffffff;
    text-decoration: none;
}

.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: auto;
      margin: auto;
  }
</style>

<head>
    <title>Carousel/Slideshow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  </head>
  <body>
  
  <div class="container">
    <br>
    <div id="theCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicadores -->
      <ol class="carousel-indicators">
        <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#theCarousel" data-slide-to="1"></li>
        <li data-target="#theCarousel" data-slide-to="2"></li>
        <li data-target="#theCarousel" data-slide-to="3"></li>
        
      </ol>
  
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="https://img.freepik.com/fotos-premium/vista-superior-piso-aparatos-accesorios-tecnologia-moderna_14117-706712.jpg" alt="Ilustracion" > 
           <div class="carousel-caption d-none d-md-block">
      <h1>ELECTROMANIA</h1>
      <p>TIENDA FUTURISTA</p>
    </div>
        </div>
  
       
      
        <div class="item">
          <img src="https://img.freepik.com/fotos-premium/capa-plana-varios-aparatos-tecnologicos-accesorios-fondo-azul-oscuro_14117-687501.jpg" alt="fotografia" width="aut" height="500"> 
           <div class="carousel-caption d-none d-md-block">
      <h1> ELECTROMANIA</h1>
      <p>El futuro en tus manos</p>
    </div>
        </div>
  
       <div class="item">
          <img src="https://img.freepik.com/fotos-premium/lugar-trabajo-computadora-portatil-telefono-inteligente-sobre-fondo-espacio-copia-vista-superior-mesa-negra_839035-90302.jpg" alt="pintura" width="aut" height="500">
           <div class="carousel-caption d-none d-md-block">
            <h1> ELECTROMANIA</h1>
            <p>Lo novedoso a tu dispocision</p>
    </div>
        </div>
         <div class="item">
          <img src="https://img.freepik.com/fotos-premium/lugar-trabajo-computadora-portatil-telefono-inteligente-sobre-fondo-espacio-copia-vista-superior-mesa-negra_839035-61880.jpg" alt="diseno" width="aut" height="500"> 
           <div class="carousel-caption d-none d-md-block">
            <h1> ELECTROMANIA</h1>
            <p>No te quedes en el pasado</p>
    </div>
        </div>
  
  
      <a class="left carousel-control" href="#theCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">anterior</span>
      </a>
      <a class="right carousel-control" href="#theCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">siguiente</span>
      </a>
    </div>


 

    <h1 class="textcentrar">¡Bienvenidos a Electronimania!</h1>
  
  <div class="centrar">  En Electromanía, la tecnología está al alcance de todos. 
    En esta era digital, nuestra vida depende de los aparatos electrónicos para trabajar, 
    entretenernos y mantenernos conectados. Si estás buscando el lugar ideal para adquirir
    lo último en tecnología, Electromanía es tu mejor opción.

    <p>Beneficios de comprar en Electromanía
Al elegirnos como tu tienda de confianza, disfrutarás de una serie de ventajas</p>

<p>Promociones únicas: Encuentra descuentos exclusivos en productos electrónicos que se ajustan a tu presupuesto.
Garantías confiables: Protege tu inversión con nuestras garantías en cada producto.
Tienda online: Explora nuestro catálogo desde la comodidad de tu hogar y realiza compras rápidas y seguras.
Créditos flexibles: Si lo necesitas, contamos con opciones de financiamiento para que nada te detenga al adquirir tus dispositivos favoritos.
Variedad en productos tecnológicos</p>

En Electromanía, la diversidad es clave. Nuestro catálogo incluye categorías como:
<ul>
<li>Audio: Audífonos, bocinas y sistemas de sonido.</li>
<li> Pantallas con la última tecnología en resolución.</li>
<li>Teléfonos móviles: Amplia selección de marcas y accesorios.</li>
<li> conexiones: Todo lo que necesitas para tu hogar u oficina.</li>
</ul>
<p>
   
      </div>
      <div class="contenedor">
        <img src="https://img.freepik.com/fotos-premium/capa-plana-aparatos-tecnologicos-modernos-sobre-fondo-negro_1022970-54288.jpg?w=1060" height="500px" width="auto" object-fit: cover;> 
           <div class="texto1">ELECTROMANIA</div>
           <div class="texto2">LO MAS NOVEDOSO CERCA DE TI EN</div>
           </div>
       
      </body>
  </div>  
      <div class="centrar">
        Con Electromania,le ofrecemos:

Innovación: Productos electrónicos de última generación para mejorar tu día a día.
Calidad garantizada: Trabajamos con marcas reconocidas y aseguramos que cada artículo cumpla con los más altos estándares.
Variedad: Desde teléfonos, computadoras y accesorios, hasta los gadgets más novedosos.
¿Buscas algo en específico? ¡Lo tenemos o lo conseguimos para ti!
Descubre nuestras ofertas, explora nuestra colección y encuentra exactamente lo que necesitas con la confianza de contar con nuestro soporte especializado.


<br>
<br>



    
</div>
</div>
<marquee scrollamount="15"><img src="https://tm.ibxk.com.br/2022/08/28/28085613743000.jpg?ims=750x" height="150px"> <img src="https://www.profesionalreview.com/wp-content/uploads/2019/09/Apple-Watch-Series-5-3.jpg" height="150">
  <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhWnKmsdwla-qrmToJBqSst7TwzkxyYzRo8QCl_iVHpMgeJgrYDomglL0CsFyiU1gXK_jGD7c-SPaK6IiVGsvIvHPLhyphenhyphenrVENNxqiuSefNQGElyJXhRL-xvtAu41wB923eUu8R0ewT39ej-h/s1600/samsung-galaxy-camara-640x3.jpg" height="150">
  <img src="" height="150px"></marquee>

  <b>
    <br>
  </b>
<footer style="background: #33465a; color: #fff; padding: 20px 0; text-align: center;">
  <div style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
    <!-- Secciones importantes -->
    <div style="margin-bottom: 20px;">
      <h3>Secciones importantes</h3>
      <nav>
          <a href={{route('index')}} style="color: #55ddff";>Inicio</a>
          <a href={{route('products.index')}} style="color: #2ed5ff">Productos</a>
          <a href={{route('clients.index')}} style="color: #2ed5ff">Clientes</a>
          <a href={{route('sales.index')}} style="color: #2ed5ff">Ventas</a>
          <a href={{route('employees.index')}} style="color: #2ed5ff">Empleados</a>
      </nav>
    </div>


    <div style="margin-bottom: 20px;">
      <h3>Redes sociales</h3>
      <p>¡Síguenos para promociones y novedades!</p>
      <a href="" style="color: #ffff ">Facebook</a>
      <a href="" style="color: #fff">Instagram</a>
      <a href="" style="color: #fff">Twitter</a>
    </div>


    <div style="margin-top: 20px; border-top: 1px solid #444; padding-top: 10px;">
      <p>© 2025 Electromania. Todos los derechos reservados.</p>
      <p>Creado con ❤️ por Electromania.</p>
    </div>
  </div>
</footer>
@endsection