<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          //
          $categories = Categories::paginate();
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
        //
        $data=$request->all();
        Categories::create($data);
        return to_route('categories.index')->with ('nombre_categoria');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
        return view('admin/categories/show',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
        echo view('admin/categories/edit',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        //
        $data=$request->all();//Pasamos todos los datos
        $categories->update($data); //Actualizamos los datos en la base de datos
        return to_route('categories.index')->with ('name_category','nombre de categoria Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
        $categories->delete();
        return to_route('categories.index')->with('name_categoria','categoria Eliminada');

    }
}
