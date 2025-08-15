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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('picture', 255);
            $table->string('status', 15);
            $table->string('enabled', 15);
            $table->rememberToken();
            $table->timestamps();
        });

            Schema::table('post', function(Blueprint $table){
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
            });



    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('posts', function (Blueprint $table){
            $table->dropForeign('post_user_ud_foreign');
            $table->dropColumn('user_id');
        });

        Schema::dropIfExists('users');
    }
};
