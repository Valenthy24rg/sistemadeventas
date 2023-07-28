<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        return view('departamento.index', [
            'departamento' => Departamento::paginate()
        ]);
    }

    public function create()
    {
        return view('departamento.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);

        Departamento::create($data);

        return back()->with('message', 'Departamento created successfully');
    }
    public function edit(Departamento $departamento)
    {
        return view('departamento.edit', compact('departamento'));
    }

    public function update( $departamento, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);

        $departamento->update($data);

        return back()->with('message', 'Departamento updated.');
    }

    public function destroy(Departamento $departamento)
    {
        $departamento->delete();

        return back()->with('message', 'Departamento deleted.');
    }
}
