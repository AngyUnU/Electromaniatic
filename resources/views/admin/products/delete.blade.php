@extends('layout.main_template')
@section('content')

<h1 id="titulo">Eliminar Producto</h1>
<div class="delete-confirmation">
    <h3>¿Estás seguro de que quieres eliminar el producto <strong>{{ $products->name_pd }}</strong>?</h3>

    <div class="buttons">
        <form action="{{ route('products.index') }}" method="GET">
            <button type="submit" class="btn btn-cancel">No</button>
        </form>
        <form action="{{ route('products.destroy', $products->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-confirm">Sí</button>
        </form>
    </div>
</div>

@endsection

<style>


    /* Título de la página */
    #titulo {
        font-size: 2rem;
        color: #333;
    }

    /* Caja de mensaje */
    .alert {
        background-color: #102cf982;
        border-color: #93e0f7;
        padding: 30px;
        font-size: 1.25rem;
        border-radius: 8px;
    }

    /* Botones */
    .btn {
        width: 200px;
        height: 50px;
        font-size: 1.2rem;
        font-weight: bold;
        border-radius: 25px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    /* Botón de "No" (Volver) */
    .btn-secondary {
        background-color: #6c757d;
        border-color: #5a6268;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #4e555b;
    }

    /* Botón de "Sí" (Eliminar) */
    .btn-danger {
        background-color: #dc3545;
        border-color: #c82333;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    /* Espaciado y alineación */
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
</style>