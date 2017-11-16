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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

  <body>

  @include('partials.layout.navbar-home')

  <div>
    <div class="parallax-container first-parallax-container center valign-wrapper">
      <div class="container">
        <div class="row">
          <div class="header-title txt-white">
            <h2>Inicijativa</h2>
            <h1>{{ setting('site.title') }}</h1>
          </div>
          <a href="#section1" class="scrollTo"><div class="icon-scroll opacity-0-3 hover-opacity-1-0"></div></a>
        </div>
      </div>

      <div class="parallax">
        <img src="http://static.panoramio.com/photos/original/27746468.jpg">
        <div class="mask-black"></div>
      </div>

  </div>

    <div id="section1" class="container">
      <div class="row">
        <div class="col offset-s2 animatable bounceInLeft"><h3>Tko smo mi?</h3></div>
        <div class="col offset-s4 animatable bounceInRight"><p>Mi smo inicijativa osnovana 2017. godine u Križevcima s ciljem povezivanja informatičara, tehnologa i svih entuzijasta tehnologije u jednu zajednicu gdje jedni drugima pomažemo, dijelimo iskustva i savjete te motiviramo na učenje novih tehnologija koje nas okružuju<a href="#section2" class="scrollTo">.</a></p></div>
      </div>
    </div>

    <div class="parallax-container other-parallax-container center valign-wrapper">
      <div class="parallax"><img src="{{ URL::asset('img/quanti-squad.jpg') }}"></div>
    </div>

    <div id="section2" class="container">
     <div class="section">
       <div class="row">
         <div class="center animatable fadeIn"><h3>Čime se bavimo?</h3></div>
         <div class="center animatable fadeIn"><p>Prvenstveno se bavimo Android i Web programiranjem kojim želimo pomoći lokalnoj zajednici na način izrade web stranica ili mobilnih aplikacija za neprofitabilne organizacije i ustanove, obrtnike, manje ili veće tvrtke, ne samo na području grada Križevaca već i na području cijele Hrvatske.
          <br> Uz navedene tehnologije područje interesa nam je također i "Internet of Things" te "Machine Learning"<a href="#section3" class="scrollTo">.</a></p></div>
       </div>
      </div>
      </div>
    </div>

    <div class="parallax-container other-parallax-container center valign-wrapper">
      <div class="parallax"><img src="{{ URL::asset('img/inicijativa.jpg') }}"></div>
    </div>

    <div id="section3" class="container">
     <div class="section">
       <div class="row">
         <div class="col offset-s5 animatable fadeInDown"><h3>Kako se uključiti?</h3></div>
         <div class="col offset-s1 s7 animatable fadeInUp"><p>Uključiti se možete preko e-mail adrese <a href="mailto:quanti.krizevci@gmail.com">quanti.krizevci@gmail.com</a> ili <a href="https://www.facebook.com/quanti.com.hr/">facebook</a> stranice.
         <br>Direktno nas možete kontaktirati odlaskom na stranicu "<a href="/kontakt">Kontakt</a>" i upisujući svoju e-mail adresu, ime i prezime te sadržaj poruke na zato predviđeno mjesto.
         <br>Otvoreni smo za nove ideje i savjete<a href="#section4" class="scrollTo">.</a></p></div>
       </div>
      </div>
      </div>
    </div>


    <div class="parallax-container other-parallax-container center valign-wrapper">
      <div class="parallax"><img src="{{ URL::asset('img/it-vecer.jpg') }}"></div>
    </div>

    <div id="section4" class="container">
     <div class="section">
       <div class="row">
         <div class="col s12 m12 l12 center"><h3>Partneri</h3></div>
         <div class="col s12 m12 l12 center divider"></div>
         <div class="col s12 m4 l4 center animatable bounceIn"><img class="partners-logo" src="{{ URL::asset('img/kz-logo.png') }}"></div>
         <div class="col s12 m4 l4 center animatable bounceIn"><img class="partners-logo" src="{{ URL::asset('img/point-logo.png') }}"></div>
         <div class="col s12 m4 l4 center animatable bounceIn"><img class="partners-logo" src="{{ URL::asset('img/espr-logo.png') }}"></div>
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
