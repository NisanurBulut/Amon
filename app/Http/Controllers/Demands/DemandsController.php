<?php

namespace App\Http\Controllers\Demands;

use DB;
use App\Models\AppModel;
use App\Models\DemandModel;
use App\Models\StatusModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemandsController extends Controller
{
    private function getApps()
    {
        return AppModel::select('id','name')->get();
    }
    private function getSituations()
    {
        return StatusModel::select('id','name')->get();
    }
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
            'tstate.name as state')->orderBy('tdemand.created_at', 'DESC')->get();

        return View('demands.index', ["demands"=>$demands]);
    }
    public function createDemand()
    {
        $apps=$this->getApps();
        $situations =$this->getSituations();
        return View('demands.forms.create-demand', [
            "situations"=>$situations,
            "apps"=>$apps
        ]);
    }

    public function editDemand($id)
    {
        $apps=$this->getApps();
        $situations =$this->getSituations();
        $demand = DemandModel::findOrFail($id);

        return View('demands.forms.edit-demand', [
            "demand"=>$demand,
            "situations"=>$situations,
            "apps"=>$apps
        ]);
    }
    public function updateDemand(Request $request, $id)
    {
        $validated = $request->validate(
            [
                'title'=>'required',
                'description'=>'required',
                'status_id'=>'required',
                'app_id'=>'required'
            ]);

        $demand = DemandModel::findOrFail($id);
        $demand->title=$request['title'];
        $demand->description=$request['description'];
        $demand->app_id=$request['app_id'];
        $demand->status_id=$request['status_id'];
        $demand->undertaking_id=0;
        $demand->save();
        return redirect('demands');
    }
    public function destroyDemand($id)
    {
        $demandEntity = DB::table('tdemand')->where('id',$id);
        $demandEntity->delete();
        return redirect('demands')->with('message','Silme işlemi başarıyla gerçekleşti');
    }
    public function storeDemand(Request $request)
    {
        $validated = $request->validate(
            [
                'title'=>'required',
                'description'=>'required',
                'status_id'=>'required',
                'app_id'=>'required'
            ]);

        $demand = new DemandModel();
        $demand->title=$request['title'];
        $demand->description=$request['description'];
        $demand->owner_id=1;
        $demand->app_id=$request['app_id'];
        $demand->status_id=$request['status_id'];
        $demand->state_id=4;
        $demand->undertaking_id=0;
        $demand->save();
        return redirect('demands');
    }
}