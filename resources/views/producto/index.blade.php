@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
    <div class="container">
        <h2>Productos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id Producto</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>País de Origen</th>
                    <th>Presentación</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($producto as $productos)
                <tr>
                    <td>{{ $productos->id }}</td>
                    <td>{{ $productos->nombre }}</td>
                    <td>{{ $productos->descripcion }}</td>
                    <td>{{ $productos->pais_origen }}</td>
                    <td>{{ $productos->presentacion }}</td>
                    <td>{{ $productos->precio }}</td>
                    <td>{{ $productos->stock }}</td>
                    <td>
                        <a href="">Actualizar</a>
                    </td>
                    <td>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
