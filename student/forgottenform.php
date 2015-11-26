<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
.for{
margin-left:450px;
margin-top:150px;
}
h6{
		text-align:center;
		color:#CCFFCC;
		font-size:24px;
		margin:0px;
		Background:black;
		
	}
</style>
</head>

<body>
<div class="header">
<img src="logo.png" />

</div>
<h6>New Password</h6>
<div class=for>
<form name="studentcorner" action="forgottenpassword.php" method="post" enctype="multipart/form-data" >
<tr>
<td>Email ID:</td>
<td><input type="text" name="emailid" placeholder="Example@gmail.com" required="required"/></td>
</tr>
<tr>
<td>Student Phone Number:</td>
<td><input type="text" name="stud_phone" placeholder="+91" required="required"/></td>
<input type="submit" name="submit" value="Submit" style="
background:#CCFF99;margin-left:250px;
border-radius:25px;"/>
</div>
</body>
</html>