<html>
<?php
	$dbc=mysqli_connect('localhost','root','');
	mysqli_select_db($dbc,'booking');
	
	if(isset($_GET['id'])&&is_numeric($_GET['id'])){
		$query="SELECT * FROM form WHERE id={$_GET['id']}";
		if($r=mysqli_query($dbc,$query)){
			$row=mysqli_fetch_array($r);
			
			print '<form action="Delete.php" method="post">
			<p>Comfirm DELETE?</p>
			<p>BOOKING ID= '.$row['id'].'<br/>
			<input type="hidden" name="id" value="'.$_GET['id'].'"/>
			<input type="submit" name="submit" value="DELETE"/></p>
			<a href=\Assignment/Admin.php>Back</a>
			</p><hr/>
			</form>';
		}
		else{
			print '<p>Could not retrive the data because:'.mysqli_error($dbc).'</p>';
		}
	}
	elseif(isset($_POST['id'])&&is_numeric($_POST['id'])){
		$query="DELETE FROM form WHERE id={$_POST['id']} LIMIT 1";
		$r=mysqli_query($dbc,$query);
		if(mysqli_affected_rows($dbc)==1){
			print '<p>Delete success</p>';
			print '<a href=\Assignment/Admin.php>Back</a>
			</p><hr/>';

		}
		else{
			print '<p>Delete fail'.mysqli_error($dbc).'</p>';
		}
	}
	else{
		print '<p>Error</p>';
	}
	mysqli_close($dbc);

	
?>
</html>