<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ URL::asset('css/custom.css') }}"  rel="stylesheet">
    {!! MaterializeCSS::include_full() !!}
    <link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
    <script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

        $(document).ready(function(){
          $('.slider').slider();
        });
    </script>
</head>
<body>
    <div id="app">

      <nav class="grey darken-3">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <div class="container">

  		 <!--dropdown structure-->
  		 <ul id="dropdown1" class="dropdown-content">
        <li><a href="{{ url('/profile') }}"><i class="voyager voyager-person"></i>
                 Profile
            </a>
        </li>
  			<li class="divider"></li>
        <li>
            <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
  		</ul>

      <div class="nav-wrapper row">
        <div class="col s4 m4 l4"><a href="#!" class="brand-logo">Logo</a></div>
        <ul class="hide-on-med-and-down">
  				<!--dropdown button-->
          <div class="col s6 m6 l6">
            <li><a href="/">Početna</a></li>
            <li><a href="/news">Novosti</a></li>
            <li><a href="badges.html">Događaji</a></li>
          </div>
          <div class="col s2 m2 l2">
            <li>
              @if (Auth::guest())
                  <li><a href="{{ url('/login') }}">Login</a></li>
                  <li><a href="{{ url('/register') }}">Register</a></li>
              @else
                <a class="dropdown-button right" href="#!" data-activates="dropdown1">
                  <img class="left" src="<?php echo e(Voyager::image( Auth::user()->avatar )); ?>" style="width:35px; height:35px; position:relative; right:-10px; top:15px; border-radius: 50%;">
                  <i class="material-icons right">arrow_drop_down</i>
                </a>
              @endif
            </li>
          </div>
        </ul>

  			<ul id="mobile-demo" class="side-nav">
  				<li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Dropdown 1</a>
                <div class="collapsible-body" style="">
                  <ul>
                    <li><a href="#">Link1</a></li>
                    <li><a href="#">link2</a></li>
                    <li><a href="#">link3</a></li>
                  </ul>
                </div>
              </li>
  						<li class="bold"><a class="collapsible-header  waves-effect waves-teal">Dropdown 2</a>
                <div class="collapsible-body" style="">
                  <ul>
                    <li><a href="#">link1</a></li>
                    <li><a href="#">link2</a></li>
                    <li><a href="#">link3</a></li>
                  </ul>
                </div>
              </li>
  						<li class="bold"><a class="collapsible-header  waves-effect waves-teal">Dropdown 3</a>
                <div class="collapsible-body" style="">
                  <ul>
                    <li><a href="#">link1</a></li>
                    <li><a href="#">link2</a></li>
                    <li><a href="#">link3</a></li>
                  </ul>
                </div>
              </li>
  						<li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Normal link 1</a></li>
  						<li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Normal link 2</a></li>
            </ul>
          </li>

        </ul>
      </div>
      </div>
    </nav>


        @yield('content')
    </div>

    <!-- Scripts -->
    <script type="text/javascript">
      $(document).ready(function() {
          $(".dropdown-button").dropdown();
          $(".button-collapse").sideNav();
      });
    </script>
</body>
</html>
