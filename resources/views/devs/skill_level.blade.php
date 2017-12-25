@extends('devs.layouts.app')

@section('content')
<section>
    <div class="container">
    <div class="feature">
    <div class="main">

      <div class="wrapper">
        <h3>Skill Level</h3>
      <form method="post" action="" />
      <div class="form-group">
        <div>
          <label>Skill Level</label>
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
          <label>Phone</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="phone"  />
          <div class="invalid-feedback">
          Please enter your full name.
          </div>
        </div>


      </div>

      <div class="form-group">
        <div>
          <label>Sex</label>
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
            <label>Portfolio</label>
          </div>
          <div>
            <input type="text" class="input form-control" name="portfolio"  />
            <div class="invalid-feedback">
            Please enter your email.
            </div>
          </div>

        </div>

        <div class="form-group">
          <div>
            <label>Language</label>
          </div>
          <div>
            <input type="text" class="input form-control" name="langauge"  />
            <div class="invalid-feedback">
            Please enter your password.
            </div>
          </div>

        </div>

        <div class="form-group">
          <div>
            <label>Framework</label>
          </div>
          <div>
            <input type="text" class="input form-control" name="framework"  />
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
            <input type="text" class="input form-control" name="location"  />
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
