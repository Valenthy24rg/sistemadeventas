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
    public function index() {
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
        ]);
    }
}
