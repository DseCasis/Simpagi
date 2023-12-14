<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AcademicTitle;
use App\Models\Area;
use App\Models\AssociatedLocation;
use App\Models\Busy;
use App\Models\ExperimentalStation;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function getLocation($id){
        $associatedLocations = ExperimentalStation::join('associated_locations', 'experimental_stations.id', '=', 'associated_locations.experimental_station_id')
            ->join('provinces', 'experimental_stations.province_id', '=', 'provinces.id')
            ->select('experimental_stations.*', 'provinces.*')
            ->where('associated_locations.id', $id)
            ->get();
        return response()->json($associatedLocations);
    }
}
