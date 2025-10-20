<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class alumno extends Model
{
       public function matricula(): HasOne
    {
        //clase alumno, llave foranea en esta tabla (alumno), llave primaria
        return $this->HasOne(matricula::class);
    }
}
