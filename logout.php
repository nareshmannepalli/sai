<?php
session_start();
$connect=mysql_connect("localhost","root","");
$res=mysql_select_db("test",$connect);
session_destroy();
header("location:index.php");
?>