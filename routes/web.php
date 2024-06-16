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
<<<<<<< Updated upstream
use App\Http\Controllers\ProductController;

=======
<<<<<<< Updated upstream
=======
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

>>>>>>> Stashed changes
>>>>>>> Stashed changes

Route::get('/index', [HomeController::class, 'index']);
Route::get('/menus', [MenusController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
<<<<<<< Updated upstream
=======
<<<<<<< Updated upstream
=======
<<<<<<< Updated upstream
=======
Route::get('/orderpage', [OrderController::class, 'index']);
Route::get('/home', [AdminController::class, 'index'])->name('home');
>>>>>>> Stashed changes
>>>>>>> Stashed changes

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
<<<<<<< Updated upstream
=======
>>>>>>> Stashed changes
>>>>>>> Stashed changes
