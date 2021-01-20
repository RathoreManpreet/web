<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
<body>


<div>
    
    <div class="w3-content w3-display-container" style="max-width:800px">
        <img class="mySlides" src="https://images.unsplash.com/photo-1518291182257-c3dbbc38d89f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" style="width:100%">
        <img class="mySlides" src="https://images.unsplash.com/reserve/TxbDzeAhRmCwa6DDrbOQ_kazan-big.jpg?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" style="width:100%">
        <img class="mySlides" src="https://images.unsplash.com/photo-1562326370-3cc2d2e12fea?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80" style="width:100%">
    
    </div>
    <div class="relative w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle w-full" style="    position: relative;">
        
        <span class="w3-badge dots  w3-border w3-transparent w3-hover-white" id="slider-1" onclick="currentDiv(1)"></span>
        <span class="w3-badge dots  w3-border w3-transparent w3-hover-white" id="slider-2" onclick="currentDiv(2)"></span>
        <span class="w3-badge dots  w3-border w3-transparent w3-hover-white" id="slider-3" onclick="currentDiv(3)"></span>
    </div>
</div>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dots");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}    
  x[slideIndex-1].style.display = "block";  
//   alert(slideIndex)
$('.dots').removeClass('w3-white')
$('#slider-'+slideIndex).addClass('w3-white')
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 
