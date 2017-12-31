<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $settings = Setting::paginate(10);

        return view('settings.index', compact('settings'));
    }

    public function show(Setting $setting)
    {
        return view('settings.show', compact('setting'));
    }

    public function update($id, Request $request)
    {
        $setting = Setting::findOrFail($id);

        $this->validate($request, [
            'value'  => 'required'
        ]);

        $input = $request->all();

        $setting->fill($input)->save();

        return redirect('/settings');
    }
}
