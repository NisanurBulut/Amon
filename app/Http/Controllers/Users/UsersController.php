<?php

namespace App\Http\Controllers\Users;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $users = User::select('id','is_admin','name','username','created_at','image_url','email')->orderBy('created_at','DESC')->get();

        return View('users.index',['users'=>$users]);
    }
    function createUser()
    {
        return View('users.forms.create-user');
    }
    function storeUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'username'=>'required',
            'image_url'=>'required|max:200'
        ]);

        $user = new User();
        $user->name= $request['name'];
        $user->username=$request['username'];
        $user->email= $request['email'];
        $user->password=Hash::make($request['password']);
        if(isset($request['is_admin']))
        $user->is_admin = true;
        else
        $user->is_admin = false;
        $user->image_url=$request['image_url'];

        $user->save();
        return redirect('users');
    }
    public function editUser($id)
    {
        $user = User::findOrFail($id);

        return View('users.forms.edit-user', ['id'=>$id, 'user'=>$user]);
    }
    public function destroyUser($id)
    {
        $userEntity = DB::table('users')->where('id',$id);
        $userEntity->delete();
        return redirect('users')->with('message','Silme işlemi başarıyla gerçekleşti');
    }
    function updateUser(Request $request, $id)
    {
        $validateResult = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'username'=>'required',
            'image_url'=>'required|max:200'
        ]);

        $user = User::findOrFail($id);
        $user->name= $request['name'];
        $user->username=$request['username'];
        $user->email= $request['email'];
        $user->password=Hash::make($request['password']);
        if(isset($request['is_admin']))
        $user->is_admin = true;
        else
        $user->is_admin = false;

        $user->image_url=$request['image_url'];
        $user->save();
        return redirect('users');
    }
}
