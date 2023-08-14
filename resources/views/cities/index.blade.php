@extends('app')
@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div><a class="btn btn-success" href="/">Home</a></div>
    <div><a class="btn btn-secondary" href="{{ route('cities.create') }}">New City</a></div>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <td>N°</td>
        <td>Name</td>
        <td>Department</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($cities as $key => $city)
        <tr>
            <td>{{ $cities->firstItem() + $key }}.</td>
            <td>{{ $city->name }}</td>
            <td>
                {{ $city->department->name }}
            </td>
            <td>{{ $city->created_at->format('F d, y') }}</td>

            <td>
                <a class="btn btn-primary" href="{{ route('cities.edit', $city) }}"><i class="bi bi-pencil-square"></i></a>
                <form action="{{ route('cities.delete', $city) }}" method="post">
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
