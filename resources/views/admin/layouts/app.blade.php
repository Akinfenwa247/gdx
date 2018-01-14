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
         @if(auth::check())
        <ul class="navbar-nav ">
          <li class="nav-item ">
            <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ddashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/users">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/assessment">Assessment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/project">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/rating">Rating</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/jobs">Jobs</a>
          </li>

          <li class="nav-item"><a class="nav-link" href="/admin/companies">Companies</a></li>
          <li class="nav-item"><a class="nav-link" href="/academy">Education</a></li>
          <li class="nav-item"><a class="nav-link" href="/editskill_level">Skill</a></li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right ml-auto">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown" class="nav-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name.' '.Auth::user()->lastname }}  <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li  ><a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
         @endif
      </div>
    </nav>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        @yield('content')
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
