@extends('devs.layouts.app')

@section('content')
<section>
    <div class="container">
    <div class="feature">
    <div class="main">

      <div class="wrapper">
        <h3>ACADEMY & JOB READINESS</h3>
      <form method="post" action="" />

      <div class="form-group">
        <div>
          <label>Date of Birth</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="dob"  />
          <div class="invalid-feedback">
          Please enter your full name.
          </div>
        </div>
      </div>

      <div class="form-group">
        <div>
          <label>Qualification</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="qualification"  />
          <div class="invalid-feedback">
          Please enter your full name.
          </div>
        </div>
      </div>

      <div class="form-group">
        <div>
          <label>School</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="dob"  />
          <div class="invalid-feedback">
          Please enter your full name.
          </div>
        </div>
      </div>

      <div class="form-group">
        <div>
          <label>How available are you?</label>
        </div>
        <select name="stack" class="input custom-select" >
          <option value="0">

          </option>
          <option value="fulltime">Fulltime</option>
          <option value="parttime">Parttime</option>
          <option value="remote">Remote </option>
          <option value="any">Any of the Above </option>
        </select>
        <div class="invalid-feedback">
        Please select your stack.
        </div>

      </div>


      <div class="form-group">
        <div>
          <label>When will you like to resume</label>
        </div>
        <select name="stack" class="input custom-select" >
          <option value="0">

          </option>
          <option value="now">Right away</option>
          <option value="thismonth">This month </option>
          <option value="nextmonth">Next Month</option>
          <option value="2months">Next 2 Months </option>
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
            <input type="text" class="input form-control" name="experience"  />
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
