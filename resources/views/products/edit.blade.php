@extends('app')
@section('content')

<div style="margin-bottom: 1em;">
    <a href="{{ route('products.index') }}">Products List</a>
</div>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h1 class="card-header text-center">Edit Product</h1>
                    <div class="card-body">
                        <form action="{{ route('products.edit', $product) }}" method="post">
                            @csrf
                            <div style="margin-bottom: 1em;">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{ $product->name }}">
                                @error('name')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-bottom: 1em;">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" class="form-control" placeholder="Enter Price" value="{{ $product->price }}">
                                @error('price')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div style="margin-bottom: 1em;">
                                <label for="category_id">Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="">Select</option>
                                    @foreach($categories as $category)
                                        <option
                                            @if($category->id === (int)$product->category_id)
                                                selected
                                            @endif
                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
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
