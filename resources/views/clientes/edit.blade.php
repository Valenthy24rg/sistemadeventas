@extends('app')
@section('content')
    <div style="margin-bottom: 1em;">
        <a href="{{ route('clients.index') }}">Clients List</a>
    </div>

    <h1>Edit Clients</h1>

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
            <label for="ciudad_id">Ciudad</label>
            <input type="text" name="ciudad_id" id="ciudad_id" placeholder="Enter Ciudad">
            @error('ciudad_id')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 1em;">
            <label for="products_id">Producto(s)</label>
            <input type="text" name="products_id" id="products_id" placeholder="Enter Product">
            @error('products_id')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
