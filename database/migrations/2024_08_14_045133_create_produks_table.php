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
            $table->unsignedInteger('produks_id');
            $table->foreign('mitras_id')->references('mitras')->on('mitras')->onDelete('cascade');
            $table->string('nama_produk');
            $table->foreign('kategoris_id')->references('kategoris')->on('kategoris')->onDelete('cascade');
            $table->text('deskripsi');
            $table->text('spesifikasi_produk');
            $table->decimal('harga', 15, 2);
            $table->integer('stok');
            $table->date('tanggal_expired')->nullable();
            $table->string('tipe_produk');
            $table->boolean('berbahaya')->default(false);
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
