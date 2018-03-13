<?php
	// Start the session
	session_start();
	if(isset($_SESSION['adminusername'])){
	if(isset($_POST['book'])) {
			$con = mysqli_connect('localhost', 'root', '','railway');
			mysqli_select_db($con,'railway');
	
	$user_id = $_SESSION['userid'];
	$src= $_POST['src'];
	$dest= $_POST['dest'];
	$train=$_POST['trainid'];
			$sql = "delete from train where train_id='$train'";
			$resultone = mysqli_query($con, $sql);
			echo "<script> location.href='train_register_complete.html';</script>";
				//echo "<script> location.href='mainhome1.php';</script>";	
		}

}
else{
							sleep(3);
							echo "<script> location.href='adminlogin.php';</script>";;
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

.po{
	margin-left:60px;
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
	height : 170px;
	border-radius : 8px;
	margin-left : 420px;
	margin-right : 400px;
	margin-top : 100px;
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
.btn{
	    margin-left: 110px;
}
	a.link:visited {
    color: red;
}

a.link:hover {
    color: hotpink;
}

a.link:active {
    color: blue;
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
	<form method="post" action="delete_train.php">
	<div class="ab">
		<div class="input-group">
			<label>Source&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="src">
		</div>
		<div class="input-group">
			<label>Destination&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="dest">
		</div>
		<div class="input-group">
			<label>Train_ID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="trainid">
		</div>
			<div class="input-group">
			<button type="submit" class="btn" name="book">Delete`</button>
	
		</div>
		
		
		
		</div>
	</form>
</body>
</html>