<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
echo $insert='insert into leavetbl(empid,dept,leave_from_date,leave_to_date,leave_apply_date,no_of_days,type_of_leave,prefix_date,suffix_date,reason)
 values("'.$_POST['empid'].'",
"'.$_POST['dept'].'",
"'.$_POST['leave_from_date'].'",
"'.$_POST['leave_to_date'].'",
"'.$_POST['leave_apply_date'].'",
"'.$_POST['no_of_days'].'",
"'.$_POST['type_of_leave'].'", 
"'.$_POST['prefix_date'].'",
"'.$_POST['suffix_date'].'",
"'.$_POST['reason'].'")';
if($query=mysql_query($insert)){
	echo "Success...";
}
else{
	echo "Not Success...";
}	
}
?>
