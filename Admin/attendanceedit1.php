<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
	$sql='select * from faculty where  id="'.$_SESSION['id'].'"';
	$query=mysql_query($sql);
	$fetch=mysql_fetch_array($query);
	?>
    <!doctype html>
    <html>
    <form name="faculty" action="update1.php" method="post" enctype="multipart/form-data" >
<table>
<tr>
<td>Name of the Faculty:</td>
<td><input type="text" name="roll_number" value="<?php echo $fetch['	roll_number'];?>" /></td>
</tr>
<tr>
<td>Father Name:</td>
<td><input type="text" name="attendance_subject" value="<?php echo $fetch['attendance_subject'];?>"/></td>
</tr>

<tr>
<td>Deportment:</td>
<td><select name="attendence_department">
<option><?php echo $fetch['attendence_department'];?></option>
<option value="Mechanical">Mechanical</option>
<option value="CSE">CSE</option>
<option value="IS">IS</option>
<option value="ECE">ECE</option>
<option value="Civil">Civil</option>
<option value="EEE">EEE</option>
<option value="MCA">MCA</option>
<option value="MBA">MBA</option>
</select></td>
</tr>
<tr>
<td>Designation:</td>
<td><select name="attendance_sem" />
<option><?php echo $fetch['attendance_sem'];?></option>
<option value="I">I</option>
<option value="II">II</option>
<option value="III">III</option>
<option value="IV">IV</option>
<option value="I">V</option>
<option value="II">VI</option>
<option value="III">VII</option>
<option value="IV">VIII</option>
</select></td>
</tr>
<tr>
<td>Highest Qualification:</td>
<td><input type="text" name="attendance_status"  value="<?php echo $fetch['attendance_status'];?>"/></td>
</tr>
<tr>
<td>Date of Joining:</td>
<td><input type="date" name="attendance_date" placeholder="Password" value="<?php echo $fetch['attendance_date'];?>"/></td>
</tr>
</table>
<table>
<input type="submit" name="update" value="Update" style="
background:#CCFF99;margin-left:250px;
border-radius:25px;"/>

</table>
</form>
</div>
</body>
</html>
