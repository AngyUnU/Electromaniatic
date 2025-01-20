<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Products::get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands=products::pluck('id','name_pd');
        return view('Admin/products/create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        Products::create($request->all());
        return to_route('products.index')-> with ('status', 'producto registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
        return view('Admin/products/show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
        $products ::pluck('id','brand');
        echo view('Admin/products/edit', compact('namme_pd','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        //
        $products->update($request->all());
        return to_route('products.index')-> with ('status', 'producto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
        $products->delete();
        return to_route('products.index')-> with('status', 'Producto Eliminado');
    }
}
