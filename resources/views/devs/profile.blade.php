@extends('devs.layouts.app')

@section('content')
<section>
    <div class="container">
    <div class="feature">
    <div class="main">
      <div class="">


      <p class="ca">
        <img src="assets/img/tina.jpg" class="rounded-circle" height="80" />
        <div class="" style="width: 100%">
          <p class="c-grey">{{ \App\Http\Controllers\Devs\SkillLevelController::formatSkillLevel($data->profile->skill_level)  }} {{ \App\Http\Controllers\Devs\SkillLevelController::formatSkill($data->profile->skill)  }}
          <br>{{ $data->profile->city}}, {{ $data->profile->country}}. </p>
          <br> {{ $data->about }} <br>
          @if(Auth::id() == $data->id )
          <a href="/pages/step2">Edit</a>
          @endif
        </div>

      </p>
      <div class="ca"> <a href="#" role="button" class="btn btn-success"> HIRE </a> </div>
      <div class="row">
        <div class="col-sm-6 border border-left-0 border-top-0 border-bottom-0">
          <h6>Stacks </h6>
          <p>{{ $data->profile->language }}</p>

          <h6>Frameworks</h6>
          <p>
          @php
          $frameworks = $data->profile->framework;
          $frameworks = explode(',',$frameworks);

          @endphp

          @foreach($frameworks as $framework)
          <p class="f-14 w-900">{{ $framework }}</p>
          @endforeach</p>

          <h6>GitHub</h6>
          <p>Project 1</p>
          <p>Project 2</p>
          <p>Project 3</p>
          <p>Project 4</p>
        </div>
        <div class="col-sm-5 offset-sm-1">
          <h6>Portfolio</h6>
          <p>@php
          $portfolios = $data->profile->portfolio;
          $portfolios = explode(',',$portfolios);

          @endphp

          @foreach($portfolios as $portfolio)
          <p class="f-14 w-900">{{ $portfolio }}</p>
          @endforeach</p>

          <h6>Employment</h6>
          <p>@php
          $where_works = $data->profile->where_work;
          $where_works = explode(',',$where_works);

          @endphp

          @foreach($where_works as $where_work)
          <p class="f-14 w-900">{{ $where_work}}</p>
          @endforeach</p>
        </div>
      </div>
      <div class="ca"> <a href="#" role="button" class="btn btn-success"> HIRE </a> </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection
