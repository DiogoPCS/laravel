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
        Schema::table('filiais', function(Blueprint $table) {
            $table->string('filial', 30);
            $table->timestamps();
        });

        Schema::table('produtos_filiais', function(Blueprint $table) {
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('filial_id');
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');   
            $table->integer('estoque_maximo');
            $table->timestamps();

            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('filial_id')->references('id')->on('filiais');

        });

        Schema::table('produtos', function(Blueprint $table) {
            $table->dropColumn('preco_venda', 'estoque_minimo', 'estoque_maximo');
            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos', function(Blueprint $table) {
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');   
            $table->integer('estoque_maximo');

        });

        Schema::dropIfExist('produtos_filiais');

        Schema::dropIfExist('filiais');

    }
};
