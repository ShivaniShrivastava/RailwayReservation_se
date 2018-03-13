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
	color : #fffefe;
    text-shadow: 10px 10px 14px #000000;
	text-align : center;
	font-style : italic;
	font-size : 450%;
}
p{
	color : #d0cfcf;
	font-style:italic;
	font-style:bold;
	align:center;
	margin-left:20px;
	margin-right:20px;
    text-shadow: 0 0 3px #000000, 0 0 5px #ff0000;

}
.pol{
	color:red;
	align:center;
}
.para{
	margin-left:300px;
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
<h1>Railway Reservation</h1>
<p>India has some of the most spectacular and unforgettable rail journeys in the world. Here you 
experience a simple way to find out everything you need to know in one easy place.
There's no better way to enjoy India's outback, cities, coastal towns and regional areas in comfort.
The first railway on Indian sub-continent ran over a stretch of 21 miles from Bombay to Thane. The idea of a railway to connect Bombay with Thane, Kalyan and with the Thal and Bhore Ghats inclines first occurred to Mr. George Clark, the Chief Engineer of the Bombay Government, during a visit to Bhandup in 1843.
The formal inauguration ceremony was performed on 16th April 1853, when 14 railway carriages carrying about 400 guests left Bori Bunder at 3.30 pm "amidst the loud applause of a vast multitude and to the salute of 21 guns." The first passenger train steamed out of Howrah station destined for Hooghly, a distance of 24 miles, on 15th August, 1854. Thus the first section of the East Indian Railway was opened to public traffic, inaugurating the beginning of railway transport on the Eastern side of the subcontinent.
In south the first line was opened on Ist July, 1856 by the Madras Railway Company. It ran between Vyasarpadi Jeeva Nilayam (Veyasarpandy) and Walajah Road (Arcot), a distance of 63 miles. In the North a length of 119 miles of line was laid from Allahabad to Kanpur on 3rd March 1859. The first section from Hathras Road to Mathura Cantonment was opened to traffic on 19th October, 1875.
These were the small’s beginnings which is due course developed into a network of railway lines all over the country. By 1880 the Indian Railway system had a route mileage of about 9000 miles. INDIAN RAILWAYS, the premier transport organization of the country is the largest rail network in Asia and the world’s second largest under one management.</p>
<footer>
  <p class="para">Owned by: Indian Railways &nbsp &nbsp Contact information: <a class="pol" href="mailto:indian_gov@gmail.com">indian_gov@gmail.com</a>.</p>
</footer>
</body>
</html>
