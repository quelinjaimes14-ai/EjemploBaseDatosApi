<?php

use App\Models\productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;


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

route::post('/usuario/login', [AuthController::class, 'login']);