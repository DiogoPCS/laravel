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
        // Schema::create('jogos_database', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nome');
        //     $table->integer('quantidade');
        //     $table->integer('id_plataforma')->unsigned();
        //     $table->foreign('id_plataforma')->references('id')->on('plataforma');
        //     $table->integer('id_estado')->unsigned();
        //     $table->foreign('id_estado')->references('id')->on('usado');
        //     $table->integer('id_retro')->unsigned();
        //     $table->foreign('id_retro')->references('id')->on('retro');
        //     $table->integer('id_colecionador')->unsigned();
        //     $table->foreign('id_colecionador')->references('id')->on('colecionador');
        //     $table->timestamps();
        //     $table->softDeletes();
        // });

        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('quantidade');

            //teste de chave estrangeira
    
            $table->foreignId('id_plataforma')
            ->constrained('plataforma')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // o onDelete serve para que quando o for deletado tudo relacionado a ele será deletado

            $table->foreignId('id_estado')->constrained('usado')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('id_retro')->constrained('retro')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('id_colecionador')->constrained('colecionador')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        
            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loja_database');
    }
};
