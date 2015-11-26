<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
foreach($_POST['present'] as $at){
echo $update='update attendance SET
`attendance_status`="'.$at.'" where attendance_id="'.$_POST['attendance_id'].'"';
if(mysql_query($update))
{
	echo "Success....";
 header("refresh:0;url=attendence.php");
}
else{
	echo "Update is not successful...";
}
	}
}
?>