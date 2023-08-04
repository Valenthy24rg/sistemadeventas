@extends('app')
@section('content')

    <div><a href="/">Home</a></div>
    <div><a href="{{ route('employees.create') }}">New Empleado</a></div>

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
        @forelse($employees as $key => $employee)
            <tr>
                <td>{{ $employee->firstItem() + $key}}</td>
                <td>{{ $employees->nombre }}</td>
                <td>{{ $employees->Ciudad }}</td>
                <td>{{ $employees->apellido }}
                <td>{{ $employees->direccion }}</td>
                <td>{{ $employees->telefono }}</td>
                <td>{{ $employees->created_at->format('F d, Y') }}</td>
                <td>
                    <a href="{{ route('employees.edit', $eemployee) }}">Edit</a>

                    <form action="{{ route('employees.delete') }}" method="post">
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
