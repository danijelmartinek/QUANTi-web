@extends('layouts.app')

@section('content')

<div>
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="https://i.pinimg.com/originals/99/91/eb/9991ebe57eb7bc172143765e28a55b5d.jpg">
        <div class="caption caption-news left-align">
          <h4>Održane 1. Križevačke Tehnološke Večeri</h4>
          <br>
          <h6 class="light grey-text text-lighten-3">Prošlu subotu, održana je prva od pet Križevačkih Tehnoloških Večeri.
            Posjećenost je bila odlična i dojmovi su samo pozitivni.</h6>
          <a class="caption-link-news" href="/projects">Pročitaj više</a>
        </div>
      </li>
      <li>
        <img src="https://www.astfinancial.com/media/129925/ast.jpg">
        <div class="caption caption-news left-align">
          <h4>Održane 1. Križevačke Tehnološke Večeri</h4>
          <br>
          <h6 class="light grey-text text-lighten-3">Prošlu subotu, održana je prva od pet Križevačkih Tehnoloških Večeri.
            Posjećenost je bila odlična i dojmovi su samo pozitivni.</h6>
          <a class="caption-link-news" href="/projects">Pročitaj više</a>
        </div>
      </li>
      <li>
        <img src="http://coolwallpaperz.info/user-content/uploads/wall/o/65/architecture-floral-black-dark-556183.jpg">
        <div class="caption caption-news left-align">
          <h4>Održane 1. Križevačke Tehnološke Večeri</h4>
          <br>
          <h6 class="light grey-text text-lighten-3">Prošlu subotu, održana je prva od pet Križevačkih Tehnoloških Večeri.
            Posjećenost je bila odlična i dojmovi su samo pozitivni.</h6>
          <a class="caption-link-news" href="/projects">Pročitaj više</a>
        </div>
      </li>
      <li>
        <img src="http://imgstocks.com/wp-content/uploads/2014/01/Digital-nature-painting-wallpapers-stock-photos.jpg">
        <div class="caption caption-news left-align">
          <h4>Održane 1. Križevačke Tehnološke Večeri</h4>
          <br>
          <h6 class="light grey-text text-lighten-3">Prošlu subotu, održana je prva od pet Križevačkih Tehnoloških Večeri.
            Posjećenost je bila odlična i dojmovi su samo pozitivni.</h6>
          <a class="caption-link-news" href="/projects">Pročitaj više</a>
        </div>
      </li>
    </ul>
  </div>

  <div class="container"><blockquote><h3 class="uppercase">Novosti</h3></blockquote></div>
  <div class="container center">
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

        @foreach ($posts as $post)
          @include('partials.post', ['post' => $post])
        @endforeach


        <div class="col s12 m12 l12">
          <div class="divider divider-margin"></div>
          {{ $posts->links() }}
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

@endsection
