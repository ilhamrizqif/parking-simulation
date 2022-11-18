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
Route::get('/checkin', function () {
    return view('checkin');
});
Route::get('/checkout', function () {
    return view('checkin');
});
Route::get('/report', function () {
    return view('dashboard');
});

