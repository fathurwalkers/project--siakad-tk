<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\FrontController as HomeFront;
use App\Http\Controllers\Admin\FrontController as AdminFront;
use App\Http\Controllers\Admin\BackController;

// HOME Routing
Route::group(['prefix' => '/home'], function () {
    Route::get('/', [HomeFront::class, 'index'])->name('home-index');
});

// ADMINISTRATOR Routing
Route::group(['prefix' => '/dashboard'], function () {
    Route::get('/', [AdminFront::class, 'index'])->name('admin-index');
});
// Route::group(['prefix' => '/dashboard', 'middleware' => 'checkauth'], function () {
//     Route::get('/', [AdminFront::class, 'index'])->name('admin-index');
// });

Route::get('/login', [AdminFront::class, 'login'])->name('login-page');
Route::get('/register', [AdminFront::class, 'register'])->name('register-page');


// AUTO GENERATE USER DATA
Route::get('/generate-user', [BackController::class, 'generateUser']);

// TESTING ROUTE
Route::get('/test', [BackController::class, 'testroute']);
