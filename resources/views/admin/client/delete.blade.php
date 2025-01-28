@extends('layout.main_template')
@section('content')
<style>
/* Contenedor principal */
.delete-container {
    max-width: 600px;
    margin: 3rem auto;
    padding: 2rem;
    background: #9afffa;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-family: 'Poppins', sans-serif;
    animation: fadeIn 1s ease-in-out;
}

/* Título */
.delete-container .title {
    font-size: 2rem;
    font-weight: bold;
    color: #d90429; /* Rojo elegante */
    margin-bottom: 1.5rem;
}

/* Alerta de Confirmación */
.alert-box {
    background: #e1ff9a;
    padding: 1.5rem;
    border-radius: 10px;
    margin-bottom: 2rem;
    box-shadow: 0 4px 10px rgba(255, 0, 0, 0.1);
    position: relative;
    animation: slideIn 0.8s ease-out;
}

.alert-box p {
    font-size: 1.2rem;
    color: #e63946; /* Rojo oscuro */
    margin: 0;
}

.icon-warning {
    font-size: 3rem;
    color: #ff5733; /* Naranja cálido */
    margin-bottom: 0.5rem;
    animation: bounce 1.5s infinite;
}

/* Botones */
.button-container {
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.btn {
    padding: 0.8rem 2rem;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
}

/* Botón Cancelar */
.cancel-btn {
    background: #6c757d; /* Gris */
    color: #ffffff;
    border: none;
}

.cancel-btn:hover {
    background: #5a6268;
}

/* Botón Eliminar */
.delete-btn {
    background: #e63946; /* Rojo */
    color: #ffffff;
    border: none;
}

.delete-btn:hover {
    background: #c82333;
}

/* Animaciones */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes slideIn {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-5px);
    }
}
</style>
<div class="delete-container">
    <!-- Título -->
    <h1 class="title">Eliminar Cliente</h1>

    <!-- Alerta de Confirmación -->
    <div class="alert-box">
        <i class="icon-warning"></i>
        <p>
            ¿Estás seguro de  eliminar al cliente de nombre <strong>{{ $client->name_cli }}</strong>? <br>
            Esta acción no se podra deshacer despues.
        </p>
    </div>

    <!-- Botones de Acción -->
    <div class="button-container">
        <form action="{{ route('clients.index') }}" method="GET">
            <button type="submit" class="btn cancel-btn">No, Volver</button>
        </form>
        <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn delete-btn">Sí, Eliminar</button>
        </form>
    </div>
</div>

@endsection
