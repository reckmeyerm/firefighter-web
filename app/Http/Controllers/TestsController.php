<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class TestsController extends Controller
{
    public function run($method)
    {
        $this->$method();
    }

    protected function createAdministrator()
    {
        User::create([
            'username'  => env('DEFAULT_ADMIN_USERNAME', 'administrator'),
            'password'  => bcrypt(env('DEFAULT_ADMIN_PASSWORD', 'root')),
            'active'    => true
        ]);
    }
}
