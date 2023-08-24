<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'status' => true,
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Product created successfully!",
            'product' => $product
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required|max:255',
            'price' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0'
        ]);
        $product->update($request->all());

        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(null);
    }
}
