<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $result = auth()->attempt([
            'username' => request('username'),
            'password' => request('password'),
            'active'   => true
        ]);

        if ($result)
        {
            // @TODO
            return redirect()->home();
        }
        else
        {
            return redirect()->back();
        }
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
