<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
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

Route::get('/',[FrontendController::class,'index'])->name('home');

// Admin Routs
Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/product', ProductController::class);
