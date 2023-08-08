<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        return view('departamento.index', [
            'departments' => Department::paginate()
        ]);
    }

    public function create()
    {
        return view('departamento.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255'
        ]);

        Department::create($data);

        return back()->with('message', 'Departamento created successfully');
    }
    public function edit(Department $department)
    {
        return view('departamento.edit', compact('department'));
    }

    public function update(Department $department, Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255'
        ]);

        $department->update($data);

        return back()->with('message', 'Departamento updated.');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return back()->with('message', 'Departamento deleted.');
    }
}
