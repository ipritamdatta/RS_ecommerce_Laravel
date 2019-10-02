<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
     protected $table = 'about';
    protected $fillable = ['para'];

    public static function saveAbout($request)
    {
        $about        = new about();
        $about->para  = $request->para;
        $about->save();
    }
}
