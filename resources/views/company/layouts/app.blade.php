<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- ICON -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Font Awesome -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}"/>

  <!-- WEBFONT -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>GetDev </title>

  </head>
  <body >
    <nav class="navbar navbar-expand-lg inavbar navbar-inverse">
      <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('assets/img/logo.png') }}" height="45" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search Applicants">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
          <ul class="navbar-nav ">
            <li class="nav-item ">
              <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/add_position"><span class="icon icon-fb"><i class="fa fa-plus-square fa-2x" aria-hidden="true"></i></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/positions"><span class="icon icon-briefcase"><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i></span> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/candidates"><span class="icon icon-users"><i class="fa fa-users fa-2x" aria-hidden="true"></i></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/inbox"><span class="icon icon-envelope"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i><span class="badge badge-danger">3</span></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/notification"><span class="icon icon-bell"><i class="fa fa-bell fa-2x" aria-hidden="true"></i></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cprofile"><span class="icon icon-cogs"><i class="fa fa-cogs fa-2x" aria-hidden="true"></i></span></a>
            </li>
          </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#" class="nav-link">HELP</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"></a>
          </li>
          <li class="nav-item">
            <a href="#"  role="button" class="btn btn-primary" data-toggle="modal" data-target="#companyModal">Start Hiring</a>
          </li>
        </ul>

      </div>
    </nav>

        @yield('content')

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
            <form method="post" action="" />

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
                  <input type="text" class="input form-control" name="email"  />
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
                <select name="stack" class="input custom-select" >
                  <option value="0">

                  </option>
                  <option value="1">
                    1
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
        <footer id="footer">
        <p>
          &copy; 2017 GetDev Africa!
        </p>
        </footer>

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="{{ asset('assets/js/jquery-3.2.1.slim.min.js') }}" ></script>
        <script src="{{ asset('assets/js/popper.min.js') }}" ></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}" ></script>
     <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> -->
      </body>
    </html>
