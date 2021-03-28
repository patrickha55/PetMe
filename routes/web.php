<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();



Route::get('/', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Auth'], function(){
    Route::get('/login', 'LoginController@create')->name('login');
    Route::post('/login','LoginController@login');
    Route::get('/register', 'RegisterController@create');
    Route::post('/register', 'RegisterController@register');
    Route::post('/logout', 'LoginController@logout');
});

Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>'role:administrator'], function () {

    Route::get('/', 'DashboardController@index');

    Route::prefix('user-management')->group(function (){
        Route::resource('/users','UserController');
        Route::resource('/admins', 'AdminController');
    });
});
Route::group(['prefix'=>'admin', 'middleware'=>'role:administrator'], function () {
    Route::group(['prefix' => 'product-management'], function () {

        Route::resource('/supplier', 'SupplierController');

        Route::resource('/category', 'CategoryController');


        Route::resource('/product', 'ProductController');

    });
});

// check view by thach



// check view by ngan
Route::get('/index',function () {
    return view('user.index');
});
Route::get('/editprofile',function () {
    return view('user.editprofile');
});
Route::get('/changepassword',function () {
    return view('user.changepassword');
});
Route::get('/viewcart',function () {
    return view('user.viewcart');
});
Route::get('/checkout',function () {
    return view('user.checkout');
});
Route::get('/cat',function () {
    return view('user.cat');
});
Route::get('/dog',function () {
    return view('user.dog');
});
Route::get('/wishlist',function () {
    return view('user.wishlist');
});
Route::get('/main',function () {
    return view('user.main');
});

Route::get('home',function(){
    return view('user.home');
});
