<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Apply;


class Job extends Model
{
    //
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function apply()
    {
        return $this->hasMany('App\Models\Apply','job_id');
    }

    public function viewjob()
    {
      return $this->hasMany('App\Models\ViewJob','job_id');
    }
}
