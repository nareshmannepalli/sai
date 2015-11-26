<?php
session_start();
if(empty($_SESSION['id'])){
header("location=index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leave Form</title>
<style>
body{
background:url(worldmap3.png);
	background-size:cover;
	margin:0px;
}
.header{
background:rgba(191, 64, 26, 0.31);
	margin-top:0px;
	padding:10px;
	color:#336;
	height:40px;
}
.logimg{
	float:right;
}
.home{
float:left;
margin-left:400px;
font-size:24px;
}
.home h6{
background:#FF9966;
height:20px;
padding:10px;
}
.faculty{
	float:left;
	margin-left:20px;
	font-size:24px;
	}
	.faculty h6{
background:#FF9966;
height:20px;
padding:10px;
}
.leave{
 float:left;
margin-left:20px;
font-size:24px;
}
.leave ul{
	list-style-type:none;
	margin:0px;
	padding:0px;
}
.leave h6{
background:#FF9966;
height:20px;
padding:10px;
}
.logout{
 float:left;
margin-left:20px;
font-size:24px;
}
.logout h6{
background:#FF9966;
height:20px;
padding:10px;
}
</style>
</head>

<body>
<script>
function list(){
document.getElementById("demo").style.display="block";
document.getElementById("demo1").style.display="block";
}
function list1(){
document.getElementById("demo").style.display="none";
document.getElementById("demo1").style.display="none";
}
</script>
<div class="header">
<img src="logo.png" />
<div class=logimg>       
<a href="logout1.php"><img src="logout.png" alt="" ></a>  
</div>
</div>
<div class="home">
<a href="#"><h6>Home</h6></a>
</div>
<div class="faculty">
<h6><a href="profile1.php">Faculty Info</a></h6>
</div>
<div class="leave">
<ul>
<li onmouseover="list()" onmouseout="list1()" id="leave"><a href="#">LEAVE</a></li>
<li id="demo" onmouseover="list()" onmouseout="list1()"><a href="leavetable.php">Leave Apply</a></li>
<li id="demo1" onmouseover="list()" onmouseout="list1()" ><a href="leavestatus.php">Leave Status</a></li>
</ul>
</div>
<div class="logout">
<a href="uploadsfromadmin.php"><h6>Uploads</h6></a>
</div>
<div class="logout">
<a href="attendence.php"><h6>Attendance</h6></a>
</div>
<div class="logout">
<a href="marks.php"><h6>Marks</h6></a>
</div>
<div class="logout">
<a href="logout1.php"><h6>Logout</h6></a>
</div>
</body>
</html>