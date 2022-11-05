<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/',[FrontEndController::class, 'index']);

Route::get('/coba_controller', [App\Http\Controllers\CobaController::class, 'index']);

Route::get('/User/products/View', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');

Route::get('/User/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/User/products/store', [ProductController::class, 'store'])->name('products.store');

Route::delete('/User/products/{id}', [ProductController::class, 'delete'])->name('products.delete');

Route::get('/User/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/User/products/{id}', [ProductController::class, 'update'])->name('products.update');


Route::get('/admin/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');

Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');

Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category.store');

Route::delete('/admin/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');

Route::put('/admin/category/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login',[LoginController::class, 'authenticate'])->name('login.post');

Route::get('/dashboard', function() {
    return view ('dashboard');});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
