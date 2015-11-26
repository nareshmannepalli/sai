<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
$insert='insert into suggestion(s_rollno,message,message_date) values("'.$_POST['s_rollno'].'",
"'.$_POST['message'].'",
"'.$_POST['message_date'].'")';
if(mysql_query($insert)){
echo "Success";
header("location:suggestion.php");
}
else{
echo "Not Success";
}
}
?>