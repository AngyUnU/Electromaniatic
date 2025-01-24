<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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
          $categories = Categories::paginate(5);
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
        if(isset($data["image"])){
            $data["image"]=$filename=time().".".$data["image"]->extension();
            $request->image->move(public_path("image/products"),$filename);
        }
        Categories::create($data);
        return to_route('categories.index')->with ('status','categoria Registrada');
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
        $categories=Categories ::pluck('id','categories');
        echo view('admin/categories/edit', compact('categories','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        $data=$request->all();
        if(isset($data["image"])){
            $data["image"]=$filename=time().".".$data["image"]->extension();
            $request->image->move(public_path("image/products"),$filename);
        }

        $categories->update($data);
        return to_route('categories.index')->with ('status','Categoria Actualizado');
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
