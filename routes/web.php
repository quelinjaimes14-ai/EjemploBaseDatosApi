<?php

use Illuminate\Support\Facades\Route;
use App\Models\productos;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\TelefonoController;

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


//Rutas para el recurso matricula
Route::get('/matriculas',[MatriculaController::class, 'index'])
    ->name('matriculas.index');

//Rutas para el alumno
Route::get('/alumnos',[AlumnoController::class, 'index'])
    ->name('alumnos.index');

//rutas para el telefono
Route::get('/telefonos',[TelefonoController::class, 'index'])
    ->name('telefonos.index');