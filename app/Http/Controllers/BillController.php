<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Http\Request;
use function Sodium\compare;

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
            'employees' => 'required|integer',
            'clients' => 'required|integer',
            'products' => 'required|integer',
        ]);

        Bill::create($data);

        return back()->with('message', 'Product created successuflly');
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
            'employees' => 'required|integer',
            'clients' => 'required|integer',
            'products' => 'required|integer',
        ]);

        $bill->update($data);

        return back()->with('message', 'Product updated.');
    }
}
