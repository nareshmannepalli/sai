<?php 
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
echo $update='update leavetbl SET 
`status`="'.$_POST['status'].'" where l_id="'.$_SESSION['id5'].'"';
if(mysql_query($update)){
echo "Success";
header("location:mainsite.php");
}
else{
echo "Not Success";
}
}
?>