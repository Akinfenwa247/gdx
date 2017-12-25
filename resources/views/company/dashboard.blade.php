@extends('company.layouts.app')

@section('content')

<div id="toplink" class="mainNoBorder">
<h3>Dashboard</h3>
<span class=" ml-auto"> Stats: Positions 1 Candidates 4</span>
</div>
<section >

  <div class=" mainCenterStay" >

    <div class="row">
      <div class="col-sm-3">
        <div class="card xcard">
          <div class="card-body">
          <div class="cc">
            <h4 class="card-title">My Positions &darr; </h4> <a class="nav-link" href="#"><span class="icon icon-fb"><i class="fa fa-plus-square text-primary" aria-hidden="true"></i></span></a>
          </div>

            <p class="card-text">
            <strong>  <a class="" href="#">Intermediate Frontend Developer</a></strong> <br />
              Lagos, 1234 <a class="" href="#"><span class="icon icon-edit"><i class="fa fa-edit " aria-hidden="true"></i></span></a> <a class="" href="#"><span class="icon icon-trash"><i class="fa fa-trash text-danger" aria-hidden="true"></i></span></a>
            </p>
            <hr>
            <p class="card-text">
            <strong>  <a class="" href="#">Intermediate Frontend Developer</a></strong> <br />
              Lagos, 1234 <a class="" href="#"><span class="icon icon-edit"><i class="fa fa-edit " aria-hidden="true"></i></span></a> <a class="" href="#"><span class="icon icon-trash"><i class="fa fa-trash text-danger" aria-hidden="true"></i></span></a>
            </p>
            <hr>
            <p class="card-text">
            <strong>  <a class="" href="#">Intermediate Frontend Developer</a></strong> <br />
              Lagos, 1234 <a class="" href="#"><span class="icon icon-edit"><i class="fa fa-edit " aria-hidden="true"></i></span></a> <a class="" href="#"><span class="icon icon-trash"><i class="fa fa-trash text-danger" aria-hidden="true"></i></span></a>
            </p>
            <hr>
            <p class="card-text">
            <strong>  <a class="" href="#">Intermediate Frontend Developer</a></strong> <br />
              Lagos, 1234 <a class="" href="#"><span class="icon icon-edit"><i class="fa fa-edit " aria-hidden="true"></i></span></a> <a class="" href="#"><span class="icon icon-trash"><i class="fa fa-trash text-danger" aria-hidden="true"></i></span></a>
            </p>
            <hr>

            <div class="cr">
              <a href="#" role="button" class="btn btn-outline-primary">View all</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card xcard">
          <div class="card-body">
            <h4 class="card-title ca">New Candidates</h4>

            <div class="">
              <p>
                <strong>Sheriff Shittu</strong> <br>
                <i>Fullstack @ Paystack</i> <br>
                <i><span class="icon icon-briefcase"><i class="fa fa-trash text-briefcase" aria-hidden="true"></i></span> Frontend</i>
              </p>
                <hr>
            </div>
            <div class="">
              <p>
                <img src="" alt="" align="left" /><a href="#" data-toggle="modal" data-target="#exampleModal"><strong>Sheriff Shittu</strong></a> <br>
                <i>Fullstack @ Paystack</i> <br>
                <i><span class="icon icon-briefcase"><i class="fa fa-trash " aria-hidden="true"></i></span> Frontend</i>
              </p>
                <hr>
            </div>

            <div class="">
              <p>
                <img src="" alt="" align="left" /> <strong>Sheriff Shittu</strong> <br>
                <i>Fullstack @ Paystack</i> <br>
                <i><span class="icon icon-briefcase"><i class="fa fa-briefcase" aria-hidden="true"></i></span> Frontend</i>
              </p>
                <hr>
            </div>

            <div class="cr">
              <a href="#" role="button" class="btn btn-outline-primary">View all</a>
            </div>



          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card xcard">
          <div class="card-body">
            <h4 class="card-title ca">Interview Schedule</h4>
            <p class="card-text">
              <strong>Tomorrow</strong>
              <br>
              Sheriff (Frontend) <br>
              <span class="icon icon-briefcase"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 8:40am

              <br><a class="" href="#"><span class="icon icon-edit"><i class="fa fa-edit " aria-hidden="true"></i></span></a> <a class="" href="#"><span class="icon icon-trash"><i class="fa fa-trash text-danger" aria-hidden="true"></i></span></a>
              <br>
              Fred (Backend) <br>
              <span class="icon icon-briefcase"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 11:40am

              <br><a class="" href="#"><span class="icon icon-edit"><i class="fa fa-edit " aria-hidden="true"></i></span></a> <a class="" href="#"><span class="icon icon-trash"><i class="fa fa-trash text-danger" aria-hidden="true"></i></span></a>

            </p>

            <p class="card-text">
              <strong>Monday</strong>
              <br>
              Chukwukwa (Frontend) <br>
              <span class="icon icon-briefcase"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 8:40am

              <br><a class="" href="#"><span class="icon icon-edit"><i class="fa fa-edit " aria-hidden="true"></i></span></a> <a class="" href="#"><span class="icon icon-trash"><i class="fa fa-trash text-danger" aria-hidden="true"></i></span></a>
              <br>
              Fred (Backend) <br>
              <span class="icon icon-briefcase"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 11:40am

              <br><a class="" href="#"><span class="icon icon-edit"><i class="fa fa-edit " aria-hidden="true"></i></span></a> <a class="" href="#"><span class="icon icon-trash"><i class="fa fa-trash text-danger" aria-hidden="true"></i></span></a>

            </p>


          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card xcard">
          <div class="card-body">
            <h4 class="card-title ca">Conversation</h4>
            <p class="card-text">I used to spend months to source for developer, then hire only to discover they are not competent. GetDev solve all these for me within two weeks.</p>

          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Applicant information</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <div class="row bg-dark innerSpace">
    <div class="col-sm-3">
      <img src="" alt="">
    </div>

    <div class="col-sm-4">
        <h4>Sheriff Shittu</h4>
        <p>
          Position: Frontend <br>
          Stage: Applied
        </p>
    </div>

    <div class="col-sm-5">
      <div class="row ">
        <div class="col-sm-12">
          <a href="#" class="btn btn-primary"> &rarr;</a>

          <a href="#" class="btn btn-primary"> Score</a>

          <a href="#" class="btn btn-primary"> &rarr;</a>
        </div>
      </div>
      <div class="row giveSmallSpace">
        <div class="col-sm-12">
          <a href="#" role="button" class="btn btn-outline-success"> Note</a>
          <a href="#" role="button" class="btn btn-outline-success"><span class="icon icon-briefcase"><i class="fa fa-calendar" aria-hidden="true"></i></span></a>
        </div>

      </div>
    </div>

  </div>
  <div class="row">
    <div class="giveSmallSpace">
      <h4>Experience</h4>
      <h6>Switch</h6>
      <p>
        Frontend Developer
      </p>

      <h6>Webtrends</h6>
      <p>
       Analyst
      </p>

      <h4>Portfolio</h4>
      <h6>Google.com</h6>
      <p>
        UX/UI
      </p>

      <h6>Youtube</h6>
      <p>
       Video Encoding
      </p>

      <h4>Education</h4>
      <h6>Unilag</h6>
      <p>
        BSc.Computer Science
      </p>

      <h6>Portmouths University</h6>
      <p>
       MSc. Interaction Design
      </p>

      <h4>Stack</h4>
      <h6>Language</h6>
      <p>
        HTML, CSS, BootStrap
      </p>

      <h6>Frameworks</h6>
      <p>
       Angular, Vue
      </p>

      <h4>Github</h4>
      <h6>PRoject One</h6>
      <p>
        Frontend Developer
      </p>


    </div>
  </div>
</div>
<!-- <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
</div> -->
</div>
</div>
</div>
@endsection
