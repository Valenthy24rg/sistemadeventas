@extends('app')
@section('content')

    <div><a href="/">Home</a></div>
    <div><a href="{{ route('empleados.create') }}">New Empleado</a></div>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <table cellpadding="10" cellspacing="1" border="1">
        <thead>
        <tr>
            <td>N°</td>
            <td>Nombre</td>
            <td>Ciudad</td>
            <td>Apellido</td>
            <td>Dirección</td>
            <td>Teléfono</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @forelse($empleados as $key => $empleado)
            <tr>
                <td>{{ $empleado->firstItem() + $key}}</td>
                <td>{{ $empleados->nombre }}</td>
                <td>{{ $empleados->Ciudad }}</td>
                <td>{{ $empleados->apellido }}
                <td>{{ $empleados->direccion }}</td>
                <td>{{ $empleados->telefono }}</td>
                <td>{{ $empleados->created_at->format('F d, Y') }}</td>
                <td>
                    <a href="{{ route('empleados.edit', $empleado) }}">Edit</a>

                    <form action="{{ route('empleados.delete') }}" method="post">
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
