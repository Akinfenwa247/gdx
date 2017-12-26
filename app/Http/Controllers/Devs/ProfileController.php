<?php
namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Profile;
use \App\Models\Apply;
//use \App\Http\Controllers\UserController;
use Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use DB;
use \App\Http\Controllers\CompanyController;

class ProfileController extends Controller
{
  public function loadSkillLevel ($user_id)
  {
    //$user = Auth::user;

    $profile = Profile::where('user_id', $user_id)->first();


  }

  public function saveSkillLevel(Request $request)
  {
    $user_id = Auth::ID();

  }

  public function academy()
  {

  }

  public function managePicture()
  {

  }
}
