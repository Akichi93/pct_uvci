<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;


Route::get('/', [HomeController::class, 'home']);
Route::get('/connexion', [HomeController::class, 'loginPage']);

// Route::get('/', function () {
//     return view('front.welcome');
// });

// Route::get('/connexion', function () {
//     return view('front.login');
// });

Route::get('/inscription', function () {
    return view('front.register');
});

Route::get('/requests', function () {
    return view('front.requests');
});

Route::get('/documents', function () {
    return view('front.documents');
});

// TODO: Creation de route pour l'ajout des users et leurs connexion ensuite login admin


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
