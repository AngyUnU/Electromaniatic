<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Employees;
use App\Models\Client;


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
       
        $products = Products::all();
    
        $clients = Client::all();
        $employees = Employees::all();
    
        return view('admin.sales.create', compact('products', 'clients', 'employees')); }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'product_id' => "required|integer",  // Cambiado de name_pd a product_id
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
    public function show( $id)
    {
        $sale = Sales::with('product', 'client', 'employee')->findOrFail($id);

    return view('admin.sales.show', compact('sale'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $sale = Sales::findOrFail($id);  // Busca el registro por ID
        $products = Products::all();
        $clients = Client::all();
        $employees = Employees::all();
    
        return view('admin.sales.edit', compact('sale', 'products', 'clients', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sale = Sales::findOrFail($id);

        // Validación de datos
        $data = $request->validate([
            'product_id' => "required|integer",  // Cambiado de name_pd a product_id
            'client_id' => "required|integer",
            'employee_id' => "required|integer",
            'sale_date' => "required|date",
        ]);

        // Actualizar los datos de la venta
        $sale->update($data);

        return redirect()->route('sales.index')->with('status', 'Venta actualizada correctamente');
    }
    public function delete($id)
    {
        $sale = Sales::findOrFail($id);
        return view('admin.sales.delete', compact('sale'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sale = Sales::findOrFail($id);

        // Eliminar la venta
        $sale->delete();

        return redirect()->route('sales.index')->with('status', 'Venta eliminada correctamente');
    }
}
