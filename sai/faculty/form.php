<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
</head>
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
		margin-left:400px;
		
		
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
		background:#000000;
		
	}
#letters{
color:#F03;
margin-left:20px;
}
</style>
<body>
<script>
function facultyname(inputtxt,minlength){
var x=document.forms["faculty"]["NameoftheFaculty"].value;
var length=4;
var field=inputtxt.value;
var l=/^[A-Za-z]+$/;
if(x==null||x==""){
var x=document.getElementById("letters").innerHTML="Must be fill";
return false;
}
else if(field.length<length){
var x=document.getElementById("letters").innerHTML="Minimum letters is 4";
}
else if(inputtxt.value.match(l)){
return true;
}
else {
	var x=document.getElementById("letters").innerHTML="Must contains Letters";
return false;
}
}
</script>
<script>
function facultyfathername(inputtxt,minlength){
var x=document.forms["faculty"]["Father_Name"].value;
var length=4;
var l=/^[A-Za-z]+$/;
if(x==null||x==""){
var x=document.getElementById("letter").innerHTML="Must be fill";
return false;
}
else{
if(inputtxt.value.match(l)){
return true;
}
else {
	var x=document.getElementById("letter").innerHTML="Must contains Letters";
return false;
}
}
}
</script>
<script>
function facultynumber(inputtxt,minlength){
var x=document.forms["faculty"]["phonenumber"].value;
var length=10;
var field=inputtxt.value;
var num=/^[0-9]+$/;
if(x==null||x==""){
var x=document.getElementById("letter").innerHTML="Must be fill";
return false;
}
else if(!field.match(num)){
	var x=document.getElementById("number").innerHTML="Must contains Numbers Only";
    return false;
}
else if(field.length<length){
 var x=document.getElementById("number").innerHTML="Must contains minimum 10 Numbers";
}
}
</script>
<div class="header">
<img src="logo.png" />
</div>
<h6>Faculty Sign Up Form</h6>
<div>
<div class="form">
<form name="faculty" action="insert.php" method="post" enctype="multipart/form-data" >
<table>
<tr>
<td>Name of the Faculty :</td>
<td><input type="text" name="NameoftheFaculty" /></td>
</tr>
<tr>
<td></td>
<td id="letters"></td>
</tr>
<tr>
<td>Father Name:</td>
<td><input type="text" name="Father_Name" required="required"
onclick="facultyfathername(document.faculty.NameoftheFaculty)"/></td>
</tr>
<tr>
<td></td>
<td id="letter"></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td><input type="date" name="Date_of_Birth" required="required" onclick="facultyname(document.faculty.Father_Name)"/></td>
</tr>
<tr>
<td>Phone Number:</td>
<td>
<input type="number" name="phonenumber" required="required">
</td>
</tr>
<tr>
<td></td>
<td id="number"></td>
</tr>
<tr>
<td>Email ID:</td>
<td><input type="text" name="Email_id" placeholder="Email@gmail.com"required="required" onclick="facultynumber(document.faculty.phonenumber)"/></td>
</tr>
<tr>
<td>User Name:</td>
<td>
<input type="text" name="username" required="required">
</td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="Password"  required="required"></td>
</tr>
<td>Gender:</td>
<td>  <input type="radio" name="Gender" value="Male"  required="required" checked> Male

  <input type="radio" name="Gender" value="Female" required="required"> Female</td>
</tr>
<tr>
<td>Deportment:</td>
<td><select name="Department" required="required">
<option value="select">Select</option>
<option value="Mech">Mech</option>
<option value="CSE">CSE</option>
<option value="IS">IS</option>
<option value="ECE">ECE</option>
<option value="Civil">Civil</option>
<option value="EEE">EEE</option>
<option value="MCA">MCA</option>
<option value="MBA">MBA</option>
</select>
</td>
</tr>
<tr>
<td>Designation:</td>
<td><select name="Designation" required="required"/>
<option value="select">Select</option>
<option value="Associate professor">Associate professor</option>
<option value="Assistant professor">Assistant Professor</option>
<option value="Professor">Professor</option>
<option value="HOD">HOD</option>
</select></td>
</tr>
<tr>
<td>Highest Qualification:</td>
<td><input type="text" name="Highest_Qualification" required="required"/></td>
</tr>
<tr>
<td>Date of Joining:</td>
<td><input type="date" name="Date_of_Joining" required="required"/></td>
</tr>
<td>Pay Sale:</td>
<td><input type="text" name="Pay_Scale"  required="required"/></td>
</tr>
<tr>
<td>Experience:</td>
<td><input type="text" name="experience" required="required"/></td>
</tr>
<tr>
<td>Address:</td>
<td><textarea type="text" name="Address" col="10" rows="3"required="required"/></textarea></td>
</tr>
<tr>
<td>Profile Photo</td>
<td><input type="file" name="profile_photo" /></td>
</tr>
</table>
<table>
<input type="submit" name="submit" value="Submit" style="
background:#CCFF99;margin-left:250px;
border-radius:25px;"/>
</body>
</html>