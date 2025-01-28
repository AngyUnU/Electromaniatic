@extends('layout.main_template')
@section('content')
<style>
    /* Contenedor principal */
.employee-details-container {
    max-width: 700px;
    margin: 2rem auto;
    padding: 2rem;
    background: linear-gradient(135deg, #c7f8ff, #f9fafb);
    border-radius: 12px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    animation: fadeIn 1s ease-in-out;
    text-align: center;
}

/* Título */
.category-details-container .title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #4b5563; /* Gris oscuro */
    margin-bottom: 1.5rem;
    text-transform: uppercase;
}

/* Detalles */
.details h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: #374151; /* Gris medio */
    margin-top: 1rem;
    margin-bottom: 0.5rem;
}

.details p {
    font-size: 1rem;
    color: #6b7280; /* Gris tenue */
}

/* Imagen */
.image-container img {
    width: 250px;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
    margin: 1.5rem 0;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.image-container img:hover {
    transform: scale(1.05);
}

/* Botones */
.button-container {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
}

.button {
    padding: 0.8rem 2rem;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: bold;
    color: #ffffff;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
}

.edit-btn {
    background-color: #3b82f6; /* Azul */
}

.edit-btn:hover {
    background-color: #2563eb; /* Azul más oscuro */
    transform: translateY(-2px);
}

.delete-btn {
    background-color: #ef4444; /* Rojo */
    border: none;
}

.delete-btn:hover {
    background-color: #dc2626; /* Rojo más oscuro */
    transform: translateY(-2px);
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

</style>
<div class="employee-details-container">
    <!-- Título -->
    <h1 class="title">Detalles del Empleado</h1>

    <!-- Detalles -->
    <div class="details">
        <h3>Nombre:</h3>
        <p>{{ $employee->name_e }}</p> <!-- Cambiado a $employee -->

        <h3>Apellidos:</h3>
        <p>{{ $employee->surnames_e }}</p> <!-- Cambiado a $employee -->

        <h3>Puesto:</h3>
        <p>{{ $employee->position }}</p> <!-- Cambiado a $employee -->

        <h3>Teléfono:</h3>
        <p>{{ $employee->tel }}</p> <!-- Cambiado a $employee -->

        <h3>Imagen:</h3>
        <div class="image-container">
            @if ($employee->image) <!-- Cambiado a $employee -->
                <img src="{{ asset('image/employees/' . $employee->image) }}" alt="Imagen del empleado">
            @else
                <p>No hay imagen disponible para este empleado.</p>
            @endif
        </div>
    </div>

    <!-- Botones -->
    <div class="button-container">
        <a href="{{ route('employees.edit', $employee->id) }}" class="button edit-btn">Editar Empleado</a> <!-- Cambiado a $employee -->
        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;"> <!-- Cambiado a $employee -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('¿Estás seguro de eliminar a este empleado?')" class="button delete-btn">
                Eliminar Empleado
            </button>
        </form>
    </div>
</div>


@endsection