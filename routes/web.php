<?php

use App\Http\Controllers\DeliveryController;
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

Route::controller(DeliveryController::class)->group(function () {
    Route::get('/', 'index')->name('deliveries.index');
    Route::get('/deliveries/create', 'create')->name('deliveries.create');
    Route::post('/deliveries/save', 'store')->name('deliveries.store');
    Route::delete('/deliveries/destroy/{id}', 'destroy')->name('deliveries.destroy');
});
