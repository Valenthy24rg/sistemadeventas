{{--@extends('app')--}}
{{--@section('content')--}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('departamento.create') }}">New Departamento</a></li>
        </ul>
    </div>
</nav>


@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table class="table table-dark table-striped">
    <thead>
    <tr>
        <td>N°</td>
        <td>Name</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($departamentos as $key => $departamento)
        <tr>
            <td>{{ $departamentos->firstItem() + $key }}.</td>
            <td>{{ $departamento->nombre }}</td>
            <td>{{ $departamento->created_at->format('F d, y') }}</td>
            <td>
                <a href="{{ route('departamento.edit', $departamento) }}">Edit</a>

                <form action="{{ route('departamento.delete', $departamento) }}" method="post">
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


