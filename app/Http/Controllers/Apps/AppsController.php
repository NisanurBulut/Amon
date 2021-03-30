<?php

namespace App\Http\Controllers\Apps;

use App\Models\AppModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppsController extends Controller
{
    public function index()
    {
        $apps = AppModel::select('id','name','description','db_name','url_address','url_icon','created_at')->get();

        return View('apps.index',['apps'=>$apps]);
    }
    public function getApps()
    {
        $apps = AppModel::select('id','name')->get();
        return json_encode($apps);
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
        $appEntity->name = $request['name'];
        $appEntity->description = $request['description'];
        $appEntity->db_name = $request['db_name'];
        $appEntity->url_address = $request['url_address'];
        $appEntity->url_icon = $request['url_icon'];
        $appEntity->save();
        return redirect('apps');
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
