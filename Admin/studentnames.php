<doctype html>
<html>
<head>
<style>
body{
	margin:0px;
}
.main{
	background:#FBCEB1;
	height:60px;
}
td{
	color:	#536878;
	text-align:center;
}
table{
	background:#96C8A2;
	width:100%;
	height:100%;
}
#b{
	background:#8F9779;
	border-radius:5px;
	width:60px;
}
a:hover{
	color:#AF6E4D;
}

</style>
</head>
<body>
<div class="main">

</div>
<div>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
	$select="select * from studentdetails";
	$query=mysql_query($select);
	?>
	<table>
	<tr>
<th>S.No</th>
<th>Name</th>
</tr>
<?php
$a=1;
while($fetch=mysql_fetch_array($query)){
?>
<tr>
<td style="text-align:center"><?php echo $a++;?></td>
<td style="text-align:center"><?php echo $fetch['stud_name'];?></td>
<td id="b">
<form name="" action="student/profile.php" method="post">
<input type="hidden" name="id" value="<?php echo $fetch['stud_id']?>">
<input type="submit" name="submit" value="View"></form></td>

<td id="b">
<form name="" action="student/editpage.php" method="post">
<input type="hidden" name="id" value="<?php echo $fetch["stud_id"]?>">
<input type="submit" name="submit" value="Edit">
</form></td>
<td id="b">
<form name="" action="student/delete.php" method="post">
<input type="hidden" name="id" value="<?php echo $fetch["stud_id"]?>">
<input type="submit" name="delete" value="Delete">
</form></td>
</tr>

<?php
}
?>
</table>
</div>
</body>
</html>
