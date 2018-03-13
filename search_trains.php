<?php
	// Start the session
	session_start();
	
	if(isset($_POST['reg_user'])) {

	$conn = mysqli_connect('localhost', 'root', '','railway');
	mysqli_select_db($conn,'railway');
	
	$source = $_POST['source'];
	$dest = $_POST['destination'];
	
			echo "You are now registered.";
			$sql = "SELECT * FROM train where source='$source' AND dest='$dest'";
			$result = mysqli_query($conn, $sql);
			$poo=mysqli_num_rows($result);
			echo $poo;
			if (mysqli_num_rows($result)>0) {
			// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					echo "id: " . $row["train_id"]. " Source: " . $row["source"]. " Destination: " . $row["dest"]."Arrival Time: ".$row["arrival_time"]."Departure time".$row["depart_time"]."<br>";
				}
			} 
			else {
				echo "0 results";
			}
			
			exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
	background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('train.jpg');
	background-color: black;
	background-size : 100%;
	background-repeat: no-repeat;
    background-attachment: fixed;
    opacity: 0.8;
    filter:alpha(opacity=80);
	}
p{
	color : white;
}

.input-group{
	color : white;
	padding : 10px;
}
.ab
{
	border-style: solid;
	border-color: white;
    border-width: medium;
	border-radius : 8px;
	margin-left : 420px;
	margin-right : 420px;
	margin-top : 150px;
	padding : 10px;
	background-color : black;
	opacity: 0.8;
    filter:alpha(opacity=80);
}


.btn{
	background-color : white;
	color : black;
}
a:visited {
    color: red;
}

a:hover {
    color: hotpink;
}

a:active {
    color: blue;
}
.btn{
	background-color : white ;
	color : black;
	border: 2px solid #ffffff; 
	font-style : italic;

}
.btn{
	    margin-left: 130px;
}
</style>
</head>
<body>
	<form method="post" action="search_trains.php">
	<div class="ab">
		<div class="input-group">
			<label>Source&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="source">
		</div>
		<div class="input-group">
			<label>Destination&nbsp</label>
			<input type="text" name="destination" >
		</div>
			<div class="button_input">
			<button type="submit" class="btn" name="reg_user">Search</button>
		</div>
	</div>
		
	</form>
</body>
</html>