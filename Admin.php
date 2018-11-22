<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<?php
	session_start();
	define('TITLE','Admin');
	require('outhead.html');
	?>
	<div class="blank"><header><h6>Welcome back Admin</h6></header></div>
	<header>BOOKING FORM</header>
	<div class="w3-white">
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Passport No.</th>
				<th>Address</th>
				<th>E-mail</th>
				<th>Handphone No.</th>
				<th>Room Type</th>
				<th>Check in</th>
				<th>Check out</th>
				<th>Requirement</th>
				<th> </th>
			</tr>
		</thead>
		<tbody id="tb1">

	<?php
	$dbc = mysqli_connect('localhost','root','');
		mysqli_select_db($dbc,'booking');
		
		$query = 'SELECT * FROM form ORDER BY id ASC LIMIT 15';
	if($r=mysqli_query($dbc,$query)){

		while($row=mysqli_fetch_array($r)){ ?>
			
				<tr>
					<td><?php print $row['id'];?></td>
					<td><?php print $row['name'];?></td>
					<td><?php print $row['pp_no'];?></td>
					<td><?php print $row['address'];?></td>
					<td><?php print $row['email'];?></td>
					<td><?php print $row['hp_no'];?></td>
					<td><?php print $row['roomtype'];?></td>
					<td><?php print $row['checkin'];?></td>
					<td><?php print $row['checkout'];?></td>
					<td><?php print $row['requirement'];?></td>
					<td><?php
			print "<a href=\"Delete.php?id={$row['id']}\">Delete</a>"?></td>
				</tr>
			<?php
			
		}
	}
	else{
		print '<p style="color: red;">Could not retrieve the data because:<br />' .mysqli_error($dbc).
		'.</p><p?The query being run was:' . $query. '</p>';
	}
	mysqli_close($dbc);
?>


</tbody>
</table>
</div><br>
	<header>FEEDBACK</header>
	<div class="w3-white">
	
	<table border="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>E-mail</th>
				<th>HandPhone</th>
				<th>Satisfy</th>
				<th>Comment</th>
				
			</tr>
		</thead>
		<tbody id="tb1">
	<?php
	$dbc = mysqli_connect('localhost','root','');
		mysqli_select_db($dbc,'booking');
		
		$query = 'SELECT * FROM feedback ORDER BY name DESC LIMIT 10';
	if($r=mysqli_query($dbc,$query)){

		while($row=mysqli_fetch_array($r)){ ?>
			
				<tr>
					<td><?php print $row['name'];?></td>
					<td><?php print $row['email'];?></td>
					<td><?php print $row['phone'];?></td>
					<td><?php print $row['satis'];?></td>
					<td><?php print $row['comment'];?></td>

			<?php
			
		}
	}
	else{
		print '<p style="color: red;">Could not retrieve the data because:<br />' .mysqli_error($dbc).
		'.</p><p?The query being run was:' . $query. '</p>';
	}
	mysqli_close($dbc);
?>
</tbody>
</table>

</div>

<?php
	require('Footer.html');
	?>