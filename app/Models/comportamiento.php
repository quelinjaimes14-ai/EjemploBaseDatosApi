<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comportamiento extends Model
{
    //Define los campos a insertar en la base de datos
    protected $fillable = [
        'ip_usuario',
        'tipo_movimiento',
        'origen',
        'elementos_involucrados',
        'fecha_hora',
        'comenario',
    ];

    public $timestamps = false;
}
