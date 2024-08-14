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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->unsignedBigInteger("id_transaksis")->autoIncrement();
            $table->string("token_transaksi");

            $table->date("tanggal_transaksi");
            $table->string('total_transaksi');
            $table->enum('status', ["failed", "pending", "success", "complete"]);

            $table->unsignedBigInteger("users_id");
            $table->foreign("users_id")->references("id_users")->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
