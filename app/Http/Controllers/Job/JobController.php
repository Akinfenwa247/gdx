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

 //Admin area for jobs
  public function job()
  {

    return view('admin.job.index');

  }

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

  public function sessExist()
  {
    if(session('viewjob'))
    {
      return true;
    }else{
      return false;
    }

  }
  /*
  * Track the jobs viewed by a user
  */

  public function trackJobViewed( $job_id)
  {
    $job = New ViewJob;
    // Via a request instance...
     if(!$this->sessExist())
     {
      $sess_id = session(['viewjob' => rand().rand()]);
      }
      //dd(session('viewjob'));
      $job->user_id = Auth::ID();
      $job->job_id = $job_id;
      $job->sess_id = session('viewjob');
      $job->save();


      if(Auth::check() && $this->jobView($job_id))
      {
        $sess_id = session('viewjob');
        $data = array(
          'user_id' => Auth::ID()
        );

        ViewJob::where('sess_id', $sess_id)
        ->update($data);
      }



  }
  /*
  * Verify a job is already viewed
  */

  public function jobView($id)
  {
    $sess_id = session('viewjob');
    $jview = ViewJob::where([

      ['sess_id','=',$sess_id],
    ['job_id', '=', $id]
    ])->get();

    if($jview){
      return true;
    }else{
      return false;
    }

  }



  public function viewJob ($id)
  {
      //$id = $request->id;
      $job = Job::find($id);
      $this->trackJobViewed($id);

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

  public static function listRecentViewedJobs()
  {
    $user_id = Auth::ID();
    $jobs = ViewJob::where('user_id', $user_id)->distinct()->orderBy('id', 'DESC')->paginate(4);

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
