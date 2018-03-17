@extends('layouts.app')



@section('content')



<div>

  <div class="slider">

    <ul class="slides">

      @foreach ($posts as $post)

        @include('partials.news-page.featured-post', ['post' => $post])

      @endforeach

    </ul>

    <div class="col s12 m5 l4 right posts-title-container"><div class="container"><h4 class="uppercase white-text" style="margin-top: 50px;"><b>Novosti</b></h4></div></div>

  </div>







  <div class="container">

    <div class="row">

      <span class="col s12 m5 l4 right">

        <span class="col s12 m12 l12">



        </span>

        <span class="col s12 m12 l12">

          <div class="card horizontal">



          </div>

        </span>

      </span>







      <span class="col s12 m7 l8">

      <!-- SEARCH BOX

          <span class="col s12 m5 l5">

            <form>

              <div class="input-field">

                <input id="search" type="search" required>

                <label class="label-icon" for="search"><i class="material-icons">search</i></label>

                <i class="material-icons">close</i>

              </div>

            </form>

          </span>

        -->



        <div class="infinite-scroll">

          @foreach ($posts as $post)

            @include('partials.news-page.post', ['post' => $post])

          @endforeach



          {{ $posts->links() }}

        </div>

      </span>



    </div>

  </div>

</div>



<script type="text/javascript">

    $(document).ready(function(){

    $('.slider').slider();

    });

    

    $('ul.pagination').hide();

    $(function() {

        $('.infinite-scroll').jscroll({

            autoTrigger: true,

            loadingHtml: '<img class="center" style="width: 40%; height:auto;" src="{{ URL::asset('img/loading.gif') }}" alt="Loading..." />',

            padding: 0,

            nextSelector: '.pagination li.active + li a',

            contentSelector: 'div.infinite-scroll',

            callback: function() {

                $('ul.pagination').remove();

            }

        });

    });

</script>



@endsection
