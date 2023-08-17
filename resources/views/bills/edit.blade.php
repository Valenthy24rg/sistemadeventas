<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="btn btn-secondary" style="margin-bottom: 1em;">
    <a href="{{ route('bills.index') }}">Bill List</a>
</div>

<h1>Edit Bill</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('bills.edit', $bill) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="subtotal">Subtotal</label>
        <input type="text" name="subtotal" id="subtotal" placeholder="Enter subtotal" value="{{ $bill->subtotal }}">
        @error('subtotal')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="total">Total</label>
        <input type="text" name="total" id="total" placeholder="Enter total" value="{{ $bill->total }}">
        @error('total')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="employees_id">Employee</label>
        <select class="form-control" name="employees_id" id="employees_id">
            <option value="">Select</option>
            @foreach($employees as $employee)
                <option
                    @if($employee->id === (int)$bill->employees_id)
                        selected
                    @endif
                    value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
        </select>
        @error('employees_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 1em;">
        <label for="clients_id">Client</label>
        <select name="clients_id" id="clients_id">
            <option value="">Select</option>
            @foreach($clients as $client)
                <option
                    @if($client->id === (int)$bill->clients_id)
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
    </div>

    <div class="d-grid mx-auto">
        <button type="submit" class="btn btn-dark btn-block">Submit</button>
    </div>
</form>
