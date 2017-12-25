<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use MailController;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

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
    protected function create(array $data)
    {
        // if($data['role']==2){
            $name = explode(" ",$data['name']);
            $name = $name[0];
            $lastname = $name[1];
        // }else{
        //     $name = $data['name'];
        //     $lastname = $data['lastname'];
        // }
            $role = $data['role'];

        return User::create([
            'name' =>$name,
            'lastname' => $lastname,
            'email' => $data['email'],
            'stacks' => $data['stacks'],
            'role' => $data['role'],

            // 'github' => $data['github'],
            // 'linkedin' => $data['linkedin'],
            'password' => bcrypt($data['password']),
        ]);
        $user = auth()::user();
        //Mail::to($user)->send(new Register($user));
        $email = $data['email'];
        if($data['role']==2){
            //dd(MailController::welcomeCompany ($name, $email));

            return redirect('/cdashboard');

        }else{
            return redirect('/ddashboard');
            MailController::welcomeMail ($name, $email);
        }
    }

    public function postLogin(){

      //$user = User::where('role', '')->first();
      $user = auth::user();
      $role = $user->role;

      if($data['role']==2){
          //dd(MailController::welcomeCompany ($name, $email));

          return redirect('/cdashboard');

      }else{
          return redirect('/ddashboard');
          //MailController::welcomeMail ($name, $email);
      }

    }

    public function testMail (){
        MailController::welcomeMail ("sheriff", "possicon@gmail.com");
    }
}
