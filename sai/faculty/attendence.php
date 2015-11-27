<?php 
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
 $select="select subject_mappings.*,faculty.* FROM subject_mappings  INNER JOIN faculty ON subject_mappings.faculty_name=faculty.NameoftheFaculty where id='$_SESSION[id]'";
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
	color:#933;
}
.for{
margin-left:400px;
margin-top:120px;
}
.for2{
margin-left:400px;
margin-top:120px;
}
.for1{
margin-left:250px;
margin-top:120px;
}
.for1 table{
	border-collapse:collapse;
}
.for1 td{
	border:1px solid black;
	padding:10px;
}
.for1 th{
	border:1px solid black;
	padding:10px;
}
</style>
</head>
<div class="header">
<img src="logo.png" />
<div class=logimg>       
<a href="logout1.php"><img src="logout.png" alt="" ></a>  
</div>
</div>

<div class=for> 

<table>

<tr>

<td>Sem:</td>

	
<td><?php echo $fetch['sem_faculty']?></td>

</td>

</tr>

<tr>

<td>Subject:</td>

<td><?php echo $fetch['subject_faculty']?></td>


</tr>
<tr>
<td>Department:</td>
<td><?php echo $fetch['department']?></td>
</td>  
</tr>
</table>
</div>
</form>

<?php
$selec='select * from studentdetails where dept_id="'.$fetch['department'].'" and current_sem="'.$fetch['sem_faculty'].'"';
$queryy=mysql_query($selec);
$i=1;
?>
<div class="for2">
<form name="attendance" action="attendanceinsert.php" method="post">

 <table>
<?php
$a=1;
 while($fetchh=mysql_fetch_array($queryy)){
	 ?>
     
    
     <tr>
	 <td> <?php echo $a++ ;?></td> 
<td><?php echo $fetchh['rollno'];?></td>
<td> <input type="hidden"  name="roll_number<?php echo $i;?>" value="<?php echo $fetchh['rollno'];?>"></td>
<td><input type="checkbox" name="present<?php echo $i;?>[]" value="present" checked>Present</td></td>
<td> <input type="checkbox" name="present<?php echo $i;?>[]" value="absent">Absent</td>
<?php
$i++;
 }

?>
</tr>
<tr>
<td>
<input type="hidden" name="attendance_subject" value="<?php echo $fetch['subject_faculty']?>">
<input type="hidden" name="attendence_department" value="<?php echo $fetch['department']?>">
<input type="hidden" name="attendance_sem" value="<?php echo $fetch['sem_faculty']?>">
<input type="submit" name="submit" value="Submit">
</td>
</tr>
</form>

</table>
</div>
<?php
$select="select * from attendance";
$query=mysql_query($select);
$a=1;
?>
<div class="for1">
  <table> 
   <th>Sl.No</th> 
 <th>Roll Number</th>
 <th>Subject</th>
 <th>Department</th>
 <th>Sem</th>  
 <th>Status</th>
 <th>Date</th>
  <th></th>
 <?php
while($fetch=mysql_fetch_array($query)){
?>
                          
 <tr>
 
<td><?php echo $a++;?></td>
<td><?php echo $fetch['roll_number']?></td>
<td><?php echo $fetch['attendance_subject']?></td>
<td><?php echo $fetch['attendence_department']?></td>
<td><?php echo $fetch['attendance_sem']?></td>
<td><?php echo $fetch['attendance_status']?></td>
<td><?php echo $fetch['attendance_date']?></td>
<td><a href="attendanceedit.php?id=<?php echo $fetch['attendance_id']?>&roll_num=<?php echo $fetch['roll_number']?>">Edit</a></td>
								  <?php
}
								 ?>
								 </tr>
                                 </table>
                                 </div>
                               
                          
</body>
</html>
