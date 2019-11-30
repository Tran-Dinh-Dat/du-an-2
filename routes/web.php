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
Route::get('productDetail/{id}', 'HomeController@productDetail')->name('productDetail');
Route::get('categories/{id?}', 'HomeController@categories')->name('categories');
Route::post('comment/{id}', 'HomeController@comment')->name('comment');

// cart
Route::resource('cart', 'CartController');
Route::get('addCart/{id}', 'CartController@addCart')->name('addCart');
Route::get('cart', 'CartController@cart')->name('cart');

// profile
Route::get('profile', 'ProfileController@index')->name('profile.index');
Route::post('profile/{id}', 'ProfileController@update')->name('profile.update');

// admin
Route::get('getadmin','adminController@getadmin')->name('getadmin');
Route::get('list_category','adminController@list_category')->name('list_category');
Route::get('add_category','adminController@add_category')->name('add_category');
Route::post('addnewcategory','adminController@addnewcategory')->name('addnewcategory');
Route::get('category_delete/{id}','adminController@category_delete')->name('category_delete');
Route::get('category_edit/{id}','adminController@category_edit')->name('category_edit');
Route::post('editcategory_save/{id}','adminController@editcategory_save')->name('editcategory_save');
Route::get('list_product','adminController@list_product')->name('list_product');
Route::get('add_product','adminController@add_product')->name('add_product');
Route::post('add_product_save','adminController@add_product_save')->name('add_product_save');
Route::get('product_detail/{id}','adminController@product_detail')->name('product_detail');
