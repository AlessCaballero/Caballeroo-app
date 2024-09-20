<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOMAIN</title>
    <!-- Incluir la fuente Orbitron desde Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <h1>NOMAIN</h1>
            <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo-image">
            <p class="p1">Contabilidad inteligente</p>
            <p class="p2">para <strong>contadores.</strong></p>
            <p class="p3">Ahorra tiempo automatizando tus procesos contables</p>
            <p class="p4">y gestiona fácilmente a todos tus clientes.</p>
            <a href="{{ route('vista2') }}" class="btn">Soy contador</a>
        </div>
        <div class="right-side">
            <img src="{{ asset('img/logo1.png') }}" alt="logo" class="logo-image1">
            <h1 class="h1d">NOMAIN</h1>
            <p class="p1d">Super poderes para</p>
            <p class="p2d">Gestionar <strong>NOMAIN.</strong></p>
            <p class="p3d">Vende, factura y contabiliza de forma automática con</p>
            <p class="p4d">el sistema más completo, sencillo e inteligente.</p>
            <a href="{{ route('envia_calculadora') }}" class="btnd">Soy empresario</a>
        </div>
    </div>
</body>
</html>
