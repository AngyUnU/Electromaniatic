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
    background-color: #0a1d2b;
    color: white;
    padding: 40px 0;
    width: 100%;
    margin-top: 50px;
}

footer h3 {
    color: #4dc3f1;
    font-size: 1.7rem;
    margin-bottom: 20px;
    font-weight: 600;
}

footer .footer-link {
    color: #c0e5f1;
    text-decoration: none;
    display: block;
    margin: 10px 0;
    font-size: 1.1rem;
    transition: color 0.3s ease, transform 0.3s ease;
}

footer .footer-link:hover {
    color: #4dc3f1;
    transform: translateX(10px); /* Desplazamiento suave a la derecha */
}

footer .social-icon {
    color: #fff;
    font-size: 1.6rem;
    margin: 10px;
    text-decoration: none;
    transition: transform 0.3s ease, color 0.3s ease;
}

footer .social-icon:hover {
    color: #4dc3f1;
    transform: translateY(-5px); /* Efecto de rebote (sube ligeramente) */
}

footer .social-media {
    display: flex;
    justify-content: center;
}

footer p {
    color: #c0e5f1;
    font-size: 1rem;
}

footer .footer-bottom {
    border-top: 1px solid #444;
    padding-top: 20px;
    font-size: 0.9rem;
}

/* Transición de aparición de enlaces */
footer .footer-link {
    opacity: 0;
    animation: fadeIn 1s forwards;
}

footer .footer-link:nth-child(1) {
    animation-delay: 0.2s;
}

footer .footer-link:nth-child(2) {
    animation-delay: 0.4s;
}

footer .footer-link:nth-child(3) {
    animation-delay: 0.6s;
}

footer .footer-link:nth-child(4) {
    animation-delay: 0.8s;
}

footer .footer-link:nth-child(5) {
    animation-delay: 1s;
}

/* Animación de aparición */
@keyframes fadeIn {
    to {
        opacity: 1;
    }
}
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: auto;
      margin: auto;
  }


  section{
    display: flex;
    justify-content: center;
    width: 100%;
}
.container
{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  padding: 40px 0;
}

.container .box
{
  position: relative;
  width: 320px;
  height: 400px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 40px 30px;
  transition: 0.5s;
}

.container .box::before
{
  content:' ';
  position: absolute;
  top: 0;
  left: 50px;
  width: 50%;
  height: 100%;
  text-decoration: none;
  background: #fff;
  border-radius: 8px;
  transform: skewX(15deg);
  transition: 0.5s;
}

.container .box::after
{
  content:'';
  position: absolute;
  top: 0;
  left: 50;
  width: 50%;
  height: 100%;
  background: #fff;
  border-radius: 8px;
  transform: skewX(15deg);
  transition: 0.5s;
  filter: blur(30px);
}

.container .box:hover:before,
.container .box:hover:after
{
  transform: skewX(0deg);
  left: 20px;
  width: calc(100% - 90px);
  
}

