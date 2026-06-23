<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('email')->unique(); // Evita e-mails duplicados
            $table->string('senha');
            $table->string('area_cientifica'); // ADICIONADO: Campo da área científica
            $table->rememberToken(); // ADICIONADO: Necessário para salvar o login
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
