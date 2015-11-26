<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
$select='select * from studentdetails where dept_id="'.$_POST['attendence_department'].'" and current_sem="'.$_POST['attendance_sem'].'"';
$query=mysql_query($select);
$i=1;
while($fetch=mysql_fetch_array($query)){
foreach($_POST['present'.$i] as $at){
$insert='insert into `attendance`(roll_number,attendance_subject,attendence_department,attendance_sem,attendance_status) values("'.$_POST['roll_number'.$i].'",
"'.$_POST['attendance_subject'].'",
"'.$_POST['attendence_department'].'",
"'.$_POST['attendance_sem'].'",
"'.$at.'")';
$i++;
if(mysql_query($insert)){

echo "Success";
header("location:attendence.php");
}
else{
echo "Not Success";
}
}
}
}
?>