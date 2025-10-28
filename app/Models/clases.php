<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clases extends Model
{
     public function alumnos(): BelongsToMany
    {
        //clase relacionada, tabla pivote, llave foranea de esta clase, llave foranea de la clase relacionada
        return $this->belongsToMany(clases::class, 'alumno_materia', 'alumno_id', 'materia_id');
    }


}
