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
        if(!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->integer('restaurant_id');
                $table->decimal('total_price', $precision = 5, $scale = 2);
                $table->string('client_name', 20);
                $table->string('client_surname', 20);
                $table->string('client_address', 100);
                $table->string('client_phone', 15);
                $table->string('client_email', 255);
                $table->string('notes')->nullable();
                
                $table->timestamps();
            });
        }
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
