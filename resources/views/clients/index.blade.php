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
        @forelse($clients as $key => $client)
            <tr>
                <td>{{ $clients->firstItem() + $key }}.</td>
                <td>{{ $client->nombre }}</td>
                <td>{{ $client->cedula }}</td>
                <td>{{ $client->telefono }}</td>
                <td>{{ $client->direccion }}</td>
                <td>{{ $client->city->name }}</td>
                <td>{{ $client->products->name }}</td>
                <td>
                    <a href="{{ route('clients.edit', $client) }}">Edit</a>

                    <form action="{{ route('clients.delete', $client) }}" method="post">
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
