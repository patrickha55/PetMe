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
    Route::get('/register', 'RegisterController@create')->name('register');
});

Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>'role:administrator'], function () {
    Route::get('/', 'UserController@index');
});



// check view by thach 
Route::get('theme/',function () {
    return view('admin.index');
});
Route::get('show/',function () {
    return view('admin.showAdmin');
});
Route::get('admin/',function () {
    return view('admin.index');
});
Route::get('showcate/',function () {
    return view('admin.showCategories');
});

