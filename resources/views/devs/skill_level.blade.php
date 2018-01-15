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
          <option value="1">Intern</option>
          <option value="2">Junior</option>
          <option value="3">Intermediate </option>
          <option value="4">Advance</option>
          <option value="5">Senior </option>
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
          <input type="text" class="input form-control" value="{{ old ('phone') }}" name="phone" required  />
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
          <option value="male">Male</option>
          <option value="female">Female </option>
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
            <input type="text" class="input form-control" name="portfolio" value="{{ old('portfolio') }}" required  />
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
            <input type="text" class="input form-control" name="language" value="{{ old('language') }}"  />
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
            <input type="text" class="input form-control" name="framework" value="{{ old('framework')}}"  />
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
            <input type="text" class="input form-control" name="city" value="{{ old('city')}}"  />
            <div class="invalid-feedback">
            Please enter your password.
            </div>
          </div>

        </div>

        <div class="form-group">
          <div>
            <label>Country</label>
          </div>
          <div>
            <input type="text" class="input form-control" name="country" value="{{ old('country')}}"  />
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
