<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['dashboard']);
    }

    public function welcome()
    {
        return view('sites.welcome');
    }

    public function dashboard()
    {
        return view('sites.dashboard');
    }
}
