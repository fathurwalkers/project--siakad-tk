<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\FrontController as HomeFront;
use App\Http\Controllers\Admin\FrontController as AdminFront;
use App\Http\Controllers\Admin\BackController;

Route::get('/', function () {
    return "WEBSITE OK!";
});

// HOME Routing
Route::group(['prefix' => '/home'], function () {
    Route::get('/', function () {
        return "Home Group Route";
    });
});



// Administrator Routing
Route::group([], function () {
    Route::get('/', [AdminFront::class, 'index']);
});
