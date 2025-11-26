<?php

use App\Models\productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;
use App\Models\Alumno;
use App\Http\Controllers\ComportamientoController;
use App\Http\Controllers\MensajesController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/productos', function () {
    return productos::all();
})->middleware('auth:sanctum');

Route::post('/testname', function () {
    //return "Hola ". Request()->nombre ." desde test name";
    return Request()->all();
});

Route::get('/productos/crear/{descripcion}/{categoria}/{cantidad}/{precio}', 
function (string $descripcion, string $categorias, int $cantidad, float $precio ) {
    return productos::create([
        'descripcion' => $descripcion,
        'categorias' => $categorias,
        'cantidad' => $cantidad,
        'precio' => $precio,
    ]);
    return productos::all();
})->middleware('auth:sanctum');

Route::post('/productos/crear', function () {
    productos::create([
        'descripcion' => request()->descripcion,
        'categorias' => request()->categorias,
        'cantidad' => request()->cantidad,
        'precio' => request()->precio,
    ]);
    return productos::all();
});

Route::put('/productos/actualizar', function () {
        $producto = productos::findOrFail(request()->id);
        $producto->descripcion = request()->descripcion;
        $producto->categorias = request()->categorias;
        $producto->cantidad = request()->cantidad;
        $producto->precio = request()->precio;
        $producto->save();
    return productos::all();
});

Route::delete('/productos/eliminar', function () {
        $producto = productos::findOrFail(request()->id);
        $producto->delete();
    return productos::all();
});

route::post('/usuario/registrar', [AuthController::class, 'register']);





//Api de empleados

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::post('/empleados/crear', [EmpleadoController::class, 'store'])->middleware('auth:sanctum');
Route::get('/empleados/mostrar/{empleado}', [EmpleadoController::class, 'show']);
Route::put('/empleados/actualizar/{empleado}', [EmpleadoController::class, 'update']) ->middleware('auth:sanctum');
Route::delete('/empleados/eliminar/{empleado}', [EmpleadoController::class, 'destroy'])->middleware('auth:sanctum');


//Api de clientes 

Route::get('/clientes', [ClienteController::class, 'index']);
Route::post('/clientes/crear', [ClienteController::class, 'store']);
Route::get('/clientes/mostrar/{cliente}', [ClienteController::class, 'show']);
Route::put('/clientes/actualizar/{cliente}', [ClienteController::class, 'update']);
Route::delete('/clientes/eliminar/{cliente}', [ClienteController::class, 'destroy']);

//Api de vueListado
Route::get('/alumnos', function () {
    return Alumno::all();
});

//Api de comportamientos
Route::post('/comportamientos', [\App\Http\Controllers\ComportamientoController::class, 'store']);

//Api de mensajes
Route::post('mensajes/crear', [MensajesController::class, 'store']);
Route::get('mensajes', [MensajesController::class, 'index']);
Route::get('mensajes/ultimos/{n}', [MensajesController::class, 'ultimos']);
