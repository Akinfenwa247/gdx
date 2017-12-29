@extends('devs.layouts.app')

@section('content')

<div id="toplink" class="mainNoBorder bg-red">
<h3>Dashboard</h3>
<span class=" ml-auto"> Stats: Positions 1 Candidates 4</span>
</div>

<section>
<div class="">
  <div class="" style="background-color:#FFF">
    <div class="row mainNoBorder">
      <div class="col-md-2">
        <h5>Links</h5>
        <ul>
          <li><a class="" href="/profile">Profile</a></li>
          <hr>
          <li><a class="" href="/academy">Education</a></li>
          <hr>
          <li><a class="" href="/editskill_level">Skill</a></li>
          <hr>

        </ul>

      </div>

      <div class="col-md-10">
        <div class="row">
          <div class="col-md-4 border border-left-0 border-top-0 border-bottom-0">
            <h5>Recent Application</h5>
            @if($data)
            @foreach($data as $jb)

            <p>
            <strong>  <a class="" href="#">{{ \App\Http\Controllers\Devs\SkillLevelController::formatSkill($jb->job->skill) }}</a></strong> <br />
              {{ $jb->job->location}}, 1234 <a class="btn btn-warning" href="#">Pending</a>
            </p>
            <hr>
            @endforeach
            @else
            <p class="error">
              You have not applied for any job.
            </p>
            @endif
          </div>

          <div class="col-md-3 col-offset-1 border border-left-0 border-top-0 border-bottom-0">
            <h5>Recent Posted Jobs</h5>
            @if($jobs)
            @foreach($jobs as $job)
            <p>
            <strong>  <a class="" href="{{ url('/'.$job->skill.'/'.$job->id) }}">{{ \App\Http\Controllers\Devs\SkillLevelController::formatSkillLevel($job->skill_level)  }} {{ \App\Http\Controllers\Devs\SkillLevelController::formatSkill($job->skill) }}</a></strong> <br />
              {{ $job->location }}
            </p>
            <hr>
            @endforeach
            @else
              <p>
                No recent job matching you skill set.
              </p>
            @endif
          </div>

          <div class="col-md-3 col-offset-1">
            <h5>Recently Viewed Jobs</h5>
            @if($recent)
            @foreach($recent as $rc)
            <p>
            <strong>  <a class="" href="{{ url('/'.$job->skill.'/'.$job->id) }}">{{ \App\Http\Controllers\Devs\SkillLevelController::formatSkillLevel($rc->job->skill_level)  }} {{ \App\Http\Controllers\Devs\SkillLevelController::formatSkill($rc->job->skill) }}</a></strong> <br />
              {{ $rc->job->location }}
            </p>
            <hr>
            @endforeach
            @else
              <p>
                No recent job matching you skill set.
              </p>
            @endif
          </div>

        </div>

      </div>

    </div>
  </div>
</div>
</section>
@endsection
