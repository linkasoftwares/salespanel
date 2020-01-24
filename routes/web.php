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
    // Produtos
    $admin->group(['prefix' => 'produtos'], function($product){
        $product->get('/', 'ProductController@index')->name('products');
    });
    // Pedidos
    $admin->group(['prefix' => 'encomendas'], function($product){
        $product->get('/', 'OrderController@index')->name('orders');
    });
    // Deliveries
    $admin->group(['prefix' => 'entregas'], function($product){
        $product->get('/', 'DeliveryController@index')->name('deliveries');
    });
    // Clients
    $admin->group(['prefix' => 'clientes'], function($product){
        $product->get('/', 'ClientController@index')->name('clients');
        $product->get('/novo', 'ClientController@newClient')->name('clients.new');
        $product->post('/novo', 'ClientController@registerClient')->name('clients.register');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/log', function () {
  return view('auth.login');
});
