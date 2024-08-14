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
        Schema::create('previews', function (Blueprint $table) {
            $table->unsignedInteger('previews_id');
            $table->foreign('users_id')->references('users')->on('users')->onDelete('cascade');
            $table->foreign('produks_id')->references('produks')->on('produks')->onDelete('cascade');
            $table->text('comments');
            $table->decimal('rating', 3, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('previews');
    }
};
