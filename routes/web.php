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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin tamplate load
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'showAdminLoginForm']) -> name('admin.login');
Route::get('/admin/register', [App\Http\Controllers\AdminController::class, 'showAdminRegisterForm']) -> name('admin.register');
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'showAdminDashboard']) -> name('admin.dashboard');

Route::POST('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login']) -> name('admin.login');
Route::POST('/admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']) -> name('admin.logout');
Route::POST('/admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']) -> name('admin.register');



//all post route
Route::resource('post', 'App\Http\Controllers\PostController');


//post category routes
Route::resource('Category', 'App\Http\Controllers\CategoryController');
Route::get('Category/status-inactive/{id}', 'App\Http\Controllers\CategoryController@statusUpdateInactive');
Route::get('Category/status-active/{id}', 'App\Http\Controllers\CategoryController@statusUpdateActive');

//post tag route
Route::resource('tag', 'App\Http\Controllers\TagController');


