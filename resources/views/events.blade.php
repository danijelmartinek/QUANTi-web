@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card row">
  <div class="card-image waves-effect waves-block waves-light col s12 m6 l6">
    <img class="activator" src="https://cdn.shopify.com/s/files/1/0187/6812/products/Bamboo_c36ce56d-5752-4e9e-adab-59c3fae06ac2.jpg?v=1502751522">
  </div>
  <div class="col s12 m6 l6">
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Dani Karijera Križevci</span>
      <div class="card-content">
        <p>I am a very simple card. I am good at containing small bits of information.</p>
      </div>
    </div>
  <h3 id="countdown" class="center"></h3>
  </div>
</div>

  <div><blockquote><h3 class="uppercase">Novosti</h3></blockquote></div>
  <div class="center">
    <div class="row">

      <span class="col s12 m7 l8">
        <span class="col s12 m5 l5">
          <form>
            <div class="input-field">
              <input id="search" type="search" required>
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </span>


        <div class="col s12 m12 l12">
          <div class="divider divider-margin"></div>
        </div>
      </span>

      <span class="col s12 m4 l4">
        <span class="col s12 m12 l12">
          <div class="card-panel">
              <div class="card-image"><img class="ad_container" src="http://hamuraagency.com/dist/frontend/images/icon/advertising.png"></div>
          </div>
        </span>
        <span class="col s12 m12 l12">
          <div class="card-panel">
              <div class="card-image"><img class="ad_container" src="http://hamuraagency.com/dist/frontend/images/icon/advertising.png"></div>
          </div>
        </span>
        <span class="col s12 m12 l12">
          <div class="card-panel">
              <div class="card-image"><img class="ad_container" src="http://hamuraagency.com/dist/frontend/images/icon/advertising.png"></div>
          </div>
        </span>
      </span>

    </div>


  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 12, 2017 00:00:00").getTime();

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
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

@endsection
