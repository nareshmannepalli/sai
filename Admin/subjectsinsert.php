<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
	
	$insert='insert into subjects(subject) values("'.$_POST['subject'].'")';
}

if($query=mysql_query($insert)){
echo "Success";
header("location:subjects.php");
}
	?>