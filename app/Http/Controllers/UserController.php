<?php

namespace App\Http\Controllers;

use App\Http\Resources\Users\UserCollection;
use App\Http\Resources\Users\UserResource;
use App\Models\AcademicTitle;
use App\Models\AssociatedLocation;
use App\Models\Busy;
use App\Models\EthnicGroup;
use App\Models\ExperimentalStation;
use App\Models\Funding;
use App\Models\Nationality;
use App\Models\PriorityGroup;
use App\Models\Process;
use App\Models\Regimen;
use App\Models\Training;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::get();
        return (new UserCollection($users))->additional([
            'msg'=>[
                'summary' => 'success',
                'detail' => '',
                'code' => '200'
            ]
        ])->response()->setStatusCode(200);
    }

    public function getLocation($id){
        $associatedLocations = ExperimentalStation::join('associated_locations', 'experimental_stations.id', '=', 'associated_locations.experimental_station_id')
            ->join('provinces', 'experimental_stations.province_id', '=', 'provinces.id')
            ->select('experimental_stations.*', 'provinces.*')
            ->where('associated_locations.id', $id)
            ->get();
        return response()->json($associatedLocations);
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->cedula = $request->input('cedula');
        $user->nombre= $request->input('nombre');
        $user->apellido= $request->input('apellido');
        $user->genero= $request->input('genero');
        $user->fecha_nacimiento= $request->input('fecha_nacimiento');
        $user->fecha_ingreso= $request->input('fecha_ingreso');
        $user->numero_imposiciones= $request->input('numero_imposiciones');
        $user->telefono_institucional= $request->input('telefono_institucional');
        $user->textension_telefonica= $request->input('textension_telefonica');
        $user->correo_institucional= $request->input('correo_institucional');
        $user->actividad_esigef= $request->input('actividad_esigef');
        $user->viatico_residencia= $request->input('viatico_residencia');
        $user->migrante_retornado= $request->input('migrante_retornado');
        $user->remuneracion = $request->input('remuneracion');
        $user->ethnic()->associate(EthnicGroup::find($request->input('grupo_etnico')));
        $user->nationalitie()->associate(Nationality::find($request->input('nacionalidad')));
        $user->associatedLocation()->associate(AssociatedLocation::find($request->input('localidad_asociada')));
        $user->process()->associate(Process::find($request->input('proceso')));
        $user->busy()->associate(Busy::find($request->input('ocupado')));
        $user->training()->associate(Training::find($request->input('formacion_academica')));
        $user->academicTitle()->associate(AcademicTitle::find($request->input('academic_title_id')));
        $user->priorityGroup()->associate(PriorityGroup::find($request->input('grupo_prioritario')));
        $user->funding()->associate(Funding::find($request->input('fondo')));
        $user->regimen()->associate(Regimen::find($request->input('regimenes')));
        $user->save();

        return (new UserResource($user))->additional([
            'msg'=>[
                'summary' => 'success',
                'detail' => 'El usuario a sido creado',
                'code' => '200'
            ]
        ])->response()->setStatusCode(200);
    }

    public function show(User $user)
    {
        $user = User::find($user);
        return (new UserResource($user))->additional([
            'msg'=>[
                'summary' => 'success',
                'detail' => '',
                'code' => '200'
            ]
        ])->response()->setStatusCode(200);
    }

    public function update(Request $request, User $user)
    {
        $user->cedula = $request->input('cedula');
        $user->nombre= $request->input('nombre');
        $user->apellido= $request->input('apellido');
        $user->genero= $request->input('genero');
        $user->fecha_nacimiento= $request->input('fecha_nacimiento');
        $user->fecha_ingreso= $request->input('fecha_ingreso');
        $user->numero_imposiciones= $request->input('numero_imposiciones');
        $user->telefono_institucional= $request->input('telefono_institucional');
        $user->textension_telefonica= $request->input('textension_telefonica');
        $user->correo_institucional= $request->input('correo_institucional');
        $user->actividad_esigef= $request->input('actividad_esigef');
        $user->viatico_residencia= $request->input('viatico_residencia');
        $user->migrante_retornado= $request->input('migrante_retornado');
        $user->remuneracion = $request->input('remuneracion');
        $user->ethnic()->associate(EthnicGroup::find($request->input('grupo_etnico')));
        $user->nationalitie()->associate(Nationality::find($request->input('nacionalidad')));
        $user->associatedLocation()->associate(AssociatedLocation::find($request->input('localidad_asociada')));
        $user->process()->associate(Process::find($request->input('proceso')));
        $user->busy()->associate(Busy::find($request->input('ocupado')));
        $user->training()->associate(Training::find($request->input('formacion_academica')));
        $user->academicTitle()->associate(AcademicTitle::find($request->input('academic_title_id')));
        $user->priorityGroup()->associate(PriorityGroup::find($request->input('grupo_prioritario')));
        $user->funding()->associate(Funding::find($request->input('fondo')));
        $user->regimen()->associate(Regimen::find($request->input('regimenes')));
        $user->save();

        return(new UserResource($user))->additional([
            'msg'=>[
                'summary' => 'success',
                'detail' => '',
                'code' => '200'
            ]
        ])->response()->setStatusCode(200);
    }

    public function destroy(User $user)
    {
        $user-> delete();
        return(new UserResource($user))->additional([
            'msg'=>[
                'summary' => 'success',
                'detail' => '',
                'code' => '200'
            ]
        ])->response()->setStatusCode(200);
    }
}
