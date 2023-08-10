<div style="margin-bottom: 1em;">
    <a href="{{ route('departments.index') }}">Departamento List</a>
</div>

<h1>Edit Departamento</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('departments.edit', $department) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Departamento" value="{{ $department->name }}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Sumbit</button>
    </div>
</form>
