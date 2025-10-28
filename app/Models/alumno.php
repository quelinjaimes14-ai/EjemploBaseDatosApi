<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class alumno extends Model
{
       public function matricula(): HasOne
    {
        //clase alumno, llave foranea en esta tabla (alumno), llave primaria
        return $this->HasOne(matricula::class);
    }

    public function telefonos(): HasMany
    {
        //clase alumno, llave foranea en esta tabla (alumno), llave primaria
        return $this->HasMany(telefono::class);
    }
    
    public function materias(): BelongsToMany
    {
        //clase relacionada, tabla pivote, llave foranea de esta clase, llave foranea de la clase relacionada
        return $this->belongsToMany(clases::class, 'alumno_materia', 'alumno_id', 'materia_id');
    }

    public function alumnosPorMateria(): BelongsToMany
    {
        //clase relacionada, tabla pivote, llave foranea de esta clase, llave foranea de la clase relacionada
        return $this->belongsToMany(alumno::class, 'alumno_materia', 'materia_id', 'alumno_id');
    }
}

