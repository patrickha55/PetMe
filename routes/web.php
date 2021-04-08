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

/*
 *  Admin
 */

Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>'role:administrator'], function () {

    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/statistic', 'DashboardController@statistic')->name('admin.statistic');

    Route::prefix('user-management')->group(function (){
        Route::resource('/users','UserController');
        Route::resource('/admins', 'AdminController');
    });

    Route::resource('/wishlists', 'AdminFavoriteController');

    Route::resource('/orders', 'AdminOrderController');
});

Route::group(['prefix'=>'admin', 'middleware'=>'role:administrator'], function () {
    Route::group(['prefix' => 'product-management'], function () {

        Route::resource('/supplier', 'SupplierController');

        Route::get('/category/createSubCategory', 'CategoryController@createSubCategory');
        Route::resource('/productCategory', 'ProductCategoryController')->only([
            'edit', 'destroy'
        ]);
        Route::resource('/category', 'CategoryController');

        Route::resource('/product', 'ProductController');
        Route::get('/store-locations', function(){
            return view('admin.location.index');
        })->name('admin.store-location');
    });
});

//@Guest  ------

Route::get('/', 'HomeController@home')->name('home');
Route::get('/products', 'HomeController@index')->name('products');
Route::get('home/{product}/show','HomeController@show')->name('home.show');
Route::get('home/{animal_category}/showFilterAnimal','HomeController@showFilterAnimalProducts')->name('home.showFilterAnimalProducts');
Route::get('home/{product_category}/showFilter','HomeController@showFilterProducts')->name('home.showFilterProducts');

Route::get('/contact', function() {
    return view('user.contact');
});

Route::get('/about', function(){
    return view('user.about');
});

//@endGuest ------

//@User ------

Route::group(['middleware'=>'auth', 'namespace'=>'User'], function () {
    Route::get('/user/edit_password', 'UserController@editPassword')->name('user.editPassword');

    Route::resource('/user/address', 'AddressController');
    Route::resource('/user', 'UserController');
});

Route::group(['namespace' => 'Auth'], function(){
    Route::get('/login', 'LoginController@create')->name('login');
    Route::post('/login','LoginController@login');
    Route::get('/register', 'RegisterController@create');
    Route::post('/register', 'RegisterController@register');
    Route::post('/logout', 'LoginController@logout');
});

// Review
Route::resource('/product/{product}/review', 'ProductReviewController');

//Cart and Order
Route::middleware(['auth'])->group(function () {
    /*
     * Cart
    */

    Route::get('/checkout', 'CartController@checkout')->name('cart.checkout');
    Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add');
    Route::get('/cart/{product}/plusQuantity', 'CartController@updatePlusCart')->name('cart.plus');
    Route::get('/cart/{product}/minusQuantity', 'CartController@updateMinusCart')->name('cart.minus');
    Route::post('/cart/{product}/updateCart', 'CartController@updateCart')->name('cart.updateCart');
    Route::get('/cart/{product}/destroyItem', 'CartController@destroyCartItem')->name('cart.deleteItem');
    Route::resource('/cart', 'CartController');

    /*
     * Order
     */
    Route::resource('/order',  'OrderController');
    Route::get('/add-to-wishlist/{product}','FavoriteController@store')->name('wishlist.store');
    Route::post('/wishlist/{product_id}/{user_id}', 'FavoriteController@delete')->name('wishlist.delete');
    Route::resource('/wishlist', 'FavoriteController')->except('store');
});


//@endUser  ------


//Ngan check route
Route::get('/compare', function() {
    return view('product.compare');
});


