<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Requests\Categories\StoreRequest;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          //
          $categories = Categories::paginate(20);
          return view('admin/categories/index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin/categories/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_categorie' => "required|string|min:3|max:50|",
          'description' => "required|string|min:3|max:50|",
          'image' => "required|filled",
            
        ]);
        $data=$request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('image/categories'), $filename); // Guardar la imagen en 'image/categories'
            $data['image'] = $filename;
        }
        Categories::create($data);
        return to_route('categories.index')->with ('status','categoria Registrado');
        
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $categories = Categories::findOrFail($id);

        // Enviar la categoría a la vista
        return view('admin.categories.show', compact('categories'));  
      }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encuentra una categoría específica
        $categories = Categories::findOrFail($id); 
    
        // Envía el registro único a la vista
        return view('admin.categories.edit', compact('categories'));

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Buscar el producto por ID
        $categories = Categories::findOrFail($id);
    
        // Validar los datos del formulario
        $request->validate([
            'name_categorie' => "required|string|min:3|max:50|",
            'description' => "required|string|min:3|max:50|",
            'image' => "required|filled",
        ]);
    
        // Obtener todos los datos del formulario
        $data = $request->all();
    
        // Manejar la imagen, si se sube una nueva
        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($categories->image && file_exists(public_path('image/categories/' . $categories->image))) {
                unlink(public_path('image/categories/' . $categories->image));
            }
    
            // Guardar la nueva imagen
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('image/categories'), $filename);
            $data['image'] = $filename; // Actualizar el nombre de la imagen en los datos
        } else {
            // Mantener la imagen actual si no se sube una nueva
            $data['image'] = $categories->image;
        }
    
        // Actualizar los datos del producto
        $categories->update($data);
    
        // Redirigir con mensaje de éxito
        return to_route('categories.index')->with('status', 'categoria actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function delete( $name_categorie){
        $categories= Categories::findOrFail($name_categorie);

        echo view('admin.categories.delete',compact('categories'));
    }

    public function destroy($name_categorie )
    {
        //
        $category = Categories::findOrFail($name_categorie);
        $category->delete();
    
        return redirect()->route('categories.index')->with('status', 'Categoría eliminada');
    
    }
}
