<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Department;
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
        $departments = Department::orderBy('nombre')->get();
        return view('ciudad.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'department_id' => 'required|integer',
        ]);

        Ciudad::create($data);

        return back()->with('message', 'Ciudad created successfully');
    }

    public function edit(Ciudad $ciudad)
    {
        $departments = Department::orderBy('nombre')->get();
        return view('ciudads.edit', compact('ciudad', 'departments'));
    }

    public function update(Ciudad $ciudad, Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'department_id' => 'required|integer',
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
