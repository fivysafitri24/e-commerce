<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/shop',[App\Http\Controllers\ShopController::class, 'index'])->name('shop');
Route::get('/product',[App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::get('/contact',[App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' =>'admin'], function() {
    Route::get("/", [App\Http\Controllers\Admin\DashboardController::class, "index"]) -> name("dashboard");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
