<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return View('settings.index');
    }
    public function createStatus()
    {
        return View('settings.create-status');
    }
    public function createState()
    {
        return View('settings.create-state');
    }

}
