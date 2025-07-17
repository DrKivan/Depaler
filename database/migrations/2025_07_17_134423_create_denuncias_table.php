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
        Schema::create('denuncias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reportado_id');     // usuario denunciado
            $table->unsignedBigInteger('reportante_id');  // quien denuncia
            $table->string('motivo');
            // Claves foráneas hacia la misma tabla 'usuarios'
            $table->foreign('reportado_id')
                  ->references('id')
                  ->on('usuarios')
                  ->onDelete('cascade');
            $table->foreign('reportante_id')
                  ->references('id')
                  ->on('usuarios')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denuncias');
    }
};
