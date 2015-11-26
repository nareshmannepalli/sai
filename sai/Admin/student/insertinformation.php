<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
 echo $insert='insert into `studentdetails`
(stud_name,stud_father_name,current_sem,sec_id,section,Address,sex,dept_id,course_id,emailid,parent_phone,stud_phone,dob,doj,stud_photo,status,regulation)
values("'.$_POST['stud_name'].'","'.$_POST['stud_father_name'].'",
"'.$_POST['current_sem'].'",
"'.$_POST['sec_id'].'",
"'.$_POST['section'].'",
"'.$_POST['Address'].'",
"'.$_POST['sex'].'",
"'.$_POST['dept_id'].'",
"'.$_POST['course_id'].'",
"'.$_POST['dept_id'].'",
"'.$_POST['emailid'].'",
"'.$_POST['parent_phone'].'",
"'.$_POST['stud_phone'].'",
"'.$_POST['dob'].'",
"'.$_POST['doj'].'",
"'.$_FILES['stud_photo']['name'].'",
"'.$_POST['status'].'",
"'.$_POST['regulation'].'")';

if(mysql_query($insert)){
echo "success";

}
else{
 echo "not inserted ";	
}

	
}
?>