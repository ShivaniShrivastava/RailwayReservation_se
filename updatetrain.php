<?php
	// Start the session
	session_start();
	if(isset($_SESSION['adminusername'])){
	if(isset($_POST['reg_user'])) {

	$con = mysqli_connect('localhost', 'root', '','railway');
	mysqli_select_db($con,'railway');
	
	$src = $_POST['source'];
	$dest = $_POST['destination'];
	$trainid = $_POST['train_id'];
	$arriv = $_POST['arrival_time'];
	$depart = $_POST['depart_time'];
		
			mysqli_query($con,"UPDATE train SET arrival_time='$arriv',depart_time='$depart' WHERE train_id='$trainid'" );
			echo "<script> location.href='train_register_complete.html';</script>";
			//echo "<script> location.href='adminhome.php';</script>";
			exit;
			
}
}
else{
		echo "<script> location.href='adminlogin.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000000;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #8e1015;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #000000;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #8e1015}

.dropdown:hover .dropdown-content {
    display: block;
}
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
	margin-right : 400px;
	margin-top : 30px;
	padding : 10px;
	background-color : black;
	opacity: 0.8;
    filter:alpha(opacity=80);
}

.btn{
	background-color : white ;
	color : black;
	border: 2px solid #ffffff; 
	font-style : italic;

}
.hometrain{
	margin-left:10px;
	margin-top:60px;
	}
</style>
</head>
<body>
<ul>
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="train_register.php">Register Trains</a></li>
    <li><a href="updatetrain.php">Update Trains</a></li>
	 <li><a href="view_all_trains.php">View Trains</a></li>
	 	 	 <li><a href="delete_train.php">Delete Trains</a></li>
  <li class="dropdown">
    <a href="logout.php">Logout</a>
  </li>
  <!--<li><a href="logout.php">Logout</a></li>-->
</ul>
	
	<form method="post" action="updatetrain.php">
		<div class="ab" align="center">
		<div class="input-group">
			<label>Source&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="source">
		</div>
		<div class="input-group">
			<label>Destination&nbsp</label>
			<input type="text" name="destination" >
		</div>
				<div class="input-group">
			<label>Train_ID&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="train_id">
		</div>
				<div class="input-group">
			<label>Arrival_time</label>
			<input type="text" name="arrival_time">
		</div>
				<div class="input-group">
			<label>Depart_time</label>
			<input type="text" name="depart_time">
		</div>
		<div class="button_input">
			<button type="submit" class="btn" name="reg_user">Update</button>
		</div>
		</div>
	</form>
	<div class="hometrain">
		<form action="mainhome.php">
			<input type="image" class="hometrain" src="hometrain1.jpg" width="20" height="20">
		</form>
	</div>
</body>
</html>