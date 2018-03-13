
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

body{
	background: linear-gradient( rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75) ), url('mainhome.jpg');
	background-color: black;
	background-size : 100%;
	background-repeat: no-repeat;
    background-attachment: fixed;
    opacity: 0.8;
    filter:alpha(opacity=80);
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

h1{
	color : #ffffff;
    text-shadow: 2px 2px 8px #ff0000;
	text-align : center;
	font-style : italic;
	font-size : 450%;
}
.coop1{
	color : #ffffff;
    text-shadow: 2px 2px 8px #ff0000;
	text-align:center;
	font-style : bold;
	font-style : italic;
	
}
.lop{
	color : #ff0000;
    text-shadow: 2px 2px 8px #000000;
	text-align : center;
	font-style : italic;
	font-size:300%;
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
<h2 class="coop1">
<?php
session_start();
if(isset($_SESSION['adminusername'])){
echo "Welcome"."  ".$_SESSION['adminusername'];
}
else{
		echo "<script> location.href='adminlogin.php';</script>";
}
?>
</h2>
<h1>Railway Reservation</h1>
<h1 class="lop">Experience our service :)</h1>
</body>
</html>
