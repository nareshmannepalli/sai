<?php 
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
 session_destroy();
 header("Location:index.php");
 
 
 ?>