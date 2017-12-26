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
        return $this->belongsTo('Company');
    }

    public function apply()
    {
        return $this->hasMany('Apply','job_id');
    }
}
