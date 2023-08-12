
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('cities.create') }}">New Ciudad</a></li>
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
            <td>
                <a href="{{ route('cities.edit', $city) }}">Edit</a>

                <form action="{{ route('cities.delete', $city) }}" method="post">
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


