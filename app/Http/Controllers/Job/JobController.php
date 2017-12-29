<?php
namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use \App\Models\Job;
use \App\Models\Apply;
use \App\Models\Company;
use \App\Models\ViewJob;
use \App\Http\Controllers\Company\CompanyController;
use DB;

class JobController extends Controller
{
  //POst a new job

  public function addJob (Request $request)
  {
      $user_id = Auth::id();
      $company_id = CompanyController::getCompanyID();


      $job = new Job;
      $job->user_id = $user_id;
      $job->company_id = $company_id;
      $job->skill = $request->skill;
      $job->job_type = $request->job_type;
      $job->skill_level = $request->skill_level;
      $job->experience = $request->experience;
      $job->location = $request->location;
      $job->jd = $request->jd;
      $job->responsibility = $request->responsibility;
      $job->technology = $request->tech;
      $job->experience = $request->experience;
      $job->salary = $request->salary;
      $job->save();
      $job->id;

      return redirect('/'.$job->skill.'/'.$id)->with('status', 'Your job has been posted successfully. Detail below.');
  }

  public static function getJobs()
  {
      //$jobs = Job::all()->paginate(15);
      $jobs = DB::table('jobs')->orderBy('id', 'DESC')->paginate(10);

      return view('jobs.jobs', compact('jobs'));
  }

  public function trackJobViewed($job_id)
  {
    $job = New ViewJob;
    
    job->job_id = $job_id;
  }

  public function viewJob ($job, $id)
  {
      //$id = $request->id;
      $job = Job::find($id);

      return view('jobs.job', compact('job'));
  }
  /*
      This function helps users apply for jobs
  */

  public function apply ($id, $cid){

      $apply = new Apply;
      $apply->user_id = Auth::id();
      $apply->job_id = $id;
      $apply->company_id = $cid;
      $apply->status = 1;

      $apply->save();

      //return view()

       return redirect()->back()->with('status', 'Your have successfully applied for this job! You will be contact on the next phase. Thank you.');


  }

  public function listMyJob($user_id, $limit = 4)
  {
    $job = Job::where('user_id', $user_id)->orderBy('id', 'DESC')->paginate($limit);

    return $job;

  }

  public static function ListRecentJobs()
  {
    $jobs = Job::where('status', 1)->orderBy('id', 'DESC')->paginate(4);

    return $jobs;

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


}
