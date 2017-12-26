<?php
namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Apply;

class JobController extends Controller
{
  public function addJob (Request $request)
  {

  }

  public function listMyJob($user_id, $limit = 4)
  {
    $job = Job::where('user_id', $user_id)->orderBy('id', 'DESC')->paginate($limit);

    return $job;

  }

  public static function listMyApplication($user_id,$limit = 4)
  {
    $apply = Apply::where('user_id', $user_id)->orderBy('id', 'DESC')->paginate($limit);
    if(!$apply) {
      return false;
    }else{
      return $apply;
    }
  }

  public function viewJob($id)
  {

  }
}
