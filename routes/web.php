<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\FrontController as HomeFront;
use App\Http\Controllers\Admin\FrontController as AdminFront;
use App\Http\Controllers\Admin\BackController;

// HOME Routing
Route::group(['prefix' => '/home'], function () {
    Route::get('/', function () {
        return "Home Group Route";
    })->name('home-index');
});

// ADMINISTRATOR Routing
Route::group(['prefix' => '/', 'middleware' => 'checkauth'], function () {
    Route::get('/', [AdminFront::class, 'index'])->name('admin-index');
});

Route::get('/login', [AdminFront::class, 'login'])->name('login-page');
Route::get('/register', [AdminFront::class, 'register'])->name('register-page');
