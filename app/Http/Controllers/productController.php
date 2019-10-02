<?php

namespace App\Http\Controllers;

use App\Product; //ei model
use App\coverup;
use App\Smartphone;

use DB;
use Illuminate\Http\Request; //data get korar jonno

class productController extends Controller
{
	public function newCover(Request $request){
		
    	coverup::saveCover($request);
    	return redirect('/cover')->with('message','Cover photo is uploaded successfully!!!');
    }
    public function coverDel(Request $request){
        $value_example=$request->input('category_id');
        $covers = coverup::select('id','category_id','image')->where('category_id','=',$value_example)->get();
        //dd($covers);
       return view('coverupdel',[
            'DataCovers' => $covers

        ]);
    }

     public function deleteCover(Request $request){
        $cvr   =  coverup::find($request->id);
        $single_image = $cvr->image;
        //dd($single_image);
        unlink($single_image);
        $cvr->delete();
        return redirect('cover')->with('message','Cover photo is deleted successfully!');
    }



    public function newAccesories(Request $request){

            // request()->validate([
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
        Accesories::saveAccesories($request);
        return redirect('/accesor')->with('message','Product info is uploaded successfully!!!');
    }
    public function accesoriesEditdel(){
        $accesories = accesories::select('id','image','model_name','price','details')->get();
        return view('accesorries_editdel',[
            'Accesories' => $accesories
        ]);
    }
    public function editAccessory($id){
        $ac = accesories::find($id);
        //dd($ac);
        return view('edit_accesories',[
            'ac' =>$ac
        ]);
    }

    public function updateAccesories(Request $request)
    {
        $accesories=accesories::find($request->id);
        // dd($accesories);
        $single_image = json_decode($accesories->image, true);
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
            $accesories->image = json_encode($data);
        }

        $accesories->model_name =   $request->model_name;
        $accesories->price      =   $request->price;
        $accesories->details    =   $request->details;
        $accesories->save();
        return redirect('accesoriesEditdel')->with('message','Product info is edited successfully!');
    }
    public function deleteAccessories(Request $request)
    {
        $ac   =  accesories::find($request->id);
        $single_image = json_decode($ac->image, true);
        //dd($single_image);
        if (file_exists($ac->image))
        {
            foreach($single_image as $si)
            {
                //Storage::delete($si);
                unlink($si);
            }
        }
        $ac->delete();
        return redirect('accesoriesEditdel')->with('message','Product info is deleted successfully!');
    }
}


