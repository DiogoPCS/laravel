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
        // criando a tabela filiais
        Schema::create('filiais', function(Blueprint $table) {
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });

        // criando a tabela produtos_filiais
        Schema::create('produtos_filiais', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('filial_id');
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->timestamps();

            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('filial_id')->references('id')->on('filiais');
        });

        // removendo colunas da tabela produtos
        Schema::table('produtos', function(Blueprint $table) {
            $table->dropColumn(['preco_venda', 'estoque_minimo', 'estoque_maximo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // adicionando colunas na tabela produtos
        Schema::table('produtos', function(Blueprint $table) {
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
        });

        // removendo a tabela produtos_filiais
        Schema::dropIfExists('produtos_filiais');

        // removendo a tabela filiais
        Schema::dropIfExists('filiais');
    }
};
