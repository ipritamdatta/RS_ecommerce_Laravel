<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    protected $table = 'candidates';
    protected $fillable = ['name','email','position','cv'];

    public static function saveCandidates($request)
    {
        
        if ($request->hasFile('cv')) {
            $cv               = $request->file('cv');
            $file_name        = $cv->getClientOriginalName();
            $destinationPath  = public_path('/cvbank');
            $cv->move($destinationPath, $file_name);
        }
        $candidates            = new Candidates();
        $candidates->name      = $request->name;
        $candidates->email     = $request->email;
        $candidates->academic_qua      = $request->academic_qua;
        $candidates->prev_exp      = $request->prev_exp;
        $candidates->expected_sal      = $request->expected_sal;
        $candidates->age      = $request->age;
        $candidates->position  = $request->position;
        $candidates->cv        = $file_name;
        $candidates->save();
    }
}
