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

Route::get('/home', function () {
    return view('website-views.index');
});

Route::get('/login', function () {
    return view('website-views.login');
});

Route::get('/otp', function () {
    return view('website-views.otp');
});

Route::get('/contact-us', function () {
    return view('website-views.contact-us');
});