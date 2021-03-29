<?php

namespace App\Http\Controllers\Settings;

use App\Models\ColorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        $colors = ColorModel::all();
        return View('settings.index',['colors'=>$colors]);
    }
    public function createStatus()
    {
        return View('settings.create-status');
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
}