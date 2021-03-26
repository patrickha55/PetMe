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
   Route::get('dashboard',function (){
       return view('admin.index');
   });
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
