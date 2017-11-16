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
    {!! MaterializeCSS::include_full() !!}
    <link href="{{ URL::asset('css/custom.css') }}"  rel="stylesheet">
    <link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">

    <!-- Scripts -->
    <script src="{{ URL::asset('js/jscroll/jquery.jscroll.js') }}"></script>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
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
