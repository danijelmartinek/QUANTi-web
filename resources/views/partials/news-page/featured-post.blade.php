@if($post->featured == 1 & $post->status == "PUBLISHED")

<li>
  <img src="{{ Voyager::image( $post->image ) }}">
  <div class="caption caption-news left-align">
    <h4>{{ $post->title }}</h4>
    <br>
    <h6 class="light grey-text text-lighten-3">{{ $post->excerpt }}</h6>
    <a class="caption-link-news" href="/post/{{ $post->slug }}">Pročitaj više</a>
  </div>
</li>

@endif
