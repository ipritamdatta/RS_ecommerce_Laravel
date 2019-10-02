<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\messages;
use App\about;
use App\store;
use App\jobs;
use App\Candidates;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function admindex(){
    	return view('admin');
    }
    public function coverPhoto(){
    	return view('coverupdel');
    }
    public function phoneUp(){
    	return view('phoneup');
    }
    public function accesoriesUp(){
    	return view('accesoriesup');
    }




    public function comments(){
        $messages = messages::select('id','name','email','message','created_at')->orderBy('id', 'DESC')->get();
        return view('comments',[
            'messages' => $messages
        ]);
    }
    public function deleteComment(Request $request)
    {
        $mgs   =  messages::find($request->id);
        $mgs->delete();
        return redirect('comments')->with('message','Message is deleted successfully!');
    }




    public function aboutUp(){
        return view('aboutup');
    }
    public function newAbout(Request $request){

        about::saveAbout($request);
        return redirect('/upabout')->with('message','Company info is added successfully!!!');
    }
    public function aboutEditdel(){
        $about = about::select('id','para')->get();
        return view('aboutup',[
            'about' => $about
        ]);
    }
    public function deleteAbout(Request $request)
    {
        $about   =  about::find($request->id);
        $about->delete();
        return redirect('upabout')->with('message','Company info is deleted successfully!!!');
    }
    public function editAbout($id){
        $abt = about::find($id);
        //dd($ac);
        return view('edit_about',[
            'abt' =>$abt
        ]);
    }
    public function updateAbout(Request $request)
    {
        $about=about::find($request->id);
        $about->para    =   $request->para;
        $about->save();
        return redirect('upabout')->with('message','Company info is edited successfully!');
    }

    public function showChangePasswordForm(){
        return view('auth.changepassword');
    }



    public function changePassword(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }



    public function storeEditdel(){
        $stores = store::select('id','store_name','address','contact_num')->get();
        return view('store_editdel',[
            'Stores' => $stores
        ]);
    }

    public function storeUp(){
        return view('storeup');
    }

    public function newStore(Request $request){

        store::saveStore($request);
        return redirect('/storeEditdel')->with('message','Store is added successfully!!!');
    }

    public function editStore($id){
        $str = store::find($id);
        //dd($ac);
        return view('edit_store',[
            'str' =>$str
        ]);
    }

    public function updateStore(Request $request)
    {
        $store=store::find($request->id);
        $store->store_name    =   $request->store_name;
        $store->category_id    =   $request->category_id;
        $store->address    =   $request->address;
        $store->contact_num    =   $request->contact_num;
        $store->save();
        return redirect('storeEditdel')->with('message','Store info is edited successfully!');
    }

    public function storelist(Request $request){
        $value_example=$request->input('category_id');
        $stores = store::select('id','category_id','store_name')->where('category_id','=',$value_example)->get();
        //dd($covers);
        return view('store_editdel',[
            'Datastore' => $stores

        ]);
    }

    public function deleteStore(Request $request)
    {
        $str   =  store::find($request->id);
        $str->delete();
        return redirect('storeEditdel')->with('message','Store is deleted successfully!');
    }

    public function jobEditdel(){
        $jobs = jobs::select('id','job_position','job_description','closing_date','created_at')->get();
        return view('job_editdel',[
            'Jobs' => $jobs
        ]);
    }

    public function jobUp(){
        return view('jobup');
    }

    public function newJob(Request $request){

        jobs::saveJob($request);
        return redirect('/jobEditdel')->with('message','Job is added successfully!!!');
    }

    public function editJob($id){
        $jb = jobs::find($id);
        //dd($ac);
        return view('edit_job',[
            'jb' =>$jb
        ]);
    }

    public function updateJob(Request $request)
    {
        $job=jobs::find($request->id);
        $job->job_position    =   $request->job_position;
        $job->job_description    =   $request->job_description;
        $job->closing_date    =   $request->closing_date;
        $job->save();
        return redirect('jobEditdel')->with('message','Job position is edited successfully!');
    }

    public function deleteJob(Request $request)
    {
        $jb   =  jobs::find($request->id);
        $jb->delete();
        return redirect('jobEditdel')->with('message','Job Position is deleted successfully!');
    }

    public function applicantList(){
        $candidateslist = Candidates::select('id','name','email','academic_qua','prev_exp','expected_sal','age','position','cv')->get();
        return view('downldcv',[
            'candidateslist' => $candidateslist
        ]);
    }

    public function deleteApplicant(Request $request)
    {
        $candidate   =  Candidates::find($request->id);
        $cv_path = public_path().'/cvbank/'.$candidate->cv; 
       
        if (file_exists($cv_path) && !empty($candidate->cv)) {
            unlink($cv_path);
            $candidate->delete();
            return redirect('applicant-list')->with('message','Candidate is deleted successfully!');
        } else{
            return redirect('applicant-list')->with('message','Candidate is not deleted successfully!');
        }
    }

    public function Category(){
    $category = Category::select('category_id','category_name')->get();
    return view('category',[
    'DataCategory' => $category
    ]);
}
public function newCategory(Request $request){
        
    Category::saveCategory($request);
    return redirect('/category')->with('message','New Category is created!!!');
    }
