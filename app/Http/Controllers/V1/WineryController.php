<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Wineries\WineryResource;
use App\Http\Resources\V1\Wineries\WineryCollection;
use App\Http\Requests\V1\Wineries\StoreWineryRequest;
use App\Http\Requests\V1\Wineries\UpdateWineryRequest;
use App\Http\Requests\V1\Wineries\DestroyWineryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Winery;

class WineryController extends Controller
{
    public function index()
    {
        $wineries= Winery::get();
        return new WineryCollection($wineries);
        
    }

    public function store(StoreWineryRequest $request)
    {
        $winery = new Winery();
        $winery->id = $request->input('id');
        $winery->name = $request->input('name');
        $winery->code= $request->input('code');
        $winery->color = $request->input('color');
        $winery->description = $request->input('description');
        $winery->status= $request->input('status');
        $winery->save();

        return response()->json(
            [
            'data' => $winery,
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
        return new WineryResource($winery);
    }

    public function update(UpdateWineryRequest $request, Winery $winery)
    {
        // $wineries = Winery::find($winery);

        // $wineries->id = $request->id;
        $winery->name = $request->input('name');
        $winery->code= $request->input('code');
        $winery->color = $request->input('color');
        $winery->description = $request->input('description');
        $winery->status= $request->input('status');
        $winery->save();

        return response()->json(
        [
            'data' => $winery,
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
        $winery->delete();
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

    public function destroys(Request $request)
    {
        Winery::destroy($request->input('ids'));
        // $wineries->delete();
        return response()->json(
            ['data' => null,
            'msg' => [
            'summary' => 'consulta correcta',
            'detail' => 'Se elimino correctamente ',
            'code' => '201'
            ]
        ], 201
        );
    }

    public function updateState(Winery $winery, Request $request)
    {
        $winery->status = $request->status;

        return response()->json(
        [
            'data' => $winery,
            'msg' => [
            'summary' => 'consulta correcta',
            'detail' => 'Se actualizo el estado correctamente ',
            'code' => '201'
            ]
        ], 201
        );
    }
}
