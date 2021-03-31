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
        $demands = DB::table('tdemand')
            ->join('tstatus', 'tstatus.id', '=', 'tdemand.status_id')
            ->join('tcolor', 'tcolor.id', '=', 'tstatus.color_id')
            ->join('users', 'users.id', '=', 'tdemand.owner_id')
            ->leftJoin('users as tuser', 'tuser.id', '=', 'tdemand.undertaking_id')
            ->join('tapp', 'tapp.id', '=', 'tdemand.app_id')
            ->join('tstate', 'tstate.id', '=', 'tdemand.state_id')
            ->select('tdemand.id','tdemand.title','tdemand.description','tdemand.created_at',
            'tapp.name as appName',
            'users.name as ownerName',
            'users.image_url as ownerImage',
            'tuser.name as underName',
            'tuser.image_url as underImage',
            'tcolor.name as color',
            'tstatus.name as status',
            'tstate.name as state')
     ->get();

        return View('demands.index', ["demands"=>$demands]);
    }
    public function createDemand()
    {
        return View('demands.forms.create-demand');
    }
}
