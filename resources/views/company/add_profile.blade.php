@extends('company.layouts.app')

@section('content')<section>
    <div class="container">
    <div class="feature">
    <div class="main">

      <div class="wrapper">

      <h2>Company Profile</h2>
      <p>
        Update your company profile to attract the best talent to apply for your jobs.
      </p>

      <hr>
      <form method="post" action="" />


      <div class="form-group">
        <div>
          <label>Company name</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="name"  />
          <div class="invalid-feedback">
          Please enter your full name.
          </div>
        </div>
      </div>


      <div class="form-group">
        <div>
          <label>Industry</label>
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
          <label>Location (HQ)</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="location"  />
          <div class="invalid-feedback">
          Please enter your full name.
          </div>
        </div>
      </div>


        <div class="form-group">
          <div>
            <label>Brief Your Company</label>
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
            <label>Website</label>
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
