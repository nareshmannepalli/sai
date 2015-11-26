<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
 echo $update='update studentdetails  SET 
`password`="'.$_POST['password'].'", 
`conformpassword`="'.$_POST['password'].'"
where stud_id="'.$_SESSION['id1'].'"';
if(mysql_query($update)){
echo "success";
}
else{
 echo "not inserted ";	
}	
}
?>