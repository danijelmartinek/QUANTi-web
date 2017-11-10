@if($post->featured == 0 & $post->status == "PUBLISHED")

<div class="col s12 m12 l12">
  <div class="divider divider-margin"></div>
  <span class="col s12 m12 l6">
    <div class="card horizontal z-depth-0">
      <div class="card-image card-image-news-container z-depth-3">
        <img class="card-image-news" src="{{ Voyager::image( $post->image ) }}">
      </div>
    </div>
  </span>
  <span class="col s12 m12 l6">
    <a href="/post/{{ $post->slug }}"><h5 class="card-title card-title-color">{{ $post->title }}</h5></a>
    <div class="card-stacked">
      <div class="card-content">
        <p>{{ $post->excerpt }}</p>
      </div>
    </div>
    <div class="card-action">
      <a href="/post/{{ $post->slug }}">Pročitaj više</a>
    </div>
  </span>
</div>

@endif
