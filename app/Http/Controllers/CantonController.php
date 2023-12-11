<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Province;
use Illuminate\Http\Request;

class CantonController extends Controller
{

    public function index()
    {
        $canton =  Canton::all();
        return response()->json(
            [
                'data'=>$canton,
                'msg'=>[]
            ],
        );
    }


    public function store(Request $request, Province $province)
    {
        $canton = new Canton();

        $canton->province()->associate(Province::find($request->input('province')));
        $canton->cantones = $request->cantones;
        $canton->save();

        return response()->json([
            'data'=> $canton
        ]);
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
