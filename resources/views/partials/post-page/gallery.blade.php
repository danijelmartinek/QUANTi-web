
@foreach(json_decode($post->gallery, true) as $gallery)
  <div class="g-thumbnail">
    <img src="{!! Voyager::image( $gallery ) !!}" style="width:100%" onclick="openModal();currentSlide(1)" class="g-hover-shadow cursor">
  </div>


<div id="myModal" class="g-modal">
  <span class="g-close g-cursor" onclick="closeModal()">&times;</span>
  <div class="g-modal-content">

    <div class="g-mySlides">
      <div class="g-numbertext">1 / 4</div>
      <img class="g-img" src="{!! Voyager::image( $gallery ) !!}" style="width:100%">
    </div>

    <a class="g-prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="g-next" onclick="plusSlides(1)">&#10095;</a>

    <div class="g-caption-container">
      <p id="caption"></p>
    </div>

    <div class="g-thumbnail">
      <img class="g-demo g-cursor g-img" src="{!! Voyager::image( $gallery ) !!}" style="width:100%" onclick="currentSlide(2)" alt="Northern Lights">
    </div>
  </div>
</div>
@endforeach


<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("g-mySlides");
  var dots = document.getElementsByClassName("g-demo");
  var captionText = document.getElementById("g-caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
