@extends('layouts.app')

@section('content')
<div class="header-div giveSpace">
  <!-- <img src="assets/img/bg/engineer-background.png" /> -->
  <h1>Are you a world-class dev?</h1>
  <p>
    Get a job at top tech companies!
  </p>
  <a  href="{{ route('assess')}}" role="button" class="btn btn-lg btn-success">Get Assessed</a>
</div>

</div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<section class="feature " id="feature-one">
<div class="container">
  <div class="row">


    <div class="col-md-4">
      <img src="assets/img/user.png" class="img img-responsive" height="100"  />
      <h3>
        Step 1
      </h3>
      <p>
        Setup your profile with your skillsets.
      </p>
    </div>

    <div class="col-md-4">
      <img src="assets/img/test-passed.png" class="img img-responsive"  />
      <h3>
        Step 2
      </h3>
      <p>
        Get coding test to demonstrate your expertise
      </p>
    </div>

    <div class="col-md-4">
      <img src="assets/img/new-job.png" class="img img-responsive"  />
      <h3>
        Step 3
      </h3>
      <p>
        Get job that matches your skillsets
      </p>
    </div>

  </div>
</div>
</section>

<section id="feature-two">
<div class="container">

  <div class="mainNoBorder2">
      <div>

        <h2> Top Tech Companies</h2>
        <p>
          Our growing list of tech companies who want to hire great talents like you are waiting to have you join their teams across Africa. We pre-qualify you so you don't have to go through long interview process.
        </p>
    </div>
</div>


</div>
</section>

<section id="feature-three">
<div class="container">

  <div class="mainNoBorder">

      <div>
        <h3 class="ca"> TOP QUESTIONS </h3>
        <div><span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
        <span class="standAloneSpan">What if I'm a new developer, will I be tested like a pro as well? </span></div>
        <div>
           <p>
             This is long
           </p>
         </div>

         <div><span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
         <span class="standAloneSpan">How much does it cost? </span></div>
         <div>
            <p>
              This is long
            </p>
          </div>

          <div><span><i class="fa fa-question-circle" aria-hidden="true"></i></span>
          <span class="standAloneSpan">What if I'm a new developer, will I be tested like a pro as well? </span></div>
          <div>
             <p>
               This is long
             </p>
           </div>
      </div>
  </div>


</div>
</section>
@endsection
</body>
</html>
