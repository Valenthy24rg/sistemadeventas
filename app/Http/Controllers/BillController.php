<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Employee;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        return view('bills.index', [
            'bills' => Bill::paginate(10)
        ]);
    }

    public function create()
    {
        $employees = Employee::orderBy('name')->get();
        $clients = Client::orderBy('name')->get();
        $products = Product::orderBy('name')->get();

        return view('bills.create', compact('employees', 'clients', 'products'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'subtotal' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'total' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'employee_id' => 'required|integer',
            'client_id' => 'required|integer',
            'products_id' => 'required|integer',
        ]);

        Bill::create($data);

        return back()->with('message', 'Bill created successfully');
    }

    public function edit(Bill $bill)
    {

        $employees = Employee::orderBy('name')->get();
        $clients = Client::orderBy('name')->get();
        $products = Product::orderBy('name')->get();

        return view('bills.edit', compact('bill','employees', 'clients', 'products'));
    }

    public function update(Bill $bill, Request $request)
    {
        $data = $request->validate([
            'subtotal' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'total' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'employee_id' => 'required|integer',
            'client_id' => 'required|integer',
            'products_id' => 'required|integer',
        ]);

        $bill->update($data);

        return back()->with('message', 'Bill updated.');
    }

    public function destroy(Bill $bill)
    {
        $bill->delete();

        return back()->with('message', 'Bill deleted.');
    }
}
