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

// Route::get('/', function () {
    //     return view('welcome');
    // });
    
Route::get('/', 'HomeController@index')->name('home');

Route::get('/categories', 'CategoryController@index')->name('category');

Route::get('/details/{id}', 'DetailController@index')->name('detail');



// kalo login
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@success')->name('success');
Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/products', 'DashboardProductController@index')->name('dashboard-products');
Route::get('/dashboard/products/{id}', 'DashboardProductController@details')->name('dashboard-products-detail');

// buat admin
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('product', 'ProductController');
        Route::resource('product-gallery', 'ProductGalleryController');
        Route::resource('transaction', 'TransactionController');
    });
// end admin

Auth::routes();
