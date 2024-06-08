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

Route::get('/user/{id}', function ($id) {
    echo"User ID :" . $id;
});
Route::get('/about', function () {
    echo"Halaman about";
});
Route::get('/mahasiswa', function () {
    echo"Halaman Mahasiswa";
});
Route::get('/user/{name?}', function ($name = "Kelly") {
    echo"Halo Saya :" . $name;
});