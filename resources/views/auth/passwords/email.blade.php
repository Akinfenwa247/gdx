@extends('devs.layouts.app')

@section('content')
<section>
  <div class="container">
  <div class="feature">
  <div class="mainLogin">

    <div >

    <h3>Reset Password</h3>
    <form method="post" action="{{ route('password.email')}}" />
    {{ csrf_field() }}
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
          <button class="btn btn-primary" type="submit">Send Reset Email</button>
        </div>


      </div>
  </form>

</div> <!-- end forms -->

  </div>
</div>
</div>
</section>@endsection
