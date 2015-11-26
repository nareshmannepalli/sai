<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
	$file_name = $_FILES['profile_photo']['name'];	
	$file_tmp =$_FILES['profile_photo']['tmp_name'];
        move_uploaded_file($file_tmp,"../faculty/images/".$file_name);		
echo $insert='insert into faculty(NameoftheFaculty,Father_Name,Date_of_Birth,phonenumber,Email_id,username,Password,Gender,Department,Designation,Highest_Qualification,Date_of_Joining,Pay_Scale,experience,Address,profile_photo)
 values("'.$_POST['NameoftheFaculty'].'",
"'.$_POST['Father_Name'].'",
"'.$_POST['Date_of_Birth'].'",
"'.$_POST['phonenumber'].'",
"'.$_POST['Email_id'].'",
"'.$_POST['username'].'",
"'.$_POST['Password'].'", 
"'.$_POST['Gender'].'",
"'.$_POST['Department'].'",
"'.$_POST['Designation'].'",
"'.$_POST['Highest_Qualification'].'",
"'.$_POST['Date_of_Joining'].'",
"'.$_POST['Pay_Scale'].'",
"'.$_POST['experience'].'",
"'.$_POST['Address'].'",
"'.$_FILES['profile_photo']['name'].'")';
if($query=mysql_query($insert)){
	echo "Success...";
}
else{
	echo "Not Success...";
}
}
	
	
?>