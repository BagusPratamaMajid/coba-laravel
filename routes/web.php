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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Bagus Pratama Majid",
        "email" => "baguspratama@gamil.com",
        "image" => "bagus.jpg"
    ]);
});

Route::get('/posts', function () {
    return view('posts');
});

