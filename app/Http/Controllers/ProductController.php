<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Requests\Products\StoreRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
          $products = Products::with('categories')->paginate(20);  // Eager loading de categorías
    return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {      
        $categories = Categories::pluck('name_categorie', 'id');
        return view('admin/products/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request)
    {
    $request->validate([
        'entry_date' => "required|date",
        'name_pd' => "required|string|min:3|max:50",
        'description_pd' => "required|string|min:3|max:50",
        'price' => "required|decimal:2",
        'categorie' => "required|exists:categories,id",  // Validar el ID de la categoría
        'stock' => "required|integer",
        'image' => "required|filled"
    ]);

    // Obtener los datos del formulario
    $data = $request->all();

    // Buscar la categoría por ID directamente
    $categorie = Categories::find($data['categorie']);  // Buscar por el ID de la categoría

    // Verificar si se encontró la categoría
    if (!$categorie) {
        return redirect()->back()->withErrors(['categorie' => 'Categoría no válida'])->withInput();
    }

    // Procesar la imagen si se cargó
    if (isset($data["image"])) {
        $data["image"] = $filename = time() . "." . $data["image"]->extension();
        $request->image->move(public_path("image/products"), $filename);
    }

    // Crear el producto con los datos validados
    Products::create($data);

    // Redirigir con mensaje de éxito
    return redirect()->route('products.index')->with('status', 'Producto registrado');
}
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = Products::find($id); // Asegúrate de que el producto exista
        if (!$products) {
            return redirect()->route('products.index')->with('error', 'Producto no encontrado');
        }
        return view('admin.products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
        
        $categories = Categories::pluck('name_categorie', 'id');
        return view('admin.products.edit', compact('products', 'categories')); }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id,$name_categorie)
    {
        
            // Buscar el producto por ID
            $product = Products::findOrFail($id);
        
            // Validar los datos del formulario
    
            $request->validate([
    'entry_date' => "required|date",
    'name_pd' => "required|string|min:3|max:50",
    'description_pd' => "required|string|min:3|max:50",
    'price' => "required|decimal:2",
    'categorie' => "required|exists:categories,id",  // Corregido
    'stock' => "required|integer",
    'image' => "required|filled"
]);

            $data = $request->all();
        
            if ($request->hasFile('image')) {
                if ($product->image && file_exists(public_path('image/categories/' . $product->image))) {
                    unlink(public_path('image/categories/' . $product->image));
                }
        
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('image/categories'), $filename);
                $data['image'] = $filename; // Actualizar el nombre de la imagen en los datos
            } else {
                $data['image'] = $product->image;
            }
        
            // Actualizar los datos del producto
            $product->update($data);
                    return to_route('products.index')->with('status', 'Producto actualizado correctamente');
        
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(Products $products){
        echo view('admin/products/delete',compact('products'));
    }
    
    public function destroy(Products $products)
    {
        $products->delete();
        return to_route('products.index')->with('status','Producto Eliminado');
    }
}
