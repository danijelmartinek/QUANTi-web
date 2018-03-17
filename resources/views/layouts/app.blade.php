<!DOCTYPE html>
<html lang="en">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111378412-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111378412-1');
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3628359481690229",
    enable_page_level_ads: true
  });
</script>


    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>{{ Voyager::setting('site.title') }}</title>

    <link rel="icon" href="{{ Voyager::image(setting('site.logo')) }}">



    <!-- Fonts -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">



    <!-- Styles -->

    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('css/custom-pages.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('js/lightcase/src/css/lightcase.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('js/lightslider/src/css/lightslider.css') }}" rel="stylesheet">



    {!! MaterializeCSS::include_full() !!}



    <!-- Scripts -->

    <script type="text/javascript" src="{{ URL::asset('js/jscroll/jquery.jscroll.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/lightcase/src/js/lightcase.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/lightslider/src/js/lightslider.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/lightcase/vendor/jQuery/jquery.events.touch.js') }}"></script>



    <script>

        window.Laravel = <?php echo json_encode([

            'csrfToken' => csrf_token(),

        ]); ?>

    </script>

</head>

@include('partials.analytics') 

<body>
    <div id="app">

      @include('partials.layout.navbar')
      @yield('content')
      @include('partials.layout.footer')

    </div>

    <script type="text/javascript">
      $(document).ready(function() {
          $(".dropdown-button").dropdown();
          $(".button-collapse").sideNav();
      });
    </script>
</body>
</html>
