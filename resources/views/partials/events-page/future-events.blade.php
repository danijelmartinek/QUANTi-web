@if(($event->date) >= date("Y-m-d"))

<li>
  <div class="collapsible-header"><h5>{{ $event->title }}</h5></div>
  <div class="collapsible-body">
    <div class="row">

      <div class="col s12 m3 l3 center">
        <span><i class="material-icons material-icons-works">place</i>{{ $event->location }}</span>
      </div>
      <div class="col s12 m3 l3 center">
        <span><i class="material-icons material-icons-works">event</i>{{ $event->date->format('d.m.Y.') }}</span>
        <br>
        <span><i class="material-icons material-icons-works">schedule</i>{{ $event->time }}</span>
      </div>
      <div class="col s12 m3 l3 center">
        <span><i class="material-icons material-icons-works">record_voice_over</i>{{ $event->instructor }}</span>
      </div>
      <div class="col s12 m3 l3 center">
        <span><i class="material-icons material-icons-works">attach_money</i>{{ $event->price }}</span>
      </div>

      <div class="col s12 m12 l12"><br></div>
      <div class="col s12 m12 l12" style="opacity: 0.2;"><hr></div>
      <div class="col s12 m12 l12"><br></div>

      <div class="col s12 m12 l12">{!! $event->info !!}</div>

        <div class="col s12 m12 l12"><br></div>
        <div class="col s12 m12 l12" style="opacity: 0.2;"><hr></div>

        @foreach(json_decode($event->images, true) as $image)
          <img class="materialboxed events-thumbnail col s6 m4 l3" width="150" src="{!! Voyager::image( $image ) !!}">
        @endforeach

    </div>
  </div>
</li>

@endif
