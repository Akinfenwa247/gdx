@extends('devs.layouts.app')

@section('content')<section>
    <div class="container">
    <div class="feature">
    <div class="main">

      <div class="wrapper">
        <h3>ASSESSMENT</h3>
        <div class="">
          <h5 class="d-flex justify-content-start">
            2 of 10
          </h5>
          <h5 class="d-flex justify-content-end ">
          <span class="bg-deep">1:08</span>
        </h5>
        </div>

      <form method="post" action="" />
      <div class="question">
        <p>
          What will be the output of this function?
        </p>

      </div>
      <div class="code">

        <pre cite="http://">
          (function() {
               var a = b = 5;
            })();

          console.log(b);
        </pre>

      </div>
      <div class="form-group">


          <input type="radio" class=" form-control" name="dob"  /> 5
          <input type="radio" class="form-control" name="dob"  /> 0
          <input type="radio" class=" form-control" name="dob"  /> Null
          <input type="radio" class=" form-control" name="dob"  /> I don't know

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
