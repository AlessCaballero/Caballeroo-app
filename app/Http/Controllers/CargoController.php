<?php

namespace App\Http\Controllers;

use App\Models\Cargo; 
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function create()
    {
        return view('cargos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_cargo' => 'required|string|max:255',
            'descripcion_cargo' => 'required|string|max:255',
        ]);

    Cargo::create([
            'nombre_cargo' => $request->nombre_cargo,
            'descripcion_cargo' => $request->descripcion_cargo,
        ]);

        return redirect()->route('cargos.create')->with('success', 'Cargo creado exitosamente');
    }
}
