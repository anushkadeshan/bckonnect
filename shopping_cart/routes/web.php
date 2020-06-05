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

Route::redirect('/','/home');

Auth::routes();

Route::get('/products/search', 'ProductController@search')->name('products.search');
Route::resource('products', 'ProductController');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/delete/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');
Route::get('/cart/apply-coupon', 'CartController@applyCoupon')->name('cart.coupon')->middleware('auth');

Route::resource('orders', 'OrderController')->middleware('auth');
//paypal
Route::get('paypal/checkout/{order}','PayPalController@getExpressCheckout')->name('paypal.checkout')->middleware('auth');
Route::get('paypal/checkout-success/{order}','PayPalController@getExpressCheckoutSuccess')->name('paypal.success')->middleware('auth');
Route::get('paypal/checkout-cancel','PayPalController@cancelPage')->name('paypal.cancel')->middleware('auth');

//shop
Route::resource('shops','ShopController')->middleware('auth');

//wishlist
Route::get('wishlist','WishListController@index')->name('wishlist.show')->middleware('auth');
Route::get('wishlist/remove/{id}','WishListController@delete')->name('wishlist.remove')->middleware('auth');

//review
Route::resource('review', 'ProductReviewController')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
