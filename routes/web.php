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

Route::get('/login', function () {
    return view('login');
});


Route::get('/forgot-reset', function () {
    return view('forgot-reset');
});

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/livestream', function () {
    return view('livestream');
});
