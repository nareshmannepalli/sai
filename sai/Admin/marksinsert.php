<?php 
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
	$select='select * from studentdetails where current_sem="'.$_POST['sem_marks'].'"';
	$query=mysql_query($select);
	$i=1;
	while($fetch=mysql_fetch_array($query)){	
echo $insert='insert into markstable(rollnumber_stud,faculty_marks,sem_marks,subject_name,subject_marks) 
values(
"'.$_POST['rollnumber_stud'.$i].'",
"'.$_POST['faculty_marks'].'",
"'.$_POST['sem_marks'].'",
"'.$_POST['subject_name'].'",
"'.$_POST['subject_marks'.$i].'"
)';
$i++;
if(mysql_query($insert)){
	echo "Success...";
	header("refresh:0;url:mainsite.php");
}
else{
	echo "Not Success...";
}
}	
}
?>