<?php
namespace App\Http\Controllers\Devs;

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
use \App\Http\Controllers\Controller;

class ProfileController extends Controller
{
  public static function hasProfile($user_id){
      //$sql  = DB::select('select * from profiles where user_id = ?', $user_id);
      $sql = \DB::table('profiles')
                          ->where('user_id', '=', $user_id)
                          ->first();

      if(!$sql) {
          return false;
      }else{
          return true;
      }
  }

  public function userpage($username)
  {
      //$user_id = Auth::ID();
      //$username = $request->username;
      $data = User::where('uname',$username)->firstOrFail();
      if(!is_object($data)){
          $this->abort(404);

      }
      return view('pages/profile', compact('data'));
  }

  public function managePicture()
  {

  }
}
