<?php

namespace App\Http\Controllers\Devs;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Profile;
use \App\Models\Apply;
use \App\Http\Controllers\Controller;
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
          'fname' => 'required|string|max:255'
        ]);

  }

  public function loadSkillLevel ()
  {

      return view('devs.skill_level');
  


  }

  public function editSkillLevel (){
    $user_id = Auth::ID();
    $profile = Profile::where('user_id', $user_id)->first();
    return view('devs.skill_level_edit', compact('profile'));
  }

  public function saveSkillLevel(Request $request)
  {
    $user_id = Auth::ID();

  }

  public static function skillLevelExist($user_id)
  {
    $profile = Profile::where('user_id', $user_id);
    if($profile){
      return true;
    }else{
      return false;
    }

  }
}
