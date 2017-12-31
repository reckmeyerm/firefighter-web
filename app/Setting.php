<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $fillable = [
        'value'
    ];

    public static function getValueByKey($key)
    {
       $setting = Setting::where('key', $key)->get();

       if (count($setting))
       {
           return $setting[0]->value;
       }
       else
       {
           return "setting/{$key}";
       }
    }
}
