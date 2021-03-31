<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::select('id','is_admin','name','username','created_at','image_url','email')->get();

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
            'is_admin'=> 'required',
            'username'=>'required',
            'image_url'=>'required|max:200'
        ]);

        $user = new User();
        $user->name= $request['name'];
        $user->username=$request['username'];
        $user->email= $request['email'];
        $user->password=$request['password'];
        if($request['is_admin']=="on")
        {
            $user->is_admin = true;
        }else{
            $user->is_admin = false;
        }
        $user->image_url=$request['image_url'];

        $user->save();
        return redirect('users.index');
    }
}
