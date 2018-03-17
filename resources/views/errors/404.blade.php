<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>error 404 - stranica nije pronađena</title>
    <link rel="icon" href="{{ Voyager::image(setting('site.logo')) }}">

    
    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">



    <!-- Styles -->
    <link href="{{ URL::asset('css/custom-pages.css') }}"  rel="stylesheet">

    {!! MaterializeCSS::include_full() !!}

</head>

<body>

<div class="container">
<div class="row">
    <div class="col s12 m12 l12 center error404">
        <b aria-hidden="true">4</b>
        <b aria-hidden="true">0</b>
        <b aria-hidden="true">4</b>
        <h4 class="error404-text indigo-text">Stranica koju ste zatražili ne postoji ili je izmijenjena!</h4><br>
        <span class="error404-button"><a href="/"><i class="fa fa-arrow-left" aria-hidden="true"></i> na početnu</a></span>
    </div>
</div>
</div>

</body>
