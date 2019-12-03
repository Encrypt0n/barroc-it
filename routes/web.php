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
Route::resource('/reviewQuotation', 'finance\quotationreviewController');
Route::resource('privacy', 'privacyController');
Route::resource('supplies', 'SupplyController');

Route::resource('jobTicket', 'jobTicketController');
Route::resource('/failureRequest', 'customer\failureRequestController');
Route::resource('jobTicket', 'jobTicketController');
Route::resource('/calendar', 'maintenance\calendarController');
Route::resource('leases', 'LeaseController');
Route::resource('/customerEdit', 'finance\customerEditController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('customerCreate', 'customerController@create');
//Route::get('reviewindexQuotation', 'finance\quotationreviewController@index');
//Route::get('reviewshowQuotation', 'finance\quotationreviewController@show');
Route::post('store', 'customerController@store');

Auth::routes();



