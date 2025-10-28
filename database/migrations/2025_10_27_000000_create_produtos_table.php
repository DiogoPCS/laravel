<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique(); // Nome do produto (único)
            $table->decimal('preco', 8, 2);  // Preço (ex: 99.99)
            $table->integer('estoque')->default(0); // Quantidade em estoque
            $table->string('categoria');    // A categoria será uma string (ex: 'Ação', 'RPG')

            // Colunas de Fotos (Armazenarão os caminhos dos arquivos)
            $table->string('foto_1');       // Obrigatória
            $table->string('foto_2')->nullable(); // Opcional (pode ser NULL)
            $table->string('foto_3')->nullable(); // Opcional (pode ser NULL)

            $table->timestamps(); // created_at (data de cadastro) e updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
