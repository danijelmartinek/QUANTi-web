<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ Voyager::setting('title') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ URL::asset('css/custom.css') }}"  rel="stylesheet">
        <link href="{{ URL::asset('css/text-animation.css') }}"  rel="stylesheet">
        {!! MaterializeCSS::include_full() !!}
        <link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
        <script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

  <body>

  @include('partials.navbar-home')

  <div>
    <div class="parallax-container first-parallax-container center valign-wrapper">
      <div class="container">
        <div class="row">
          <div class="header-title txt-white">
            <h2>Inicijativa</h2>
            <h1>{{ Voyager::setting('title') }}</h1>
          </div>
          <a href="#section1" class="scrollTo"><div class="icon-scroll opacity-0-3 hover-opacity-1-0"></div></a>
        </div>
      </div>

      <div class="parallax">
        <img src="https://images.unsplash.com/photo-1429081172764-c0ee67ab9afd?dpr=1&auto=format&fit=crop&w=1500&h=927&q=80&cs=tinysrgb&crop=">
        <div class="mask-black"></div>
      </div>

  </div>

    <div id="section1" class="container">
      <div class="row">
        <div class="col offset-s1 animatable bounceInLeft"><h3>Tko smo mi?</h3></div>
        <div class="col offset-s4 animatable bounceInRight"><p>Mi smo inicijativa osnovana 2017. godine u Križevcima sa svrhom povezivanja informatičara, tehnologa i svih entuzijasta tehnologije u jednu zajednicu.</p></div>
      </div>
    </div>

    <div class="parallax-container center valign-wrapper">
      <div class="parallax"><img src="{{ URL::asset('img/brainstorming.jpg') }}"></div>
    </div>

    <div class="container">
     <div class="section">
       <div class="row">
         <div class="col offset-s4 animatable fadeInDown"><h3>Čime se bavimo?</h3></div>
         <div class="col offset-s1 s7 animatable fadeInUp"><p>"SNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, quis no</p></div>
       </div>
      </div>
      </div>
    </div>

    <div class="parallax-container center valign-wrapper">
      <div class="parallax"><img src="{{ URL::asset('img/it-vecer.jpg') }}">
      </div>

      <div class="container white-text">
        <div class="row">
          <div class="col s12">
            <h5>A modern responsive front-end framework based on Material Design</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

    @include('partials.footer')

</body>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.parallax').parallax();

      $(".dropdown-button").dropdown();
      $(".button-collapse").sideNav();

      $(function () {
      $('a[href^="#"]').click(function(event) {
      var id = $(this).attr("href");
      var offset = 20;
      var target = $(id).offset().top - offset;

      $('html, body').animate({scrollTop:target}, 1000);
      event.preventDefault();
      });
      });

      // Trigger CSS animations on scroll.
      // Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

      // Looking for a version that also reverses the animation when
      // elements scroll below the fold again?
      // --> Check https://codepen.io/bramus/pen/vKpjNP

      jQuery(function($) {

        // Function which adds the 'animated' class to any '.animatable' in view
        var doAnimations = function() {

          // Calc current offset and get all animatables
          var offset = $(window).scrollTop() + $(window).height(),
              $animatables = $('.animatable');

          // Unbind scroll handler if we have no animatables
          if ($animatables.size() == 0) {
            $(window).off('scroll', doAnimations);
          }

          // Check all animatables and animate them if necessary
      		$animatables.each(function(i) {
             var $animatable = $(this);
      			if (($animatable.offset().top + $animatable.height() - 20) < offset) {
              $animatable.removeClass('animatable').addClass('animated');
      			}
          });

      	};

        // Hook doAnimations on scroll, and trigger a scroll
      	$(window).on('scroll', doAnimations);
        $(window).trigger('scroll');

      });

    });

    </script>
</html>
