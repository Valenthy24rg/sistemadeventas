@extends('app')
@section('content')

    <div style="margin-bottom: 1em;">
        <a href="{{ route('providers.index') }}">Provider List</a>
    </div>

    <h1>Create Provider</h1>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>

    @endif

    <form action="{{ route('providers.create') }}" method="post">
        @csrf
        <div style="margin-bottom: 1em;">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}">
            @error('name')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 1em;">
            <label for="city_id">City</label>
            <select name="city_id" id="city_id">
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
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
