<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = ['Kevin', 'Juan', 'Pedro'];
        return response()->json(
            [
                'data' => $authors,
                'msg' => [
                    'summary' => 'Consulta correta',
                    'detail' => 'La consulta de autores esta correcta',
                    'code' => '200'
                ]
            ],
            200
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
        //alguna cosa debo hacer con el request
        //y utulizar el modelo por ahora asi
        $author = 'Roberto';
        return response()->json(
            [
                'data' => $author,
                'msg' => [
                    'summary' => 'Creado correctamente',
                    'detail' => 'El author se creo correctamente',
                    'code' => '201'
                ]
            ],
            201
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
        //como recibo el id de la ruta
        //hago alguna busqueda con el modelo que controle esto
        //por el momento esto para simular
        $author = 'Robert';
        return response()->json(
            [
                'data' => $author,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => 'La consulta de autores esta correcta',
                    'code' => '200'
                ]
            ],
            200
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
                'msg' => [
                    'summary' => 'Actulizado correctamente',
                    'detail' => 'El author se actualizo correctamente',
                    'code' => '201'
                ]
            ],
            201
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
        $author = 'Robert';
        return response()->json(
            [
                'data' => $author,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'El autor fue eliminado correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
