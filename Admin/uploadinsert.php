<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if($_POST['whom']=="student"){
	$category=1;
}
if($_POST['whom']=="faculty"){
	$category=2;
}
if($_POST['whom']=="both"){
	$category=3;
}
$type=1;
$file_name = $_FILES['attachment']['name'];
  if(empty($errors)==true){
	  $file_tmp =$_FILES['attachment']['tmp_name'];
        move_uploaded_file($file_tmp,"files/".$file_name);
  }
if(isset($_POST['submit'])){
 $insert='insert into uploads (title,attachment,date,category,type,whom) values("'.$_POST['title'].'",
"'.$_FILES['attachment']['name'].'",
"'.$_POST['date'].'",
"'.$category.'",
"'.$type.'",
"'.$_POST['whom'].'")';
if($query=mysql_query($insert)){
echo "success";
header("url=mainsite.php");
}
else{
echo "Not Success";
}
}
?>