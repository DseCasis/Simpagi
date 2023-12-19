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
    function getFormData(Request $request)
    {
      $data = $request->all();
    
      foreach ($data as $key => $value) {
        if (strpos($key, "associate") === false) {
          $output[$key] = $value;
        }
      }
    
      return $output;
    }

}
