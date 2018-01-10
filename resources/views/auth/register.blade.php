@extends('devs.layouts.app')

@section('content')
<section>
    <div class="container">
    <div class="feature">
    <div class="main">

      <div class="wrapper">
        <p class="d-flex justify-content-end">
          <a href="#" role="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#companyModal"> Company sign up</a>
        </p>
      <h2>Get Started</h2>

      <p class="altp">
        Quick sign up
      </p>
      <p>
        <span class="icon icon-fb"><a href="/login/facebook">   <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></span>
        <span class="icon icon-fb"><a href="/login/github"><i class="fa fa-github fa-2x" aria-hidden="true"></a></i></span>
      </p>
      <p class="altp">
        or Sign up below
      </p>
      @if (count($errors) > 0)
     <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
     @endforeach
     </ul>
     </div>
     @endif
      <form method="post" action="{{ route('register') }}" />
      {{ csrf_field() }}
        <div class="form-group">
          <div>
            <label>Email</label>
          </div>
          <div>
            <input type="text" class="input form-control" name="email"  />
            <input type="hidden" class="input form-control" name="role" value="1"  />
            @if ($errors->has('email'))
           <span class="help-block">
               <strong>{{ $errors->first('email') }}</strong>
           </span>
           @endif
          </div>

        </div>
        <div class="form-group">
          <div>
            <label>Full Name</label>
          </div>
          <div>
            <input type="text" class="input form-control" name="name"  />
            @if ($errors->has('name'))
           <span class="help-block">
               <strong>{{ $errors->first('name') }}</strong>
           </span>
           @endif
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

        <div class="form-group">
          <div>
            <label>Confirm Password</label>
          </div>
          <div>
            <input type="password" class="input form-control" name="password_confirmation"  />
            <div class="invalid-feedback">
            Please enter your password.
            </div>
          </div>

        </div>

        <div class="form-group">
          <div>
            <label>Skill Type</label>
          </div>
          <select name="stacks" class="input custom-select" >
            <option value="0">

            </option>
            <option value="ux">UX/UI</option>
            <option value="frontend">Frontend Developer</option>
            <option value="backend">Backend Developer</option>
            <option value="fullstack">Fullstack </option>
            <option value="devops">DevOps </option>
            <option value="qa">QA </option>
            <option value="software">Software Developer </option>
            <option value="ios">Mobile App (iOS) </option>
            <option value="android">Mobile App (Android) </option>
            <option value="biz">Business Analyst </option>
            <option value="pd">Product Manager </option>
            <option value="pm">Project Manager </option>
            <option value="hybrid">Hybrid Mobile Dev </option>
            <option value="db">Database Admin </option>
            <option value="others">Others </option>
          </select>
          @if ($errors->has('stacks'))
         <span class="help-block">
             <strong>{{ $errors->first('stacks') }}</strong>
         </span>
         @endif

        </div>

        <div class="form-group d-flex justify-content-end">
          <div>
            <button class="btn btn-primary" type="submit">Sign Up</button>
          </div>


        </div>
    </form>
    <p>
       Already have an account? <a href="{{ url('/login') }}"> Login</a>
    </p>
  </div> <!-- end forms -->

    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade"  id="companyModal" tabindex="-1" role="dialog" aria-labelledby="companyModal" aria-hidden="true">
<div class="modal-dialog featureModal" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="companyModalLabel">Learn more </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form method="post" action="{{ route('addCompany') }}" />
      {{ csrf_field() }}
      <div class="form-group">
        <div>
          <label>Full Name</label>
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
            <label>Company Email</label>
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
          <label>Phone Number</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="phone"  />
          <div class="invalid-feedback">
          Please enter your email.
          </div>
        </div>

      </div>

      <div class="form-group">
        <div>
          <label>Head Quarters</label>
        </div>
        <div>
          <input type="text" class="input form-control" name="location"  />

        </div>

      </div>

      <div class="form-group">
        <div>
          <label>How many developers do you want to hire in the next 3 months?</label>
        </div>
        <select name="hire" class="input custom-select" >
          <option value="0">

          </option>
          <option value="1">
            1
          </option>
          <option value="2">
            2
          </option>
          <option value="3">
            3
          </option>
          <option value="4">
            4
          </option>
          <option value="5">
            5
          </option>
          <option value="10">
            10
          </option>
        </select>
        <div class="invalid-feedback">
        Please select your stack.
        </div>

      </div>

      <div class="">
        <div>
          <button class="btn btn-success inp" type="submit" style="width: 400px">Submit</button>
        </div>


      </div>
  </form>
  </div>
  <!-- <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div> -->
</div>
</div>
</div>
</section>
@endsection
