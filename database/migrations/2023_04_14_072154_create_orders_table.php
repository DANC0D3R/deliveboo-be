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
        // tabella orders
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_price',  10,2)->default(0.00);
            $table->date('order_time');
            $table->date('order_date');
            $table->string('client_name');
            $table->string('client_address');
            $table->string('client_phone');
            $table->string('client_email');
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
        Schema::dropIfExists('orders');
    }
};
