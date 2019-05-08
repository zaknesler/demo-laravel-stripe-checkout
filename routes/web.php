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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/checkout', 'CheckoutController@index')->name('checkout');

Route::get('/checkout/success', function () {
    return view('checkout.success');
})->name('checkout.success');

Route::get('/checkout/canceled', function () {
    return view('checkout.canceled');
})->name('checkout.canceled');

Route::stripeWebhooks('/webhooks/stripe');
