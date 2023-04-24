<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// api controllers
use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\FoodController;
use App\Http\Controllers\Api\TypeController;
// models
use App\Models\Restaurant;

// Controllers
use App\Http\Controllers\Api\OrderController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.')->group(function () {
    Route::resource('restaurants', RestaurantController::class)->only([
    'index',
    'show'
    ]);
    Route::resource('foods', FoodController::class)->only([
    'index',
    'show',
    'showSingleFood'
    ]);
    Route::resource('types', TypeController::class)->only([
        'index',
    ]);

    //Questa rotta dirige i dati ricevuti dal back end verso OrderController, seguendo il percorso api/orders
    Route::resource('orders', OrderController::class);
});
