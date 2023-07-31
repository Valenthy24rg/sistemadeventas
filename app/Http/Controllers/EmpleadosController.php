<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        return view('empleados.index', [
           'empleados' => Category::paginate()
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
            'nombre' => 'required|max:255',
        ]);
    }
}
