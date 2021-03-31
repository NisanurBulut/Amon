<?php

namespace App\Http\Controllers\Apps;

use App\Models\AppModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
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
    public function destroyApp($id)
    {
        $appEntity = DB::table('tapp')->where('id',$id);
        $appEntity->delete();
        return redirect('apps')->with('message','Silme işlemi başarıyla gerçekleşti');
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
        $app = AppModel::findOrFail($id);

        return View('apps.forms.edit-app', ['id'=>$id, 'app'=>$app]);
    }

    public function updateApp(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'description' => 'required|max:500',
            'url_address'=> 'required|max:100',
            'url_icon'=>'required|max:200',
            'db_name'=>'required|max:100'
        ]);
        $app = AppModel::findOrFail($id);
        $app->name = $request['name'];
        $app->description = $request['description'];
        $app->db_name = $request['db_name'];
        $app->url_address = $request['url_address'];
        $app->url_icon = $request['url_icon'];
        $app->save();
        return redirect('apps');
    }
}