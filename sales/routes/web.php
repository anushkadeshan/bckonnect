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

Route::group(['middleware' => ['auth']], function() {

Route::get('products','ProductController@index')->name('products');
Route::post('add-product','ProductController@create');

Route::get('invoices','InvoiceController@index')->name('invoices');
Route::post('add-invoice','InvoiceController@create');

Route::get('staffs','StaffController@index')->name('staffs');




});