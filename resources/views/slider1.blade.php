<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Owl Carousel owl slider (Responsive) 2020</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->




<div class="owl-slider">
    <div id="carousel" class="owl-carousel">
        <div class="item">
            <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
        </div>
        <div class="item">
            <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
        </div>
        <div class="item">
            <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
        </div>
        <div class="item">
            <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
        </div>
        <div class="item">
            <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
        </div>
        <div class="item">
            <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
        </div>
        <div class="item">
            <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
        </div>
        <div class="item">
            <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
        </div>
        <div class="item">
            <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
        </div>
        <div class="item">
            <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
        </div>
    </div>
</div>
<h2><span>Note:-</span> Please change "data-src" to "src" in 'img' tag when you use in your source code.</h2>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script><script  src="./script.js"></script>
<script>
    jQuery("#carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  rewind: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});
</script>
</body>
</html>
