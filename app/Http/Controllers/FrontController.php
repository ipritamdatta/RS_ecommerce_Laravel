<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\coverup;


use App\messages;
use App\about;
use App\store;
use App\jobs;
use App\Candidates;
use App\Product;
use App\Category;
use DB;

class FrontController extends Controller
{
    public function index(){
        $covers = coverup::select('category_id','image')->where('category_id',1)->get();
        //$category = Category::select('category_id','category_name')->take(7)->get();
        $product = Product::select('id','image','category_id','product_title','product_price')->orderBy('id', 'DESC')->take(12)->get();


        // $product=DB::table('products')
        //                 ->join('categories','products.category_id','=','categories.category_id')
        //                 ->select('products.*')
        //                 ->get();
        //dd($covers);
        //dd($smartphones);
        return view('index',[
            'DataCovers' => $covers,
            
            'Accesories' => $product

        ]);
    }



    
    



    public function accesoriesFunction(){
    	//return view('joyroom');
        //$covers = coverup::select('category_id','image')->where('category_id',3)->get();
        $category = Category::select('category_id','category_name')->take(7)->get();
        $product = Product::select('id','image','category_id','product_title','product_price')->orderBy('id', 'DESC')->get();
        // dd($covers);
        return view('products',[
            //'DataCovers' => $covers,
            'DataCategory'=>$category,
            'Accesories' => $product
        ]);
    }
    public function asingleFunction($id){
        $product =Product::find($id);
        // dd($mobile);
        return view('product-single',[
            'accesories' => $product
    ]);
    }



    public function aboutFunction(){
        $about = about::select('id','para')->get();
        //dd($about);
    	return view('about',[
            'about' => $about
        ]);
    }
    public function contactFunction(){
    	return view('contact');
    }

    
    public function newMessage(Request $request){
        
        messages::saveMessage($request);
        return redirect('/contact')->with('message','Message is sent!!!');
    }

    public function locationFunction(){
        $store = store::select('id','store_name','category_id','address','contact_num')->where('category_id',1)->get();
        $cus = store::select('id','store_name','category_id','address','contact_num')->where('category_id',2)->get();
        $glob = store::select('id','store_name','category_id','address','contact_num')->where('category_id',3)->get();
        //dd($store);
        return view('locations',[
            'store' => $store,
            'cus'  => $cus,
            'glob' => $glob
        ]);
    }
    public function vasFunction(){
        
        $glob = store::select('id','store_name','category_id','address','contact_num')->where('category_id',3)->get();
        //dd($store);
        return view('vas',[
            
            'glob' => $glob
        ]);
    }

    public function careerFunction(){
        $jobs = jobs::select('id','job_position','job_description','closing_date','created_at')->get();
        return view('career',[
            'jobs' => $jobs
        ]);
    }

     public function singlecrrFunction($id){
        $jobs =jobs::find($id);
        // dd($mobile);
        return view('career-single',[
            'jobs' => $jobs
    ]);
    }

    public function newApply(){
        return view('apply');
    }

    public function newCandidates(Request $request){

        $this->validate($request,[
         'name' => 'required',
         'email' => 'required|email',
         'academic_qua' => 'required',
         'prev_exp' => 'required',
         'expected_sal' => 'required',
         'age' => 'required',
         'position' => 'required',
         'cv' => 'required|:10000|mimes:pdf'
         
        ]);
       // dd('xzvc');
        Candidates::saveCandidates($request);
        return redirect('/career')->with('message','You have applied for the position successfully!!!');
    }
}
