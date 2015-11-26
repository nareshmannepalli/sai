<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['delete'])){
$delete='delete from studentdetails where stud_id="'.$_POST['id'].'"';
$query=mysql_query($delete);
if($delete){
echo "Success";
}
else{
echo "Not Success";
}
}
?>