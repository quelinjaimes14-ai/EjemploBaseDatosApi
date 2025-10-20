<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class telefono extends Model
{
     public function alumno(): HasOne
    {
        return $this->HasOne(Alumno::class, 'id', 'alumno_id');
    }
}
