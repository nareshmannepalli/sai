<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
 $select="select subject_mappings.*,faculty.* FROM subject_mappings INNER JOIN faculty ON subject_mappings.faculty_name=faculty.NameoftheFaculty where id='$_SESSION[id]'";
$query=mysql_query($select);
$fetch=mysql_fetch_array($query);
 $selec='select * from studentdetails where current_sem="'.$fetch['sem_faculty'].'"';
$que=mysql_query($selec);
$i=1;
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
<form action="marksinsert.php" name="marksinsert" method="post">
<table>
<tr>
<th>Roll Number</th>
<th>Marks</th>
</tr>
<?php

while($fetchh=mysql_fetch_array($que)){
	
	?>
    <tr>
	<td style="text-align:center;"><?php echo $fetchh['rollno']?></td>
  <input type="hidden" name="rollnumber_stud<?php echo $i;?>" 
  value="<?php echo $fetchh['rollno'];?>">
<input type="hidden" name="faculty_marks" 
value="<?php echo $fetch['faculty_name'];?>">
<input type="hidden" name="subject_name" 
value="<?php echo $fetch['subject_faculty'];?>">
<input type="hidden" name="sem_marks" 
value="<?php echo $fetch['sem_faculty'];?>">
 <td><input type="text" name="subject_marks<?php echo $i;?>"></td>
  
 </tr>
    
    <?php
	$i++;
}
?>
<tr>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>
</form>
</table>
</div>
<?php
$select="select * from markstable";
$query=mysql_query($select);
$a=1;
?>
<div class="for1">
  <table> 
   <th>Sl.No</th> 
 <th>Roll Number</th>
 <th>Faculty</th>
 <th>Sem</th>
 <th>Subject</th>  
 
 <th>Marks</th>
  <th></th>
 <?php
while($fetch=mysql_fetch_array($query)){
?>
                          
 <tr>
 
<td><?php echo $a++;?></td>
<td><?php echo $fetch['rollnumber_stud']?></td>
<td><?php echo $fetch['faculty_marks']?></td>
<td><?php echo $fetch['sem_marks']?></td>
<td><?php echo $fetch['subject_name']?></td>
<td><?php echo $fetch['subject_marks']?></td>
<td><a href="marksedit.php?id=<?php echo $fetch['marks_id'];?>&roll_num=<?php echo $fetch['rollnumber_stud'];?>">Edit</a></td>

								  <?php
}
								 ?>
								 </tr>
                                 </table>
                                 </div>
                   
</body>
</html>