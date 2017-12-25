@extends('company.layouts.app')

@section('content')  <section>
      <div class="container">
      <div class="feature">
      <div class="main">

        <div class="wrapper">

        <h2>Add a position</h2>


        <form method="post" action="" />
        <div class="form-group">
          <div>
            <label>Position</label>
          </div>
          <select name="stack" class="input custom-select" >
            <option value="0">

            </option>
            <option value="1">
              Frontend
            </option>
          </select>
          <div class="invalid-feedback">
          Please select your stack.
          </div>

        </div>

        <div class="form-group">
          <div>
            <label>Skill level</label>
          </div>
          <select name="stack" class="input custom-select" >
            <option value="0">

            </option>
            <option value="1">
              Intern
            </option>
          </select>
          <div class="invalid-feedback">
          Please select your stack.
          </div>

        </div>

        <div class="form-group">
          <div>
            <label>Years of Experience</label>
          </div>
          <select name="stack" class="input custom-select" >
            <option value="0">

            </option>
            <option value="1">
              Frontend
            </option>
          </select>
          <div class="invalid-feedback">
          Please select your stack.
          </div>

        </div>

        <div class="form-group">
          <div>
            <label>Job Type</label>
          </div>
          <select name="stack" class="input custom-select" >
            <option value="0">

            </option>
            <option value="1">
              Fulltime
            </option>
          </select>
          <div class="invalid-feedback">
          Please select your stack.
          </div>

        </div>

          <div class="form-group">
            <div>
              <label>Job Description</label>
            </div>
            <div>
              <textarea class="form-control" name="jd"></textarea>
              <div class="invalid-feedback">
              Please enter your email.
              </div>
            </div>

          </div>
          <div class="form-group">
            <div>
              <label>Technology Stack</label>
            </div>
            <div>
              <input type="text" class="input form-control" name="name"  />
              <div class="invalid-feedback">
              Please enter your full name.
              </div>
            </div>


          </div>


          <div class="form-group d-flex justify-content-end">
            <div>
              <button class="btn btn-primary" type="submit">Complete</button>
            </div>


          </div>
      </form>

    </div> <!-- end forms -->

      </div>
    </div>
  </div>

  </section>
@endsection
