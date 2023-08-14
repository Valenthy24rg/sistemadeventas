@extends('app')
@section('content')
<div style="margin-bottom: 1em;">
    <a class="btn btn-secondary" href="{{ route('departments.index') }}">Department List</a>
</div>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h1 class="card-header text-center">Create Department</h1>
                    <div class="card-body">
                        <form action="{{ route('departments.create') }}" method="post">
                            @csrf
                            <div style="margin-bottom: 1em;">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Departamento">
                                @error('name')
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
