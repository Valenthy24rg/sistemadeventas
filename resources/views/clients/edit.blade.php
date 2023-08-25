@extends('app')
@section('content')

    <div style="margin-bottom: 1em;">
        <a href="{{ route('clients.index') }}">Clients List</a>
    </div>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <main class="login-form">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-md-4">
                     <div class="card">
                         <h1 class="card-header text-center">Edit Client</h1>
                         <div class="card-body">
                             <form action="{{ route('clients.create', $client) }}" method="post">
                                 @csrf
                                 <div style="margin-bottom: 1em;">
                                     <label for="name">NameGIT </label>
                                     <input type="text" name="name" id="name" class="form-control" placeholder="Enter Customer">
                                     @error('name')
                                     <div style="color: red;">{{ $message }}</div>
                                     @enderror
                                 </div>

                                 <div style="margin-bottom: 1em;">
                                     <label for="cedula">Cédula</label>
                                     <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Enter Cedula">
                                     @error('cedula')
                                     <div style="color: red;">{{ $message }}</div>
                                     @enderror
                                 </div>

                                 <div style="margin-bottom: 1em;">
                                     <label for="telefono">Teléfono</label>
                                     <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Enter Telefono">
                                     @error('telefono')
                                     <div style="color: red;">{{ $message }}</div>
                                     @enderror
                                 </div>

                                 <div style="margin-bottom: 1em;">
                                     <label for="direccion">Direccion</label>
                                     <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Enter direccion">
                                     @error('direccion')
                                     <div style="color: red;">{{ $message }}</div>
                                     @enderror
                                 </div>

                                 <div style="margin-bottom: 1em;">
                                     <label for="city_id">City</label>
                                     <select class="form-control" name="city_id" id="city_id">
                                         <option value="">Select</option>
                                         @foreach($cities as $city)
                                             <option
                                                 @if($city->id === (int)$client->city_id)
                                                     selected
                                                 @endif
                                                 value="{{ $city->id }}">{{ $city->name }}</option>
                                         @endforeach
                                     </select>
                                     @error('city_id')
                                     <div style="color: red;">{{ $message }}</div>
                                     @enderror
                                 </div>

                                 <div style="margin-bottom: 1em;">
                                     <label for="products_id">Producto(s)</label>
                                     <select class="form-control" name="products_id" id="products_id">
                                         <option value="">Select</option>
                                         @foreach($products as $product)
                                             <option
                                                 @if($product->id === (int)$city->products_id)
                                                     selected
                                                 @endif
                                                 value="{{ $product->id }}">{{ $product->name }}</option>
                                         @endforeach
                                     </select>
                                     @error('products_id')
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
