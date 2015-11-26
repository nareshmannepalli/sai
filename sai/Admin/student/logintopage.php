<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(!empty($_SESSION['id'])){
	header("Location:index.php");
	
}

if(isset($_POST['submit'])){
	 $select="select * from studentdetails where rollno='$_POST[rollno]' and password='$_POST[password]'";
$query=mysql_query($select);
 $count=mysql_num_rows($query);
if($count==1){
	$fetch=mysql_fetch_array($query);
	$_SESSION['id']=$fetch['stud_id'];
	echo "Loading";
	header("refresh:2;url=profile.php");
}

else{
	echo "Please Re-Enter your details correctly";
	header("url=index.php");
	}
}
	?>