public function deleteCategory(Request $request)
    {
        $delcat   =  Category::find($request->category_id);
        $delcat->delete();
        return redirect('category')->with('message','Category is deleted successfully!');
    }

public function editCategory($id){
        $ac = Category::find($id);
        //dd($ac);
        return view('edit_category',[
            'ac' =>$ac
        ]);
    }

public function updateCategory(Request $request)
    {
        $upcat=Category::find($request->category_id);
        $upcat->category_name    =   $request->category_name;
        $upcat->save();
        return redirect('category')->with('message','Product info is edited successfully!');
    }


    public function updelProduct(){
    $category = Category::select('category_id','category_name')->get();
    return view('productupdel',[
        'DataCategory' => $category
    ]);
}

public function getproduct(Request $request){
        $category = Category::select('category_id','category_name')->get();
        $value_example=$request->input('category_id');
        $products = Product::select('id','category_id','image','product_title')->where('category_id','=',$value_example)->get();
        //dd($covers);
       return view('productupdel',[
            'DataCategory' => $category,
            'ProductData' => $products

        ]);
    }

public function upProduct(){
    $category = Category::select('category_id','category_name')->get();
    return view('productup',[
    'DataCategory' => $category
    ]);
}

public function newProduct(Request $request){
        
        Product::saveProduct($request);
        return redirect('/productup')->with('message','Product details is saved!!!');
    }

public function deleteProduct(Request $request)
    {
        $product   =  Product::find($request->id);
        $single_image = json_decode($product->image, true);
        if (file_exists($product->image))
        {
            foreach($single_image as $si)
            {
                unlink($si);
            }
        }
        $product->delete();
        return redirect('productupdel')->with('message','Product info is deleted successfully!');
    }

public function editProduct($id){
        $category = Category::select('category_id','category_name')->get();
        $pu = Product::find($id);
        //dd($ac);
        return view('productupdate',[
            'DataCategory' => $category,
            'pu' =>$pu
        ]);
    }

public function updateProduct(Request $request)
    {
        $product=Product::find($request->id);
        // dd($accesories);
        $single_image = json_decode($product->image, true);
        // dd($single_image);
        
        $image = $request->file('image');
        if($image)
        {
            foreach($single_image as $si)
            {
                unlink($si);
            }   
            foreach ($image as $pic) {
                
                $imagename  =$pic->getClientOriginalName();
                $directory  ='uploads/';
                $pic->move($directory,$imagename);
                $data[] = $directory.$imagename;
            }
            $product->image = json_encode($data);
        }

        $product->product_title =   $request->product_title;
        $product->category_id   =   $request->category_id;
        $product->product_price =   $request->product_price;
        $product->product_price =   $request->product_price;
        $product->details       = $request->details;
        $product->release_date       = $request->release_date;
        $product->save();
        return redirect('productupdel')->with('message','Product info is edited successfully!');
    }

}
