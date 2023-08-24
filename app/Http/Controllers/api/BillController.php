<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bills = Bill::all();
        return response()->json([
            'status' => true,
            'bills' => $bills
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bill = Bill::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Bill created successfully!",
            'bill' => $bill
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bill = Bill::findOrFail($id);
        return response()->json($bill);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bill = Bill::findOrFail($id);

        $request->validate([
            'subtotal' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'total' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'employee_id' => 'required|integer',
            'clients_id' => 'required|integer',
            'products_id' => 'required|integer'
        ]);
        $bill->update($request->all());

        return response()->json($bill);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bill = Bill::findOrFail($id);
        $bill->delete();

        return response()->json(null);
    }
}
