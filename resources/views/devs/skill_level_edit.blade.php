@extends('devs.layouts.app')

@section('content')
<section>
    <div class="container">
    <div class="feature">
    <div class="main">

      <div class="wrapper">
        <h3>Skill Level</h3>
        <p>Please fill your information below so we can match job accurately.</p>
      <form method="post" action="/skill_level" />
      {{ csrf_field()}}

      <div class="form-group">
        <div>
          <label>Skill Level</label>
        </div>
        <select name="skill_level" class="input custom-select" required >
          <option value="0"></option>
          <option value="1"
          @if($profile->skill_level==1)
          selected="selected"
          @endif
          >Intern</option>
          <option value="2"
          @if($profile->skill_level==2)
          selected="selected"
          @endif
          >Junior</option>
          <option value="3"
          @if($profile->skill_level==3)
          selected="selected"
          @endif
          >Intermediate </option>
          <option value="4"
          @if($profile->skill_level==4)
          selected="selected"
          @endif
          >Advance</option>
          <option value="5"
          @if($profile->skill_level==5)
          selected="selected"
          @endif
          >Senior </option>
        </select>
        <div class="invalid-feedback">
        Please select your stack.
        </div>

      </div>

      <div class="form-group">
        <div>
          <label>Phone</label>
        </div>
        <div>
          <input type="text" class="input form-control" value="{{ $profile->phone }}" name="phone" required  />
          <div class="invalid-feedback">
          Please enter your full name.
          </div>
        </div>


      </div>

      <div class="form-group">
        <div>
          <label>Sex</label>
        </div>
        <select name="sex" class="input custom-select" required >
          <option value="0">

          </option>
          <option value="male"
          @if($profile->sex==='male')
          selected="selected"
          @endif
          >Male</option>
          <option value="female"
          @if($profile->sex==='female')
          selected="selected"
          @endif
          >Female </option>
        </select>
        <div class="invalid-feedback">
        Please select your stack.
        </div>

      </div>


        <div class="form-group">
          <div>
            <label>Portfolio (Separate by comma)</label>
          </div>
          <div>
            <input type="text" class="input form-control" name="portfolio" value="{{ $profile->portfolio }}" required  />
            <div class="invalid-feedback">
            Please enter your email.
            </div>
          </div>

        </div>

        <div class="form-group">
          <div>
            <label>Programming Languages (Separate by comma)</label>
          </div>
          <div>
            <input type="text" class="input form-control" name="langauge" value="{{ $profile->language }}"  />
            <div class="invalid-feedback">
            Please enter your password.
            </div>
          </div>

        </div>

        <div class="form-group">
          <div>
            <label>Framework (Separate by comma)</label>
          </div>
          <div>
            <input type="text" class="input form-control" name="framework" value="{{$profile->framework}}"  />
            <div class="invalid-feedback">
            Please enter your password.
            </div>
          </div>

        </div>

        <div class="form-group">
          <div>
            <label>Location</label>
          </div>
          <div>
            <input type="text" class="input form-control" name="location" value="{{$profile->city}}"  />
            <div class="invalid-feedback">
            Please enter your password.
            </div>
          </div>

        </div>


        <div class="form-group d-flex justify-content-end">
          <div>
            <button class="btn btn-primary" type="submit">Next</button>
          </div>


        </div>
    </form>

  </div> <!-- end forms -->

    </div>
  </div>
</div>
</section>
@endsection
