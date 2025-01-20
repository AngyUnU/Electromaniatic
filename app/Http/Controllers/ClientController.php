<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Client::paginate();
        return view('admin/client/index',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/client/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();
        Client::create($data);
        return to_route('client.index')->with ('name_client','apellidos_cli','tel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        return view('admin/client/show',compact('client'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
        echo view('admin/client/edit',compact('client'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
        $data=$request->all();//Pasamos todos los datos
        $client->update($data); //Actualizamos los datos en la base de datos
        return to_route('client.index')->with ('name_cli',' a sido Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
        return to_route('client.index')->with('name_cli','cliente Eliminado');
    }
}
