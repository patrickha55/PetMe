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

// // check view by thach
// Route::get('theme/',function () {
//     return view('admin.index');
// });
// Route::get('show/',function () {
//     return view('admin.showAdmin');
// });
// Route::get('admin/',function () {
//     return view('admin.index');
// });
// Route::get('showcate/',function () {
//     return view('admin.showCategories');
// });

