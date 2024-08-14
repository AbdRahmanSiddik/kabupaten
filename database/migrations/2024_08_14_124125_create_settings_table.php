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
        Schema::create('settings', function (Blueprint $table) {
            $table->unsignedBigInteger('id_settings')->autoIncrement();
            $table->unsignedBigInteger("users_id");

            $table->foreign("users_id")->references("id_users")->on("users");

            $table->string("username");
            $table->string("foto_profile");
            $table->string("alamat_users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
