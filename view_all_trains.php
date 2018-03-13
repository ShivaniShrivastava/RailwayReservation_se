
<!DOCTYPE html>
<html>
<head>
<style>
body {
	background: linear-gradient( rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75) ), url('train.jpg');
	background-color: black;
	background-size : 100%;
	background-repeat: no-repeat;
    background-attachment: fixed;
    opacity: 0.8;
    filter:alpha(opacity=80);
	color : white;
}

th{
	    text-align: center;
}
td{
	    text-align: left;
}
.hometrain{
	margin-left:20px;
	margin-top:20px;
	}
</style>
</head>
<body>
<div class="hometrain">
		<form action="adminhome.php">
			<input type="image" class="hometrain" src="hometrain1.jpg" width="20" height="20">
		</form>
</div>
<?php
	// Start the session
	session_start();
	if(isset($_SESSION['adminusername'])){

	$conn = mysqli_connect('localhost', 'root', '','railway');
	mysqli_select_db($conn,'railway');
	
			$sql = "SELECT * FROM train";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result)>0) {
			// output data of each row
			echo "<table border=1 align=\"center\" style=\"border-spacing:2px;color:white;border-style: inset;border-width: 3px;border-color: red;\">
				<tr>
					<th>Train ID</th>
					<th>Source</th>
					<th>Destination</th>
					<th>Arrival Time</th>
					<th>Departure Time</th>
				</tr>";

				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
						echo "<td>" . $row['train_id'] . "</td>";
						echo "<td>" . $row['source'] . "</td>";	
						echo "<td>" . $row['dest'] . "</td>";
						echo "<td>" . $row['arrival_time'] . "</td>";
						echo "<td>" . $row['depart_time'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			} 
			else {
				echo "0 results";
			}
			
			exit;
}

else{
		echo "<script> location.href='adminlogin.php';</script>";
}
?>

</body>
</html>


