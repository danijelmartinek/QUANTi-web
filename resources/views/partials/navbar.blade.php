
<nav class="grey darken-3">
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

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

  <div class="container">
    <div class="nav-wrapper row">
      <div class="col s4 m2 l2"><a href="#!" class="brand-logo">Logo</a></div>
      <div class="col s6 m6 l6">
        <ul class="hide-on-med-and-down">
          <li><a href="{{ url('/') }}">Početna</a></li>
          <li><a href="{{ url('/news') }}">Novosti</a></li>
          <li><a href="{{ url('/events') }}">Događaji</a></li>
          <li><a href="{{ url('/contact') }}">Kontakt</a></li>
        </ul>
      </div>
      <div class="col s2 m4 l4">
        <ul class="right hide-on-med-and-down">
          @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
          @else
            <a class="dropdown-button" href="#!" data-activates="dropdown1">
              <img class="left" src="<?php echo e(Voyager::image( Auth::user()->avatar ));
               ?>" style="width:35px; height:35px; position:relative; right:-10px; top:15px; border-radius: 50%;">
              <i class="material-icons right">arrow_drop_down</i>
            </a>
          @endif
        </ul>
      </div>
    </div>
  </div>

  <ul id="mobile-demo" class="side-nav">
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">

        <li class="bold"><a href="{{ url('/') }}" class="waves-effect waves-teal">Početna</a></li>
        <li class="bold"><a href="{{ url('/news') }}" class="waves-effect waves-teal">Novosti</a></li>
        <li class="bold"><a href="{{ url('/events') }}" class="waves-effect waves-teal">Događaji</a></li>
        <li class="bold"><a href="{{ url('/contact') }}" class="waves-effect waves-teal">Kontakt</a></li>

        <li class="divider"></li>
        @if (Auth::guest())
          <li class="bold"><a href="{{ url('/login') }}" class="waves-effect waves-teal">Login</a></li>
          <li class="bold"><a href="{{ url('/register') }}" class="waves-effect waves-teal">Register</a></li>
        @else
        <li class="bold"><a href="{{ url('/profile') }}" class="waves-effect waves-teal">Profile</a></li>
        <li class="bold"><a href="{{ url('/logout') }}" class="waves-effect waves-teal">Logout</a></li>
        @endif

      </ul>
    </li>
  </ul>
</nav>
