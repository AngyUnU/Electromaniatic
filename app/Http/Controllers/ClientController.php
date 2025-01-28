<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Sales;
use Illuminate\Http\Request;
use App\Http\Requests\Client\StoreRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $client = Client::paginate(30);
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
    $data = $request->validate([
        'name_cli' => "required|string|min:3|max:150",
        'surnames' => "required|string|min:3|max:150",
        'tel' => "required|integer|min:10",
        'image' => "required|filled"
    ]);

    // Procesar la imagen
    $data=$request->all();
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('image/client'), $filename); // Guardar la imagen en 'image/categories'
        $data['image'] = $filename;
    }

    // Crear el cliente con los datos validados
    Client::create($data);

    return to_route('clients.index')->with('status', 'Cliente registrado');
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
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.client.edit', compact('client'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $data = $request->validate([
            'name_cli' => "required|string|min:3|max:50",
            'surnames' => "required|string|min:3|max:50",
            'tel' => "required|min:10",
            'image' => "required|filled"
        ]);
    
  // Buscar el cliente por ID
  $client = Client::findOrFail($id);

  // Actualizar los datos del cliente
  $client->name_cli = $request->name_cli;
  $client->surnames = $request->surnames;
  $client->tel = $request->tel;

  // Si se sube una nueva imagen
  if ($request->hasFile('image')) {
      // Eliminar la imagen antigua si existe
      if ($client->image) {
          $imagePath = public_path('image/client/'.$client->image);
          if (file_exists($imagePath)) {
              unlink($imagePath); // Eliminar la imagen
          }
      }

      // Guardar la nueva imagen
      $imageName = time().'.'.$request->image->extension();
      $request->image->move(public_path('image/client'), $imageName);
      $client->image = $imageName;
  }

  // Guardar los cambios
  $client->save();

  // Redirigir con un mensaje de éxito
  return redirect()->route('clients.index')->with('success', 'Cliente actualizado exitosamente');
}
    /**
     * Remove the specified resource from storage.
     */
    public function delete( $name_cli){
        $client= Client::findOrFail($name_cli);

        echo view('admin.client.delete',compact('client'));
   }
    
    public function destroy( $name_cli)
        {
            //
            $client = Client::findOrFail($name_cli);
            $client->delete();
        
            return redirect()->route('clients.index')->with('status', 'Cliente eliminada');
        
        }

    }