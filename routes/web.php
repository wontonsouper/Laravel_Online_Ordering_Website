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
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CartController;


Auth::routes();

Route::redirect('/', '/index');

Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/menus', [MenusController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/orderpage', [OrderController::class, 'orderpage'])->name('orderpage');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');


// review routes
Route::get('/review/create', [ReviewController::class, 'create'])->name('review.create');
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');

// order checkout routes
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::put('/order/{order}', [OrderController::class, 'update'])->name('orders.update');

// cart routes

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::put('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');



Route::middleware(['auth'])->group(function () {
    // product routes
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    // review routes
    Route::get('/review', [ReviewController::class, 'index'])->name('review');

    Route::put('/review/approve/{id}', [ReviewController::class, 'approve'])->name('review.approve');
    Route::delete('/review/destroy/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');

    // order routes
    Route::get('/order', [OrderController::class, 'index'])->name('order');


    // user routes
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');

    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    // mail routes
    Route::get('/mail', [MailController::class, 'index'])->name('mail');

    Route::post('/mail/send-email', [MailController::class, 'send'])->name('mail.send-email');
  
});