<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use App\Http\Requests\Sales\StoreRequest;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::paginate(35);
        return view('admin.sales.index', compact('sales'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'product_id' => "required|integer",
        'name_pd' => "required|string|min:3|max:100",
        'categorie_id' => "required|integer",
        'client_id' => "required|integer",
        'employee_id' => "required|integer",
        'sale_date' => "required|date",
    ]);

    // Obtener todos los datos
    $data = $request->all();

    // Crear venta
    Sales::create($data);

    return redirect()->route('sales.index')->with('status', 'Venta registrada correctamente');
}


    /**
     * Display the specified resource.
     */
    public function show(Sales $sales)
    {
        return view('admin.sales.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
