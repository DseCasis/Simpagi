<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Webpatser\Countries\Countries;

class ProvinceController extends Controller
{
    public function index()
    {
        $province =  Countries::all();
        return response()->json(
            [
                'data'=>$province,
                'msg'=>[]
            ],
        );
    }

    public function store(Request $request)
    {
//        $province = new Province();
//        $province->id = $request->id;
//        $province->provincias = $request->provincias;
//        $province->save();
//
//        return response()->json([
//            'data' => $province,
//            'msg' => [
//                'summary' => 'Actualizado correctamente',
//                'datail' => 'La provincia se actualizo de manera correcta',
//                'code' => '201'
//            ]
//        ]);
    }

    public function show($province)
    {
        //QUERY BUILDER
        $provinces = Province::find($province);
        return response()->json(
            [
                'data'=>$provinces,
                'msg'=>[]
            ],
        );
    }

    public function update(Request $request, $province)
    {
//        $province = Province::find($province);
//        $province->provincias = $request->provincias;
//        $province->save();
//
//        return response()->json([
//            'data' => $province,
//            'msg' => []
//        ]);
    }

    public function destroy(Province $province)
    {
//        $province->delete();
//        return response()->json([
//            'msg' => []
//        ]);
    }
}
