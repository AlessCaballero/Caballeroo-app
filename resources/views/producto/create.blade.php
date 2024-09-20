<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cargo</title>
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
</head>
<body>
   

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('producto.store') }}" method="POST">
        @csrf

        <h1>Crear Productos</h1>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion" required>
        <br>
        <label for="pais_origen">Pais de Origen:</label>
        <input type="text" id="pais_origen" name="pais_origen" required>
        <br>
        <label for="presentacion">Presentacion:</label>
        <input type="text" id="presentacion" name="presentacion" required>
        <br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required>
        <br>
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required>
        <br>
        <button type="submit">Guardar Producto</button>
    </form>
</body>
</html>
