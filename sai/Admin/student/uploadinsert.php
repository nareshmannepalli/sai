<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);

if(isset($_POST['submit']){
$insert='insert into uploads (title,attachment,date,whom) values("'.$_POST['title'].'",
"'.$_POST['attachment'].'",
"'.$_POST['date'].'",
"'.$_POST['whom'].'")';
if($query=mysql_query($insert)){
echo "success";
}
else{
echo "Not Success";
}
}
?>