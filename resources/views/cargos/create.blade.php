<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cargo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Crear Cargo</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('cargos.store') }}" method="POST">
        @csrf
        <label for="nombre_cargo">Nombre Del Cargo:</label>
        <input type="text" id="nombre_cargo" name="nombre_cargo" required>
        <br>
        <label for="descripcion_cargo">Descripcion Cargo:</label>
        <input type="text" id="descripcion_cargo" name="descripcion_cargo" required>
        <br>
        <button type="submit">Guardar Cargo</button>
    </form>
</body>
</html>
