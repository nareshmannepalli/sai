<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
$select='select * from studentdetails where stud_id="'.$_SESSION['id'].'"';
$query=mysql_query($select);
$fetch=mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
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
	
	td{
		height:25px;
		color:#C66;
	}
	.form{
		margin: 0px auto;
		width:600px;
		margin-left:400px;
		
		
	}
	table{
		margin-left:60px;
		padding:30px;
	}
	h6{
		text-align:center;
		color:#CCFFCC;
		font-size:24px;
		margin:0px;
		background:#000;
		
	}
.for{
margin-left:400px;
margin-top:120px;
}	
</style>
<div class="header">
<img src="logo.png" />
<div class=logimg>       
<a href="logout.php"><img src="logout.png" alt="" ></a>  
</div>
</div>
<div class="for">
<form name="suggestion" action="suggestioninsert.php" method="post">
<table>
<tr>
<td>Roll Number</td>
<td>
<input type="text" name="rollno" value="<?php echo $fetch['rollno']?>" />
</td>
</tr>
<tr>
<td>Message</td>
<td>
<textarea name="message" col="30" rows="5"></textarea>
</td>
</tr>
<tr>
<td>Date</td>
<td>
<input type="date" name="message_date"  />
</td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name="submit" value="Submit" /> 
</td>
</tr>
</table>
</form>
</div>
</body>
</html>