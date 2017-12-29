<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/ddashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
     public function redirectToProvider()
     {
         return Socialite::driver('facebook')->redirect();
     }

     /**
      * Obtain the user information from GitHub.
      *
      * @return Response
      */
     public function handleProviderCallback()
     {
         $userFB = Socialite::driver('facebook')->user();
         $findUser = User::where('email', $userFB->email)->first();

         if($findUser){
             Auth::login($findUser);
             redirect("/pages/profile-review");

         }else{
            $user = new User;
            $user->name = $userFB->name;
            $user->email = $userFB->email;
            $userFB->password = bcrypt($userFB->getID());
            $user->save();

            Auth::login($user);

            redirect("/pages/profile-review");


         }

          $userFB->token;
     }

     function accountOwner($user_id){
       $user = Auth::id();
       if($user_id == $user->id){
         return true;
       }else{
         return false;
       }


     }



}
