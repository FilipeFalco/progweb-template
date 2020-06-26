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
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/chat-admin', function () {
    return view('chat-admin');
})->name('chat-admin');

Route::get('/chat', function () {
    return view('chat-client');
})->name('chat-client');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::resource('customers', 'CustomersController');



