<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('sc_login');

Route::post('/login', [UserController::class, 'login'])->name('login');


Route::get('/registration', function () {
    return view('registration');
});
Route::post('/store', [UserController::class, 'store'])->name('store');
