<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    //
    // public function job()
    // {
    //     return $this->belongsToMany('Jobs','Apply');
    // }

    public function user()
    {
        return $this->belongsTo('App\Models\User','id');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }



     public function job()
    {
        return $this->belongsTo('App\Models\Job','job_id');
    }


}
