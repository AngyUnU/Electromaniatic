<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Http\Requests\Employees\StoreRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $employees = Employees::paginate(35);
        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/employees/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            // Validación de datos
            $request->validate([
                'name_e' => "required|string|min:3|max:50",
                'surnames_e' => "required|string|max:50",
                'position' => "required|string|min:3|max:50",
                'tel' => "required|integer|digits:10",
                'image' => "required|file|image|max:1024",
            ]);
        
            // Obtener todos los datos
            $data = $request->all();
        
            // Procesar imagen si se sube
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('image/employees'), $filename);
                $data['image'] = $filename;
            }
        
            // Crear empleado
            Employees::create($data);
        
            return redirect()->route('employees.index')->with('status', 'Empleado registrado correctamente');
        }
        
    /**
     * Display the specified resource.
     */
    public function show(Employees $employee)
    {
    return view('admin.employees.show', compact('employee')); // Actualizar variable para la vista

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employees::findOrFail($id);
        return view('admin.employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employees::findOrFail($id);

        // Validación de datos
        $data = $request->validate([
            'name_e' => 'required|string|min:3|max:50',
            'surnames_e' => 'required|string|min:3|max:50',
            'position' => 'required|string|max:50',
            'tel' => 'required|integer|min:10',
            'image' => 'nullable|filled', // Imagen es opcional
        ]);
// Obtener todos los datos del formulario
$data = $request->all();
    
// Manejar la imagen, si se sube una nueva
if ($request->hasFile('image')) {
    // Eliminar la imagen anterior si existe
    if ($employee->image && file_exists(public_path('image/employees/' . $employee->image))) {
        unlink(public_path('image/employees/' . $employee->image));
    }

    // Guardar la nueva imagen
    $file = $request->file('image');
    $filename = time() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('image/employees'), $filename);
    $data['image'] = $filename; // Actualizar el nombre de la imagen en los datos
} else {
    // Mantener la imagen actual si no se sube una nueva
    $data['image'] = $employee->image;
}

// Actualizar los datos del producto
$employee->update($data);

// Redirigir con mensaje de éxito
return to_route('employees.index')->with('status', 'employees actualizada correctamente');
}

    /**
     * Remove the specified resource from storage.
     */ public function delete( $name_e){
        $employee= Employees::findOrFail($name_e);

        echo view('admin.employees.delete',compact('employee'));
   }
    public function destroy($id)
    {   $employee = Employees::findOrFail($id);

        // Eliminar la imagen si existe
        if ($employee->image) {
            $imagePath = public_path('image/employees/' . $employee->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    
        // Eliminar el empleado
        $employee->delete();
    
        return redirect()->route('employees.index')->with('status', 'Empleado eliminado correctamente');
    } 

}
