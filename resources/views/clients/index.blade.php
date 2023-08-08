@extends('app')
@section('content')

    <div><a href="/">Home</a></div>
    <div><a href="{{ route('clients.create') }}">New Customers</a></div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <table>
        <thead>
        <tr>
            <td>N°</td>
            <td>Nombre</td>
            <td>Cedula</td>
            <td>Telefono</td>
            <td>Dirección</td>
            <td>Ciudad</td>
            <td>Producto(s)</td>
        </tr>
        </thead>
        <tbody>
        @forelse($clientes as $key => $cliente)
            <tr>
                <td>{{ $clientes->firstItem() + $key }}.</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->cedula }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->producto->nombre }}</td>
                <td>{{ $cliente->ciudad->nombre }}</td>
                <td>
                    <a href="{{ route('clients.edit', $cliente) }}">Edit</a>

                    <form action="{{ route('clients.delete', $cliente) }}" method="post">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No data found in table</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
