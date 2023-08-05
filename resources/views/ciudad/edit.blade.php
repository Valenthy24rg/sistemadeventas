<div style="margin-bottom: 1em;">
    <a href="{{ route('ciudad.index') }}">Ciudad List</a>
</div>

<h1>Edit Ciudad</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('ciudad.edit', $ciudad) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Enter Ciudad" value="{{ $ciudad->nombre }}">
        @error('nombre')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="departamento_id">Departamento</label>
        <input type="text" name="departamento" id="departamento_id" placeholder="Enter Departamento" value="{{ $ciudad->departamento_id }}">
        @error('departamento_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Sumbit</button>
    </div>
</form>
