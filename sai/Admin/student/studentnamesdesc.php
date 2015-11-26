<doctype html>
<html>
<head>
<style>
body{
	background:#CD9575;
}
td{
	color:	#536878;
	text-align:center;
}
table{
	background:#96C8A2;
	width:600px;
}
#b{
	background:#8F9779;
	border-radius:5px;
}
a:hover{
	color:#AF6E4D;
}

</style>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
	$select="select * from studentdetails ORDER BY stud_id ASC";
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
<td id="b"><a href="new1.php" style="text-decoration:none";>View</a></td>
<td id="b"><a href="#" style="text-decoration:none";>Edit</a></td>
</tr>

<?php
}
?>
</table>
</body>
</html>

