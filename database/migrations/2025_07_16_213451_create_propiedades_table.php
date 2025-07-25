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
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('direccion');
            
            $table->decimal('precio_dia', 10, 2);
            $table->integer('num_habitaciones');
            $table->integer('num_banos'); // Laravel acepta ñ pero se recomienda evitarla en código
            $table->enum('estado', ['disponible', 'no disponible'])->default('disponible');
            $table->enum('aprobada', ['pendiente', 'aprobado', 'rechazado'])->default('pendiente');// Asumiendo que es un booleano para indicar si la propiedad ha sido aprobada por un moderador
            $table->unsignedBigInteger('usuario_id'); // FK al propietario
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');

            $table->timestamps();
            $table->string('ciudad');
            $table->boolean('wifi')->default(false);
            $table->boolean('television')->default(false);
            $table->boolean('aire_acondicionado')->default(false);
            $table->boolean('servicios_basicos')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};
