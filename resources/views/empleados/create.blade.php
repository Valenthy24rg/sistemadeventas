@extends('app')
@section('content')

    <div style="margin-bottom: 1em;">
        <a href="{{ route('empleados.index') }}">Empleados List</a>
    </div>

    <h1>Edit Empleados</h1>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <form action="{{ route('empleados.edit') }}" method="post">
        @csrf
        <div style="margin-bottom: 1em;">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Enter Empleados" value="{{ $empleados->nombre }}">
            @error('name')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 1em;">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" placeholder="Enter Apellido"
                   value="{{ $empleados->apellido }}">
            @error('apellido')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 1em;">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" placeholder="Enter Direccion"
                   value="{{ $empleados->direccion}}">
            @error('direccion')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 1em;">
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" id="telefono" placeholder="Enter Telefono"
                   value="{{ $empleados->telefono }}">
            @error('telefono')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 1em;">
            <label for="ciudad_id">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" placeholder="Enter Ciudad" value="{{ $empleados->ciudad }}">
            @error('ciudad')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
