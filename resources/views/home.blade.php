<?php
use Jenssegers\Agent\Agent;

$agent = new Agent();
$siteDescription = 'QUANTi je inicijativa osnovana 2017. godine u Križevcima s ciljem povezivanja informatičara, tehnologa i svih entuzijasta tehnologije u jednu zajednicu.'; 

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ setting('site.title') }}</title>
    <link rel="icon" href="{{ Voyager::image(setting('site.logo')) }}">


    <!-- ____________ Meta description ____________ -->

    <meta name="description" content="{{ $siteDescription }}" />

    <!-- Schema.org markup for Google+ -->

    <meta itemprop="name" content="{{ setting('site.title') }}">

    <meta itemprop="description" content="{{ $siteDescription }}">

    <meta itemprop="image" content="{{ URL::asset('storage/settings/home-page/home-image-1.jpg') }}">



    <!-- Twitter Card data -->

    <meta name="twitter:card" content="{{ URL::asset('storage/settings/home-page/home-image-1.jpg') }}">

    <meta name="twitter:site" content="@quanti.com.hr">

    <meta name="twitter:title" content="{{ Voyager::setting('site.title') }}">

    <meta name="twitter:description" content="{{ $siteDescription }}">

    <meta name="twitter:creator" content="@quanti.com.hr">

    <!-- Twitter summary card with large image must be at least 280x150px -->

    <meta name="twitter:image:src" content="{{ URL::asset('storage/settings/home-page/home-image-1.jpg') }}">



    <!-- Open Graph data -->

    <meta property="og:title" content="{{ setting('site.title') }}" />

    <meta property="og:type" content="website" />

    <meta property="og:url" content="https://quanti.com.hr/" />

    <meta property="og:image" content="{{ URL::asset('storage/settings/home-page/home-image-1.jpg') }}" />

    <meta property="og:description" content="{{ $siteDescription }}" />

    <meta property="og:site_name" content="{{ setting('site.title') }}" />


    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">



    <!-- Styles -->

    <link href="{{ URL::asset('css/custom.css') }}"  rel="stylesheet">
    <link href="{{ URL::asset('css/custom-pages.css') }}"  rel="stylesheet">

    <link href="{{ URL::asset('css/text-animation.css') }}"  rel="stylesheet">



    {!! MaterializeCSS::include_full() !!}


    <!-- Prefetching -->

    <link rel="preload" as="image" href="{{ URL::asset('storage/settings/home-page/home-main-image.jpg') }}">

</head>

<body>

@include('partials.layout.navbar-home')

@if($agent->isMobile())
    @include('partials.home-page.parallax-mobile')
@else
    @include('partials.home-page.parallax')
@endif

@include('partials.layout.footer')

</body>

<script type="text/javascript">
    $(document).ready(function(){

      $('.parallax').parallax();



      $(".dropdown-button").dropdown();

      $(".button-collapse").sideNav();



      $(function () {

      $('a[href^="#section1"]').click(function(event) {

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
