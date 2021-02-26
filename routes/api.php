<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('clients')->group(function () {
    Route::post('register','Api\ClientController@register');
    Route::post('login','Api\ClientController@login');
    Route::middleware(['authorizeclient'])->group(function () {
        Route::get('profile','Api\ClientController@profile');
        Route::put('update','Api\ClientController@update');
        Route::put('update_fcm','Api\ClientController@update_fcm');
        Route::post('change_password','Api\ClientController@change_password');
        Route::post('add_balance','Api\ClientController@add_balance');
    });
});

Route::prefix('drivers')->group(function () {
    Route::post('login','Api\DriverController@login');
    Route::middleware(['authorizedriver'])->group(function () {
        Route::get('profile','Api\DriverController@profile');
        Route::put('update','Api\DriverController@update');
        Route::put('update_fcm','Api\DriverController@update_fcm');
        Route::post('change_password','Api\DriverController@change_password');

        Route::prefix('orders')->group(function () {
            Route::get('free','Api\DriverController@free_orders');
            Route::get('my_orders','Api\DriverController@driver_orders');
            Route::put('change_status/{order}','Api\DriverController@order_change_status');
        });

    });
});

Route::prefix('cities')->group(function () {
    Route::get('','Api\CityController@index');
    Route::get('{city}','Api\CityController@show');
});

Route::prefix('packages')->group(function () {
    Route::get('','Api\PackageController@index');
    Route::get('{package}','Api\PackageController@show');
    Route::middleware(['authorizeclient'])->group(function () {
        Route::post('{package}/subscribe','Api\PackageController@subscribe');
        Route::get('my/packages','Api\PackageController@my_packages');
    });
});

Route::resource('orders', 'Api\OrderController')->middleware(['authorizeclient']);

Route::resource('addresses', 'Api\AddressController')->middleware('authorizeclient');
