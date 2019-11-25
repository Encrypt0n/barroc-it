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



Route::resource('quotationRequest', 'quotationRequestController');
Route::resource('createQuotation', 'createQuotationController');
Route::resource('customer', 'customerController');
Route::resource('quotationreview', 'finance\quotationreviewController');
Route::resource('privacy', 'privacyController');
Route::resource('products', 'ProductController');
Route::resource('jobTicket', 'jobTicketController');
<<<<<<< HEAD
=======
Route::resource('/failureRequest', 'customer\failureRequestController');
>>>>>>> master
Route::get('/home', 'HomeController@index')->name('home');
Route::get('customerCreate', 'customerController@create');
Route::get('quotationreviewindex', 'finance\quotationreviewController@index');
Route::get('quotationreviewshow', 'finance\quotationreviewController@show');
Route::post('store', 'customerController@store');

Auth::routes();



