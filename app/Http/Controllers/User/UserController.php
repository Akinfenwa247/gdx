<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;

class UserController extends Controller
{
  public function users()
  {

    return view('admin.users');
  }

}
