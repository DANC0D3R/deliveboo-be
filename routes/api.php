<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// api controllers
use App\Http\Controllers\API\RestaurantController;
// models
use App\Models\Restaurant;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('api.')->group(function () {
    

    Route::resource('restaurants', RestaurantController::class)->only([
        'index',
        'show'
    ]);
});