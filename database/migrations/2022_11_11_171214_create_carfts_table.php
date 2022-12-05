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
        Schema::create('carfts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('User_id')->constrained('users');
            $table->string('category');
            $table->string('name');
            $table->string('prand');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('total_price')->nullable();
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
        Schema::dropIfExists('carfts');
    }
};
