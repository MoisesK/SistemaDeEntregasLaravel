<?php

use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\DeliveryMenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return to_route('deliveries.index');
});

Route::controller(DeliveryController::class)->group(function () {
    Route::get('/deliveries', 'index')->name('deliveries.index');
    Route::get('/deliveries/create', 'create')->name('deliveries.create');
    Route::post('/deliveries/save', 'store')->name('deliveries.store');
    Route::delete('/deliveries/destroy/{delivery}', 'destroy')->name('deliveries.destroy');
    Route::get('/deliveries/edit/{delivery}', 'edit')->name('deliveries.edit');
    Route::put('/deliveries/update/{delivery}', 'update')->name('deliveries.update');
});

Route::controller(DeliveryMenController::class)->group(function () {
    Route::get('/deliverymens', 'index')->name('deliverymens.index');
    Route::get('/deliverymens/create', 'create')->name('deliverymens.create');
    Route::post('/deliverymens/save', 'store')->name('deliverymens.store');
    Route::delete('/deliverymens/destroy/{deliveryMan}', 'destroy')->name('deliverymens.destroy');
});
