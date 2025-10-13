<?php

use Illuminate\Support\Facades\Route;
use App\Models\productos;
use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/reporteimportante', function () {
    return view('prueba');
});
Route::get('/productos', [ProductosController::class, 'index'])
    ->name ('productos.index');

route::get('/producto/crear',
[productosController::class, 'create'])
    ->name('productos.create');
    
route::post('/producto/guardar',
[productosController::class, 'store'])
    ->name('productos.store');    

Route::get('/producto/detalle/{id}',
[productosController::class, 'show'])
    ->name('productos.show');

Route::get('/producto/editar/{id}',
[productosController::class, 'edit'])
    ->name('productos.edit');

route::put('/producto/actualizar/{id}',
[productosController::class, 'update'])
    ->name('productos.update');

Route::delete('/producto/eliminar',
[productosController::class, 'destroy'])
    ->name('productos.destroy');
