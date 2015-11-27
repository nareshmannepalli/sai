<?php session_start();
if(!empty($_SESSION['id'])){
	header("Location:leaveform.php");	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
   background:url(plain-brown.jpg);
    background-size:cover;
	margin:0px auto;
}
.tab{
	
	background:rgba(255, 94, 0, 0.09);
	margin-top:0px;
	padding:10px;
	color:#336;
	height:100px;
	
}
.form{
	float:right;
margin-top:30px;
}
.logo{
	float:left;
	width:230px;
	margin-top:30px;
	margin-left:10px;
}
h6{
    margin: 10px;
    margin-left: 65px;
	font-size:14px;
}

</style>
</head>
<body>

<div class="tab">
<div class="logo">
<img src="logo.png" />
</div>
<div class="form">
<form name="studentcorner" action="loginintopage1.php" method="post">
<table>
<tr>
<td>Email Id:</td>
<td><input type="text" name="Email_id"  /></td>
<td>Password:</td>
<td><input type="password" name="password" /></td>
<td><input type="submit" name="submit" value="Submit" style="
background:#CCFF99;
border-radius:25px;"/></td>
</tr>
</div>
</table>
<a href="forgottenform1.php"><h6>Forgotten Password?</h6></a>
</form>
</div>

</div>

</div>
</body>
</html>