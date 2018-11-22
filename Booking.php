<?php	
	define('TITLE','Booking');
	require('head.html');
	

?>
<div class="blank"><br><header><h6>BOOKING FORM</h6></header></div>
<div class="w3-grey">
<?php	
	
if(isset($_POST['submitted'])){
		$bbc=mysqli_connect('localhost','root','');
		mysqli_select_db($bbc,'booking');
		$wrong=FALSE;
		if(!empty($_POST['name'])&&!empty($_POST['pp_no'])&&!empty($_POST['address'])
			&&!empty($_POST['email'])&&!empty($_POST['hp_no'])&&!empty($_POST['roomtype'])&&!empty($_POST['checkin'])
		&&!empty($_POST['checkout'])&&!empty($_POST['requirement'])){
		$name=trim($_POST['name']);
		$pp_no=trim($_POST['pp_no']);
		$address=trim($_POST['address']);
		$email=trim($_POST['email']);
		$hp_no=trim($_POST['hp_no']);
		$roomtype=trim($_POST['roomtype']);
		$checkin=trim($_POST['checkin']);
		$checkout=trim($_POST['checkout']);
		$radio=trim($_POST['radio']);
		$requirement=trim($_POST['requirement']);
		
	}
	else{
		print '<p style="color:red;">Please fill up the form</p>';
		$wrong=TRUE;
	}

	
	if(!$wrong){
			
			$query = "INSERT INTO form(name,pp_no,address,email,hp_no,roomtype,checkin,checkout,radio,requirement) VALUES ('$name','$pp_no','$address','$email','$hp_no','$roomtype','$checkin','$checkout','$radio','$requirement')";
			
			if(mysqli_query($bbc,$query)){
				print '<p>BOOKING status:</p>';
			}	
			
			else{
				print '<p style="color:red;">Could book because:<br />' .mysqli_error($bbc).'. </p><p>
				The query was: ' .$query.'</p>';
			}
		}
		
	if(isset($_POST['submitted'])){
		$problem=FALSE;
	
		if(empty($_POST['name'])){
			$problem=TRUE;
			print '<p class="error">Please enter your name!</p>';
		}
		if(empty($_POST['pp_no'])){
			$problem=TRUE;
			print '<p class="error">Please enter your passport no.!</p>';
		}
		if(empty($_POST['address'])){
			$problem=TRUE;
			print '<p class="error">Please enter your home address!</p>';
		}
		if(empty($_POST['email'])){
			$problem=TRUE;
			print '<p class="error">Please enter your e-mail!</p>';
		}
		if(empty($_POST['hp_no'])){
			$problem=TRUE;
			print '<p class="error">Please enter your handphone no.!</p>';
		}
		if(empty($_POST['checkin'])){
			$problem=TRUE;
			print '<p class="error">Please enter your check in date!</p>';
		}
		if(empty($_POST['checkout'])){
			$problem=TRUE;
			print '<p class="error">Please enter your check out date!</p>';
		}
		if(!$problem){
			print '<p>Your hotel booked</p>';
			$_POST=array();
		}
		else{
			print '<p class="error">Please try again!</p>';
		}
	}
	
	mysqli_close($bbc);
}
	
?>


<div class="container">
<div id="left">

	<form action="Booking.php" method="post" name="booking"><br>
	<h2>Name: <input type="text" name="name" placeholder="Your Name" size="20" value="<?php if(isset($_POST
	['name'])){print htmlspecialchars($_POST['name']); }?>"/></h2><br>
	<h2>Passport No: <input type="text" name="pp_no" placeholder="Your Passport No." size="20" value="<?php if(isset($_POST
	['pp_no'])){print htmlspecialchars($_POST['pp_no']); }?>"/><h2><br>
	<h2>Address: <input type="text" name="address" placeholder="Your Home Address" size="20" value="<?php if(isset($_POST
	['address'])){print htmlspecialchars($_POST['address']); }?>"/><h2><br>
	<h2>E-mail: <input type="email" name="email" placeholder="Your E-mail"size="20" value="<?php if(isset($_POST
	['email'])){print htmlspecialchars($_POST['email']); }?>"/><h2><br>
	<h2>Handphone No: <input type="text" name="hp_no" placeholder="Your Handphone No." size="20" value="<?php if(isset($_POST
	['hp_no'])){print htmlspecialchars($_POST['hp_no']); }?>"/><h2><br>
	<h2>Room Type: <select name="roomtype"><option value="1" name="Jacuzzi">Jacuzzi Suite</option>
	<option value="2" name="Deluxe">Deluxe Suite</option>
	<option value="3" name="Business">Business Suite</option>
	<option value="4" name="Junior">Junior Suite</option></select></h2><br>
	<h2>Date: From <input type="text" id="checkin" name="checkin"/> To 
	<input type="text" id="checkout" name="checkout"/><h2><br>
	<h2>Require: <input type="radio" id="radio" checked="checked" name="radio" value="non-smooking"> Non-Smooking Room 
			<input type="radio" id="radio" name="radio" value="smooking"> Smooking Room <br>
	<br><textarea name="requirement" rows="4" cols="61" value="<?php if(isset($_POST
	['requirement'])){print htmlspecialchars($_POST['requirement']); }?>"/>No Requirement</textarea><h2><br><br>
	<input type="submit" name="submit" value="BOOK!"/>
	<input type="hidden" name="submitted" value="true"/>
</form>

 </div>
</div>

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
			defaultDate: 1,
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

<?php
	require('Footer.html');
	?>