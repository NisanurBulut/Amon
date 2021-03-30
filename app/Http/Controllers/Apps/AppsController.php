<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
