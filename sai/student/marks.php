<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
$select='select * from markstable where rollnumber_stud="'.$_SESSION['rollno'].'"';
$query=mysql_query($select);
$fetch=mysql_fetch_array($query);
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
<body>
<div class="header">
<img src="logo.png" />
</div>


<h3 style="text-align:center;color:#F33;">Roll Number: <?php echo $fetch['rollnumber_stud'];?></h5>

<div class=for>
<table>
<tr>
<th>S.NO</th>
<th>Sem</th>
<th>Subjects</th>
<th>Marks</th>
<th>Status</th>
</tr>

<?php
$a=1;
while($fetch=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $a++;?></td>

<td><?php echo $fetch['sem_marks'];?></td>
<td><?php echo $fetch['subject_name'];?></td>
<?php $marks=$fetch['subject_marks'];?>
<td><?php echo $marks;?></td>
<td><?php 

	if($marks<35){
		echo "Fail";
}
else {
	echo "Pass";
}
?>
</tr>
<?php
}
?>
<tr>
<td colspan="3" style="background-color: #c6d8ff;">Total</td>
<td><?php 
$query_run = mysql_query($select);

$qty= 0;
while ($num = mysql_fetch_assoc ($query_run)) {

    $qty += $num['subject_marks'];

}
echo $qty;?></td>
<td></td>
</tr>
</table>

</body>
