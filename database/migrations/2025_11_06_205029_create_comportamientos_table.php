<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comportamientos', function (Blueprint $table) {
            $table->id();
            $table->string('ip_usuario');
            $table->tinyInteger('tipo_movimiento'); //1 = ingreso, 2 = click, 3= consulta, 4 = descarga, etc.
            $table->string('origen'); //red social, buscador, directo, referido, etc.
            $table->string('elementos_involucrados'); //pagina, boton, enlace, formulario, etc.
            $table->timestamp('fecha_hora'); //fecha y hora del movimiento
            $table->text('comenario')->nullable(); //comentario adicional
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comportamientos');
    }
};
