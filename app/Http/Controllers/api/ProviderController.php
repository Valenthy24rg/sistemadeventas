<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use http\Env\Response;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $providers = Provider::all();
        return response()->json([
            'status' => true,
            'providers' => $providers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $provider = Provider::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Provider created successfully!",
            'provider' => $provider
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $provider = Provider::findOrFail($id);
        return response()->json($provider);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $provider = Provider::findOrFail($id);

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $provider->update($request->all());

        return response()->json($provider);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $provider = Provider::findOrFail($id);
        $provider->delete();

        return response()->json(null);
    }
}