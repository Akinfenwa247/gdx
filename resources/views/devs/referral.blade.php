@extends('devs.layouts.app')

@section('content')

<section>
  <div class="container">
    <div class="feature">
      <div class="main">
        <div class="">
          <h3>Referral Code</h3>
          <p>When you refer your friends to GetDev, we give you N5,000 for anyone who got a job through us. Below is your referral code:</p>
          <p>{{ auth()->id() }}</p>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
