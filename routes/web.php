<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;

Route::get('/cargos/create', [CargoController::class, 'create'])->name('cargos.create');
Route::post('/cargos', [CargoController::class, 'store'])->name('cargos.store');
Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');
Route::get('/proveedores/create', [ProveedorController::class, 'create'])->name('proveedores.create');
Route::post('/proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');


Route::get('/',function(){
    return view('welcome');
});

Route::get('/menu_principal', [PruebaController::class, "main_page"])->name('vista1');
Route::get('/pagina_del_contador', [PruebaController::class, 'counter_page'])->name('vista2');
Route::get('/vista3', [PruebaController::class, "vista3"])->name('vista3');
Route::get('/mision', [PruebaController::class, "mission"])->name('mision');
Route::get('/vision', [PruebaController::class, "vision"])->name('vision');

Route::get('/calcular', [PruebaController::class, 'mostrar_calculadora'])->name('envia_calculadora');
Route::post('/resultado', [PruebaController::class, 'calcular'])->name('calcular_datos');



Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto', [ProductoController::class, 'store'])->name('producto.store');

Route::get('/producto/index',[ProductoController::class, 'index'])->name('producto.index');


