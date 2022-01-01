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
    return view('front.pages.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about_us');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about_us');
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
