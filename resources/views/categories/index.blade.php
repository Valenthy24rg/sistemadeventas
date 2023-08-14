@extends('app')
@section('content')

    <div><a class="btn btn-success" href="/">Home</a></div>
    <div><a class="btn btn-secondary" href="{{ route('categories.create')}}">New Category</a></div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">



    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <td>N°</td>
            <td>Name</td>
            <td>Description</td>
            <td>Timestamp</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @forelse($categories as $key => $category)
            <tr>
                <td>{{ $categories->firstItem() + $key }}.</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->created_at->format('F d, y') }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>

                    <form action="{{ route('categories.delete', $category) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger"> <i class="bi bi-trash-fill"></i></button>
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