.container .box:nth-child(1):before,
.container .box:nth-child(1):after
{
  background: linear-gradient(315deg, #ffbc00, #ff0058)
}

.container .box:nth-child(2):before,
.container .box:nth-child(2):after
{
  background: linear-gradient(315deg, #03a9f4, #ff0058)
}

.container .box:nth-child(3):before,
.container .box:nth-child(3):after
{
  background: linear-gradient(315deg, #4dff03, #00d0ff)
}

.container .box span
{
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 5;
  pointer-events: none;
}

.container .box span::before
{
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 0;
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  opacity: 0;
  transition: 0.1s;  
  animation: animate 2s ease-in-out infinite;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08)
}

.container .box:hover span::before
{
  top: -50px;
  left: 50px;
  width: 100px;
  height: 100px;
  opacity: 1;
}

.container .box span::after
{
  content:'';
  position: absolute;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  opacity: 0;
  transition: 0.5s;
  animation: animate 2s ease-in-out infinite;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
  animation-delay: -1s;
}

.container .box:hover span:after
{
  bottom: -50px;
  right: 50px;
  width: 100px;
  height: 100px;
  opacity: 1;
}

@keyframes animate
{
  0%, 100%
  {
    transform: translateY(10px);
  }
  
  50%
  {
    transform: translate(-10px);
  }
}

.container .box .content
{
  position: relative;
  left: 0;
  padding: 20px 40px;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  z-index: 1;
  transform: 0.5s;
  color: #fff;
}

.container .box:hover .content
{
  left: -25px;
  padding: 60px 40px;
}

.container .box .content h2
{
  font-size: 2em;
  color: #fff;
  margin-bottom: 10px;
}

.container .box .content p
{
  font-size: 1.1em;
  margin-bottom: 10px;
  line-height: 1.4em;
}

.container .box .content a
{
  display: inline-block;
  font-size: 1.1em;
  color: #111;
  background: #fff;
  padding: 10px;
  border-radius: 4px;
  text-decoration: none;
  font-weight: 700;
  margin-top: 5px;
}

.container .box .content a:hover
{
  background: #ffcf4d;
  border: 1px solid rgba(255, 0, 88, 0.4);
  box-shadow: 0 1px 15px rgba(1, 1, 1, 0.2);
}
</style>

<head>
    <title>Electromania</title>
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
          <img src="https://img.freepik.com/premium-photo/flat-lay-electronic-devices-blue-background-including-laptops-headphones-cameras-phones_14117-698252.jpg" alt="30%" width="auto"> 
           <div class="carousel-caption d-none d-md-block">
      <h1>ELECTROMANIA</h1>
      <p>TIENDA FUTURISTA</p>
    </div>
        </div>
  
       
      
        <div class="item">
          <img src="https://img.freepik.com/fotos-premium/capa-plana-varios-aparatos-tecnologicos-accesorios-fondo-azul-oscuro_14117-687501.jpg" alt="30%" width="auto"> 
           <div class="carousel-caption d-none d-md-block">
      <h1> ELECTROMANIA</h1>
      <p>El futuro en tus manos</p>
    </div>
        </div>
  
       <div class="item">
          <img src="https://img.freepik.com/fotos-premium/lugar-trabajo-computadora-portatil-telefono-inteligente-sobre-fondo-espacio-copia-vista-superior-mesa-negra_839035-90302.jpg" alt="30%" width="auto">
           <div class="carousel-caption d-none d-md-block">
            <h1> ELECTROMANIA</h1>
            <p>Lo novedoso a tu dispocision</p>
    </div>
        </div>
         <div class="item">
          <img src="https://img.freepik.com/fotos-premium/lugar-trabajo-computadora-portatil-telefono-inteligente-sobre-fondo-espacio-copia-vista-superior-mesa-negra_839035-61880.jpg" alt="30%" width="auto"> 
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
 <div class="cards">
    <div class="container">
      <div class="box">
        <span></span>
        <div class="content">
          <h2>Misión</h2>
          <p>Brindar a nuestros clientes acceso a los mejores productos electrónicos, combinando innovación, calidad y precios accesibles, para mejorar su vida cotidiana a través de la tecnología<p>
        
        </div>
      </div>
      <div class="box">
        <span></span>
        <div class="content">
          <h2>Visión</h2>
          <p>Ser la plataforma líder en electrónicos, reconocida por ofrecer soluciones tecnológicas que impulsen la transformación digital en hogares, empresas y comunidades, promoviendo la sostenibilidad y el desarrollo tecnológico..</p>
        </div>
      </div>
      <div class="box">
        <span></span>
        <div class="content">
          <h2>Objetivos</h2>
          <ul>
            <li>Ofrecer productos de alta calidad.</li>
            <li>Facilitar la experiencia de compra.</li>
            <li>Promover la tecnología sostenible.</li>
            <li>Brindar soporte al cliente.</li>
            <li>Fomentar la educación tecnológica.</li>
          </ul>
        </div>
      </div>
    </div>
 </div>
 <br>
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


@endsection