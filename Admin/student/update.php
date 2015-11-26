<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['update'])){
 echo $update='update studentdetails set
`stud_name`="'.$_POST['stud_name'].'",
`stud_father_name`="'.$_POST['stud_father_name'].'",
`rollno`="'.$_POST['rollno'].'",
`current_sem`="'.$_POST['current_sem'].'",
`sec_id`="'.$_POST['sec_id'].'",
`section`="'.$_POST['section'].'",
`Address`="'.$_POST['Address'].'",
`gender`="'.$_POST['sex'].'",
`dept_id`="'.$_POST['dept_id'].'",
`course_id`="'.$_POST['course_id'].'",
`emailid`="'.$_POST['emailid'].'",
`parent_phone`="'.$_POST['parent_phone'].'",
`stud_phone`="'.$_POST['stud_phone'].'",
`dob`="'.$_POST['dob'].'",
`doj`="'.$_POST['doj'].'",
`doj`="'.$_POST['doj'].'",
`regulation`="'.$_POST['regulation'].'"
where stud_id="'.$_SESSION['id2'].'"';
if(mysql_query($update))
{
	echo "Success";
	header("refresh:5;url=../mainsite.php");
}
else{
 echo "not inserted ";	
}
}
?>