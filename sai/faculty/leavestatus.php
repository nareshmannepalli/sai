<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if($db){
 "connected";
}
else{
 " not connected";
}
 $select='select * from leavetbl where empid="'.$_SESSION['id'].'"';
$query=mysql_query($select);
?>
<!doctype html>
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
	border:1px solid black;
	color:	#536878;
	text-align:center;
}
th{
border:1px solid black;
}
table{
	border:1px solid black;
	background:#96C8A2;
	width:100%;
	height:100%;
}
</style>
<body>
<table>
	<tr>
<th>S.No</th>
<th>Leave From Date</th>
<th>Leave To Date</th>
<th>Leave Apply Date</th>
<th>No Of Days</th>
<th>Type Of Leave</th>
<th>Prefix Date</th>
<th>Sufix Date</th>
<th>Reason</th>
<th>Status</th>
</tr>

<?php
$a=1;
while($fetch=mysql_fetch_array($query)){
?>

<tr>
<td style="text-align:center"><?php echo $a++;?></td>

<td><?php echo $fetch['leave_from_date'];?></td>
<td><?php echo $fetch['leave_to_date'];?></td>
<td><?php echo $fetch['leave_apply_date'];?></td>
<td><?php echo $fetch['no_of_days'];?></td>
<td><?php echo $fetch['type_of_leave'];?></td>
<td><?php echo $fetch['prefix_date'];?></td>
<td><?php echo $fetch['suffix_date'];?></td>
<td><?php echo $fetch['reason'];?></td>
<td><?php echo $fetch['status'];?></td>
</tr>

<?php
}
?>
</table>
</body>
</html>
