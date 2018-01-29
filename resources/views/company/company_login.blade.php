@extends('company.layouts.app')

@section('content')

<section >
<div class="container">
<div class="feature">
<div class="mainLogin">

  <div >

  <h2>Company Login</h2>
  <hr />
  <p>
    Access your company dashboard here to manage your job list.
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
   Forgot your password? Retrieve <a href="#"> Here</a>
</p>
</div> <!-- end forms -->

</div>
</div>
</div>
</section>
@endsection
