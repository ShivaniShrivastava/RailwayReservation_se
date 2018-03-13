
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="10;url=http://localhost/railway_reservation/mainhome1.php" />
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
<?php
session_start();
	//echo "hey";
	//if(isset($_POST['log_user'])) {
	//echo "Hey again";
	if(isset($_SESSION['loggedIn'])){
	$conn = mysqli_connect('localhost', 'root', '','railway');
	mysqli_select_db($conn,'railway');
	$userid=$_SESSION['userid'];
	$sql = "select * from combinetable where pass_id='$userid'";
			$result = mysqli_query($conn, $sql);
			$pon=mysqli_num_rows($result);
			echo $pon;
			if (mysqli_num_rows($result)>0) {
			// output data of each row
			echo "<table border=1 align=\"center\" style=\"border-spacing:2px;color:white;border-style: inset;border-width: 3px;border-color: red;\">
				<tr>
					<th>Train ID</th>
					<th>Source</th>
					<th>Destination</th>
					<th>Seat ID</th>
					<th>Jounrney Date</th>
				</tr>";
				while($row = mysqli_fetch_assoc($result)) {
					$sqlp = "select * from train where train_id='".$row['train_id']."'";
					$resultone = mysqli_query($conn, $sqlp);
					$rowone = mysqli_fetch_assoc($resultone);
					echo "<tr>";
						echo "<td>" . $row['train_id'] . "</td>";
						echo "<td>" . $rowone['source'] . "</td>";
						echo "<td>" . $rowone['dest'] . "</td>";
						echo "<td>" . $row['seat_id'] . "</td>";
						echo "<td>" . $row['journ_date'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			} 
	}
	
else{
							sleep(3);
							echo "<script> location.href='login.php';</script>";;
}
			
?>
</body>
</html>