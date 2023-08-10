@extends('app')
@section('content')

    <div style="margin-bottom: 1em;">
        <a href="{{ route('clients.index') }}">Customers List</a>
    </div>

    <h1>Create Customer</h1>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <form action="{{ route('clients.create') }}" method="post">
        @csrf
        <div style="margin-bottom: 1em;">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Enter Customer">
            @error('nombre')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 1em;">
            <label for="cedula">Cédula</label>
            <input type="text" name="cedula" id="cedula" placeholder="Enter Cedula">
            @error('cedula')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 1em;">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" placeholder="Enter Telefono">
            @error('telefono')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 1em;">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" placeholder="Enter direccion">
            @error('direccion')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 1em;">
            <label for="city_id">City</label>
            <select name="city_id" id="city_id">
                <option value="">Select</option>
                @foreach($cities as $city)
                    <option
                        @if($city->id === (int)$client->$city_id)
                            selected
                        @endif
                        value="{{ $city->id }}">{{ $city->nombre }}</option>
                @endforeach
            </select>
            @error('city_id')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 1em;">
            <label for="products_id">Producto(s)</label>
            <label for="products_id">Product</label>
            <select name="products_id" id="products_id">
                <option value="">Select</option>
                @foreach($products as $product)
                    <option
                        @if($product->id === (int)$city->$products_id)
                            selected
                        @endif
                        value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
            @error('products_id')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
