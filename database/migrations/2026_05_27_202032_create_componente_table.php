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
        Schema::create('componente', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->dateTime('hora_inicio');
            $table->dateTime('hora_fim');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('componente');
    }
};
