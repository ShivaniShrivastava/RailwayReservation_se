<?php
	// Start the session
	session_start();
	if(isset($_SESSION['loggedIn'])){
	if(isset($_POST['book'])) {
			$con = mysqli_connect('localhost', 'root', '','railway');
			mysqli_select_db($con,'railway');
	
	$date=$_POST['date'];
	$user_id = $_SESSION['userid'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$num = $_POST['number'];
	$address = $_POST['address'];
	$seat_num = $_POST['seatnum'];
	$train_num= $_POST['train_num'];
	$_SESSION['global_trainid']=$train_num;
			mysqli_query($con,"DELETE FROM combinetable WHERE seat_id=0");
			mysqli_query($con,"UPDATE passenger SET age='$age',email='$email',number='$num',address='$address' WHERE passenger_id='$user_id'" );
			$result = mysqli_query($con,"SELECT * FROM combinetable where train_id='$train_num' and seat_id='$seat_num'");
			$poo=mysqli_num_rows($result);
			//echo $poo;
			if(mysqli_num_rows($result)==0){
				mysqli_query($con,"INSERT INTO combinetable VALUES('$user_id','$train_num','$seat_num','$date')" );
				sleep(3);
				echo "<script> location.href='ticket_confirm.html';</script>";
				//echo "<script> location.href='mainhome1.php';</script>";
			}
			else{
				//sleep(3);
				echo "<script> location.href='allbook.php';</script>";
			}
			exit;
		
		}

}
else{
							sleep(3);
							echo "<script> location.href='login.php';</script>";;
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
	height : 360px;
	border-radius : 8px;
	margin-left : 420px;
	margin-right : 400px;
	margin-top : 35px;
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
  <li><a href="mainhome1.php">Home</a></li>
  <li><a href="search_trains.html">Search Trains</a></li>
    <li><a href="bookpage.php">Book Train</a></li>
		<li><a href="view_booked_tickets.php">View Booked Tickets</a></li>
		<li><a href="delete_ticket.php">Delete Tickets</a></li>
  <li class="dropdown">
    <a href="logout.php">Logout</a>
  </li>
  <!--<li><a href="logout.php">Logout</a></li>-->
</ul>
	<form method="post" action="bookpage.php">
	<div class="ab">
		<div class="input-group">
			<label>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Age&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="age">
		</div>
		<div class="input-group">
			<label>Number&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="number">
		</div>
		<div class="input-group">
			<label>Address&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="address">
		</div>
		<div class="input-group">
			<label>TrainID&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="train_num">
		</div>
		<div class="input-group">
			<label>Seat_Num&nbsp</label>
			<input type="text" name="seatnum">
		</div>
		<div class="input-group">
			<label>Journ_Date</label>
			<input type="text" name="date" value="dd/mm/yyyy hh:mm:ss">
		</div>
			<div class="input-group">
			<button type="submit" class="btn" name="book">Book</button>
		<p>
  		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Available Seats <a href="show_available.php" class="link">Show</a>
  	</p>
		</div>
		
		
		
		</div>
	</form>
</body>
</html>