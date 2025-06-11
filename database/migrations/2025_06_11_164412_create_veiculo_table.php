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
        Schema::create('veiculo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('marca', 255);
            $table->string('modelo', 255);
            $table->string('ano', 255);
            $table->string('placa', 255);
            $table->string('cor', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculo');
    }
};
