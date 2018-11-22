<?php
	require('head.html')
?>

<div class="slideshow-container">

<div class="mySlides fade">
	<div class="numbertext">1 / 18</div>
	<img src="Pic/Bar.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">2 / 18</div>
	<img src="Pic/gym.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">3 / 18</div>
	<img src="Pic/GymG.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">4 / 18</div>
	<img src="Pic/facilitybg.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">5 / 18</div>
	<img src="Pic/leisure.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">6 / 18</div>
	<img src="Pic/Lobby.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">7 / 18</div>
	<img src="Pic/lobby2.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">8 / 18</div>
	<img src="Pic/MPH.png" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">9 / 18</div>
	<img src="Pic/pool.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">10 / 18</div>
	<img src="Pic/PoolP.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">11 / 18</div>
	<img src="Pic/Restaurant.jpeg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">12 / 18</div>
	<img src="Pic/roombg.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">13 / 18</div>
	<img src="Pic/Snooker.png" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">14 / 18</div>
	<img src="Pic/spa.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">15 / 18</div>
	<img src="Pic/spa1.png" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">16 / 18</div>
	<img src="Pic/spa2.png" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">17 / 18</div>
	<img src="Pic/spa3.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">18 / 18</div>
	<img src="Pic/SpaS.jpg" style="width:100%;height:800px">
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
<br>
<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>  
	<span class="dot" onclick="currentSlide(4)"></span> 
	<span class="dot" onclick="currentSlide(5)"></span> 
	<span class="dot" onclick="currentSlide(6)"></span> 
	<span class="dot" onclick="currentSlide(7)"></span> 
	<span class="dot" onclick="currentSlide(8)"></span> 
	<span class="dot" onclick="currentSlide(9)"></span> 
	<span class="dot" onclick="currentSlide(10)"></span> 
	<span class="dot" onclick="currentSlide(11)"></span> 
	<span class="dot" onclick="currentSlide(12)"></span> 
	<span class="dot" onclick="currentSlide(13)"></span> 
	<span class="dot" onclick="currentSlide(14)"></span> 
	<span class="dot" onclick="currentSlide(15)"></span> 
	<span class="dot" onclick="currentSlide(16)"></span> 
	<span class="dot" onclick="currentSlide(17)"></span> 
	<span class="dot" onclick="currentSlide(18)"></span> 
</div>
<script>
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
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
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
}
</script>


<?php
	require('Footer.html');
?>