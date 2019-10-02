<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    protected $table = 'jobs';
    protected $fillable = ['job_position','job_description','closing_date'];

    public static function saveJob($request)
    {
        $job        = new jobs();
        $job->job_position  = $request->job_position;
        $job->job_description  = $request->job_description;
        $job->closing_date  = $request->closing_date;
        $job->save();
    }
}
