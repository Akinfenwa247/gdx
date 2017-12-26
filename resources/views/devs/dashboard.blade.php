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
        <h4>Links</h4>
        <ul>
          <li><a class="" href="/profile">Profile</a></li>
          <hr>
          <li><a class="" href="/academy">Education</a></li>
          <hr>
          <li><a class="" href="/skill_level">Skill</a></li>
          <hr>

        </ul>

      </div>

      <div class="col-md-9">
        <div class="row">
          <div class="col-md-6 border border-left-0 border-top-0 border-bottom-0">
            <h4>Recent Application</h4>
            @if($data)
            @foreach($data as $jb)

            <p>
            <strong>  <a class="" href="#">{{ $jb->job->skill }}</a></strong> <br />
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

          <div class="col-md-5 col-offset-1">
            <h4>Recent Jobs</h4>
            <p>
            <strong>  <a class="" href="#">Intermediate Frontend Developer</a></strong> <br />
              Lagos, 1234
            </p>
            <hr>
            <p class="card-text">
            <strong>  <a class="" href="#">Intermediate Frontend Developer</a></strong> <br />
              Lagos, 1234
            </p>
            <hr>
            <p class="card-text">
            <strong>  <a class="" href="#">Intermediate Frontend Developer</a></strong> <br />
              Lagos, 1234
            </p>
            <hr>
            <p class="card-text">
            <strong>  <a class="" href="#">Intermediate Frontend Developer</a></strong> <br />
              Lagos, 1234
            </p>
            <hr>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>
</section>
@endsection
