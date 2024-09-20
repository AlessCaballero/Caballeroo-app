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
    <link rel="stylesheet" href="{{ asset('css/vision.css') }}">
</head>
<body>
    <div class="container">
        <div class="above">
            <h1>NOMAIN</h1>
            <a href="{{ route('mision') }}" class="mision">MISION</a>
            <a href="{{ route('vision') }}" class="vision">VISION</a>
            <img src="{{ asset('img/img1.png') }}" alt="logo" class="logo-img1">
            <a class="contacto">CONTACTO</a>
            <p class="p1">VISION</p>
            <p class="p4">Diseñar, desarrollar e implementar una plataforma web que brinde servicios<br>
                de gestióndenómina y administración de roles de administrador y contador para <br>
                el personal del SENA. Esta plataforma permitirá un control eficiente y organizado <br>
                de los procesos relacionadoscon la nómina, asegurando la correcta gestión de <br>
                salarios, deducciones y contribucionesdeseguridad social.</p>


            <a href="{{ route('vista1') }}" class="btnsoycontador">SOY CONTADOR</a>
            <a href="{{ route('vista1') }}" class="btningresar">INGRESAR</a>

        </div>
        <div class="below">
            <!-- Contenido de la parte inferior -->
        </div>
    </div>
</body>
</html>
