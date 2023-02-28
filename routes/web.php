<?php

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
    return view('UI.Home');
});
Route::get('/bikeinsure', function () {
    return view('UI.BikeInsure');
});
Route::get('/foodinsure', function () {
    return view('UI.FoodInsure');
});
Route::get('/carinsurance', 'CarInsureController@index')->name('carinsurance');
Route::get('/vaninsurance', 'VanInsureController@index')->name('vaninsurance');
Route::get('/homeinsurance', 'HomeInsureController@index')->name('homeinsurance');
Route::get('/businessinsurance', 'BusinessInsureController@index')->name('businessinsurance');
Route::get('/motorinsurance', 'MotorInsureController@index')->name('motorinsurance');
Route::get('/accinsurance', 'AccidentInsureController@index')->name('accinsurance');
Route::get('/about', 'AboutUsController@index')->name('about');
Route::get('/carmail', 'CarQuoteMailController@index')->name('carmail');
Route::get('/terms', 'TermsController@index')->name('terms');
Route::get('/privacy', 'PrivacyController@index')->name('privacy');
Route::resource('/contact', 'ContactUsController');
Route::resource('/vanquote', 'VanQuoteController');
Route::resource('/carquote', 'CarQuoteController');
Route::resource('/motorquote', 'MotorQuoteController');
Route::resource('/accquote', 'AccidentQuoteController');
Route::resource('/bikequote', 'BikeQuoteController');
Route::resource('/foodquote', 'FoodQuoteController');

Route::get('/fleetinsurance', 'FleetInsureController@index')->name('fleetinsurance');
Route::resource('/fleetquote', 'FleetQuoteController');