<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <link rel="stylesheet" href="{{ asset('css/calculadora.css') }}">
</head>
<body>
    <form action="{{ route('calcular_datos') }}" method="POST">
    @csrf
    <h1>Numero 1</h1>
    <input type="text" name="numero1"></input>
    <h1>Numero 2</h1>
    <input type="text" name="numero2"></input>
        <select name="operacion">
            <option value='suma'>SUMAR</option>
            <option value="resta">RESTAR</option>
            <option value="multiplicacion">MULTIPLICAR</option>
            <option value="divicion">DIVIDIR</option>
        </select>
        <button type="submit">Enviar</button>
    </form><br>
    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif
</body>
</html>