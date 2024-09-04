<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('id_transactions')->autoIncrement();
            $table->foreignId('users_id')->constrained();


            $table->unsignedBigInteger('produks_id');
            $table->foreign('produks_id')->references('id_produks')->on('produks');

            $table->string('quantity');
            $table->string('harga');
            $table->string('total_price');
            $table->enum('status', ['pending', 'success', 'failed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
