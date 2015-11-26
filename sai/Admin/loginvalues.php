<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
	 $select="select * from admin where username='$_POST[username]' and password='$_POST[password]'";
$query=mysql_query($select);
 $count=mysql_num_rows($query);
if($count==1){
	$fetch=mysql_fetch_array($query);
	$_SESSION['id']=$fetch['id'];
	echo "Loading";
	header("refresh:2;url=mainsite.php");
}

else{
	echo "Please Re-Enter your details correctly";
	header("url=index.php");
	}
}
	?>