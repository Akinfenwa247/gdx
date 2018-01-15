<?php

namespace App\Http\Controllers\Assessment;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;

class AssessmentController extends Controller
{
    //

    public function assessment ()
    {

      return view('admin.assessment.index');

    }

    public function createLevel()
    {

    }

    public function addQuestion()
    {
      return view('admin.assessment.addQuestion');
    }
}
