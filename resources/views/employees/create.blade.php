@extends('app')
@section('content')

    <div style="margin-bottom: 1em;">
        <a class="btn btn-secondary" href="{{ route('employees.index') }}">Empleados List</a>
    </div>


    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

<<<<<<< HEAD
    <form action="{{ route('employees.create') }}" method="post">
        @csrf
        <div style="margin-bottom: 1em;">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Empleados" value="{{ old('name') }}">
            @error('name')
            <div style="color: red;">{{ $message }}</div>
            @enderror
=======
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Edit Empleados</h1>
                        <div class="card-body">
                            <form action="{{ route('employees.create') }}" method="post">
                                @csrf
                                <div style="margin-bottom: 1em;">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Enter Empleados" value="{{ old('nombre') }}">
                                    @error('nombre')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Enter Apellido" value="{{ old('apellido') }}">
                                    @error('apellido')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Enter Direccion"
                                           value="{{ old('direccion') }}">
                                    @error('direccion')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="telefono">Telefono</label>
                                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Enter Telefono"
                                           value="{{ old('telefono') }}">
                                    @error('telefono')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="city_id">Ciudad</label>
                                    <select class="form-control" name="city_id" id="city_id">
                                        <option value="">Select</option>
                                        @foreach($cities as $city)
                                            <option
                                                @if($city->id === (int)old('city_id'))
                                                    selected
                                                @endif
                                                value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('city_id')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
>>>>>>> 86a93f9801fdf2e79146bb33a169b2503a59bbc2
        </div>
    </main>


@endsection
