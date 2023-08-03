<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        return view('empleados.index', [
           'empleados' => Empleados::paginate()
        ]);
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'ciudad_id' => 'required|integer',
            'apellido' => 'required|max:255',
            'direccion' => 'required|max:255',
            'telefono' => 'required|max;255'
        ]);

        Empleados::create($data);

        return back()->with('message', 'Ciudad created successfully');
    }

    public function edit(Empleados $empleados)
    {
        return view('empleados.edit', compact('empleados'));
    }

    public function update( $empleados, Request $request )
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'ciudad_id' => 'required|integer',
            'apellido' => 'required|max:255',
            'direccion' => 'required|max:255',
            'telefono' => 'required|max;255'
        ]);

        $empleados->update($data);

        return back()->with('message, Empleados updated.');
    }

    public function destroy(Empleados $empleados)
    {
        $empleados->delete();

        return back()->with('message', 'Empleados deleted.');
    }
}
