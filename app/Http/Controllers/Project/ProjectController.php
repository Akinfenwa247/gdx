<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;

class ProjectController extends Controller
{
  public function project()
  {

    return view('admin.project.index');
  }

}
