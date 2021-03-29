<?php

namespace App\Http\Controllers\Settings;

use App\Models\ColorModel;
use App\Models\StateModel;
use App\Models\StatusModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SettingsController extends Controller
{
    public function index()
    {
        return View('settings.index');
    }
    public function getColors()
    {
        $colors = ColorModel::select('id','name','description')->get();

       return json_encode($colors);
    }
    public function getSituations()
    {
        $states = DB::table('tstatus')
        ->join('tcolor', 'tstatus.color_id', '=', 'tcolor.id')
     ->select('tstatus.id','tcolor.description as color','tstatus.name')
     ->get();
       return json_encode($states);
    }
    public function getStates()
    {
        $states = StateModel::select('id','name')->get();

       return json_encode($states);
    }
    public function createStatus()
    {
        $colorSelects = ColorModel::select('id as id','description as name')->get();
        return View('settings.create-status', ['colorSelects'=>$colorSelects]);
    }
    public function createState()
    {
        return View('settings.create-state');
    }
    public function createColor()
    {
        return View('settings.create-color');
    }
    public function storeColor(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:20',
            'description' => 'required',
        ]);
        $color = new ColorModel();
        $color->name=$request['name'];
        $color->description=$request['description'];

        $color->save();
        return back();
    }
    public function storeStatus(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:20',
            'color_id' => 'required',
        ]);
        $status = new StatusModel();
        $status->name=$request['name'];
        $status->color_id=$request['color_id'];

        $status->save();
        return back();
    }
    public function storeState(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
        ]);

        $state = new StateModel();
        $state->name=$request['name'];
        $state->save();
        return back();
    }
}