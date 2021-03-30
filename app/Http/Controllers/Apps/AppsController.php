<?php

namespace App\Http\Controllers\Apps;

use App\Models\AppModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppsController extends Controller
{
    public function index()
    {
        return View('apps.index');
    }
    public function createApp()
    {
        return View('apps.forms.create-app');
    }
    public function storeApp(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:20',
            'db_name' => 'required',
        ]);

        $appEntity = new AppModel();
        $appEntity->name=$request['name'];
        $appEntity->name=$request['description'];
        $appEntity->name=$request['db_name'];
        $appEntity->name=$request['url_address'];
        $appEntity->name=$request['url_icon'];
        $appEntity->save();
        return View('apps.forms.create-app');
    }
    public function editApp($id)
    {
        return View('apps.forms.edit-app');
    }
    public function updateApp(Request $request,$id)
    {
        return View('apps.forms.edit-app');
    }
}
