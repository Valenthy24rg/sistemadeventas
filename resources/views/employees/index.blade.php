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
            <td>Name</td>
            <td>Apellido</td>
            <td>Dirección</td>
            <td>Teléfono</td>
            <td>City</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @forelse($employees as $key => $employee)
            <tr>
                <td>{{ $employees->firstItem() + $key}}.</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->apellido }}</td>
                <td>{{ $employee->direccion }}</td>
                <td>{{ $employee->telefono }}</td>
                <td>{{ $employee->city->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('employees.edit', $employee) }}"><i class="bi bi-pencil-square"></i></a>

                    <form action="{{ route('employees.delete', $employee) }}" method="post">
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
