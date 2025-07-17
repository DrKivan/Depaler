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
            $table->decimal('precio_mensual', 10, 2);
            $table->decimal('precio_dia', 10, 2);
            $table->integer('num_habitaciones');
            $table->integer('num_banos'); // Laravel acepta ñ pero se recomienda evitarla en código
            $table->enum('estado', ['disponible', 'no disponible'])->default('disponible');
            $table->boolean('aprobada')->default(false); // Asumiendo que es un booleano para indicar si la propiedad ha sido aprobada por un moderador
            $table->unsignedBigInteger('usuario_id'); // FK al propietario
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');

            $table->timestamps();
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
