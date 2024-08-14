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
        Schema::create('mitras', function (Blueprint $table) {
            $table->unsignedInteger('mitras_id');
            $table->foreign('users_id')->references('users')->on('users')->onDelete('cascade');
            $table->string('foto_ktp');
            $table->string('facecam_verifikasi');
            $table->string('nama_usaha');
            $table->string('alamat_usaha');
            $table->string('status_verifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitras');
    }
};
