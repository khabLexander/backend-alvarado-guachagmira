<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Winery;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Winery $winery)
    {
        $products = $winery->products()->where('winery_id', $winery->id)->get();
        // $products = Product::get();
        return response()->json(
            [
            'data' => $products,
            'msg' => [
                'summary' => 'consulta correcta',
                'detail' => 'la consulta se realizo correctamente',
                'code' => '200'
            ]
            ], 200
        );
    }

    public function store(Request $request, Winery $winery)

    {
        $products = new Product();

        // $winery = Winery::find($request->winery['id']);
        $products->winery()->associate($winery);
        
        $products->id = $request->id;
        $products->code = $request->code;
        $products->description = $request->description;
        $products->price= $request->price;
        $products->business= $request->business;
        $products->actived = $request->actived;
        $products->date= $request->date;
        $products->save();

        return response()->json(
            [
            'data' => $products,
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
     * @param  int  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        // $products = $winery->products()->where('winery_id', $winery->id)->get();
        $product = Product::find($product);
        return response()->json(
        [
            'data' => $product,
            'msg' => [
            'summary' => 'consulta correcta',
            'detail' => 'la consulta se realizo correctamente',
            'code' => '201'
            ]
        ], 201
        );
    }

    public function update(Request $request, $product)
    {
        $products = Product::find($product);
        // $products = $winery->products()->where('winery_id', $winery->id)->get();

        // $products->id = $request->id;
        $products->code= $request->code;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->business = $request->business;
        $products->actived= $request->actived;
        $products->date= $request->date;
        $products->save();

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
     * @param  int  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Winery $winery, $product)
    {
        $product = $winery->products()->where('winery_id', $winery->id)->delete();

        // $product = Product::find($product);
        // $product->delete();
        return response()->json(
            ['data' => $product,
            'msg' => [
            'summary' => 'consulta correcta',
            'detail' => 'Se elimino correctamente ',
            'code' => '201'
            ]
        ], 201
        );
    }
}
