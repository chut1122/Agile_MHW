<div class="blank">
<style>
fieldset{
	border-radius:25px;
	display block;
	margin-left:1300px;
	margin-right:300px;
	margin-top:100px;
	padding-left:1.45cm;
	padding-top:0.5cm;
	background:white;
	opacity:0.85;
	
}
fieldset input, select{
	border-radius:15px;
}
</style>
<fieldset>
<form action="Booking.php" method="post" name="booking">
<h2>Check Available</h2>

Check In:<br><input type="text" id="checkin" name="checkin" value="<?php if(isset($_POST
	['checkin'])){print htmlspecialchars($_POST['checkin']); }?>"/><br/> Check Out: <br/> 
	<input type="text" id="checkout" name="checkout" value="<?php if(isset($_POST
	['checkout'])){print htmlspecialchars($_POST['checkout']); }?>"/><br>
	Room Type:<br><select name="roomtype"><option value="1" name="Jacuzzi">Jacuzzi Suite</option>
	<option value="2" name="Deluxe">Deluxe Suite</option>
	<option value="3" name="Business">Business Suite</option>
	<option value="4" name="Junior">Junior Suite</option></select><br><br>
	<input type="submit" name="submit" value="BOOK!"/>
	<input type="hidden" name="submitted" value="true"/>
</form>
</fieldset>
</div>
<div class="slideshow-container">
<div class="mySlides fade">
	<div class="numbertext">1 / 3</div>
	<img src="gym.jpg" style="width:100%">
</div>
<div class="mySlides fade">
	<div class="numbertext">2 / 3</div>
	<img src="pool.jpg" style="width:100%">
</div>
<div class="mySlides fade">
	<div class="numbertext">3 / 3</div>
	<img src="spa.jpg" style="width:100%">
</div>
</div>
<br>

<div style="text-align:center">
	<span class="dot"></span>
	<span class="dot"></span>
	<span class="dot"></span>

</div>
<br>
<div class="w3-row w3 w3-center">
	<p><h2>Our Service</h2></p>
	<div class="w3-col s4 w3-white w3-center">
		<p><img src="Icon/Sleep.png" style="width:100px;height:100px;"></p>
		<p><h2>Hotel</h2></p>
		<p>We prepared all furniture in good condition in our hotel room.<br/>
		All personal groceries is also prepare in our hotel room.<br/>
		Wifi also install in whole range of our hotel.</p>
		<div class="w3-row-container">
			<div class="w3-col s4 w3-white w3-center"><img src="Icon/Wifi.png" style="width:60px;height:60px;"><p>Wifi</p></div>
			<div class="w3-col s4 w3-white w3-center"><img src="Icon/AC.png" style="width:60px;height:60px;"><p>Air Conditioner</p></div>
			<div class="w3-col s4 w3-white w3-center"><img src="Icon/Safe.png" style="width:60px;height:60px;"><p>Safety Lock</p></div>
		</div>
	</div>
	<div class="w3-col s4 w3-white w3-center">
		<p><img src="Icon/Food.png" style="width:100px;height:100px;"></p>
		<p><h2>Restaurant</h2></p>
		<p>Our restaurant food is cook by Michellin 5 Star chef from New York.<br/>
		We prepared clean enviroment and tableware in our restaurant.<br/>
		Our food quility is the best in town.</p>
		<div class="w3-row-container">
			<div class="w3-col s4 w3-white w3-center"><img src="Icon/Bar.png" style="width:60px;height:60px;"><p>Bar</p></div>
			<div class="w3-col s4 w3-white w3-center"><img src="Icon/Buffet.png" style="width:60px;height:60px;"><p>International Buffet</p></div>
			<div class="w3-col s4 w3-white w3-center"><img src="Icon/SFood.png" style="width:60px;height:60px;"><p>Seafood</p></div>
		</div>
	</div>
	<div class="w3-col s4 w3-white w3-center">
		<p><img src="Icon/Massage.png" style="width:100px;height:100px;"></p>
		<p><h2>Reflexology</h2></p>
		<p>All of our masseur is train by Massage University of Bangkok, Thailand.<br/>
		Our masseur are train well and have professional skill in massage.<br/>
		Must try our reflexology service.</p>
		<div class="w3-row-container">
			<div class="w3-col s4 w3-white w3-center"><img src="Icon/Gym.png" style="width:60px;height:60px;"><p>Gym</p></div>
			<div class="w3-col s4 w3-white w3-center"><img src="Icon/Pool.png" style="width:60px;height:60px;"><p>Swimming Pool</p></div>
			<div class="w3-col s4 w3-white w3-center"><img src="Icon/Spa.png" style="width:60px;height:60px;"><p>Spa</p></div>
		</div>
	</div>
</div>


<script type="text/javascript">
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
    setTimeout(showSlides, 3500); // Change image every 2 seconds
}
</script>
<script>
	$( function() {
		var dateFormat = "mm/dd/yy",
		
		from = $( "#checkin" )
			.datepicker({
			minDate:0,
			changeMonth: true,
			numberOfMonths: 1
			})
			.on( "change", function() {
			to.datepicker( "option", "minDate", getDate( this ) );
			}),
		to = $( "#checkout" ).datepicker({
			defaultDate: 0,
			changeMonth: true,
			numberOfMonths: 1
		})
		.on( "change", function() {
			from.datepicker( "option", "maxDate", getDate( this ) );
		});
 
		function getDate( element ) {
		var date;
		try {
			date = $.datepicker.parseDate( dateFormat, element.value );
		} catch( error ) {
			date = null;
		}
 
		return date;
		}
	} );

</script>
