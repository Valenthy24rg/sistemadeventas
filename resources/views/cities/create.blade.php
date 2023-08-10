@extends('app')
@section('content')

    <div style="margin-bottom: 1em;">
        <a href="{{ route('cities.index') }}">Ciudad List</a>
    </div>

    <h1>Create Ciudad</h1>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <form action="{{ route('cities.create') }}" method="post">
        @csrf
        <div style="margin-bottom: 1em;">
            <label for="nombre">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Ciudad">
            @error('name')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-block: 1em;">
            <label for="department_id">Departamento</label>
            <select name="department_id" id="department_id">
                <option value="">Select</option>
                @foreach($departments as $department)
                    <option
                        @if($department->id === (int)old('department_id'))
                            selected
                        @endif
                        value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
            @error('department_id')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
