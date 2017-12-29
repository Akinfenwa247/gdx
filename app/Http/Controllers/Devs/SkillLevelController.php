<?php

namespace App\Http\Controllers\Devs;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Profile;
use \App\Models\Apply;
use \App\Http\Controllers\Controller;
use \App\Http\Controllers\Devs\ProfileController;
use Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use DB;

class SkillLevelController extends Controller
{

  protected function validator(Request $request)
  {
      return Validator::make($request, [
        'skill_level' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'sex' => 'required|string|max:6',
        'portfolio' => 'required|string|max:255',
        'language' => 'required|string|max:255',
        'framework' => 'required|string|max:255'
        ]);

  }

  public function loadSkillLevel ()
  {

      return view('devs.skill_level');



  }

  public function editSkillLevel (){
    if(Auth::check() && ProfileController::hasProfile(Auth::ID()) ){
      $user_id = Auth::ID();
      $profile = Profile::where('user_id', $user_id)->firstOrFail();

      return view('devs.skill_level_edit', compact('profile'));
    }else{
      return redirect('/skill_level');
    }
  }



  public function saveSkillLevel(Request $request)
  {
    //$user_id = Auth::ID();

    $this->validate($request,[
      'skill_level' => 'required|string|max:255',
      'phone' => 'required|string|max:13',
      'sex' => 'required|string|max:6',
      'portfolio' => 'required|string|max:255',
      'language' => 'required|string|max:255',
      'framework' => 'required|string|max:255'
      ]);

    if(!ProfileController::hasProfile(Auth::ID()) ){

    $profile = new Profile;
    $profile->user_id = Auth::ID();
    $profile->skill_level = $request->skill_level;
    $profile->phone = $request->phone;
    $profile->sex = $request->sex;
    $profile->portfolio = $request->portfolio;
    $profile->language = $request->language;
    $profile->framework = $request->framework;
    $profile->city = $request->city;
    $profile->country = $request->country;

    $profile->save();
  }else {
    # code...
    $user_id = Auth::ID();

    $data = array(
        'skill_level' => $request->skill_level,
        'phone' => $request->phone,
        'sex' => $request->sex,
        'portfolio' => $request->portfolio,
        'language' => $request->language,
        'framework' => $request->framework,
        'city' => $request->city,
        'country' => $request->country
        );

    Profile::where('user_id', $user_id)
    ->update($data);
  }

    return redirect ('/editskill_level');

  }

  public static function formatSkill($skill)
  {
    switch($skill)
    {
      case 'backend':
        $skill = "Backend Developer";
      break;


      case 'frontend':
        $skill = "Frontend Developer";
      break;

      case 'ux':
        $skill = "User Experience Designer (UX)";
      break;

      case 'qa':
        $skill = "Quality Assurance ";
      break;

      case 'fullstack':
        $skill = "Fullstack Developer";
      break;

      case 'devops':
        $skill = "DevOps Engineer ";
      break;

      case 'ios':
        $skill = "iOS Developer ";
      break;

      case 'android':
        $skill = "Android Developer ";
      break;

      case 'software':
        $skill = "Software Developer ";
      break;

      case 'pm':
        $skill = "Project Manager ";
      break;

      case 'pd':
        $skill = "Product Manager ";
      break;

      case 'biz':
        $skill = "Business Analyst ";
      break;

      case 'db':
        $skill = "Database Admin  ";
      break;

      case 'hybrid':
        $skill = "Hybrid Mobile Dev ";
      break;

      case 'others':
        $skill = "Others ";
      break;

      case 'infosec':
        $skill = "Infomation Security ";
      break;

      default;

    }

    return $skill;

  }

  public static function formatSkillLevel($skill_level)
  {

    switch($skill_level)
    {
      case 'intern':
        $skill_level = "Intern";
      break;


      case 'junior':
        $skill_level = "Junior";
      break;

      case 'mid':
        $skill_level = "Intermediate";
      break;

      case 'intermediate':
        $skill_level = "Intermediate";
      break;

      case 'senior':
        $skill_level = "Senior";
      break;

      case 'advance':
        $skill_level = "Advance";
      break;

      default;

    }

    return $skill_level;

  }
}
