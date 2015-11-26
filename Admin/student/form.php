<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
		height:25px;
		color:#C66;
	}
	.form{
		margin: 0px auto;
		width:600px;
		margin-left:500px;
		
		
	}
	table{
		margin-left:60px;
		padding:30px;
	}
	h6{
		text-align:center;
		color:#CCFFCC;
		font-size:24px;
		margin:0px;
		background:#CCCCCC;
		
	}
	
</style>
</head>
<body>
<h6>Student Sign Up Form</h6>

<div>
<div class="form">
<form name="studentcorner" action="insert1.php" method="post" enctype="multipart/form-data" >
<table>
<tr>
<td>Student Name:</td>
<td><input type="text" name="stud_name"  /></td>
</tr>
<tr>
<td>Student Father Name:</td>
<td><input type="text" name="stud_father_name" required="required"/></td>
</tr>
<tr>
<td>Roll Number:</td>
<td><input type="text" name="rollno" required="required"/></td>
</tr>
<tr>
<td>Sem:</td>
<td>
<select name="current_sem" required="required">
<option value="select">Select</option>
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
<td><input type="text" name="sec_id" required="required"/></td>
</tr>
<tr>
<td>Section:</td>
<td>
<select name="section" required="required">
<option value="select">Select</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
</select></td>
</tr>
<tr>
<td>Address:</td>
<td><textarea name="Address" col="30" row="3" required="required"></textarea></td>
</tr>
<td>Gender:</td>
<td>  <input type="radio" name="sex" value="Male"  required="required" checked> Male

  <input type="radio" name="sex" value="Female" required="required"> Female</td>
</tr>
<tr>
<td>Deportment ID:</td>
<td><input type="text" name="dept_id" required="required"/></td>
</tr>
<tr>
<td>Course ID:</td>
<td><input type="text" name="course_id" required="required"/></td>
</tr>
<tr>
<td>Email ID:</td>
<td><input type="text" name="emailid" placeholder="Example@gmail.com" required="required"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" placeholder="Password" required="required"/></td>
</tr>
<tr>
<td>Conform Password:</td>
<td><input type="password" name="conformpassword" placeholder="Conform Password"required="required"/></td>
</tr>
<td>Parent Phone Number:</td>
<td><input type="text" name="parent_phone" placeholder="+91" required="required"/></td>
</tr>
<tr>
<td>Student Phone Number:</td>
<td><input type="text" name="stud_phone" placeholder="+91" required="required"/></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td><input type="date" name="dob" required="required"/></td>
</tr>
<tr>
<td>Date of Join:</td>
<td><input type="date" name="doj" required="required"/></td>
</tr>
<tr>
<td>Student Photo:</td>
<td><input type="file" name="stud_photo" required="required"/></td>
</tr>
<tr>
<td>Status:</td>
<td><input type="text" name="status" required="required"/></td>
</tr>
<tr>
<td>Regulation:</td>
<td><input type="text" name="regulation" required="required"/></td>
</tr>
</table>
<table>
<input type="submit" name="submit" value="Submit" style="
background:#CCFF99;margin-left:250px;
border-radius:25px;"/>

</table>
</form>
</div>
</div>

</body>
</html>