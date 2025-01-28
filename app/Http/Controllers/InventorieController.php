<?php

namespace App\Http\Controllers;


use App\Models\Inventories;
use Illuminate\Http\Request;
use App\Http\Requests\Inventories\StoreRequest;

class InventorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { $inventories = Inventories::paginate();
        return view('admin/Inventories/index',compact('Inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/Inventories/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();
        Inventories::create($data);
        return to_route('Inventories.index')->with ('stock');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventories $inventories)
    {
        //
        return view('admin/Inventories/show',compact('Inventories'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventories $inventories)
    {
        //
        echo view('admin/Inventories/edit',compact('address'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventories $inventories)
    {
        //
        $data=$request->all();//Pasamos todos los datos
        $inventories->update($data); //Actualizamos los datos en la base de datos
        return to_route('Inventories.index')->with ('stock','invenario Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventories $inventories)
    {
        //
        $inventories->delete();
        return to_route('Inventories.index')->with('id','inventario Eliminada');

    }
}
