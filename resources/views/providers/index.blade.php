@extends('app')
@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div><a class="btn btn-success" href="/">Home</a></div>
    <div><a class="btn btn-secondary" href="{{ route('providers.create') }}">New Provider</a></div>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <td>N°</td>
            <td>Name</td>
            <td>City</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @forelse($providers as $key => $provider)
            <tr>
                <td>{{ $providers->firstItem() + $key }}.</td>
                <td>{{ $provider->name }}</td>
                <td>{{ $provider->city->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('providers.edit', $provider)  }}"><i class="bi bi-pencil-square"></i></a>

                    <form action="{{ route('providers.delete', $provider) }}" method="post">
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
