<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use MailController;

class RegisterController extends Controller
{

      //use RegistersUsers;
      /**
       * Get a validator for an incoming registration request.
       *
       * @param  array  $data
       * @return \Illuminate\Contracts\Validation\Validator
       */
      protected function validator(array $data)
      {
          return Validator::make($data, [
              'name' => 'required|string|max:255',
              'email' => 'required|string|email|max:255|unique:users',
              'password' => 'required|string|min:6|confirmed',
          ]);
      }

      /**
       * Create a new user instance after a valid registration.
       *
       * @param  array  $data
       * @return \App\User
       */
      protected function register(Request $request)
      {
              $user = new User;
              $name = explode(" ",$request->name);
              $user->name = $name[0];
              $user->lastname = $name[1];
              $user->email = $request->email;
              $user->password = bcrypt($request->password);
              $user->role = $request->role;

              $user->save();

              if($user->role == 1){
                return redirect('/ddashboard');
              }elseif($user->role == 2){
                return redirect('/cdashboard');
              }else{
                return redirect('/adashboard');
              }
      }

      public function showRegistrationForm(){
        return view('auth.register');
      }


}
