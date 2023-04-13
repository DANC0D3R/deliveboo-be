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
        Schema::create('food_restaurant', function (Blueprint $table) {
             //Tabella Food
             $table->unsignedBigInteger('food_id');
             $table->foreign('food_id')
                 ->references('id')
                 ->on('foods');
 
 
             //Tabella Restaurant
             $table->unsignedBigInteger('restaurant_id');
             $table->foreign('restaurant_id')
                 ->references('id')
                 ->on('restaurants')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
                 
             $table->boolean('availability')->default(1);
 
             $table->primary(['food_id', 'restaurant_id']);
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_restaurant');
    }
};