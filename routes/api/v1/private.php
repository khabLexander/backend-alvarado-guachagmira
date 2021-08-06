<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\WineryController;
use App\Http\Controllers\V1\ProductController;


Route::apiResource('wineries',WineryController::class);
Route::apiResource('wineries.products',ProductController::class);

Route::prefix('winery')->group(function () {
    Route::prefix('{winery}')->group(function () {
        Route::patch('states',[WineryController::class, 'updateState']);
    });
});
Route::prefix('winery')->group(function () {
    Route::patch('destroy',[WineryController::class, 'destroys']);
});

