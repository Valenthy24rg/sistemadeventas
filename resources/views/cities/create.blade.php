@extends('app')
@section('content')

    <div style="margin-bottom: 1em;">
        <a class="btn btn-secondary" href="{{ route('cities.index') }}">City List</a>
    </div>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Create City</h1>
                        <div class="card-body">
                            <form action="{{ route('cities.create') }}" method="post">
                                @csrf
                                <div style="margin-bottom: 1em;">
                                    <label for="nombre">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter City">
                                    @error('name')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div style="margin-block: 1em;">
                                    <label for="department_id">Departamento</label>
                                    <select class="form-control" name="department_id" id="department_id">
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
                                <div class="d-grid mx-auto">
                                    <button type="submit"  class="btn btn-dark btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
