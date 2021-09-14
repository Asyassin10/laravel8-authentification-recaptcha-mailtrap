<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProuductController;
use App\Http\Controllers\ActivationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Models\Category;

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




Route::get('/activate/{code}', [ActivationController::class, 'activation'])->name('user.activate');
Route::get('/resend/{email}', [ActivationController::class, 'resendCode'])->name('resend');
Route::resource('products', ProuductController::class);
Route::get('products/{prouduct}', [ProuductController::class, 'show'])->name('show');
Route::get('products/category/{category}', [HomeController::class, 'getProductsBycategpry'])->name('Categories');;

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');