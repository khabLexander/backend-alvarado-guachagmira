<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $character = 'Luu Muu';
        return response()->json(
            [
                'data' => $character,
                'msg' => [
                    'summary' => 'Creado correctamente',
                    'detail' => ' El personaje se creo correctamente',
                    'code' => '201'
                ]
            ],
            201
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
                    'summary' => 'Actualizado correctamente',
                    'detail' => ' El personaje se actualizo correctamente',
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
        $character = 'Luu Moo';
        return response()->json(
            [
                'data' => $character,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => ' El personaje se elimino correctamente',
                    'code' => '201'
                ]
            ],
            201
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
                'msg' => [
                    'summary' => 'Actualizado correctamente',
                    'detail' => ' El personaje se actualizo correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
