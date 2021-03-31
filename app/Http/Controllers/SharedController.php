<?php

namespace App\Http\Controllers;

use App\Models\AppModel;
use App\Models\ColorModel;
use App\Models\StateModel;
use App\Models\StatusModel;
use Illuminate\Http\Request;

class SharedController extends Controller
{
    public function getStates()
    {
        $states = StateModel::select('id','name')->get();
        return json_encode($states);
    }
    public function getSituations()
    {
        $situations = StatusModel::select('id','name')->get();
        return json_encode($situations);
    }
    public function getApps()
    {
        $apps = AppModel::select('id','name')->get();
        return json_encode($apps);
    }
}