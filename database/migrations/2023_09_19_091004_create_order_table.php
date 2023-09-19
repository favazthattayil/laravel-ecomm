<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('address_id');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('address_id')->references('id')->on('adress');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order');
    }
}
