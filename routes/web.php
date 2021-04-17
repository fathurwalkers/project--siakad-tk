<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\FrontController as HomeFront;
use App\Http\Controllers\Admin\FrontController as AdminFront;
use App\Http\Controllers\Admin\BackController;

// HOME Routing
Route::group(['prefix' => '/home'], function () {
    Route::get('/', function () {
        return "Home Group Route";
    });
});

// Administrator Routing
Route::group(['prefix' => '/'], function () {
    Route::get('/', [AdminFront::class, 'index']);
});

Route::get('/login', [AdminFront::class, 'login']);
Route::get('/register', [AdminFront::class, 'register']);
