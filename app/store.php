<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $table = 'stores';
    protected $fillable = ['store_name','address','contact_num'];

    public static function saveStore($request)
    {
        $store        = new store();
        $store->store_name  = $request->store_name;
        $store->category_id   = $request->category_id;
        $store->address  = $request->address;
        $store->contact_num  = $request->contact_num;
        $store->save();
    }
}
