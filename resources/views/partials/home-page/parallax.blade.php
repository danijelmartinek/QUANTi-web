<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ Voyager::setting('site.title') }}</title>
        <link rel="icon" href="{{ Voyager::image(setting('site.logo')) }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ URL::asset('css/custom.css') }}"  rel="stylesheet">
        <link href="{{ URL::asset('css/text-animation.css') }}"  rel="stylesheet">
        {!! MaterializeCSS::include_full() !!}
        <link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

  <body>

  @include('partials.layout.navbar-home')

  <div>
    <div class="parallax-container first-parallax-container center valign-wrapper">
      <div class="container">
        <div class="row">
          <div class="header-title txt-white">
            <h2>{{ setting('home-page.title_prefix') }}</h2>
            <h1>{{ setting('home-page.title') }}</h1>
          </div>
          <a href="#section1" class="scrollTo"><div class="icon-scroll opacity-0-3 hover-opacity-1-0"></div></a>
        </div>
      </div>

      <div class="parallax">
        <img src="{{ Voyager::image(setting('home-page.main_image')) }}">
        <div class="mask-black"></div>
      </div>

  </div>

    <div id="section1" class="container">
      <div class="row">
        <div class="animatable bounceInLeft center"><h3>{{ setting('home-page.section_one_title') }}</h3></div>
        <div class="animatable bounceInRight">{!! setting('home-page.section_one_body') !!}</div>
      </div>
    </div>

    <div class="parallax-container other-parallax-container center valign-wrapper">
      <div class="parallax"><img src="{{ Voyager::image(setting('home-page.section_one_image')) }}"></div>
    </div>

    <div id="section2" class="container">
     <div class="section">
       <div class="row">
         <div class="animatable bounceInRight center"><h3>{{ setting('home-page.section_two_title') }}</h3></div>
         <div class="animatable bounceInLeft">{!! setting('home-page.section_two_body') !!}</div>
       </div>
      </div>
      </div>
    </div>

    <div class="parallax-container other-parallax-container center valign-wrapper">
      <div class="parallax"><img src="{{ Voyager::image(setting('home-page.section_two_image')) }}"></div>
    </div>

    <div id="section3" class="container">
     <div class="section">
       <div class="row">
         <div class="animatable bounceInLeft center"><h3>{{ setting('home-page.section_three_title') }}</h3></div>
         <div class="animatable bounceInRight">{!! setting('home-page.section_three_body') !!}</div>
       </div>
      </div>
      </div>
    </div>


    <div class="parallax-container other-parallax-container center valign-wrapper">
      <div class="parallax"><img src="{{ Voyager::image(setting('home-page.section_three_image')) }}"></div>
    </div>

    <div id="section4" class="container">
     <div class="section">
       <div class="row">
         <div class="animatable fadeInDown center"><h3>{{ setting('home-page.section_four_title') }}</h3></div>
         <div class="animatable bounceIn">{!! setting('home-page.section_four_body') !!}</div>
      </div>
      </div>
    </div>
  </div>

    @include('partials.layout.footer')

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
