<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    protected $fillable = [
        'usuario',
        'mensaje',
        'fecha_hora',
    ];

    public $timestamps = false;
}
