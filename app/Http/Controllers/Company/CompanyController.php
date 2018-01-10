<?php
namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Apply;
use App\Models\Company;
use App\User;

class CompanyController extends Controller
{

  //Create a new company
  public function create(Request $request){
      $this->validate($request,[
      'name' => 'required|string|max:255',
      'phone' => 'required|string',
      'email' => 'required|email',

      ]);

      $lname = null;
      $fname = null;
      $name = $request->name;
      $name = explode(" ",$name);
      $fname = $name[0];
      if(count($name) > 1){
          $lname = $name[1];
      }
      $email = $request->email;
      $password = $request->password;

      $user = User::create([
          'name' =>$fname,
          'lastname' => $lname,
          'email' => $email,
          'password' => bcrypt($password),
      ]);

      \Auth::login($user);
      $user_id = Auth::id();

      $company = new Company;
      $company->user_id = $user_id;
      $company->name = $request->name;
      $company->email = $request->email;
      $company->address = 'none';
      $company->phone = $request->phone;
      $location = explode(" ",$request->location);
      if(count($location) > 1){
        $company->location = $location[0];
        $company->country = $location[1];
      }else{
        $company->location = $request->location;
        $company->country = $request->location;
      }
      $company->website = $request->website;
      $company->hire = $request->hire;
      $company->save();


      return redirect('/success')->with('status', 'Thanks for asking to learn more, our sales professionals will get in touch.');
  }

  public function success() {
    return view('company.success');
  }

}
