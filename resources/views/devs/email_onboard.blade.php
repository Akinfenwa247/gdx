@extends('devs.layouts.app')

@section('content')

<section>
  <div class="container">
  <div class="feature">
  <div class="mainLogin">

    <div >

    <h3>Enter your email to continue</h3>
    <form method="get" action="/register" />
      <div class="form-group">
        <div>
          <!-- <label>Email</label> -->
        </div>
        <div>
          <input type="text" class="input form-control" name="email" placeholder="bola@example.com" />
          <div class="invalid-feedback">
          Please enter your email.
          </div>
        </div>

      </div>

      <div class="form-group d-flex justify-content-end">
        <div>
          <button class="btn btn-primary" type="submit">Continue</button>
        </div>


      </div>
  </form>

</div> <!-- end forms -->

  </div>
</div>
</div>
</section>

@endsection
