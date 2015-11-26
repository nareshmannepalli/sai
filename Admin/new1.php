<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
	$sql='select * from studentdetails  where  stud_id="'.$_POST['id'].'"';
	$query=mysql_query($sql);
	$fetch=mysql_fetch_array($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
	background:url(plain-brown.jpg);
	margin:0px auto;
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
<a href="logout.php"><img src="logout.png" alt="" ></a>  
</div>
</div>

<div class="details">
<div class="profileimg"><a href="file.php"><img src="images/<?php echo $fetch['stud_photo'];?>" /></a></div>
<h3><?php echo $fetch['stud_name'];?></h3>
<div class="edit">
<h6><a href="editpage.php" style="text-decoration:none;background:#00CCCC;color:red;font-size:18px;">Edit</a></h6>
</div>
<table>

<tr>
<td>Father Name</td>

<td><?php echo $fetch['stud_father_name'];?></td>
</tr>
<tr>
<td>Roll Number</td>
<td><?php echo $fetch['rollno'];?></td>
</tr>
<tr>
<td>Sem</td>
<td><?php echo $fetch['current_sem'];?></td>
</tr>
<tr>
<td>Section ID</td>
<td><?php echo $fetch['sec_id'];?></td>
</tr>
<tr>
<td>Section</td>
<td><?php echo $fetch['section'];?></td>
</tr>
<tr>
<td>Address</td>
<td><?php echo $fetch['Address'];?></td>
</tr>
<tr>
<td>Gender</td>
<td><?php echo $fetch['gender'];?></td>
</tr>
<tr>
<td>Deportment ID</td>
<td><?php echo $fetch['dept_id'];?></td>
</tr>
<tr>
<td>Course ID</td>
<td><?php echo $fetch['course_id'];?></td>
</tr>
<tr>
<td>Email ID</td>
<td><?php echo $fetch['emailid'];?></td>
</tr>
<tr>
<td>Parent Phone Number</td>
<td><?php echo $fetch['parent_phone'];?></td>
</tr>
<tr>
<td>Phone Number</td>
<td><?php echo $fetch['stud_phone'];?></td>
</tr>
<tr>
<td>Date of Birth</td>
<td><?php echo $fetch['dob'];?></td>
</tr>
<tr>
<td>Date of Join</td>
<td><?php echo $fetch['doj'];?></td>
</tr>
<tr>
<td>Status</td>
<td><?php echo $fetch['status'];?></td>
</tr>
<tr>
<td>Regulation</td>
<td><?php echo $fetch['regulation'];?></td>
</tr>
</div>
</div>
</div>
</body>
</html>