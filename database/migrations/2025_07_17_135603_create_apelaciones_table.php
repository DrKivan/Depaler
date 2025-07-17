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
        Schema::create('apelaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('baneo_id')->constrained('baneos')->onDelete('cascade');
            $table->string('motivo');
            $table->dateTime('fecha_apelacion')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    
};
