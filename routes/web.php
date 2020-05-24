<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/login', function () {
    return view('site.login');
})->name('site.login');;
