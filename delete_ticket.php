<?php
	// Start the session
	session_start();
	if(isset($_SESSION['loggedIn'])){
	if(isset($_POST['book'])) {
			$con = mysqli_connect('localhost', 'root', '','railway');
			mysqli_select_db($con,'railway');
	
	$date=$_POST['date'];
	$user_id = $_SESSION['userid'];
	$train=$_POST['trainid'];
			mysqli_query($con,"DELETE FROM combinetable WHERE pass_id='$user_id' and train_id='$train' and journ_date='$date'");
				echo "<script> location.href='ticket_confirm_delete.html';</script>";
				//echo "<script> location.href='mainhome1.php';</script>";	
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
	height : 140px;
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
	<form method="post" action="delete_ticket.php">
	<div class="ab">
		<div class="input-group">
			<label>Train_ID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			<input type="text" name="trainid">
		</div>
		<div class="input-group">
			<label>Journ_Date&nbsp&nbsp</label>
			<input type="text" name="date">
		</div>
			<div class="input-group">
			<button type="submit" class="btn" name="book">Delete`</button>
	
		</div>
		
		
		
		</div>
	</form>
</body>
</html>