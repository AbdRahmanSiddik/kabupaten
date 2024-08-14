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
        Schema::create('produks', function (Blueprint $table) {
            $table->unsignedBigInteger("id_produks")->autoIncrement();
            $table->string("nama_produk");
            $table->string("harga");
            $table->string("deskripsi");
            $table->string("stok");

            $table->unsignedBigInteger("users_id");
            $table->foreign("users_id")->references("id_users")->on("users");
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
