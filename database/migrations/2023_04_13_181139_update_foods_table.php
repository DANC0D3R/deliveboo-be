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
        Schema::table('foods', function (Blueprint $table) {
            // con queste funzioni inseriamo restaurant_id come foreign key dopo la colonna id
            $table->unsignedBigInteger('restaurant_id')->nullable()->after('id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');

            // così aggiungiamo la colonna availability
            $table->boolean('availability')->default(1)->after('price');

            // cosi aggiungiamo la colonna gluten free
            $table->boolean('glutenfree')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foods', function (Blueprint $table) {
            // con queste funzioni togliamo il ruolo di foreign key a restaurant_id e la droppiamo
            $table->dropForeign('restaurants_restaurant_id_foreign');
            $table->dropColumn('restaurant_id');

            // così droppiamo la colonna availability
            $table->dropColumn('availability');
        });
    }
};
