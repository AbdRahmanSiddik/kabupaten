<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->unsignedBigInteger("id_produks")->autoIncrement();
            $table->string("token_produk");
            $table->string("nama_produk");
            $table->string("harga");
            $table->string("thumbnail");
            $table->string("deskripsi");
            $table->string("stok");

            $table->foreignId("users_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
