<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['update'])){
 $update='update faculty set
`NameoftheFaculty`="'.$_POST['NameoftheFaculty'].'",
`Father_Name`="'.$_POST['Father_Name'].'",
`Date_of_Birth`="'.$_POST['Date_of_Birth'].'",
`phonenumber`="'.$_POST['phonenumber'].'",
`Email_id`="'.$_POST['Email_id'].'",
`username`="'.$_POST['username'].'",

`Gender`="'.$_POST['Gender'].'",
`Department`="'.$_POST['Department'].'",
`Designation`="'.$_POST['Designation'].'",
`Highest_Qualification`="'.$_POST['Highest_Qualification'].'",
`Date_of_Joining`="'.$_POST['Date_of_Joining'].'",
`Pay_Scale`="'.$_POST['Pay_Scale'].'",
`experience`="'.$_POST['experience'].'",
`Address`="'.$_POST['Address'].'"
where id="'.$_SESSION['id3'].'"';
if(mysql_query($update))
{
echo "Success";
}
else{
 echo "not inserted ";	
}
}
?>