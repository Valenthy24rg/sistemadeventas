<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Ciudad;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        return view('clients', [
            'clients' => Cliente::paginate()
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'require|max:255',
            'cedula' => 'require|max:255',
            'telefono' => 'require|max:255',
            'direccion' => 'require|max:255',
            'ciudad_id' => 'require|integer',
            'products_id' => 'require|integer'
        ]);

        Clientes::create($data);

        return back()->with('message', 'Cliente created successfully');
    }

    public function edit(Clientes $clients)
    {
        return view('clients.edit', compact('clients'));
    }

    public function update($clients, Request $request)
    {
        $data = $request->validate([
            'nombre' => 'require|max:255',
            'cedula' => 'require|max:255',
            'telefono' => 'require|max:255',
            'direccion' => 'require|max:255',
            'ciudad_id' => 'require|integer',
            'products_id' => 'require|integer'
        ]);

        $clients->update($data);

        return back()->with('message', 'Cliente updated.');
    }

    public function destroy(Clientes $clients)
    {
        $clients->delete();

        return back()->with('message', 'Category deleted.');
    }
}
