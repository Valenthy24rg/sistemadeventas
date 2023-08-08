@extends('app')
@section('content')
    <div style="margin-bottom: 1em;">
        <a href="{{ route('employees.index') }}">Empleados List</a>
    </div>

    <h1>Edit Empleados</h1>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <form action="{{ route('employees.edit', $employee) }}" method="post">
        @csrf
        <div style="margin-bottom: 1em;">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Enter Empleados" value="{{ $employee->nombre }}">
            @error('name')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 1em;">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" placeholder="Enter Apellido"
                   value="{{ $employee->apellido }}">
            @error('apellido')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 1em;">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" placeholder="Enter Direccion"
                   value="{{ $employee->direccion}}">
            @error('direccion')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 1em;">
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" id="telefono" placeholder="Enter Telefono"
                   value="{{ $employee->telefono }}">
            @error('telefono')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 1em;">
            <label for="ciudad_id">Ciudad</label>
            <select name="ciudad_id" id="ciudad_id">
                <option value="">Select</option>
                @foreach($ciudads as $ciudad)
                    <option
                        @if($ciudad->id === (int)$employee->$ciudad_id)
                            selected
                        @endif
                        value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                @endforeach
            </select>
            @error('ciudad_id')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
