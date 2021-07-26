<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


