<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function welcome()
    {
        return view('sites.welcome');
    }
}
