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
    return view('auth/login');
})->name('auth/login');


Route::get('/chat-admin', function () {
    return view('chat-admin');
})->name('chat-admin');

Route::get('/chat', function () {
    return view('chat-client');
})->name('chat-client');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/login2', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/lista', 'UsuarioController@index');


Auth::routes();

Route::get('/menu', 'HomeController@index')->name('menu');

