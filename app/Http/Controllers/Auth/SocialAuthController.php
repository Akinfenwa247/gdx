<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Http\Request;

class SocialAuthController extends Controller
{
    //

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
     public function redirectToProvider($provider)
     {
         return Socialite::driver($provider)->redirect();
     }
 
     /**
      * Obtain the user information from GitHub.
      *
      * @return Response
      */
     public function handleProviderCallback($provider)
     {
         $userSC = Socialite::driver($provider)->user();
         //$SCname = $userSC->name;
         //$SCemail = $userSC->email;
         //$SCtoken = $userSC->token;
         // OAuth Two Providers
         $token = $userSC->token;
         $refreshToken = $userSC->refreshToken; // not always provided
         $expiresIn = $userSC->expiresIn;

         // OAuth One Providers
        //$token = $user->token;
         //$tokenSecret = $userSC->tokenSecret;

        // All Providers
         $SCUserID = $userSC->getId();
         $SCNickName = $userSC->getNickname();
         $SCName = $userSC->getName();
         $SCEmail = $userSC->getEmail();
         $SCAvatar = $userSC->getAvatar();

         $findUser = User::where('email', $SCEmail)->first();

         if($findUser){
             //Auth::login($findUser);
             auth()->login($findUser);
             return redirect("/pages/profile");

         }else{
            $fullname = explode(" ",$SCName);
            $fname = $fullname[0];
            $lastname = $fullname[1];
            $user = new User;
            $user->name = $fname;
            $user->lastname = $lastname;
            $user->email = $SCEmail;
            $user->uname = $SCNickName;
            $user->password = bcrypt($SCUserID);
            $user->provider = $provider;
            $user->provider_id = $SCUserID;
            if($provider !== 'google'){
            $user->$provider = "http://{$provider}.com/$SCNickName";
            }
            $user->save();

            //Auth::login($user);
            auth()->login($user);

            return redirect("/pages/profile-review");


         }
 
          $userSC->token;
     }

}
