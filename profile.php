<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4webtech_studentcorner",$con);
if(isset($_POST["upload"])) 
{
	
  $file_name = $_FILES['stud_photo']['name'];
  
  $file_tmp =$_FILES['stud_photo']['tmp_name'];
        
move_uploaded_file($file_tmp,"D:/xampp/htdocs/student/images/".$file_name);
$sql='update student_details SET 
stud_photo="'.$_FILES['stud_photo']['name'].'" 
where stud_id="'.$_SESSION['stud_id'].'"';

if(mysql_query($sql)){	
	echo "success";
	header("refresh:2;url=detailsstudent.php");
}
else{
	echo "not success";
}

}
   
?>
