@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col s12 m12 l6">
      <img class="materialboxed" width="100%" src="https://images.unsplash.com/photo-1429081172764-c0ee67ab9afd?dpr=1&auto=format&fit=crop&w=1500&h=927&q=80&cs=tinysrgb&crop=">
    </div>
  </div>

  <h1>{{ $post->title }}</h1>
  <h2>{{ $post->excerpt }}</h2>

  <p>{!! $post->body !!}</p>
</div>

@endsection
