@extends('app')
@section('content')
    <div class="btn btn-secondary" style="margin-bottom: 1em;">
        <a href="{{ route('employees.index') }}">Empleados List</a>
    </div>


    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-md-4">
                     <div class="card">
                         <h1 class="card-header text-center">Edit Empleados</h1>
                         <div class="card-body">
                             <form action="{{ route('employees.edit', $employee) }}" method="post">
                                 @csrf
                                 <div style="margin-bottom: 1em;">
                                     <label for="name">Nombre</label>
                                     <input type="text" name="name" id="name" class="form-control" placeholder="Enter Empleados" value="{{ $employee->name }}">
                                     @error('nombre')
                                     <div style="color: red;">{{ $message }}</div>
                                     @enderror
                                 </div>
                                 <div style="margin-bottom: 1em;">
                                     <label for="apellido">Apellido</label>
                                     <input type="text" name="apellido" id="apellido" class="form-control"placeholder="Enter Apellido"
                                            value="{{ $employee->apellido }}">
                                     @error('apellido')
                                     <div style="color: red;">{{ $message }}</div>
                                     @enderror
                                 </div>
                                 <div style="margin-bottom: 1em;">
                                     <label for="direccion">Dirección</label>
                                     <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Enter Direccion"
                                            value="{{ $employee->direccion}}">
                                     @error('direccion')
                                     <div style="color: red;">{{ $message }}</div>
                                     @enderror
                                 </div>
                                 <div style="margin-bottom: 1em;">
                                     <label for="telefono">Telefono</label>
                                     <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Enter Telefono"
                                            value="{{ $employee->telefono }}">
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
                                 <div class="d-grid mx-auto">
                                     <button type="submit" class="btn btn-dark btn-block">Submit</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </main>
@endsection
