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
        $products = Products::paginate(6);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Categories::pluck('id','name_categoria');
        return view('admin/products/create', compact('categories'));
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
        Products::create($data);
        return to_route('products.index')->with ('status','Producto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
        return view('admin/products/show', compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
        $category=Categories ::pluck('id','categories');
        echo view('admin/products/edit', compact('categories','products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        //
        $data=$request->all();//Pasamos todos los datos
        if(isset($data["image"])){//Si imagen es diferente de vacio
            //Cambiar nombre al archivo a ugardar
            //Variable de imagen  se le asiagna un nuevo nombre(el nombre del archivo.tiempo/fecha/hora. tipo(jpeg,jpg,png))
            $data["image"]=$filename=time().".".$data["image"]->extension();
            //Guardar imagen en la carpeta publica
            $request->image->move(public_path("image/products"),$filename);
        }

        $products->update($data); //Actualizamos los datos en la base de datos
        return to_route('products.index')->with ('status','Producto Actualizado');
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
