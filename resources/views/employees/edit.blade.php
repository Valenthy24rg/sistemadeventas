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
            @error('nombre')
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
            <label for="city_id">Ciudad</label>
            <select name="city_id" id="city_id">
                <option value="">Select</option>
                @foreach($cities as $city)
                    <option
                        @if($city->id === (int)$employee->city_id)
                            selected
                        @endif
                        value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
            @error('city_id')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
