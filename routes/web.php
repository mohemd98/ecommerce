<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('comment', 'App\Http\Controllers\HomeController@saveComment')->name('comment.save');


################Begin paymentGateways Routes ########################

//Route::group(['prefix' => 'offers', 'middleware' => 'auth','namespace' =>'Offers'], function () {
//    Route::get('/', 'OfferController@index')->name('offers.all');
//    Route::get('details/{offer_id}', 'OfferController@show')->name('offers.show');
//});
//
//Route::get('get-checkout-id', 'PaymentProviderController@getCheckOutId')->name('offers.checkout');

################End paymentGateways Routes ########################
