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
        Schema::create('proprietario', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 255);
            $table->string('cpf', 11);
            $table->string('telefone', 11);
            $table->string('email', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietario');
    }
};






// //<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('anuncio', function (Blueprint $table) {
//             $table->id();
//             $table->timestamps();
//             $table->string('titulo', 255);
//             $table->string('descricao', 255);
//             $table->string('preco', 255);
//             $table->string('data_publicacao', 11);
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('anuncio');
//     }
// };
