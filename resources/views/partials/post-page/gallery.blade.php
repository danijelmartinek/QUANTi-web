<div class="col s12 m8 l8">
  <h5>GALERIJA</h5>
  <ul id="lightSlider">
  @foreach(json_decode($post->gallery, true) as $image)
    <a href="{!! Voyager::image( $image ) !!}" class="carousel-item" data-rel="lightcase:myCollection">
        <li><img src="{!! Voyager::image(App\Post::thumbnail($image, 'cropped')) !!}"></li>
    </a>
  @endforeach
  </ul>
</div>







<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('a[data-rel^=lightcase]').lightcase({
  	swipe: true
    });
	});
  $(document).ready(function(){
    $('.carousel').carousel();
    $("#lightSlider").lightSlider({
        item: 4,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,

        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////

        speed: 400, //ms'
        auto: false,
        loop: false,
        slideEndAnimation: true,
        pause: 2000,

        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',

        rtl:false,
        adaptiveHeight:true,

        vertical:false,
        verticalHeight:500,
        vThumbWidth:100,

        thumbItem:10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: 'middle',

        enableTouch:true,
        enableDrag:true,
        freeMove:true,
        swipeThreshold: 40,

        responsive : [],

        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {}
    });

    });
</script>
