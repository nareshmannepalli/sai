<?php 
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);

$select='select * from uploads where category=1';

$query=mysql_query($select);
?>
<!doctype html>
<html>
<head>
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
	border:1px solid black;
	color:	#536878;
	text-align:center;
}
th{
border:1px solid black;
}
table{
	border:1px solid black;

	width:100%;
	height:100%;
}
.for{

margin-top:160px;
}
</style>
</head>
<div class="header">
<img src="logo.png" />
<div class=logimg>       
<a href="logout.php"><img src="logout.png" alt="" ></a>  
</div>
</div>
<div class=for>
<table>
	<tr>
<th>S.No</th>
<th>Title</th>
<th>Date</th>
</tr>
<?php
$a=1;
while($fetch=mysql_fetch_array($query)){

?>
<tr>
<td><?php echo $a++?></td>
<td><a href="../admin/files/<?php echo $fetch['attachment']?>"><?php echo $fetch['title'];?></a></td>
<td><?php echo $fetch['date'];?></td>
</tr>
<?php
}
?>

</table>
</div>
</body>

</html>