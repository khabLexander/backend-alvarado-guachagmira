<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Winery;

class WineriesController extends Controller
{
    public function index()
    {
        // $wineries = DB::select('select * from app.wineries');
        // $wineries = DB::table('app.wineries')->get();

        $wineries = Winery::get();
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

    public function store(Request $request)
    {
        // $wineries = DB::insert('insert into app.wineries(id, name, code, color, description, status)
        // values(?,?,?,?,?,?)', [
        //     $request->id,
        //     $request->name,
        //     $request->code,
        //     $request->color,
        //     $request->description,
        //     $request->status
        // ]);
        // $wineries = DB::table('app.wineries')->insert([
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'code' => $request->code,
        //     'color' => $request->color,
        //     'description' => $request->description,
        //     'status' => $request->status
        // ]);

        // $wineries = Winery::create([

        // ]);

        $wineries = new Winery();
        $wineries->id = $request->id;
        $wineries->name = $request->name;
        $wineries->code= $request->code;
        $wineries->color = $request->color;
        $wineries->description = $request->description;
        $wineries->status= $request->status;
        $wineries->save();


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

    public function show(Winery $winery)

    {
        //SQL
        // $winery = DB::select('select * from app.wineries where id=?',[$winery]);
        
        //QUERY BUILDER
        // $winery = DB::table('app.wineries')->where('id', '=', $winery)->first();
        // $project = DB::table('app.wineries')->find($winery);
        
        //ELOQUENT
        // $wineries = Winery::find($winery);
        return response()->json(
        [
            'data' => $winery,
            'msg' => [
            'summary' => 'consulta correcta',
            'detail' => 'la consulta se realizo correctamente',
            'code' => '201'
            ]
        ], 201
        );
    }

    public function update(Request $request, $winery)
    {
        $wineries = Winery::find($winery);

        // $wineries->id = $request->id;
        $wineries->name = $request->name;
        $wineries->code= $request->code;
        $wineries->color = $request->color;
        $wineries->description = $request->description;
        $wineries->status= $request->status;
        $wineries->save();

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

    public function destroy(Winery $winery)
    {
        // $wineries = Winery::find($winery);
        // $wineries->delete();
        return response()->json(
            ['data' => $winery,
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
