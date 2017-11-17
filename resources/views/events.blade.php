@extends('layouts.app')

@section('content')

<div class="container">

  @if(($allEvents->first()) != NULL)
    <div class="card row">
      <div class="card-image waves-effect waves-block waves-light col s12 m6 l6">
        <img class="activator" src="{!! Voyager::image( $allEvents->first()->poster ) !!}">
      </div>
      <div class="col s12 m6 l6">
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4 center events-main-card-title">{{ $allEvents->first()->title }}</span>
          <div class="card-content">
            <p>{{ $allEvents->first()->description }}</p>
            <br>
              <p class="grey-text">{{ $allEvents->first()->date->format('d.m.Y.') }} u {{ $allEvents->first()->time }}</p>
          </div>
        </div>
        <div class="card-action"><h4 id="countdown" class="center"></h4></div>
      </div>
    </div>
  @endif

  <br>
  @if(($allEvents->first()) != NULL)
    <div><blockquote><h4 class="uppercase">Nadolazeći događaji</h4></blockquote></div>
  @else
    <div><blockquote><h4 class="uppercase">Nema nadolazećih događaja</h4></blockquote></div>
  @endif
  <div class="center">
    <div class="row">

      <span class="col s12 m6 l8 left">
      <ul class="collapsible" data-collapsible="accordion">
          <li>
            @foreach ($allEvents as $event)
              @include('partials.events-page.future-events', ['event' => $event])
            @endforeach
          </li>
        </ul>

        <h5 class="uppercase col s12 m12 l12 inline-block left">Prošli događaji</h5>

        @if(($allPastEvents->first()) != NULL)
        <ul class="collapsible col s12 m12 l12 left" data-collapsible="accordion">
          <li>
            @foreach ($allPastEvents as $event)
              @include('partials.events-page.past-events', ['event' => $event])
            @endforeach
          </li>
        </ul>
        @else
        <p>Nema prošlih događaja.</p>
        @endif
      </span>

      <span class="col s12 m6 l4">
        <span class="col s12 m12 l12">
          <div class="card-panel">
              <div class="card-image"><img class="ad_container" src="http://hamuraagency.com/dist/frontend/images/icon/advertising.png"></div>
          </div>
        </span>
      </span>

    </div>


  </div>
</div>

  @if(($allEvents->first()) != NULL)
    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("{{ $allEvents->first()->date->format('M d, Y') }}" + " " +  "{{ $allEvents->first()->time }}").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = " ";
        }
    }, 1000);
    </script>
  @endif

@endsection
