<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Category extends Model
{
    public static function navigation()
    {
        return Category::where('top', true)->get();
    }

    public function category()
    {
       return $this->belongsTo(Category::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
