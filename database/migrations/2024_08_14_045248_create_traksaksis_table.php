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
        Schema::create('traksaksis', function (Blueprint $table) {
            $table->unsignedInteger('transaksis_id');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->decimal('nominal_transfer', 15, 2);
            $table->integer('jumlah_produk');
            $table->string('status_pembayaran');
            $table->date('tanggal_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traksaksis');
    }
};
