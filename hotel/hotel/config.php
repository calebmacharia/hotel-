<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>  
		</label>
		<label class="logo">BMWXdrive.</label>
<ul>
	<li><a class="active" href="#">Home</a></li>
	<li><a href="#">bookings</a></li>
	<li><a href="#">feedback</a></li>
	
</ul>
</nav>@font-face{
	font-family: 'wasted-font';
	src: url(wasted-font.zip);
}

*{
	padding:0;
	margin:0;
	text-decoration: none;
	list-style:none;
	box-sizing:border-box;
}
body{
	font-family: 'wasted-font';
	background-color: black;
}
nav{
	position: fixed;
	background:#000033;
	height:3cm;
	width:100%;
	margin-bottom: 6cm;	
}

.logo{
	color:white;
	font-size:35px;
	line-height:80px; 
	padding:100px;
	font-weight:bold;
}
nav ul{
	float:right;
	margin-right:20px;
}
nav ul li{
	display:inline-block;
	line-height:80px;
	margin:5px;
}
nav ul li a{
	color:white;
	font-size:17px;
	padding:7px 13px;
	border-radius:3px;
	text-transform:uppercase;
	font-family: 'Righteous', cursive;

}
a.active,a:hover{
	background:#FF00CC;
	transition:.10s ease; 
}
.checkbtn{
	font-size:30px;
	color:white;
	float:right;
	line-height:80px;
	margin-right:40px;
	cursor:pointer;
	display:none;
}
#check{
	display:none;
}
@media(max-width:925px){
	label.logo{
font-size:30px;
padding-left:50px;}
nav ul li a{
	font-size: 16px;
	font-family: 'Righteous', cursive;

}
}
@media(max-width:858px)
{
  .checkbtn{display:block;}
  ul{
    position:fixed;
    width:100%;
    height:100vh;
    background:000033;
    top:80px;
    left:0%;
    text-align:center;
    transition:all .5s;
  }
  nav ul li{
    display:block;
    margin:50px 0;
    line-height:30px;
  }
   nav ul li a{
    font-size:20px;
   }
   a:hover,a.active{
    background: nond;
    color:#0082e6;
   }
   #check:checked ~ ul{
    left:0;
   }
}
