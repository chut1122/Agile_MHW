<p id="aboutus"></p>
<div class="blank">
<header><h5>CONTACT US</h5></header>
</div>

<div class="w3-grey">
<?php
	if(isset($_POST['submitted'])){
		$dbc=mysqli_connect('localhost','root','');
		mysqli_select_db($dbc,'booking');
		$wrong=FALSE;
	if(!empty($_POST['name'])&&!empty($_POST['email'])
		&&!empty($_POST['phone'])&&!empty($_POST['satis'])&&!empty($_POST['comment'])){
		$name=trim($_POST['name']);
		$email=trim($_POST['email']);
		$phone=trim($_POST['phone']);
		$satis=trim($_POST['satis']);
		$comment=trim($_POST['comment']);

	}
	else{
		print '<p style="color=:red;">Please fill up the form</p>';
		$wrong=TRUE;
	}
	if(!$wrong){
			
			$query = "INSERT INTO feedback(name,email,phone,satis,comment) VALUES ('$name','$email','$phone','$satis','$comment')";
			
			if(mysqli_query($dbc,$query)){
				print '<p>Feedback sent</p>';
			}	
			
			else{
				print '<p style="color:red;">Could not send because:<br />' .mysqli_error($dbc).'. </p><p>
				The query was: ' .$query.'</p>';
			}
		}
		
		if(isset($_POST['submitted'])){
		$problem=FALSE;
	
		if(empty($_POST['name'])){
			$problem=TRUE;
			print '<p class="error">Please enter your name!</p>';
		}
		if(empty($_POST['email'])){
			$problem=TRUE;
			print '<p class="error">Please enter your email!</p>';
		}
		if(empty($_POST['phone'])){
			$problem=TRUE;
			print '<p class="error">Please enter your phone!</p>';
		}
		if(empty($_POST['comment'])){
			$problem=TRUE;
			print '<p class="error">Please enter your comment!</p>';
		}
		if(!$problem){
			print '<p>We will get back to you soon</p>';
			$_POST=array();
		}
		else{
			print '<p class="error">Please try again!</p>';
		}
		}
		mysqli_close($dbc);
	}
?>
<div id="left">

<form action="index.php#aboutus" method="post"><br>
	Name: <input type="text" name="name" placeholder="Your Name" size="52" value="<?php if(isset($_POST
	['name'])){print htmlspecialchars($_POST['name']); }?>"/><br><br>
	E-mail: <input type="email" name="email" placeholder="Your E-mail" value="<?php if(isset($_POST
	['email'])){print htmlspecialchars($_POST['email']); }?>"/>
	Phone: <input type="text" name="phone" placeholder="Your Phone" value="<?php if(isset($_POST
	['phone'])){print htmlspecialchars($_POST['phone']); }?>"/><br><br>
	Satisfaction： <input type="radio" id="satis" checked="checked" name="satis" value="Excellent">Excellent
					<input type="radio" id="satis" name="satis" value="Very Good">Very Good
					<input type="radio" id="satis" name="satis" value="Good">Good
					<input type="radio" id="satis" name="satis" value="Normal">Normal
					<input type="radio" id="satis" name="satis" value="Bad">Bad <br>
	Comments:<br><textarea name="comment" rows="4" cols="61" value="<?php if(isset($_POST
	['comment'])){print htmlspecialchars($_POST['comment']); }?>"/></textarea><br><br>
	<input type="submit" name="submit" value="Send My Feedback"/>
	<input type="hidden" name="submitted" value="true"/>
</form><br>
<img src="Icon/Phone.png" style="width:30px;height:30px">+604 219 0000<br>
<img src="Icon/Location.png" style="width:30px;height:30px">2, Persiaran Maktab,10250 Penang<br><br>
<a href="https://www.facebook.com"><img src="Icon/Facebook.png" style="width:40px;height:40px"></a> 
<a href="https://www.instagram.com"><img src="Icon/Instagram.png" style="width:40px;height:40px"></a> 
<a href="https://www.twitter.com"><img src="Icon/Twitter.png" style="width:40px;height:40px"></a> 
<a href="mailto:chut_95@yahoo.com"><img src="Icon/Email.png" style="width:40px;height:40px"></a><br>
 
</div>

