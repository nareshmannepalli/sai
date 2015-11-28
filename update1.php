<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);
if($_POST['whoom']=="faculty")
{
	$catagery=1;
}
if($_POST['whoom']=="students")
{
	$catagery=2;
}
if($_POST['whoom']=="both")
{
	$catagery=3;
}
if(isset($_POST['submit']))
{
$update='update circulartable set 

`catagery`="'.$_POST['catagery'].'",
`whoom`="'.$_POST['whoom'].'" where cid="'.$_POST['id'].'"';

$query=mysql_query($update);
if($query){
	echo "Success";
	header("refresh:0; url=basictable.php");


	

}
else{
	echo "not success";
}
}
?>

