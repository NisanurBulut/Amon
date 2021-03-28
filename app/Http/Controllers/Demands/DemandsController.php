<?php

namespace App\Http\Controllers\Demands;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemandsController extends Controller
{
    public function index()
    {
        return View('demands.index');
    }
}
