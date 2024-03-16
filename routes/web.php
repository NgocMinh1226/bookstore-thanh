<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/dangnhap', 'App\Http\Controllers\CustomerController@login_customer');

Route::get('/dangky', 'App\Http\Controllers\CustomerController@register_customer');

Route::get('/dangxuat', 'App\Http\Controllers\CustomerController@logout_customer');

Route::post('/login-customer-login', 'App\Http\Controllers\CustomerController@login_customer_login');

Route::post('/add-customer', 'App\Http\Controllers\CustomerController@add_customer');

Route::get('/category-book', 'App\Http\Controllers\HomeController@category_book');

Route::get('/details-book/{slug}', 'App\Http\Controllers\ProductController@details_book');

Route::get('/cart', 'App\Http\Controllers\CartController@cart');

Route::get('/user-profile', 'App\Http\Controllers\HomeController@user_profile');

Route::get('/tim-kiem', [HomeController::class, 'timkiem']);

Route::get('/danh-muc/{slug}', [HomeController::class, 'danhmuc']);

Route::get('/we', [HomeController::class, 'we']);

Route::get('/user', [HomeController::class, 'user']);




