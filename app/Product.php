<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['image','product_title','category_id','product_price','details'];

    public static function saveProduct($request)
    {
        // dd($request->all());
        
        $product = new product();

        $image = $request->file('image');
        if($image){
            foreach ($image as $pic) {
                $imagename = $pic->getClientOriginalName();
                $directory = ('uploads/');
                $pic->move($directory,$imagename);
                $data[]    = $directory.$imagename;  
            }
        }
        $product->image = json_encode($data);

        $product->product_title  = $request->product_title;
        $product->category_id    = $request->category_id;
        $product->product_price  = $request->product_price;
        $product->details        = $request->details;
        $product->release_date        = $request->release_date;
        $product->save();

    }

    public function product(){
    $this->belongsTo('App\Category');
    }
}
