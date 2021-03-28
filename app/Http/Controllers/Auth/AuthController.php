<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return View('auth.index');
    }
    public function register()
    {
        dd(350);
        return view('auth.register');
    }
    public function login()
    {
       return view('auth.login');
    }
}
