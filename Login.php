<?php
ob_start();
	define('TITLE','Login');
	require('head.html');
?>

<div class="blank"><br><br><header><h6>Log In</h6></header></div>
<div class="container">
<div class="w3-grey">
<div id="left"><br>
<?php

		if (isset($_POST['submitted'])){
		if((!empty($_POST['id']))&&(!empty($_POST['password']))){
			if((strtolower($_POST['id'])=='admin')&&($_POST['password']=='admin')){
				session_start();
				$_SESSION['id']=$_POST['id'];
				$_SESSION['loggedin']=time();
				header('Location:Admin.php');
				exit();
		}
		else{
			print '<p>Please make sure you enter both an id and a password!<br/>
			Go back and try again.</p>';
		}
		}
	}
	else{
		print '<form action="Login.php" method="post">
		User ID: <input type="text" name="id" size="20"/><br/><br/>
		Password: <input type="password" name="password" size="20"/><br/><br/>
		<input type="submit" name="submit" value="Log In"/>
		<input type="hidden" name="submitted" value="true"/>
		</form>';
	}



?>
<br>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<?php

	require('Footer.html');
?>