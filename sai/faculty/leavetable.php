<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
$select='select * from faculty where id="'.$_SESSION['id'].'"';
$query=mysql_query($select);
$fetch=mysql_fetch_array($query);
?>
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
</head>

<body>
<div class="header">
<img src="logo.png" />
</div>
<div class=for>
<form name="leavetable" action="leaveforminsert.php" method="post">
<table>
<tr>
<td>Employee ID:</td>
<td>
<input type="text" name="empid" value="<?php echo $fetch['id'] ?>"/>
</td>
</tr>
<tr>
<td>Deportment:</td>
<td>
<input type="text" name="dept" value="<?php echo $fetch['Department'] ?>"/>
</td>
</tr>
<tr>
<td>Leave From Date:</td>
<td>
<input type="date" name="leave_from_date" />
</td>
</tr>
<tr>
<td>Leave To Date:</td>
<td>
<input type="date" name="leave_to_date" />
</td>
</tr>
<tr>
<td>Leave Apply Date:</td>
<td>
<input type="date" name="leave_apply_date" />
</td>
</tr>
<tr>
<td>No Of Days:</td>
<td>
<input type="text" name="no_of_days" />
</td>
</tr>
<tr>
<td>Type Of Leave:</td>
<td>
<input type="text" name="type_of_leave" />
</td>
</tr>
<tr>
<td>Prefix Date:</td>
<td>
<input type="text" name="prefix_date" />
</td>
</tr>
<tr>
<td>Suffix Date:</td>
<td>
<input type="text" name="suffix_date" />
</td>
</tr>
<tr>
<td>Reason:</td>
<td>
<textarea name="reason" col="30" row="3" ></textarea>
</td>
</tr>
<tr>
<td><input type="submit"  name="submit" value="Submit" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>