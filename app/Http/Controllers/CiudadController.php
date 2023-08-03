<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function index()
    {
        return view('ciudades.index', [
            'ciudades' => Ciudad::paginate()
        ]);
    }

    public function create()
    {
        return view('ciudades.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'departamento_id' => 'required|integer'
        ]);

        Ciudad::create($data);

        return back()->with('message', 'Ciudad created successfully');
    }
    public function edit(Ciudad $ciudad)
    {
        return view('ciudades.edit', compact('ciudad'));
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

    public function destroy(Ciudad $ciudades)
    {
        $ciudades->delete();

        return back()->with('message', 'Ciudad deleted.');
    }
}
