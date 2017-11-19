@if(($event->date) < date("Y-m-d"))

<li>
  <div class="collapsible-header"><h5>{{ $event->title }}</h5></div>
  <div class="collapsible-body">
    <div class="row">

      <div class="col s12 m3 l3 center">
        <span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $event->location }}</span>
      </div>
      <div class="col s12 m3 l3 center">
        <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ $event->date->format('d.m.Y.') }}</span>
        <br>
        <span><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $event->time }}</span>
      </div>
      <div class="col s12 m3 l3 center">
        <span><i class="fa fa-microphone" aria-hidden="true"></i> {{ $event->instructor }}</span>
      </div>
      <div class="col s12 m3 l3 center">
        <span><i class="fa fa-usd" aria-hidden="true"></i> {{ $event->price }}</span>
      </div>

      <div class="col s12 m12 l12"><br></div>
      <div class="col s12 m12 l12" style="opacity: 0.2;"><hr></div>
      <div class="col s12 m12 l12"><br></div>
      <img class="col s12 m12 l12" width="100%" src="{!! Voyager::image( $event->poster ) !!}">
      <div class="col s12 m12 l12"><br></div>
      <div class="col s12 m12 l12">{{ $event->description }}</div>
      <div class="col s12 m12 l12"><br></div>
      <div class="col s12 m12 l12" style="opacity: 0.2;"><hr></div>
      <div class="col s12 m12 l12"><br></div>
      <div class="col s12 m12 l12">{!! $event->info !!}</div>

        <div class="col s12 m12 l12"><br></div>
        <div class="col s12 m12 l12" style="opacity: 0.2;"><hr></div>

        @if(($event->images) != NULL)
          @foreach(json_decode($event->images, true) as $image)
            <img class="materialboxed events-thumbnail col s6 m4 l3" width="150" src="{!! Voyager::image( $image ) !!}">
          @endforeach
        @endif

    </div>
  </div>
</li>

@endif
