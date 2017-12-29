@extends('devs.layouts.app')

@section('content')
<section>
    <div class="container">
    <div class="feature">
    <div class="main">

      <div class="wrapper">
        <h3>ACADEMY & JOB READINESS</h3>
      <form method="post" action="{{ route('academy')}}" />
      {{ csrf_field()}}
      <div class="form-group">
        <div>
          <label>Date of Birth</label>
        </div>
        <div>
        <input type="date" class="form-control h-30" id="" name="dob" value="{{ $profile->dob }}" max="2005-01-01" required="required"></p>
          <div class="invalid-feedback">
          Please enter your full name.
          </div>
        </div>
      </div>

      <div class="form-group">
        <div>
          <label>What did you study?</label>
        </div>
        <div>
          <input type="text" class="form-control h-30" id="" name="study" placeholder="" value="{{ $profile->study }}" required="required">
          <div class="invalid-feedback">
          Please enter your full name.
          </div>
        </div>
      </div>

      <div class="form-group">
        <div>
          <label>Which School did you attend?</label>
        </div>
        <div>
          <input type="text" value="{{ $profile->school }}" class="form-control h-30" name="school" placeholder="" required="required">
          <div class="invalid-feedback">
          Please enter your full name.
          </div>
        </div>
      </div>

      <div class="form-group">
        <div>
          <label>How available are you?</label>
        </div>
        <select name="availability" id="input" class="form-control h-30"  required>
          <option value=""
          @if($profile->availability==="")
          selected="selected"
          @endif
          >How available are you?</option>
          <option value="fulltime"
          @if($profile->availability==="fulltime")
          selected="selected"
          @endif
          >Fulltime</option>
          <option value="parttime"
          @if($profile->availability==="parttime")
          selected="selected"
          @endif
          >Parttime</option>
          <option value="remote"
          @if($profile->availability==="remote")
          selected="selected"
          @endif
          >Remote </option>
          <option value="any"
          @if($profile->availability==="any")
          selected="selected"
          @endif
          >Any of the Above </option>
        </select>
        <div class="invalid-feedback">
        Please select your stack.
        </div>

      </div>


      <div class="form-group">
        <div>
          <label>When will you like to resume</label>
        </div>
        <select name="soon" class="input custom-select" >
          <option value="0">

          </option>
          <option value="now"
          @if($profile->soon==="now")
          selected="selected"
          @endif
          >Right away</option>
          <option value="thismonth"
          @if($profile->soon==="thismonth")
          selected="selected"
          @endif
          >This month </option>
          <option value="nextmonth"
          @if($profile->soon==="nextmonth")
          selected="selected"
          @endif
          >Next Month</option>

          <option value="2months"
          @if($profile->soon==="2months")
          selected="selected"
          @endif
          >Next 2 Months </option>
        </select>
        <div class="invalid-feedback">
        Please select your stack.
        </div>

      </div>


        <div class="form-group">
          <div>
            <label>Where you have worked</label>
          </div>
          <div>
            <input type="text" class="form-control h-30" id="" name="where_work" placeholder="" value="{{ $profile->where_work }}" required="required">
            <div class="invalid-feedback">
            Please enter your email.
            </div>
          </div>

        </div>

        <div class="form-group d-flex justify-content-end">
          <div>
            <button class="btn btn-success" type="submit">Complete</button>
          </div>


        </div>
    </form>

  </div> <!-- end forms -->

    </div>
  </div>
</div>
</section>

@endsection
