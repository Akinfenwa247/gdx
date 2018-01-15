@extends('admin.layouts.app')

@section('content')
<section>
  <div class="">
    Questions [ <a href="/admin/addQuestion">Add Question</a> | <a href="/admin/viewQuestions">View Questions</a> ]  | Assessments Taken |
  </div>
</section>
<section>
    <div class="container">
     <div class="feature">
      <div class="main">
       <div class="wrapper">
         <h3>Add a Question</h3>
         @if (count($errors) > 0)
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
        @endif

        <form method="post" action="{{ route('addQuestion') }}" />
        {{ csrf_field() }}
          <div class="form-group">
            <div>
              <label>Category</label>
            </div>
            <div>
              <select name="cat_id" class="input custom-select" >
                <option value="0"></option>
                <option value="ux">UX/UI</option>
                <option value="frontend">Frontend Developer</option>
                <option value="backend">Backend Developer</option>
                <option value="fullstack">Fullstack </option>
                <option value="devops">DevOps </option>
                <option value="qa">QA </option>
                <option value="software">Software Developer </option>
                <option value="ios">Mobile App (iOS) </option>
                <option value="android">Mobile App (Android) </option>
                <option value="biz">Business Analyst </option>
                <option value="pd">Product Manager </option>
                <option value="pm">Project Manager </option>
                <option value="hybrid">Hybrid Mobile Dev </option>
                <option value="db">Database Admin </option>
                <option value="others">Others </option>
              </select>
              @if ($errors->has('cat_id'))
             <span class="help-block">
                 <strong>{{ $errors->first('cat_id') }}</strong>
             </span>
             @endif
            </div>
          </div>

            <div class="form-group">
              <div>
                <label>Skill Level</label>
              </div>
              <select name="skill_level_id" class="input custom-select" required >
                <option value="0"></option>
                <option value="1">Intern</option>
                <option value="2">Junior</option>
                <option value="3">Intermediate </option>
                <option value="4">Advance</option>
                <option value="5">Senior </option>
              </select>
              <div class="invalid-feedback">
                @if ($errors->has('skill_level_id'))
               <span class="help-block">
                   <strong>{{ $errors->first('skill_level_id') }}</strong>
               </span>
               @endif
              </div>

            </div>

            <div class="form-group">
              <div>
                <label>Title</label>
              </div>
              <div>
                <input type="text" class="input form-control" value="{{ old ('title') }}" name="title" required  />
                <div class="invalid-feedback">
                  @if ($errors->has('title'))
                 <span class="help-block">
                     <strong>{{ $errors->first('title') }}</strong>
                 </span>
                 @endif
                </div>
              </div>
            </div>

            <div class="form-group">
              <div>
                <label> Description</label>
              </div>
              <div>
                <textarea class="form-control" name="descr"></textarea>
                <div class="invalid-feedback">
                  @if ($errors->has('descr'))
                 <span class="help-block">
                     <strong>{{ $errors->first('descr') }}</strong>
                 </span>
                 @endif
                </div>
              </div>
            </div>

            <div class="form-group d-flex justify-content-end">
              <div>
                <button class="btn btn-primary" type="submit">Add</button>
              </div>
            </div>
        </form>


       </div>
     </div>
    </div>
  </div>
</section>
@endsection
