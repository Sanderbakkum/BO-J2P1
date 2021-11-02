<?php $this->layout('layouts::layout');?>



<div class="text">
        <div class="hoofdtext">
            <h1 class="texttitle">Life Sucks Sometimes</h1>
            <h3 class="textbigger">Maar je staat er niet alleen voor</h3>
            <p>De Transformers Community is er voor jongeren die zelfverzekerd willen zijn en tegenslagen omzetten in kracht. We doen dit samen zo leren we meer en helpen we elkaar om te groeien.</p>
            </div>
            <a class="button" href="<?php echo url( 'wordtransformer' ) ?>"<?php if ( current_route_is( 'wordtransformer' ) ): ?> class="active"<?php endif ?>>Word Transformer!</a>
            <body>
        </div>


<div class="slideshow-container">

<div class="mySlides fade">
  <img class="images" src="/images/image1.png">
</div>

<div class="mySlides fade">
  <img class="images" src="/images/image2.png">
</div>

<div class="mySlides fade">
  <img class="images" src="/images/image3.png">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>



