<?php	
	define('TITLE','Payment');
	require('head.html');
	

?>
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
		$bbc=mysqli_connect('localhost','root','');
		mysqli_select_db($bbc,'booking');
		$check = "SELECT COUNT(`roomtype`) FROM `form` WHERE `roomtype` = '$roomtype'";
			
		if ($r=mysqli_query($bbc,$check)){
			while($row=mysqli_fetch_array($r)){
				if (($row['COUNT(`roomtype`)']) >= 1){
					print '<p style="color:yellow;">Could not book because the choosen room type has been sold out. Please try another room type. Thank you!</p>';
				}
				else{
					$query = "INSERT INTO form(name,pp_no,address,email,hp_no,roomtype,checkin,checkout,radio,requirement) VALUES ('$name','$pp_no','$address','$email','$hp_no','$roomtype','$checkin','$checkout','$radio','$requirement')";
			
					if(mysqli_query($bbc,$query)){
						print '<p style="color:green;">BOOKING SUCCESSFUL!</p>';
					}
			
					else{
						print '<p style="color:red;">Could book because:<br />' .mysqli_error($bbc).'. </p><p>
						The query was: ' .$query.'</p>';
					}
				}
				break;
			}
		}
	}
		
	
	
	mysqli_close($bbc);
}
	
?>


<div class="blank"><br><header><h6>Payment</h6></header></div>
<div class="w3-grey">
<div class="container">
<div id="left">
<form action="index.php" method="post" name="booking">
<h2>Booking Successfully</h2>
<h2>Please Bank in to 12315484532 (Hong Leong Bank)</h2>
<h2>Please Whatapps the bank statement to 0124589456</h2>

<input name="submit" type="submit" value="Comfirm">
<input type="hidden" name="submitted" value="true"/>

</form>
</div>

</div>

</div>
<?php
	require('Footer.html');
	?>