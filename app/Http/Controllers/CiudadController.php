<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Departamento;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function index()
    {
        return view('ciudad.index', [
            'ciudads' => Ciudad::paginate(10)
        ]);
    }

    public function create()
    {
        $departamentos = Departamento::orderBy('nombre')->get();
        return view('ciudads.create', compact('departamentos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'departamento_id' => 'required|integer',
        ]);

        Ciudad::create($data);

        return back()->with('message', 'Ciudad created successfully');
    }

    public function edit(Ciudad $ciudad)
    {
        $departamentos = Departamento::orderBy('nombre')->get();
        return view('ciudads.edit', compact('ciudad', 'departamentos'));
    }

    public function update( $ciudad, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'departamento_id' => 'required|integer',
        ]);

        $ciudad->update($data);

        return back()->with('message', 'Ciudad updated.');
    }

    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();

        return back()->with('message', 'Ciudad deleted.');
    }
}
