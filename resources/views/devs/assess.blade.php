@extends('devs.layouts.app')

@section('content')
<section>
    <div class="container">
    <div class="feature">
    <div class="main">

      <div class="wrapper">
        <h3>ASSESSMENT</h3>
      <form method="post" action="/onboard" />
        {{ csrf_field() }}
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

    <div class="">
      <div class="form-group">


          <input type="radio" class=" form-control" name="dob"  /> 5
          <input type="radio" class="form-control" name="dob"  /> 0
          <input type="radio" class=" form-control" name="dob"  /> Null
          <input type="radio" class=" form-control" name="dob"  /> I don't know

      </div>
    </div>


        <div class="form-group d-flex justify-content-end">
          <div>
            <button class="btn btn-success" type="submit"> Continue &rarr; </button>
          </div>


        </div>
    </form>

  </div> <!-- end forms -->

    </div>
  </div>
</div>
@endsection
