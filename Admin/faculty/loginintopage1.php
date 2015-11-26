<?php
session_start();
if(empty($_SESSION['id'])){
	header("Location:index.php");
	
}
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(!empty($_SESSION['id'])){
	header("Location:loginform1.php");
	
}
if(isset($_POST['submit'])){
$select="select * from faculty where Email_id='$_POST[Email_id]' and password='$_POST[password]'";
$query=mysql_query($select);
 $count=mysql_num_rows($query);
if($count==1){
	$fetch=mysql_fetch_array($query);
	$_SESSION['id']=$fetch['id'];
	echo "Loading";
	header("refresh:3;url=profile1.php");
}

else{
	echo "Please Re-Enter your details correctly";
	}
}
	?>