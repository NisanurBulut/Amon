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
}
