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
        Schema::create('histories', function (Blueprint $table) {
            $table->unsignedInteger('historie_id');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('produks_id')->constrained('produks')->onDelete('cascade');
            $table->date('tanggal_pembayaran');
            $table->date('tanggal_dikirim')->nullable();
            $table->string('status_pengiriman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
