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

// Route::get('/', function () {
//     return view('layouts.next');
// })->name('app');

Route::group(['namespace' => 'Admin'], function ($admin) {
    $admin->get('/', 'AdminController@index')->name('app');
    $admin->group(['prefix' => 'products'], function($product){
      $product->get('/', 'ProductController@index')->name('products');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/log', function () {
  return view('auth.login');
});