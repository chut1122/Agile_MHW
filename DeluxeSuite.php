<?php	
	require("head.html")
?>

<div class="slideshow-container">

<div class="mySlides fade">
	<div class="numbertext">1 / 3</div>
	<img src="Pic/DeluxeSuite/1.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">2 / 3</div>
	<img src="Pic/DeluxeSuite/2.jpg" style="width:100%;height:800px">
</div>

<div class="mySlides fade">
	<div class="numbertext">3 / 3</div>
	<img src="Pic/DeluxeSuite/3.jpg" style="width:100%;height:800px">
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
</div>

<div class="w3-row w3-white w3-left">
	
	<div class="w3-col s3 w3-white w3-center">
	<p> </p>
	</div>
	<div class="w3-col s4 w3-white w3-left">
	<p><h2>Deluxe Suite</h2></p>
		<p>The cozy Deluxe Room offers 30 sq.m. of relaxing space to sleep well and feel at home. The earth tone decoration creates a calming space to work, watch a movie or browse the Internet. The Deluxe Room at S15 Sukhumvit Hotel is available with a choice of king size or twin single beds.</p>
		Room amenities:<br>
		<le>Air conditioning</le><br>
		<le>Internet television</le><br>
		<le>Cable/satellite channels</le><br>
		<le>DVD player</le><br>
		<le>Wireless Internet</le><br>
		<le>Telephone</le><br>
		<le>igital room safe</le><br>

	</div>
	<div class="w3-col s4 w3-white w3-left">
		<p></p><br><br><br><br><br><br><br><br><le>Mini refrigerator</le><br>
		<le>Tea/coffee making facilities</le><br>
		<le>Bathtub and separate shower</le><br>
		<le>Bathrobes & slippers</le><br>
		<le>Hair dryer</le><br>
		<le>Working desk</le><br>
		<le>International Adapter</le>
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
	require("Footer.html")
?>