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

class AcademyController extends Controller
{

  public function loadAcademy()
  {
    if(Auth::check() && ProfileController::hasProfile(Auth::ID()) ){
      $user_id = Auth::ID();
      $profile = Profile::where('user_id', $user_id)->firstOrFail();

      return view('devs.academy', compact('profile'));
    }else{
      return redirect('/skill_level');
    }

  }

  public function saveAcademy (Request $request)
  {

    $user_id = Auth::ID();
    $data = array(
        'dob' => $request->dob,
        'study' => $request->study,
        'school' => $request->school,
        'availability' => $request->availability,
        'soon' => $request->soon,
        'where_work' => $request->where_work,

        );

    Profile::where('user_id', $user_id)
    ->update($data);

    return redirect('/academy')->with('info', 'Saved successfully!');

  }

}
