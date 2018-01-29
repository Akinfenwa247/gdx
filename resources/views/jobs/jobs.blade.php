@extends('jobs.layouts.app')
@section('content')
<section>
  <div class="container">
    <div class="" style="padding:20px;">
      <div class="">


      <div class="row">
        <div class="col-sm-3">
          <div class="card xcard">
            <div class="card-body">
            <div class="">
              <h4 class="card-title">Filters </h4>
              <ul>
                <li>Fulltime</li>
                <li>Contract</li>
                <li>Internship</li>
                <li>Remote</li>
              </ul>

              <h4>Location</h4>
              <ul>
                <li>Lagos</li>
              </ul>
            </div>

            </div>
          </div>
        </div>


        <div class="col-sm-9">
          <div class="card xcard">
            <div class="card-body">
            <div class="">
              <h4>Latest Jobs</h4>
              @foreach ($jobs as $job)
              <p><strong>  <a class="" href="{{ url('/job/'.$job->id.'/'.\App\Http\Controllers\Devs\SkillLevelController::formatSkillLevel($job->skill_level).'-'.str_replace(' ','-',\App\Http\Controllers\Devs\SkillLevelController::formatSkill($job->skill))) }}">{{ \App\Http\Controllers\Devs\SkillLevelController::formatSkillLevel($job->skill_level)  }} {{ \App\Http\Controllers\Devs\SkillLevelController::formatSkill($job->skill) }}</a></strong> <br />
                {{ $job->technology}} <br>
                {{ $job->location}}

              </p>
              @endforeach
              {{ $jobs->links() }}
            </div>

            </div>
          </div>
        </div>
      </div>

      </div>
    </div>

  </div>
</section>
@endsection
