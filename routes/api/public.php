<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\EpisodesController;
/*
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('projects', function(){
//     return "Hola mundo";
// });

Route::get('wineries', function () {
    return ['Bodega1', 'bodega2'];
});

Route::get('wineries/{id}', function () {
    return 'Bodega1';
});

Route::post('wineries', function () {
    return 'bodega creada';
});

Route::put('wineries/{id}', function () {
    return 'bodega actualizado';
});
Route::delete('wineries/{id}', function () {
    return "bodega Eliminado";
});



Route::get('wineries/{id}/products', function () {
    return ['productos1', 'productos2'];
});

Route::get('wineries/{id}/products/{code}', function () {
    return 'producto1';
});

Route::post('wineries/{id}/products', function () {
    return 'producto creado';
});

Route::put('wineries/{id}/products/{code}', function () {
    return 'Producto actualizado';
});
Route::delete('wineries/{id}/products/{code}', function () {
    return "Producto Eliminado";
});



//Rutas
Route::apiResource('projects', ProjectsController::class);
Route::prefix('project')->group(function () {
    Route::prefix('{project}')->group(function () {
        Route::patch('state', [ProjectsController::class, 'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state', [ProjectsController::class, 'updateState']);
    });
});

Route::apiResource('projects.authors', AuthorsController::class);
Route::prefix('project/{project}/authors')->group(function () {
    Route::prefix('{author}')->group(function () {
        Route::patch('state', [ProjectsController::class, 'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::get('state', [ProjectsController::class, 'updateState']);
    });
});
// OLD
// Route::apiResource('characters/{character}/occupations', CharactersController::class);

// Route::apiResource('episodes/{episode}/characters', EpisodesController::class);

Route::apiResource('characters.occupations', CharactersController::class);

Route::apiResource('episodes.characters', EpisodesController::class);

Route::prefix('episode/{episode}/characters')->group(function () {
    Route::prefix('{author}')->group(function () {
        Route::patch('state', [EpisodesController::class, 'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state', [EpisodesController::class, 'updateState']);
    });
});

Route::get('test/{test}', function () {
    return 'test';
});
Route::get('test/students', function () {
    return 'students';
})->name('students');
