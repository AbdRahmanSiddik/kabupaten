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
        Schema::create('order_kurir', function (Blueprint $table) {
            $table->id('id_order_kurir');
            $table->unsignedBigInteger('kurir_id');
            $table->unsignedBigInteger('transactions_id');
            $table->enum('status_kirim', ['packing', 'diantar', 'selesai', 'gagal']);
            $table->timestamps();

            $table->foreign('transactions_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('kurir_id')->references('id_kurirs')->on('kurirs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_kurir');
    }
};
