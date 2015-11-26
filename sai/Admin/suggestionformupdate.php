<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);

if(isset($_POST['submit'])){
	$update='update suggestion SET
	`Reply`="'.$_POST['Reply'].'" where s_id="'.$_SESSION['id7'].'"';
	if(mysql_query($update)){
		echo "Success";
		header("location:mainsite.php");
	}
	else{
	echo "Not Success";
	}
}
?>