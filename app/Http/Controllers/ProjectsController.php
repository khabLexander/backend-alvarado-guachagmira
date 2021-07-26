<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = ['project1','project2','project3'];
        return response()->json(
            [
                'data' => $projects, 
                'msg'=>[
                    'summary'=>'Consulta correcta', 
                    'detail'=>' La consulta de proyectos esta correcta',
                    'code'=>'200'
                    ]
            ], 200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = 'project1';
        return response()->json(
            [
                'data' => $project, 
                'msg'=>[
                    'summary'=>'Creado correctamente', 
                    'detail'=>' El proyecto se creo correctamente',
                    'code'=>'201'
                    ]
            ], 201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project ='project1';
        return response()->json(
            [
                'data' => $project, 
                'msg'=>[
                    'summary'=>'consulta correcta', 
                    'detail'=>' la consulta de proyectos esta correcta',
                    'code'=>'200'
                    ]
            ], 200
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return response()->json(
            [
                'data' => null, 
                'msg'=>[
                    'summary'=>'Actualizado correctamente', 
                    'detail'=>' El proyecto se actualizo correctamente',
                    'code'=>'201'
                    ]
            ], 201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = 'project1';
        return response()->json(
            [
                'data' => $project, 
                'msg'=>[
                    'summary'=>'Eliminado correctamente', 
                    'detail'=>' El proyectos se elimino correctamente',
                    'code'=>'201'
                    ]
            ], 201
        );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateState(Request $request, $id)
    {
        return response()->json(
            [
                'data' => null, 
                'msg'=>[
                    'summary'=>'Actualizado correctamente', 
                    'detail'=>' El proyecto se actualizo correctamente',
                    'code'=>'201'
                    ]
            ], 201
        );
    }
}
