<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
$select='select * from markstable where rollnumber_stud="'.$_SESSION['rollno'].'"';
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
<div class="header">
<img src="logo.png" />
<div class=logimg>       
<a href="logout.php"><img src="logout.png" alt="" ></a>  
</div>
</div>
<h3 style="text-align:center;color:#F33;">Roll Number: <?php echo $_SESSION['rollno'];?></h5>
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
<td style="background-color: #c6d8ff;"><?php 
$query_run = mysql_query($select);
$total= 0;
while ($num = mysql_fetch_assoc ($query_run)) {

    $total += $num['subject_marks'];

}
echo $total;?></td>
<?php $per=($total/600)*100;?>
<td style="background-color:#F63;"><?php echo $per;?>%</td>
</tr>
<tr>
<td colspan="5" style="background-color:#399;"><?php 

if($total>480){
	echo "FCD";
}
else if($total>340){
	echo "First Class";
}
else {
	echo "Second Class";
}

?></td>
</tr>
</table>
 
</body>
