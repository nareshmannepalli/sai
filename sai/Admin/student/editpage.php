<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
	$sql='select * from studentdetails where  stud_id="'.$_POST['id'].'"';
	$query=mysql_query($sql);
	$fetch=mysql_fetch_array($query);

?>
<!doctype html>
<html>
<head>
<style>
body{
	background:url(plain-brown.jpg)no-repeat;
	background-size:cover;
}
td{
	color:#933;
}
</style>
</head>
<form name="studentcorner" action="update.php" method="post" enctype="multipart/form-data" >
<table>
<tr>
<td>Student Name:</td>
<td><input type="text" name="stud_name" value="<?php echo $fetch['stud_name'];?>" /></td>
</tr>
<tr>
<td>Student Father Name:</td>
<td><input type="text" name="stud_father_name" value="<?php echo $fetch['stud_father_name'];?>"/></td>
</tr>
<tr>
<td>Roll Number:</td>
<td><input type="text" name="rollno" value="<?php echo $fetch['rollno'];?>" /></td>
</tr>
<tr>
<td>Sem:</td>
<td>
<select name="current_sem" >
<option><?php echo $fetch['current_sem'];?></option>
<option value="I">I</option>
<option value="II">II</option>
<option value="III">III</option>
<option value="IV">IV</option>
<option value="V">V</option>
<option value="VI">VI</option>
<option value="VII">VII</option>
<option value="VIII">VIII</option>
</select></td>
</tr>
<tr>
<td>Section ID:</td>
<td><input type="text" name="sec_id" value="<?php echo $fetch['sec_id'];?>"/></td>
</tr>
<tr>
<td>Section:</td>
<td>
<select name="section" value="<?php echo $fetch['section'];?>">
<option><?php echo $fetch['section'];?></option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
</select></td>
</tr>
<tr>
<td>Address:</td>
<td><textarea name="Address" col="30" row="3" ><?php echo $fetch['Address'];?></textarea></td>
</tr>
<td>Gender:</td>
<td>  <input type="radio" name="sex" value="Male" value="<?php echo $fetch['gender'];?>" checked> Male

  <input type="radio" name="sex" value="Female"> Female</td>
</tr>
<tr>
<td>Deportment ID:</td>
<td><input type="text" name="dept_id" value="<?php echo $fetch['dept_id'];?>"/></td>
</tr>
<tr>
<td>Course ID:</td>
<td><input type="text" name="course_id" value="<?php echo $fetch['course_id'];?>"/></td>
</tr>
<tr>
<td>Email ID:</td>
<td><input type="text" name="emailid" placeholder="Example@gmail.com" value="<?php echo $fetch['emailid'];?>"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" placeholder="Password" value="<?php echo $fetch['password'];?>"/></td>
</tr>
<tr>
<td>Conform Password:</td>
<td><input type="password" name="conformpassword" placeholder="Conform Password"value="<?php echo $fetch['conformpassword'];?>"/></td>
</tr>
<td>Parent Phone Number:</td>
<td><input type="text" name="parent_phone" placeholder="+91" value="<?php echo $fetch['parent_phone'];?>"/></td>
</tr>
<tr>
<td>Student Phone Number:</td>
<td><input type="text" name="stud_phone" placeholder="+91" value="<?php echo $fetch['stud_phone'];?>"/></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td><input type="date" name="dob" value="<?php echo $fetch['dob'];?>" /></td>
</tr>
<tr>
<td>Date of Join:</td>
<td><input type="date" name="doj" value="<?php echo $fetch['doj'];?>"/></td>
</tr>
<tr>
</tr>
<tr>
<td>Status:</td>
<td><input type="text" name="status" value="<?php echo $fetch['status'];?>"/></td>
</tr>
<tr>
<td>Regulation:</td>
<td><input type="text" name="regulation" value="<?php echo $fetch['regulation'];?>"/></td>
</tr>
</table>
<table>
<input type="submit" name="update" value="Update" style="
background:#CCFF99;margin-left:250px;
border-radius:25px;"/>

</table>
</form>
</body>
</html>