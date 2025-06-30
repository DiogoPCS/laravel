<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anuncio', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo', 255);
            $table->text('descricao');
            $table->decimal('preco', 15, 2);
            $table->date('data_publicacao');

            // Chaves estrangeiras
            $table->unsignedBigInteger('id_proprietario');
            $table->unsignedBigInteger('id_veiculo');

            $table->foreign('id_proprietario')->references('id')->on('proprietario')->onDelete('cascade');
            $table->foreign('id_veiculo')->references('id')->on('veiculo')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anuncio');
    }
};
