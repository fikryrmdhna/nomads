<?php

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

use App\Http\Controllers\Admin\DashboardController;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/details', 'DetailsController@index')->name('details');
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/success', 'SuccessController@index')->name('success');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
    });
