<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WineriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wineries = ['Bodega1', 'bodega2'];
        return response()->json(
            [
            'data' => $wineries,
            'msg' => [
                'summary' => 'consulta correcta',
                'detail' => 'la consulta se realizo correctamente',
                'code' => '200'
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
        $wineries='bodega1';
        return response()->json(
            [
            'data' => $wineries,
            'msg' => [
                'summary' => 'consulta correcta',
                'detail' => 'Se creo correctamente',
                'code' => '201'
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
        $wineries='bodega1';
        return response()->json(
        [
            'data' => $wineries,
            'msg' => [
            'summary' => 'consulta correcta',
            'detail' => 'la consulta se realizo correctamente',
            'code' => '201'
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
    public function update(Request $request, $id)
    {
        return response()->json(
        [
            'data' => null,
            'msg' => [
            'summary' => 'consulta correcta',
            'detail' => 'Se actualizo correctamente ',
            'code' => '201'
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
        $wineries = 'Bodega1';
        return response()->json(
            ['data' => $wineries,
            'msg' => [
            'summary' => 'consulta correcta',
            'detail' => 'Se elimino correctamente ',
            'code' => '201'
            ]
        ], 201
        );
    }

    public function updateState()
    {
        $wineries = 'Bodega1';
        return response()->json(
        [
            'data' => $wineries,
            'msg' => [
            'summary' => 'consulta correcta',
            'detail' => 'Se actualizo el estado correctamente ',
            'code' => '201'
            ]
        ], 201
        );
    }
}
