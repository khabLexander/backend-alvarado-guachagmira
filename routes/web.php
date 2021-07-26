<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Tarea crear rutas dependientes

Route::get('characters/{character}/occupations/{occupation}',function (){
    return 'Meth King Pin';
 });

Route::get('characters/{character}/occupations',function (){
    return ['High School Chemistry Teacher','Meth King Pin'];
 });
  
Route::post('episodes',function (){
    return "Creado";
});

Route::put('episodes/{episode}/characters',function (){
    return "Updated characters";
});

Route::delete('episodes/{episode}/characters/{character}',function (){
    return "Deleted character";
});
 
