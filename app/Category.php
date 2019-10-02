<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['category_name'];
    protected $primaryKey = 'category_id';

    public static function saveCategory($request)
    {
        $category           	= new category();
        $category->category_name = $request->category_name;
        $category->save();
	}

	public function category()
    {
        return $this->hasMany('App\Accesories');
    }
}
