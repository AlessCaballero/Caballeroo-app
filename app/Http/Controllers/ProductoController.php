<?php

namespace App\Http\Controllers;

use App\Models\Producto; 
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function create()
    {
        return view('producto.create');
    }

    public function store(Request $request)//resibir datos del formulario // STORE: almacenar
    {
        $request->validate([
            'nombre' => 'required|string|min:2|max:255',// required: obligatorio
            'descripcion' => 'required|string|min:10|max:255',// barra |: pipe
            'pais_origen' => 'required|string|max:255',
            'presentacion' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

    Producto::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'pais_origen' => $request['pais_origen'],
            'presentacion' => $request['presentacion'],
            'precio' => $request['precio'],
            'stock' => $request['stock'],
        ]);

        return redirect()->route('producto.create')->with('success', 'Producto creado exitosamente');
    }

    
public function index()
    {
        $producto = Producto::all();
        return view('producto.index', ['producto'=> $producto]);
 
   }
}
