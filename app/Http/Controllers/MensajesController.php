<?php

namespace App\Http\Controllers;

use App\Models\Mensajes;
use Illuminate\Http\Request;


class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
{
        return Mensajes::all();
}

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mensajes = new Mensajes();
        $mensajes->usuario = $request->input('usuario');
        $mensajes->mensaje = $request->input('mensaje');
        $mensajes->fecha_hora = $request->input('fecha_hora');
        //$carbonDate = Carbon::parse($request->input('fecha_hora'));
        //$mysqlFormattedDate = $carbonDate->format('Y-m-d H:i:s');
        $mensajes->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Mensajes $mensajes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mensajes $mensajes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mensajes $mensajes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensajes $mensajes)
    {
        //
    }
    public function ultimos($n)
{
    return Mensajes::orderBy('id', 'desc')
                    ->take($n)
                    ->get()
                    ->sortBy('id')
                    ->values();
}

}
