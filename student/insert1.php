<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
	$a=0;
	$select="select * from studentdetails";
	$query=mysql_query($select);
	while($fetch=mysql_fetch_array($query)){ 
	if($fetch['emailid']==$_POST['emailid']){
		$a++;
	}
	}
	if($a==1){
		echo "Email Id is already exist";
		header("refresh:2;url:form.php");
	}
	else{
		if($_POST['password']!=$_POST['conformpassword']){
			echo "Password and conform password not matching";
				header("refresh:2;url:form.php");
		}
		else{
		$file_name = $_FILES['stud_photo']['name'];	
	$file_tmp =$_FILES['stud_photo']['tmp_name'];
        move_uploaded_file($file_tmp,"C:/xampp/htdocs/studentcorner/student/images/".$file_name);
		
 $insert='insert into `studentdetails`(stud_name,rollno,current_sem,sec_id,section,stud_father_name,Address,gender,dept_id,course_id,emailid,password,conformpassword,parent_phone,stud_phone,dob,doj,stud_photo,status,regulation) values("'.$_POST['stud_name'].'",
"'.$_POST['rollno'].'",
"'.$_POST['current_sem'].'",
"'.$_POST['sec_id'].'",
"'.$_POST['section'].'",
"'.$_POST['stud_father_name'].'",
"'.$_POST['Address'].'",
"'.$_POST['sex'].'",
"'.$_POST['dept_id'].'",
"'.$_POST['course_id'].'",
"'.$_POST['emailid'].'",
"'.$_POST['password'].'",
"'.$_POST['conformpassword'].'",
"'.$_POST['parent_phone'].'",
"'.$_POST['stud_phone'].'",
"'.$_POST['dob'].'",
"'.$_POST['doj'].'",
"'.$_FILES['stud_photo']['name'].'",
"'.$_POST['status'].'",
"'.$_POST['regulation'].'")';
if($query=mysql_query($insert)){
	echo "Success...";
}
else{
	echo "Not Success...";
}
}
	}
	
}
?>