<?php 
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);

if(isset($_POST['submit'])){
$select='select * from studentdetails where dept_id="'.$_SESSION['department'].'" and current_sem="'.$_SESSION['sem_faculty'].'"';
$query=mysql_query($select);	
$i=1;
while($fetch=mysql_fetch_array($query)){	
foreach($_POST['present'.$i] as $at){
 $insert='insert into `attendance`(roll_number,attendance_subject,attendence_department,attendance_sem,attendance_status) values("'.$_POST['roll_number'.$i].'",
"'.$_SESSION['subject'].'",
"'.$_SESSION['department'].'",
"'.$_SESSION['sem_faculty'].'",
"'.$at.'")';
$i++;
if(mysql_query($insert)){

echo "Success";
header("refresh:0;url:mainsite.php");
}
else{
echo "Not Success";
}
}

}
}
?>