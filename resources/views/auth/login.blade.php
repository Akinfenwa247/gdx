@extends('devs.layouts.app')

@section('content')

<section>
  <div class="container">
  <div class="feature">
  <div class="mainLogin">

    <div >
      <p class="d-flex justify-content-end">
        <a href="/company/login" role="button" class="btn btn-outline-primary" > Company Login</a>
      </p>
    <h2>Login to your account</h2>

    <p class="altp">
      Quick Login
    </p>
    <p>
      <span class="icon icon-fb"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></span>
      <span class="icon icon-fb"><i class="fa fa-github fa-2x" aria-hidden="true"></i></span>
    </p>
    <p class="altp">
      or Login below
    </p>
    <form method="post" action="/login" />
    {{ csrf_field() }}
      <div class="form-group">
        <div>
          <label>Email</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="email"  />
          <div class="invalid-feedback">
          Please enter your email.
          </div>
        </div>

      </div>
      <div class="form-group">
        <div>
          <label>Password</label>
        </div>
        <div>
          <input type="password" class="input form-control" name="password"  />
          <div class="invalid-feedback">
          Please enter your password.
          </div>
        </div>

      </div>

      <div class="form-group d-flex justify-content-end">
        <div>
          <button class="btn btn-primary" type="submit">Login</button>
        </div>


      </div>
  </form>
  <p>
     Forgot your password? Retrieve <a href="{{ url('/password/reset') }}"> Here</a>
  </p>
</div> <!-- end forms -->

  </div>
</div>
</div>
</section>
@endsection
