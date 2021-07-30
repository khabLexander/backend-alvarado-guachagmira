<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occupations = ['High School Chemistry Teacher', 'Meth King Pin'];
        return response()->json(
            [
                'data' => $occupations,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => ' La consulta de ocupaciones esta correcta',
                    'code' => '200'
                ]
            ],
            200
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
        $occupation = 'Meth King Pin';
        return response()->json(
            [
                'data' => $occupation,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => ' la consulta de ocupación esta correcta',
                    'code' => '200'
                ]
            ],
            200
        );
    }
}
