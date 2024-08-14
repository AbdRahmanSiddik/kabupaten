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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->string("token_keranjang");

            $table->unsignedBigInteger("users_id");
            $table->foreign("users_id")->references("id_users")->on('users');

            $table->unsignedBigInteger("produks_id");
            $table->foreign("produks_id")->references("id_produks")->on('produks');
            $table->string("kuantitas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};
