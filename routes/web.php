<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.welcome');
});

Route::get('/connexion', function () {
    return view('front.login');
});

Route::get('/inscription', function () {
    return view('front.register');
});

Route::get('/requests', function () {
    return view('front.requests');
});

Route::get('/documents', function () {
    return view('front.documents');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
