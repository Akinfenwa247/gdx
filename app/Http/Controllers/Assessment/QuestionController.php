<?php

namespace App\Http\Controllers\Assessment;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use \App\Models\Assessment\Question;
use Auth;

class QuestionController extends Controller
{
    //



    public function addQuestion(Request $request)
    {
      $this->validate($request,[
        'skill_level_id' => 'required|integer|max:255',
        'cat_id' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'descr' => 'required|string',
      ]);

      $question = new Question;
      $question->skill_level_id = $request->skill_level_id;
      $question->cat_id = $request->cat_id;
      $question->title = $request->title;
      $question->descr = $request->descr;
      $question->status = 0; //$request->skill_level_id;
      $question->user_id = Auth::ID();

      $question->save();
      $id = $question->id;


      return redirect('admin/addAnswer'.'/'.$id); //->with('q_id', $id);

    }

    public function editQuestion()
    {

    }


}
