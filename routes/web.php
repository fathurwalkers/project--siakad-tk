<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\FrontController as HomeFront;
use App\Http\Controllers\Admin\FrontController as AdminFront;
use App\Http\Controllers\Admin\BackController;

// HOME Routing
Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeFront::class, 'index'])->name('home-index');
});

// ADMINISTRATOR Routing
Route::group(['prefix' => '/dashboard', 'middleware' => 'checkauth'], function () {
    Route::get('/', [AdminFront::class, 'index'])->name('admin-index');
    Route::post('/logout', [BackController::class, 'logout'])->name('post-logout');
});

Route::get('/login', [AdminFront::class, 'login'])->name('login-page');
Route::post('/post-login', [BackController::class, 'postLogin'])->name('post-login');
Route::get('/register', [AdminFront::class, 'register'])->name('register-page');
Route::post('/post-register', [BackController::class, 'postRegister'])->name('post-register');


// AUTO GENERATE USER DATA
Route::get('/generate-user', [BackController::class, 'generateUser']);

// TESTING ROUTE
Route::get('/test', [BackController::class, 'testroute']);
