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
        if(!Schema::hasTable('foods')){
            Schema::create('foods', function (Blueprint $table) {
                $table->id();
                $table->string('name', 30);
                $table->text('description'); //ingredients
                $table->decimal('price', $precision = 5, $scale = 2);
                // $table->boolean('avaliability')->default(1);
                $table->boolean('vegetarian')->default(0);
                $table->boolean('vegan')->default(0);
                $table->string('img')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};