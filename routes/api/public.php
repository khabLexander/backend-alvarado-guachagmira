<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvwinerer within a group which
| is assigned the "api" mwinerdleware group. Enjoy building your API!
|
*/

//php artisan make:controller ProjectsController --api
//php artisan route:list

use App\Http\Controllers\WineriesController;
use App\Http\Controllers\ProductsController;


// Route::apiResource('wineries',WineriesController::class);
// Route::apiResource('wineries.products',ProductsController::class);

// Route::prefix('winery')->group(function () {
//     Route::prefix('{winery}')->group(function () {
//         Route::get('',[WineriesController::class, 'updateState']);
//     });
// });

