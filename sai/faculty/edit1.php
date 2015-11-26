<?php
session_start();
if(empty($_SESSION['id'])){
	header("Location:index.php");
	
}
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
	$sql='select * from faculty where  id="'.$_SESSION['id'].'"';
	$query=mysql_query($sql);
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
</style>
</head>
<div class="header">
<img src="logo.png" />
<div class=logimg>       
<a href="logout1.php"><img src="logout.png" alt="" ></a>  
</div>
</div>
<div class=for> 
<form name="faculty" action="update1.php" method="post" enctype="multipart/form-data" >
<table>
<tr>
<td>Name of the Faculty:</td>
<td><input type="text" name="NameoftheFaculty" value="<?php echo $fetch['NameoftheFaculty'];?>" /></td>
</tr>
<tr>
<td>Father Name:</td>
<td><input type="text" name="Father_Name" value="<?php echo $fetch['Father_Name'];?>"/></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td><input type="date" name="Date_of_Birth" value="<?php echo $fetch['Date_of_Birth'];?>" /></td>
</tr>
<tr>
<td>Phone Number:</td>
<td>
<input type="number" name="phonenumber" value="<?php echo $fetch['phonenumber'];?>">
</td>
</tr>
<tr>
<td>Email Id:</td>
<td><input type="text" name="Email_id" value="<?php echo $fetch['Email_id'];?>"/></td>
</tr>
<tr>
<td>Username:</td>
<td>
<input type="text" name="username" value="<?php echo $fetch['username'];?>">
</td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="Password"  value="<?php echo $fetch['Password'];?>"></td>
</tr>
<td>Gender:</td>
<td>  <input type="radio" name="Gender" value="Male" value="<?php echo $fetch['Gender'];?>" checked> Male

  <input type="radio" name="Gender" value="Female"> Female</td>
</tr>
<tr>
<td>Deportment:</td>
<td><select name="Department">
<option><?php echo $fetch['Department'];?></option>
<option value="Mech">Mech</option>
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
<td><select name="Designation" />
<option><?php echo $fetch['Designation'];?></option>
<option value="Associate professor">Associate professor</option>
<option value="Assistant professor">Assistant Professor</option>
<option value="Professor">Professor</option>
<option value="HOD">HOD</option>
</select></td>
</tr>
<tr>
<td>Highest Qualification:</td>
<td><input type="text" name="Highest_Qualification"  value="<?php echo $fetch['Highest_Qualification'];?>"/></td>
</tr>
<tr>
<td>Date of Joining:</td>
<td><input type="date" name="Date_of_Joining" placeholder="Password" value="<?php echo $fetch['Date_of_Joining'];?>"/></td>
</tr>
<tr>
<td>Pay Scale:</td>
<td><input type="text" name="Pay_Scale" value="<?php echo $fetch['Pay_Scale'];?>"/></td>
</tr>
<td>Experience:</td>
<td><input type="text" name="experience"  value="<?php echo $fetch['experience'];?>"/></td>
</tr>
<tr>
<td>Address:</td>
<td><textarea name="Address" col="30" rows="4" /><?php echo $fetch['Address'];?></textarea></td>
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