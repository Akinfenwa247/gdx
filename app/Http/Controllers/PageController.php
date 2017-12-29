<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Job\JobController;
use App\Models\Company;
use App\Models\Job;
use App\Models\Apply;
use Auth;

class PageController extends Controller
{
    //

    public function index(){
        //$jobs = JobController::getJobs();
        //return view('home', compact('jobs'));
    }

    public function assess(){
        return view('devs.assess');
    }

    public function assessment(){
        return view('devs.assessment');
    }

    public function profile(){
        return view('devs.profile');
    }

    public function project(){
        return view('devs.project');
    }

    public function rating(){
        return view('devs.rating');
    }



    public function onboard(){
        return view('devs.email_onboard');
    }

    public function companyLogin(){
      return view('company.company_login');
    }

    public function cdashboard(){
      return view('company.dashboard');
    }

    public function ddashboard(){
      $user_id = Auth::ID();
      $data = JobController::listMyApplication($user_id);
      $jobs = JobController::listRecentJobs();
      //dd($app);
      return view('devs.dashboard', compact('data','jobs'));
    }

    public function companySignup(){
      return view('company.company_signup');
    }

    public function company(){
      return view('company.company');
    }

    public function companyFAQ(){
      return view('company.company_faq');
    }

    public function addPosition(){
      return view('company.add_position');
    }

    public function candidates(){
      return view('company.candidates');
    }

    public function positions(){
      return view('company.positions');
    }

    public function cProfile(){
      return view('company.add_profile');
    }

    public function companyInbox(){
      return view('company.inbox');
    }

    public function companyNotification(){
      return view('company.company_faq');
    }

    public function gigs(){
        return view('pages.gigs');
    }

    public function job(){
        return view('pages.job');
    }

    public function jobs(){
        //$jobs = JobController::getJobs();
        //dd($jobs);
        //return view('pages.jobs', compact('jobs'));
    }

    public function hire(){
        return view('pages.hire');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function success(){
        return view('pages.success');
    }


    public function edit(){
        return view('pages.edit');
    }
}
