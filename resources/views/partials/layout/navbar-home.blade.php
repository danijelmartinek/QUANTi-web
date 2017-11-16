
<nav class="transparent navbar-absolute">
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

 <!--dropdown structure-->
  <ul id="dropdown1" class="dropdown-content">
    @if (Auth::check() == 'true')
      @if((auth()->user()->role_id) == 6 )
      @else
        <li class="bold"><a href="{{ url('/admin') }}" class="waves-effect waves-teal">Dashboard</a></li>
      @endif
    @endif
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
      <div class="col s6 m6 l6">
        <ul class="hide-on-med-and-down">
          {{  menu('home-page') }}
        </ul>
      </div>
      <div class="col s6 m6 l6">
        <ul class="right hide-on-med-and-down">
          @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Prijava</a></li>
            <li><a href="{{ url('/register') }}">Registracija</a></li>
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

      {{  menu('home-page') }}

        <li class="divider"></li>
        @if (Auth::guest())
          <li class="bold"><a href="{{ url('/login') }}" class="waves-effect waves-teal">Prijava</a></li>
          <li class="bold"><a href="{{ url('/register') }}" class="waves-effect waves-teal">Registracija</a></li>
        @else
          @if (Auth::check() == 'true')
            @if((auth()->user()->role_id) == 6 )
            @else
              <li class="bold"><a href="{{ url('/admin') }}" class="waves-effect waves-teal">Dashboard</a></li>
            @endif
          @endif
        <li class="bold"><a href="{{ url('/profile') }}" class="waves-effect waves-teal">Profile</a></li>
        <li class="bold"><a href="{{ url('/logout') }}" class="waves-effect waves-teal">Logout</a></li>
        @endif

      </ul>
    </li>
  </ul>
</nav>
