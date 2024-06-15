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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

Auth::routes();

Route::redirect('/', '/index');
Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::get('/index', [HomeController::class, 'index']);
Route::get('/menus', [MenusController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});
