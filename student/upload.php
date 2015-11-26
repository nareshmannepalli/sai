<?php 
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['upload'])){

print_r($_FILES);
 $file_name = $_FILES['stud_photo']['name'];
  if(empty($errors)==true){
	  $file_tmp =$_FILES['stud_photo']['tmp_name'];
        move_uploaded_file($file_tmp,"../student/images/".$file_name);
		
         echo "Success";
      }
      else{
         print_r($errors);
      }
$sql='update studentdetails SET 
stud_photo="'.$_FILES['stud_photo']['name'].'" 
where stud_id="'.$_SESSION['id'].'"';

if(mysql_query($sql)){	
	echo "success";
	header("refresh:2;url=profile.php");
}
else{
	echo "not success";
}

}

?>