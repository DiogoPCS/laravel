<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //up = criar
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->password('senha');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //down = excluir
    {
        Schema::dropIfExists('alunos');
    }
};
