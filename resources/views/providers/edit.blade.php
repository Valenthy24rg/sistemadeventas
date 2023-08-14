@extends('app')
@section('content')

    <div style="margin-bottom: 1em;">
        <a href="{{ route('providers.index') }}">Product List</a>
    </div>


    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Edit Provider</h1>
                        <div class="card-body">
                            <form action="{{ route('providers.edit', $provider) }}" method="post">
                                @csrf
                                <div style="margin-bottom: 1em;">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{ $provider->name }}">
                                    @error('name')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-bottom: 1em;">
                                    <label for="city_id">City</label>
                                    <select class="form-control" name="city_id" id="city_id">
                                        <option value="">Select</option>
                                        @foreach($cities as $city)
                                            <option
                                                @if($city->id === (int)$provider->city_id)
                                                    selected
                                                @endif
                                                value="{{ $city->id }}">{{ $city->name}}</option>
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
