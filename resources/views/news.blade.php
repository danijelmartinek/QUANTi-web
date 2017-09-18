@extends('layouts.app')

@section('content')

<div>
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="http://www.hyperdrivemedia.com/img/brochure/B002.jpg">
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
          <h3>Left Aligned Caption</h3>
          <br>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          <br>
          <a class="caption-link-news" href="#">Pročitaj više</a>
        </div>
      </li>
      <li>
        <img src="http://coolwallpaperz.info/user-content/uploads/wall/o/65/architecture-floral-black-dark-556183.jpg">
        <div class="caption caption-news right-align">
          <h3>Right Aligned Caption</h3>
          <br>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          <br>
          <a class="caption-link-news" href="#">Pročitaj više</a>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/4">
        <div class="caption caption-news center-align">
          <h3>This is our big Tagline!</h3>
          <br>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          <br>
          <a class="caption-link-news" href="#">Pročitaj više</a>
        </div>
      </li>
    </ul>
  </div>

  <div class="container">
    <blockquote><h3 class="uppercase">Novosti</h3></blockquote>

    <div class="row">
      <div class="col s12 m9 l9 left">
        <div class="divider"></div>
        <div class="col s12 m12 l12">
          <div class="card horizontal z-depth-0">
            <div class="card-image z-depth-3">
              <img src="http://www.hyperdrivemedia.com/img/brochure/B002.jpg">
            </div>
            <div><span class="card-title">Card Title</span></div>
            <div class="card-stacked">
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m9 l9 left">
        <div class="divider"></div>
        <div class="col s12 m12 l12">
          <div class="card horizontal z-depth-0">
            <div class="card-image z-depth-3">
              <img src="http://www.hyperdrivemedia.com/img/brochure/B002.jpg">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m9 l9 left">
        <div class="divider"></div>
        <div class="col s12 m12 l12">
          <div class="card horizontal z-depth-0">
            <div class="card-image z-depth-3">
              <img src="http://www.hyperdrivemedia.com/img/brochure/B002.jpg">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col s12 m3 l3 right">
        <div class="col s12 m12 l12">
          <div class="card-panel">
              <div class="card-image"><img class="ad_container" src="http://hamuraagency.com/dist/frontend/images/icon/advertising.png"></div>
          </div>
        </div>
        <div class="col s12 m12 l12">
          <div class="card-panel">
              <div class="card-image"><img class="ad_container" src="http://hamuraagency.com/dist/frontend/images/icon/advertising.png"></div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

@endsection
