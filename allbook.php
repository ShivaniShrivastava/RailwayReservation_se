
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="8;url=http://localhost/railway_reservation/mainhome1.php" />
<style>
body{
	background: linear-gradient( rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75) ), url('train.jpg');
	background-color: black;
	background-size : 100%;
	background-repeat: no-repeat;
    background-attachment: fixed;
    opacity: 0.8;
    filter:alpha(opacity=80);
}
h3{
	color:red;
	align:center;
}
.hometrain{
	margin-left:540px;
	margin-top:5px;
	}
</style>
</head>
<body>
<div class="hometrain">
		<form action="mainhome1.php">
			<input type="image" class="hometrain" src="hometrain1.jpg" width="30" height="30">
		</form>
</div>
<h3>SELECTED SEAT IS NOT AVAILABLE!!</h3>
<?php
session_start();
	//echo "hey";
	//if(isset($_POST['log_user'])) {
	//echo "Hey again";
	$conn = mysqli_connect('localhost', 'root', '','railway');
	mysqli_select_db($conn,'railway');
	$global_tid = $_SESSION['global_trainid'];
	$sql = " select * from seat where seat_num not in (select seat_id from combinetable where train_id='$global_tid');";
			$result = mysqli_query($conn, $sql);
			$pon=mysqli_num_rows($result);
			echo $pon;
			if (mysqli_num_rows($result)>0) {
			// output data of each row
			echo "<table border=1 align=\"center\" style=\"border-spacing:2px;color:white;border-style: inset;border-width: 3px;border-color: red;\">
				<tr>
					<th>Available Seats</th>
				</tr>";
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
						echo "<td>" . $row['seat_num'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			} 
	//}
	
			
?>
</body>
</html>