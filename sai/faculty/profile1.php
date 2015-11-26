<?php
session_start();
if(empty($_SESSION['id'])){
	header("Location:index.php");
	
}
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
	$sql='select * from faculty  where  id="'.$_SESSION['id'].'"';
	$query=mysql_query($sql);
	$fetch=mysql_fetch_array($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
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
.profileimg img{
	height:100px;
	widows:100px;
	float:left;
	border-color:2px solid #000000;
}

.details{
  background:rgba(153, 102, 51, 0.13);
  height:900px;
  width:664px;

  float:right;
  margin-right:200px;
  padding:20px;

  font-size:20px;
}
td{
	padding:10px;
	padding-right:110px;
	border:1px solid black;
}
h3{
	margin-left:20px;
    margin-top: 40px;
	float:left;
}
.edit{
float: right;
    margin-top: 40px;
    margin-right: 100px;
	font-size:18px;
}
table{
	width:100%;
	border:1px solid green;
}
</style>
</head>

<body>
<div class="header">
<img src="logo.png" />
<div class=logimg>       
<a href="logout1.php"><img src="logout.png" alt="" ></a>  
</div>
</div>

<div class="details">
<div class="profileimg"><a href="file.php"><img src="images/<?php echo $fetch['profile_photo'];?>" /></a></div>
<h3><?php echo $fetch['NameoftheFaculty'];?></h3>
<div class="edit">
<h6><a href="edit1.php" style="text-decoration:none;background:#00CCCC;color:red;font-size:18px;">Edit</a></h6>
</div>
<table>

<tr>
<td>Father Name</td>

<td><?php echo $fetch['Father_Name'];?></td>
</tr>
<tr>
<td>Date of Birth</td>
<td><?php echo $fetch['Date_of_Birth'];?></td>
</tr>
<tr>
<td>Phone Number</td>
<td><?php echo $fetch['phonenumber'];?></td>
</tr>
<tr>
<td>Email ID</td>
<td><?php echo $fetch['Email_id'];?></td>
</tr>
<tr>
<td>User Name</td>
<td><?php echo $fetch['username'];?></td>
</tr>
<tr>
<td>Password</td>
<td><?php echo $fetch['Password'];?></td>
</tr>
<tr>
<td>Gender</td>
<td><?php echo $fetch['Gender'];?></td>
</tr>
<tr>
<td>Deportment</td>
<td><?php echo $fetch['Department'];?></td>
</tr>
<tr>
<td>Designation</td>
<td><?php echo $fetch['Designation'];?></td>
</tr>
<tr>
<td>Highest Qualification</td>
<td><?php echo $fetch['Highest_Qualification'];?></td>
</tr>
<tr>
<td>Date of Joining</td>
<td><?php echo $fetch['Date_of_Joining'];?></td>
</tr>
<tr>
<td>Pay Scale</td>
<td><?php echo $fetch['Pay_Scale'];?></td>
</tr>
<tr>
<td>Experience</td>
<td><?php echo $fetch['experience'];?></td>
</tr>
<tr>
<td>Address</td>
<td><?php echo $fetch['Address'];?></td>
</tr>
</div>
</div>
</div>
</body>
</html>