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
        Schema::create('food_order', function (Blueprint $table) {
            // Food foreign key
            $table->unsignedBigInteger("food_id");
            $table->foreign("food_id")
                ->references("id")
                ->on("foods")
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // Order foreign key
            $table->unsignedBigInteger("order_id");
            $table->foreign("order_id")
                ->references("id")
                ->on("orders")
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // Definizione chiave primaria
            $table->primary(['food_id', 'order_id']);

            $table->unsignedTinyInteger('quantity')->default(1);
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
        Schema::dropIfExists('food_order');
    }
};
