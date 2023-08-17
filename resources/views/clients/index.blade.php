@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div><a class="btn btn-success" href="/">Home</a></div>
    <div><a class="btn btn-secondary" href="{{ route('clients.create') }}">New Clients</a></div>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <td>N°</td>
            <td>Nombre</td>
            <td>Cedula</td>
            <td>Telefono</td>
            <td>Dirección</td>
            <td>Ciudad</td>
            <td>Producto(s)</td>
            <td>Action</td>
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
                    <a class="btn btn-primary" href="{{ route('clients.edit', $client) }}"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('clients.delete', $client) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
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
