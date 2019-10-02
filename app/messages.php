<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
     protected $table = 'messages';
    protected $fillable = ['name','email','message'];

    public static function saveMessage($request)
    {
        $message           = new messages();
        $message->name     = $request->name;
        $message->email    = $request->email;
        $message->message  = $request->message;
        $message->save();
}
}
