<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coverup extends Model
{
    protected $table = 'coverr_photo';
    protected $fillable = ['category_id','image'];

    public static function saveCover($request)
    {
        //dd($request->all());
        $image     			  = $request->file('image');
        $imagename 			  = $image->getClientOriginalName();
        //$directory 			  = public_path('uploads/');
        $directory            = ('uploads/');
        $image->move($directory,$imagename);
        $cover                = new coverup();
        $cover->category_id   = $request->category_id;
        $cover->image         = $directory.$imagename;
        $cover->save();

    }
}
