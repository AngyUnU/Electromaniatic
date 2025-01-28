@extends('layout.main_template')
@section('content')

<style>
    /* Estilos generales */
    .product-details-container {
        max-width: 700px;
        margin: 2rem auto;
        padding: 2rem;
        background: linear-gradient(135deg, #9ceefa, #f9fafb);
        border-radius: 12px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1s ease-in-out;
        text-align: center;
    }

    .product-details-container h1 {
        font-size: 2.00rem;
        font-weight: bold;
        color: #4b5563;
        margin-bottom: 1.5rem;
    }

    .product-details-container h3 {
        font-size: 1.0rem;
        font-weight: 600;
        color: #374151;
        margin-top: 1rem;
    }

    .product-details-container p {
        font-size: 1rem;
        color: #6b7280;
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

    /* Animaciones */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 2;
            transform: scale(1);
        }
    }

</style>

<div class="product-details-container">
    
    <h1>Detalles del Producto</h1>

    <!-- Detalles del producto -->
    <div class="details">
        <h3>Id:</h3>
        <p>{{ $products->id }}</p>

        <h3>Producto:</h3>
        <p>{{ $products->name_pd }}</p>

        <h3>Categoría:</h3>
        <p>{{ $products->categorie }}</p>

        <h3>Fecha de Ingreso:</h3>
        <p>{{ $products->entry_date }}</p>

        <h3>Cantidad:</h3>
        <p>{{ $products->stock }}</p>

        <h3>Descripción:</h3>
        <p>{{ $products->description_pd }}</p>

        <h3>Precio:</h3>
        <p>${{ number_format($products->price, 2) }}</p>

        <h3>Imagen:</h3>
        <div class="image-container">
            @if ($products->image)
                <img src="{{ asset('image/products/' . $products->image) }}" alt="Imagen del producto">
            @else
                <p>No hay imagen disponible para este producto.</p>
            @endif
        </div>
    </div>
</div>

@endsection
