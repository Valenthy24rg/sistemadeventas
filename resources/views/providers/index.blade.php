@extends('app')
@section('content')

    <div><a href="/">Home</a></div>
    <div><a href="{{ route('providers.create') }}">New Provider</a></div>

    @if(session('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <table cellpadding="10" cellspacing="1" border="1">
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
                    <a href="{{ route('providers.edit', $provider)  }}">Edit</a>

                    <form action="{{ route('providers.delete', $provider) }}" method="post">
                        @csrf
                        <button type="submit">Delete</button>
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
