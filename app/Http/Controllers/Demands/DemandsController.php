<?php

namespace App\Http\Controllers\Demands;

use DB;
use App\Models\DemandModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemandsController extends Controller
{
    public function index()
    {
        $demands = DemandModel::select('id','title','description','state_id',
        'status_id','owner_id','undertaking_id','app_id','created_at')->get();
        return View('demands.index', ["demands"=>$demands]);
    }
    public function createDemand()
    {
        return View('demands.forms.create-demand');
    }
}
