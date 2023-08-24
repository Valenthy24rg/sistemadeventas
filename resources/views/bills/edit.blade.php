@extends('app')
@section('content')

    <div class="btn btn-secondary" style="margin-bottom: 1em;"></div>
    <a href="{{ route('bills.index') }}">Bill List</a>
    <div style="margin-bottom: 1em;">
        <a href="{{ route('bills.index') }}">Bills List</a>
    </div>

    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Edit Bill</h1>
                        <div class="card-body">
                            <form action="{{ route('bills.edit', $bill) }}" method="post">
                                @csrf
                                <div style="margin-bottom: 1em;">
                                    <label for="subtotal">Price</label>
                                    <input type="text" name="subtotal" id="subtotal" class="form-control"
                                           placeholder="Enter subtotal" value="{{ $bill->subtotal }}">
                                    @error('subtotal')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="total">Total</label>
                                    <input type="text" name="total" id="total" class="form-control"
                                           placeholder="Enter total" value="{{ $bill->total }}">
                                    @error('total')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="employee_id">Employee</label>
                                    <select class="form-control" name="employee_id" id="employee_id">
                                        <option value="">Select</option>
                                        @foreach($employees as $employee)
                                            <option
                                                @if($employee->id === (int)$employee->employee_id)
                                                    selected
                                                @endif
                                                value="{{ $employee->id }}">{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('employee_id')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div style="margin-bottom: 1em;">
                                    <label for="clients_id">Client</label>
                                    <select class="form-control" name="clients_id" id="clients_id">
                                        <option value="">Select</option>
                                        @foreach($clients as $client)
                                            <option
                                                @if($client->id === (int)$client->clients_id)
                                                    selected
                                                @endif
                                                value="{{ $client->id }}">{{ $client->nombre }}</option>
                                        @endforeach
                                    </select>
                                    @error('clients_id')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div style="margin-bottom: 1em;">
                                    <label for="products_id">Products</label>
                                    <select name="products_id" id="products_id">
                                        <option value="">Select</option>
                                        @foreach($products as $product)
                                            <option
                                                @if($product->id === (int)$bill->products_id)
                                                    selected
                                                @endif
                                                value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('products_id')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror

                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-dark btn-block">Submit</button>
                                    </div>
                                    @if(session('message'))
                                        <div style="color: green;">{{ session('message') }}</div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>


    <div class="d-grid mx-auto">
        <button type="submit" class="btn btn-dark btn-block">Submit</button>
    </div>
    </form>

