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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('contrasena'); // recuerda hashearla al guardar
            $table->string('telefono');
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            $table->enum('tipo_usuario', ['usuario', 'propietario', 'moderador'])->default('usuario');
            $table->string('foto_perfil')->nullable(); // Ruta de la foto de perfil
            $table->boolean('baneado')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
