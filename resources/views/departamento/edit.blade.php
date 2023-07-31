<div style="margin-bottom: 1em;">
    <a href="{{ route('departamento.index') }}">Departamento List</a>
</div>

<h1>Edit Departamento</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('departamento.edit', $departamento) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="nombre">Name</label>
        <input type="text" name="nombre" id="nombre" placeholder="Enter Departamento" value="{{ $departamento->name }}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Sumbit</button>
    </div>
</form>
