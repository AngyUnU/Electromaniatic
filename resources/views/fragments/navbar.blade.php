<style>
    body {
        margin: 0;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    header {
        background: #212d3a;
        padding-block: 4px;
        margin-block: -2px;
        margin-inline: -10px;
        position: fixed;
        top: 0;
            width: 100%;
            z-index: 1000
    }

    nav p {
        font-size: 20px;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        text-align: center;
        margin: 0;
        padding-inline: 10px;
    }

    nav p a {
        text-decoration: none;
        padding-block: 10px;
        padding-inline: 10px;
        color: rgb(77, 234, 255);
        margin-inline: -4px;
        transition: background 0.3s ease, padding 0.3s ease;
    }

    nav p a:hover {
        background: #3d536b;
        padding-block: 10px;
    }

  
   
    
</style>
<header>
<nav>

        <p>
            <a href={{route('index')}}>Inicio</a>
            <a href={{route('products.index')}}>Productos</a>
            <a href={{route('clients.index')}}>Clientes</a>
            <a href={{route('sales.index')}}>Ventas</a>
            <a href={{route('employees.index')}}>Empleados</a>
        </p>
    </nav>
</header>
</div>
<br>
<br>