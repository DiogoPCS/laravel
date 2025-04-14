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
        Schema::create('votacao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email', 255);
            $table->string('chapa', 255);
            $table->string('code', 255);
            $table->boolean('confirmed', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votacao');
    }
};
