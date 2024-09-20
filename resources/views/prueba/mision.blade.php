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
    <link rel="stylesheet" href="{{ asset('css/vista2.css') }}">
</head>
<body>
    <div class="container">
        <div class="above">
            <h1>NOMAIN</h1>
            <a href="{{ route('mision') }}" class="mision">MISION</a>
            <a href="{{ route('vision') }}" class="vision">VISION</a>
            <img src="{{ asset('img/img1.png') }}" alt="logo" class="logo-img1">
            <a class="contacto">CONTACTO</a>
            <p class="p1">MISION</p>
            <p class="p4">Automatiza tu negocio con el Sistema Contable y de Facturación</p>
            <p class="p5">más completo, sencillo e inteligente para las pymes.</p>


            <a href="{{ route('vista1') }}" class="btnsoycontador">SOY CONTADOR</a>
            <a href="{{ route('vista1') }}" class="btningresar">INGRESAR</a>

        </div>
        <div class="below">
            <!-- Contenido de la parte inferior -->
        </div>
    </div>
</body>
</html>
