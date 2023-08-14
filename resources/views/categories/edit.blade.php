@extends('app')
@section('content')
    <div style="margin-bottom: 1em; align-items: center;">
        <a class="btn btn-success" href="{{ route('categories.index') }}">Category List</a>
    </div>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h1 class="card-header text-center">Edit Category</h1>
                        @if(session('message'))
                            <div style="color: green;">{{ session('message') }}</div>
                        @endif
                        <div class="card-body">
                            <form action="{{ route('categories.create') }}" method="post">
                                @csrf
                                <div class="form-group mb-3" style="margin-bottom: 1em;">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Enter Category">
                                    @error('name')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3" style="margin-block: 1em;">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" id="description" class="form-control"
                                           placeholder="Enter Description">
                                    @error('description')
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
