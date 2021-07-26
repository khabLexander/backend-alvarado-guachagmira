<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

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

// Route::get('characters/{character}/occupations/{occupation}',function (){
//     return 'Meth King Pin';
//  });

// Route::get('characters/{character}/occupations',function (){
//     return ['High School Chemistry Teacher','Meth King Pin'];
//  });
  
// Route::post('episodes/{episode}/characters',function (){
//     return "Created characters";
// });

// Route::put('episodes/{episode}/characters/{character}',function (){
//     return "Updated characters";
// });

// Route::delete('episodes/{episode}/characters/{character}',function (){
//     return "Deleted character";
// });
 
// Route::get('projects',function (){
//    $projects = ['project1','project2','project3'];
//    return response()->json(
//       [
//          'data' => $projects, 
//          'msg'=>[
//                'summary'=>'Consulta correcta', 
//                'detail'=>' La consulta de proyectos esta correcta',
//                'code'=>'200'
//                ]
//       ], 200
//    );
// });

// Route::get('projects/{project}',function (){
//    $project ='project1';
//    return response()->json(
//       [
//          'data' => $project, 
//          'msg'=>[
//                'summary'=>'consulta correcta', 
//                'detail'=>' la consulta de proyectos esta correcta',
//                'code'=>'200'
//                ]
//       ], 200
//    );
// });

// Route::post('projects',function (){
//    $project = 'project1';
//    return response()->json(
//       [
//          'data' => $project, 
//          'msg'=>[
//                'summary'=>'Creado correctamente', 
//                'detail'=>' El proyecto se creo correctamente',
//                'code'=>'201'
//                ]
//       ], 201
//    );
// });

// Route::put('projects/{project}',function (){
//    return response()->json(
//       [
//          'data' => null, 
//          'msg'=>[
//                'summary'=>'Actualizado correctamente', 
//                'detail'=>' El proyecto se actualizo correctamente',
//                'code'=>'201'
//                ]
//       ], 201
//    );
// });

// Route::delete('projects/{project}',function (){
//    $project = 'project1';
//    return response()->json(
//       [
//          'data' => $project, 
//          'msg'=>[
//                'summary'=>'Eliminado correctamente', 
//                'detail'=>' El proyectos se elimino correctamente',
//                'code'=>'201'
//                ]
//       ], 201
//    );
// });



Route :: apiResource('projects', ProjectsController::class);


Route::prefix('project')->group(function () {
    Route::prefix('{project}')->group(function () {
        Route::patch('state',[ProjectsController::class,'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state',[ProjectsController::class,'updateState']);
    });
});