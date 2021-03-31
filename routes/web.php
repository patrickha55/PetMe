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

/*
 * Client
 */

//Route::get('cart/add/', 'CartController@create')->name('cart.add');

/*
 * Test Product review - phat
*/
//Route::get('/product/{product}/show', 'HomeController@show')->name('home.show');




Route::group(['namespace' => 'Auth'], function(){
    Route::get('/login', 'LoginController@create')->name('login');
    Route::post('/login','LoginController@login');
    Route::get('/register', 'RegisterController@create');
    Route::post('/register', 'RegisterController@register');
    Route::post('/logout', 'LoginController@logout');

});

/*
 *  Admin
 */

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

        Route::get('/category/createSubCategory', 'CategoryController@createSubCategory');
        Route::resource('/category', 'CategoryController');

        Route::resource('/product', 'ProductController');

    });
});


// check view by thach





Route::get('home',function(){
    return view('user.home');
});

//Route::get('/cart/apply-coupon', 'CartController@applyCoupon')->name('cart.coupon')->middleware('auth');


//@Guest  ------ 


Route::get('/', 'HomeController@index')->name('home');
Route::get('home/{id}/show','HomeController@show')->name('home.show');
//@endGuest ------
//@User ------
Route::middleware(['auth'])->group(function () {
    
    Route::get('cart', 'CartController@index')->name('cart.index');
    Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy');
    Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update');
    Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
    Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add');
    Route::resource('/order',  'OrderController');
    
    Route::resource('/product/review', 'ProductReviewController');

Route::get('cart', 'CartController@index')->name('cart.index');
}); 
//@endUser  ------ 
