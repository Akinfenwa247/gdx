@extends('jobs.layouts.app')
@section('content')
<section>
	<div class="container">
		<div class="mainCenterStay">
			<div class="main">


		<div class="row">
			<div class="col-md-8">
				<h3> {{ \App\Http\Controllers\Devs\SkillLevelController::formatSkillLevel($job->skill_level)  }} {{ \App\Http\Controllers\Devs\SkillLevelController::formatSkill($job->skill) }}</h3>

				<h4>Job Description</h4>
				<p>{{ $job->jd}}</p>

				<h4>Key Responsibility</h4>
				<p>
						{{ $job->responsibility}}
				</p>

				<h4>Key Requirement</h4>
				<p></p>

			<h4>Technology</h4>
			<p>{{ $job->technology}}</p>

			</div>
			<div class="col-md-3 offset-1">
				<h3>Job Detail</h3>
				<p> <strong>Company:</strong>

				@if($job->company->name === '')
				Undisclosed


				@else

				{{ $job->company->name }}

				@endif
				</p>
				@php
					if(empty($job->job_type)){
						$job->job_type = 1;
					}
						switch ($job->job_type){
							case 'fulltime':
							$job_type = "Fulltime";
							break;

							case '1':
							$job_type = "Fulltime";
							break;

							case '2':

							$job_type = "Part-time";
							break;

							case '3':
							$job_type = "Remote";
							break;

							case 'contract':
							$job_type = "Contract";
							break;

							case '4':
							$job_type = "Contract";
							break;
						}

				@endphp
				<p> <strong>Job Type:</strong> {{ $job_type}} </p>
				<p> <strong>Job Level:</strong></strong> {{ \App\Http\Controllers\Devs\SkillLevelController::formatSkillLevel($job->skill_level)}} </p>
				<p> <strong>Location:</strong></strong></strong> {{ $job->location}} </p>
				<p> <strong>Years of Experience:</strong> {{ $job->experience}} </p>

				<p> <strong>Salary:</strong> &#8358;{{ number_format((float)$job->salary)}}</p>
				<p><a href="{{ route('apply',['id'=>$job->id, 'cid'=>$job->company->id ]) }}" class="btn btn-danger">Apply</a></p>
			</div>

		</div>
	</div>
</div>
</div>
</section>
	@endsection
