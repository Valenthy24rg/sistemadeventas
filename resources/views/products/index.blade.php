@extends('app')
@section('content')


<div><a class="btn btn-success" href="/">Home</a></div>
<a class="btn btn-secondary" href="{{ route('products.create') }}">New Product</a>


@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table class="table table-bordered table-hover" cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td>N°</td>
        <td>Name</td>
        <td>Price</td>
        <td>Category</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($products as $key => $product)
        <tr>
            <td>{{ $products->firstItem() + $key }}.</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                {{ $product->category->name }}
            </td>
            <td>
                <a class="btn btn-primary" href="{{ route('products.edit', $product) }}"><i class="bi bi-pencil-square"></i></a>

                <form action="{{ route('products.delete', $product) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
@endsection
