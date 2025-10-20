<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return cliente::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('clientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         cliente::create([
        'nombre cliente' => request()->nombre_completo,
        'domicilio' => request()->domicilio,
        'email' => request()->email,
        'descuento especial' => request()->descuento_especial,
        'telefono' => request()->telefono,
    ]);
    return Empleado::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        $cliente['nombre cliente'] = request()->nombre_cliente;
        $cliente['domicilio'] = request()->domicilio;
        $cliente['email'] = request()->email;
        $cliente['descuento especial'] = request()->descuento_especial;
        $cliente['telefono'] = request()->telefono;
        $cliente->save();
        return $cliente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        return cliente::all();
    }
}
