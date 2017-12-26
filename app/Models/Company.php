<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Job;

class Company extends Model
{
    //
    public function job()
    {
        return $this->hasMany('App\Models\Job','company_id');
    }
}
