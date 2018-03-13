<?php
	session_start();
	if(isset($_POST['log_user'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$con = mysqli_connect('localhost', 'root', '','railway');
	mysqli_select_db($con,'railway');

	$result = mysqli_query($con,"SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'");

	if(mysqli_num_rows($result)){
		$res = mysqli_fetch_array($result,MYSQLI_BOTH);
		$_SESSION['adminuserid']=$res[0];
		$_SESSION['adminusername'] = $res[1];
		echo "<script> location.href='adminhome.php'; </script>";
		exit;
	}

	else{
		
		echo "No user found.";
		
	}
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
	margin-right : 420px;
	margin-top : 150px;
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
  <li><a href="mainhome.php">Home</a></li>
  <li><a href="search_trains.html">Search Trains</a></li>
    <li><a href="register.php">Register</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Login</a>
    <div class="dropdown-content">
      <a href="login.php">Login as User</a>
      <a href="adminlogin.php">Login as Admin</a>
    </div>
  </li>
  <!--<li><a href="logout.php">Logout</a></li>-->
</ul>

	<form method="post" action="adminlogin.php">
	<div class="ab" align="center">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="log_user">Login</button>
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
 