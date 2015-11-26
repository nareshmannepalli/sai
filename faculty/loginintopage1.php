<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
 $select="select * from faculty where Email_id='$_POST[Email_id]' and password='$_POST[password]'";
$query=mysql_query($select);
 $count=mysql_num_rows($query);
if($count==1){
	$fetch=mysql_fetch_array($query);
	$_SESSION['id']=$fetch['id'];
	
	header("location:leaveform.php");
}

else{
	echo "Please Re-Enter your details correctly";
	}
}
	?>