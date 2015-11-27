<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
 echo $update='update faculty  SET 
`Password`="'.$_POST['Password'].'"
where id="'.$_POST['id'].'"';
if(mysql_query($update)){
echo "success";
}
else{
 echo "not inserted ";	
}	
}
?>