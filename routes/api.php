<?php

use Illuminate\Http\Request;

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


Route::post('login', 'Api\AuthController@login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('get-user', 'Api\AuthController@getUser');
    Route::get('get-enlisted-products', 'InventoryController@getEnlistedProdutcs');
    Route::get('get-products-to-prepare', 'InventoryController@getProductsToPrepare');
    Route::get('get-less-sold-products/{date}', 'OrderController@getLessSoldProduct');
    Route::get('get-products-to-prepare-and-supply/{orderId}', 'InventoryController@getProductsToPrepareAndSupply');
    Route::get('get-most-selled-products/{date}', 'OrderController@getMostSelledProduct');
    Route::get('get-inventory-following-months', 'InventoryController@getInventoryFotTheFollowingMonths');
});

