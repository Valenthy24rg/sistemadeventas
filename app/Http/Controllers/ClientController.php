<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\City;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.index', [
            'clients' => Client::paginate(10)
        ]);
    }

    public function create()
    {
        $cities = City::orderBy('nombre')->get();
        $products = Product::orderBy('name')->get();
        return view('clients.create', compact('cities', 'products'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'cedula' => 'required|max:255',
            'telefono' => 'required|max:255',
            'direccion' => 'required|max:255',
            'city_id' => 'required|integer',
            'products_id' => 'required|integer',
        ]);

        Client::create($data);

        return back()->with('message', 'Client created successfully');
    }

    public function edit(Client $clients)
    {
        $cities = City::orderBy('nombre')->get();
        $products = Product::orderBy('name')->get();
        return view('clients.create', compact('cities', 'products'));
    }

    public function update(Client $clients, Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:255',
            'cedula' => 'required|max:255',
            'telefono' => 'required|max:255',
            'direccion' => 'required|max:255',
            'city_id' => 'required|integer',
            'products_id' => 'required|integer',
        ]);

        $clients->update($data);

        return back()->with('message', 'Client updated.');
    }

    public function destroy(Client $clients)
    {
        $clients->delete();

        return back()->with('message', 'Cliente deleted.');
    }
}
