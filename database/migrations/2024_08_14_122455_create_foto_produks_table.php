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
        Schema::create('foto_produks', function (Blueprint $table) {
            $table->unsignedBigInteger("id_foto_produks")->autoIncrement();
            $table->string("file_foto_produks");

            $table->unsignedBigInteger("produks_id");
            $table->foreign("produks_id")->references("id_produks")->on('produks');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_produks');
    }
};
